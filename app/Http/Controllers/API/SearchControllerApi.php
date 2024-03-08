<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Service;
use App\Http\Resources\ServiceResource;

class SearchControllerApi extends BaseController
{
    public function index():JsonResponse{
        $services=Service::all();
        return $this->sendResponse(ServiceResource::collection($services),'services');
    }
    public function showServiceDetail(Service $service){
        $x=Gallery::where('service_id',$service->id)->get();
        // dd($x->unique('category_id')->pluck('category_id'));
        // echo Jalalian::forge('today');
        $categories=$x->unique('category_id')->pluck('category_id');
        $allCategories=$this->getAllCategories($categories);
        $galleryImages=$this->getGallery($categories);
        $comments=$service->comments()->get();
        // dd($galleryImages);
        $this_week_days=$this->getThistWeek($service->id,Jalalian::forge('today'));
        $today=Jalalian::forge('today')->format('Y/m/d');
        $days=$this_week_days[0];
        $friday=$this_week_days[1];
        $friday=$friday->format('Y/m/d');
        $address=$service->address()->first();
        return view('front3.search.service-detail',compact('days','service','address','allCategories','galleryImages','comments','friday','today'));
        
    }
    public function getThistWeek($service_id,$currentTime){
        $days=[];
        $day_number=0;
        $friday=Jalalian::forge('friday');
               while($currentTime <= $friday){
               $dateTime=$currentTime->format('Y/m/d');
               $turn=$this->getTurn($service_id,$dateTime);
               if(count($turn)==0){
                   $dayName=$this->getDayName($day_number+1);
                   $days[$dayName->day]=[]; 
               }else{
                   $dayName=$this->getDayName($turn[0]->day_id);
                   $days[$dayName->day]=$turn;  
                   $day_number=$turn[0]->day_id;          
               }
               
               $currentTime=$currentTime->addDays(1);
           }
           return [$days,$friday];
       }
       public function showNextWeek(Request $request){
        // dd('hello');
        $service_id=$request->service_id;
        $endTime=$request->endTime;
        $date=parent::exploadDateFormat($endTime);
        $date=(new Jalalian($date[0],$date[1],$date[2]));
        $this_week_days=$this->getNextWeek($service_id,$date,$endTime);
        $days=$this_week_days[0];
        $friday=$this_week_days[1]->format('Y/m/d');
        $sunday=$date->addDays(1)->format('Y/m/d');
        $sizeOfDays=count($days);
        return response()->json([$days,$friday,$sunday,$sizeOfDays],200);
        // if(count($days)==0){
        //     return response()->json(0,200);
        // }else{
        //     return response()->json([$days,$friday,$sunday],200);
        // }
        // return $days;
        // if(count(array_keys($days))==1 && key($days)=='no day1'){
        //     return response()->json(0,200);

        // }else{
        //     return response()->json($days,200);
        // }
        
         
        }
        public function getNextWeek($service_id,$currentTime,$currentTimeFormat){
            $date=parent::exploadDateFormat($currentTimeFormat);
            $endTime=(new Jalalian($date[0],$date[1],$date[2]))->addDays(7);
            $days=[];
            $day_number=0;
            $sizeOfDays=0;
            while($currentTime < $endTime){//باید با حلقه ی while چک شود
                $currentTime=$currentTime->addDays(1);       
                $dateTime=$currentTime->format('Y/m/d');
                $turn=$this->getTurn($service_id,$dateTime);
                if(count($turn)==0){
                    $dayName=$this->getDayName($day_number+1);
                    $days[$dayName->day]=[]; 
                }else{
                    $dayName=$this->getDayName($turn[0]->day_id);
                    $days[$dayName->day]=$turn;   
                    $day_number=$turn[0]->day_id;           
                }
            }
                return [$days,$endTime];
            }
        public function showPreviouseWeek(Request $request){
            $service_id=$request->service_id;
            $startTime=$request->startTime;
            $date=parent::exploadDateFormat($startTime);
            $date=(new Jalalian($date[0],$date[1],$date[2]));
             $days_of_week=$this->getPreviouseWeek($service_id,$date,$startTime);
                $days=$days_of_week[0];
                $sunday=$days_of_week[1]->format('Y/m/d');
                $stop=$days_of_week[2];
                $friday=$date->subDays(1)->format('Y/m/d');
                $days=array_reverse($days);
                return response()->json([$days,$friday,$sunday,$stop],200);
         
               
                
               
        }
       
            public function getPreviouseWeek($service_id,$currentTime,$currentTimeFormat){
                $date=parent::exploadDateFormat($currentTimeFormat);
                $startTime=(new Jalalian($date[0],$date[1],$date[2]))->subDays(7);
                $days=[];
                $day_number=0;
                $stop='';
                while($startTime < $currentTime){//باید با حلقه ی while چک شود
                    $currentTime=$currentTime->subDays(1);
                    if($currentTime<(Jalalian::forge('today'))){
                        $startTime=$currentTime->addDays(1);
                        $stop='stop';
                        break;
                    }       
                    $dateTime=$currentTime->format('Y/m/d');
                    $turn=$this->getTurn($service_id,$dateTime);
                   
                    if(count($turn)==0){
                        $dayName=$this->getDayName($day_number-1);
                    $days[$dayName->day]=[]; 
                    }else{
                        $dayName=$this->getDayName($turn[0]->day_id);
                    $days[$dayName->day]=$turn;   
                    $day_number=$turn[0]->day_id;         
                    }    
                }

                    return [$days,$startTime,$stop];
                }
}
