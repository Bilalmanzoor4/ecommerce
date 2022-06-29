<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User ; 
use App\Category ;
use App\Product;  
use Hash ;
use DB ;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product=product::all();
     return view('project1/front/pages/index',compact('product'));
    }
}
