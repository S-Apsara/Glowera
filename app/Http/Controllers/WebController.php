<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function home(){
        return view("web.home");
    }
    public function shop(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = Product::where('Pro_Name','LIKE',"%$search%")->get();
        } else {
            $products = Product::get();
        }
        return view("web.shop",compact('products','search'));
    }
    public function contact(){
        return view("web.contact");
    }
    public function bundles(){
        return view("web.bundles");
    }
    public function essentials(){
        return view("web.essentials");
    }
    public function discounts(){
        return view("web.discounts");
    }
    public function productdetails(){
        return view("web.productdetails");
    }
    
    public function sunscreen(){
        return view("web.sunscreen");
    }
   
    public function about(){
        return view("web.about");
    }
   
    public function gelcleanser(){
        return view("web.gelcleanser");
    }
   
    public function serums(){
        return view("web.serums");
    }
   
    public function moisturizers(){
        return view("web.moisturizers");
    }
   
    public function liptreatment(){
        return view("web.liptreatment");
    }

    public function vitc(){
        return view("web.vitc");
    }
   
}
