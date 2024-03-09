<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Service;
use App\Http\Resources\ServiceResource;
use App\Http\Controllers\API\BaseController;

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
}
