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
       public function getTurn($service_id,$dateTime){
           $turn=Turn::where('date','=',$dateTime)->where('service_id','=',$service_id)->get(); 
           return $turn;
       }
       public function getDayName($dayId){
        return Day::where('id',$dayId)->first();
    }
    public function getTurnAtDay($date){
        $day=[];
        $turns=Turn::where('date',$date)->first();
        return $turns;
    }
    public function bookTurn(Request $request,Turn $turn,$id){
        $turn->user_id=$id;
        $turn->active=1;
        $turn->save();
       $turnDetail = $turnDetail=Turn::where('id',$turn->id)->first();
       $date=parent::getDateTimeJalali($turnDetail->date);
        $user=User::where('id',$turnDetail->user_id)->first();
        $service=Service::where('id',$turn->service_id)->first();
      
         return $this->sendResponse(bookTurnResource::toArray($turnDetail,$user,$date,$service));

     }
     public function addToFavorits(Request $request){
        $favorite=new Favorite();
        $favorite=$favorite->create($request->all());
        return response()->json($favorite->id,200);
    }
    public function addComment(Request $request){

        $user_id=Auth::user()->id;
        $name=Auth::user()->name;
        $email=Auth::user()->email;
        try{
           $comment = Comment::create(['service_id'=>$request->service_id,'user_id'=>$user_id,'name'=>$name,'email'=>$email,'body'=>$request->body]);
            Score::create(['comment_id'=>$comment->id,'score'=>$request->score]);
        }catch(Exception $e){
            dd($e->getMessage());
            return redirect()->back()->with('warning',$e->getMessage());
        }
        $msg='نظر شما با موفقیت ثبت شد و پس از بررسی یه نمایش در خواهد آمد';
        return response()->json($msg);
            }
}