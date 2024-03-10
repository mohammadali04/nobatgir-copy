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
}
