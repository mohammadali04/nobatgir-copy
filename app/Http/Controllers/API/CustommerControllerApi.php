<?php

namespace App\Http\Controllers\API;
use App\Models\Favorite;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turn;
use Illuminate\Http\JsonResponse;
use Auth;
use App\Http\Controllers\API\BaseController;

class CustommerControllerApi extends BaseController
{
    public function showMyTurn():JsonResponse
    {
        $turn=Turn::where('user_id',Auth::user()->id)->first();
        return $this->sendResponse($turn,'this is your turn data');
    //not diterminate yet;
        }
        public function getMyFavoritServices($service_ids){
            $services=[];
            foreach($service_ids as $service_id){
                $service=Service::where('id',$service_id)->first();
                array_push($services,$service);
            }
            return $services;
        }
        public function showMyFavorits(){
            // $userId=Auth::user()->id;
            $myFavorites=Auth::user()->services()->get();
            // $favoritIds=Favorite::where('user_id',$userId)->pluck('service_id');
            // $myFavorits=$this->getMyFavoritServices($favoritIds);
            return $this->sendResponse($myFavorites,'your favorits');
        }
}
