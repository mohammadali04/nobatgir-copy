<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Hash;
use Exception;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Address;
use App\Providers\RouteServiceProvider;
class ServiceAuthController extends Controller
{

    public function showLogin()
    {
        $pageTitle='صفحه ورود صاحبان سرویس';
        return view('auth.service-login',compact('pageTitle'));
    }  
       
 
    public function serviceLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
           if(Auth::user()->service()->first()!=null){  
            return redirect()->intended('/service/show-profile')
                        ->withSuccess('Signed in');
           }
           else{
            return redirect(Route('welcome'));
           }
        }
   
        return redirect("login")->withSuccess('Login details are not valid');
    }
 //فعلا این کد جواب نمیدهد در صورت لزوم از میدل ویر استفاده کن
 
 
    public function registration()
    {
        $pageTitle='ثبت نام';
        return view('auth.service-register',compact('pageTitle'));
    }
       
 
    public function serviceRegistration(Request $request)
    {  
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        $user = $this->create($data);
        if($request->roleId){
            $user->role()->attach($request->roleId);
    }
    event(new Registered($user));

    Auth::login($user);
        if($request->roleId==1){
            return redirect(Route('servicer.add.info'));
        }
        
    }
 
 
    public function create(array $data)
    {
      return $user=User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
     
 
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
   
        return redirect("login")->withSuccess('are not allowed to access');
    }
     
 
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('/');
    }
    public function addInfo(){
        $categories=Category::all();
        return view('front3.servicer-panel.add-info',compact('categories'));
    }
    public function storeInfo(Request $request){
    //    dd($request->all());
        $request->validate([
            'title' => 'required',
            'worker' => 'required',
            'category_id' => 'required',
            'detail' => 'required',
            'img' => 'required',
            'address'=> 'required',
            'phone'=> 'required',
        ]);
        $service=new Service();
        $address=new Address();
        try{
            $service= $service->create(['title'=>$request->title,'worker'=>$request->worker,'img'=>$request->img,'detail'=>$request->detail,'user_id'=>Auth::user()->id,'phone'=>$request->phone,'category_id'=>$request->category_id]);
            $service_id=$service->id;
            Auth::user()->role()->sync(['role_id'=>1]);
            $address->create(['service_id'=>$service_id,'address'=>$request->address]);
            // $gallery->create(['service_id'=>$service_id,'category_id'=>0,'title'=>'','img'=>'','detail'=>'']);
        }catch(Exception $e){
           return redirect()->back()->with('warning',$e->getMessage());
        }
               return redirect(Route('servicer.show.profile'));
    }
}
