<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(){

        return view ('frontend.customer.register');
    }

    public function registerSubmit(request $request){
        // dd($request -> all());

        //validation

        $validate= Validator::make($request->all(),[
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:5|confirmed",
            "mobile" => "required",

        ]);

        if ($validate->fails())
         {
            notify()->error($validate->getMessageBag());
            return redirect()-> back();
         }

         //File Handle
     

           $fileName='';
           if($request->hasFile('image'))
           {
            $image=$request->file('image');
            
            //generate name

            $fileName=date('Ymdhis').'.'.$image->getClientOriginalExtension();
          
            
            $image->storeAs('/frontend/uploads',$fileName);
           }
        
// dd($request->all());

       Customer::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'address'=>$request->address,
        'mobile'=>$request->mobile,
        'image'=>$fileName
       ]);

       notify()->success('Customer Registration Success.');
       return redirect()->route('frontend.home');


    }


    //login

    public function login(Request $request){


    //dd($request->all());
    $validation=Validator::make($request->all(),[
        'email'=>'required|email',
        'password'=>'required|min:5'
  
      ]);
      if($validation->fails())
      {
        notify()->error($validation->getMessageBag());
        return redirect()->back();
      }
  
      $credentials=$request->except('_token');
  
    //   dd($credentials);
      $check=Auth('customerGuard')->attempt($credentials);
  
      if($check)
      {
        notify()->success('login successfully');
        return redirect()->route('frontend.home');
      }
      else
      {
        notify()->error('login failed');
        return redirect()->back();
      }
    }
  

    }


