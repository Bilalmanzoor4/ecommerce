<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User ; 
use App\Category ;
use App\Product;  
use Hash ;
use DB ;
use Cart;

class gama extends Controller
{
    public function users() {


        $product=product::all();
      //print_r($product)  ;
    	return view('project1/front/pages/index',compact('product'));

    }

     public function about() {

    	return view('project1/front/pages/about');
}


 public function men() {
    
    $product=product::all();

    	return view('project1/front/pages/men',compact('product'));
}

 public function women() {
    
     $product=product::all();
    	return view('project1/front/pages/women',compact('product'));
}

 public function contact() {

    	return view('project1/front/pages/contact');
}

public function wishlist() {

    	return view('project1/front/pages/add-to-wishlist');
}
public function cart() {

    	return view('project1/front/pages/cart');
}
public function checkout() {

    	return view('project1/front/pages/checkout');
}
public function order() {

    	return view('project1/front/pages/order-complete');
}
public function detail($id) {
     $product = product::find($id);
       //print_r($product);
    return view('project1/front/pages/product-detail',compact('product'));
}



}


