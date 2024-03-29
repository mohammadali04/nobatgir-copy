<?php

use App\Http\Controllers\API\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::controller(SearchController::class)->group(function(){
    Route::get('/index','index');
    Route::get('/show-service-detail/{id}','showServiceDetail');
    Route::post('/showNextWeek','showNextWeek');
    Route::post('/showPreviouseWeek','showPreviouseWeek');
    Route::post('/add-to-favorite','addToFavorite');
    Route::post('/book-turn/{turn}/{id}','bookTurn');
    Route::post('/add-comment','addComment');
});
