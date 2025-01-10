<?php

namespace App\Http\Controllers;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WishlistController extends Controller
{

    public function wishlistP(){
        return view ('backend.product.wishlistpage');
    }


    public function Wishlist(){
        return view ('backend.product.wishlist');
    }

 

    public function wishlistSubmit(Request $request){

        $validation=Validator::make($request->all(),
    [
        'name'=> 'required',
        'address1' => 'required'
    ]);

    if ($validation->fails()) {
        notify()->error($validation->getMessageBag());
        
        return redirect()->back();
    }
      
    Wishlist::Create([
            'product_name'=>$request->name,
            'address_1'=>$request->address1,
            ]);


            notify()->success('Submitted Successfully');
            return redirect()->back();
    
    }


}
