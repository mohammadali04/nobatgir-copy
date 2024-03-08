<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Auth;
use App\Models\About;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Service;
use App\models\Option;
Use App\Models\Turn;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Type\TrueType;
use App\Models\ClientMessages;

class IndexController extends Controller
{
    public function index(){
        $categories=Category::all();
        $about=About::find(1);
        $services=Service::all();
        $options=Option::all();
        $index='index';
        $faqs=Faq::all();
        // $content= 'yes';
        return view('front3.index',compact('categories','about','options','services','index','faqs'));
    }
    public function showCategory($id){
        $services=Service::where('category_id',$id)->get();
        if(count($services)!=0){
            return view('front3.search.search',compact('services'));
        }else{
            $msg='موردی یافت نشد';
            return redirect(Route('search.index'))->with('warning',$msg); 
        }
    }
    public function showReservedList(){
        $user_id=Auth::user()->id;
        $turns=Turn::where('user_id',$user_id)->where('active',1)->get();
        foreach($turns as $turn){
            $turn['service']=$turn->service()->first();
        }
        return view('front3.user-panel.reserved-list',compact('turns'));
    }
    public function showFavoriteList(){
        $services=Auth::user()->favorites()->get();
        // dd($services->pluck('id'));
        return view('front3.user-panel.favorite-list',compact('services'));///مشکل آدرس دارد
    }
    public function addClientMessage(Request $request){
        $valiedation=$request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'message'=>'required',
            ]
        );
        $clientMessage=new ClientMessages();
        Try{
            $clientMessage->create($request->all());
        }catch(Exception $e){
            return back()->withErrors($e->getMessage());
        }
        $msg='پیغام شما ارسال شد با تشکر فراوان';
        return redirect()->back()->with('success',$msg);
    }
    
    // public function turnsTable(){
        //     return view('front3.panel.turns-table');
        // }
        
    }
    