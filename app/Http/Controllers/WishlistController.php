<?php

namespace App\Http\Controllers;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function Wishlist(){
        return view ('product.wishlist');
    }

    public function wishlistSubmit(Request $request){
      
    Wishlist::Create([
            'product_name'=>$request->name,
            'address_1'=>$request->address1,
            ]);

            return redirect()->back();
    
    }
}
