<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ; 
use App\Category ;
use App\Product; 
use App\Order;
use App\Orderproduct;
use Carbon\Carbon;
use Hash ;
use DB ;
use Cart;
use Session;
use auth ;
class backend1 extends Controller
{
   

 public function first() {

        return view('project1/back/module/user/first');
}


public function adduser() {

        return view('project1/back/module/user/adduser');
}

public function alluser() {

        return view('project1/back/module/user/alluser');
}


   //////////////////////////////////////////////////// Insert data 
  public function store(Request $request) {

    $validatedData = $request->validate([
        'name,email,password' => 'required',
        
    ]);

       $user= new user();
        $user->name=$request->name ;
        $user->email=$request->email ;
        $user->password=Hash::make($request->password) ;
       // print_r($user);
       $user->save();
      return redirect() -> back(); 
}
     

     //////////////////////////////////////////////// Display data
public function display() {

			$users=user::all();
			//print_r($users);


      return view('project1/back/module/user/alluser',compact('users'));
}


///////////////////////////////////////////////////// delete user
public function deluser($id) {

 $user = user::find($id);
     // print_r($user) ;
 $user->delete();
 return redirect() -> back(); 
}
/////////////////////////////////////////////////// edit  data

public function edituser($id) {

 $user = user::find($id);
      //print_r($user) ;
 return view('project1/back/module/user/edituser',compact('user'));
 }

//////////////////////////////////////////////////   update

public function updateuser(Request $request) {
		$id=$request->id;
		$user = user::find($id);
        $user->name=$request->name ;
        $user->email=$request->email ;
        $user->password=Hash::make($request->password) ;
      // print_r($user);
      $user->update();
     return redirect('alluser');
}

////////////***************************CATEGORY**************/////////////////
public function addcategorys() {

        return view('project1/back/module/categorys/addcategorys');
}

public function allcategorys() {

    $category=category::all();
      //print_r($category)

        return view('project1/back/module/categorys/allcategorys',compact('category'));
}

 
   //////////////////////////////////////////////////// Insert data 
  public function storecategorys(Request $request) {

       $category= new category();
        $category->categoryvalue=$request->categoryvalue;
        $category->categoryname=$request->categoryname;
      // print_r($category);
       $category->save();
     return redirect() -> back(); 
}
///////////////////////////////////////////////////// delete 
public function delcategory($id) {

 $category = category::find($id);
     // print_r($category) ;
 $category->delete();
 return redirect() -> back(); 
}

/////////////////////////////////////////////////// edit  data

public function editcategory($id) {

 $category = category::find($id);
      //print_r($category) ;
 return view('project1/back/module/categorys/editcategorys',compact('category'));
 }

//////////////////////////////////////////////////   update

public function updatecategory(Request $request) {
    $id=$request->id;
    $category = category::find($id);
      $category->categoryvalue=$request->categoryvalue;
        $category->categoryname=$request->categoryname;
      // print_r($category);
      $category->update();
     return redirect('allcategorys');
}

 ////////////***************************Products**************/////////////////
public function addproducts() {

        return view('project1/back/module/products/addproducts');
}

public function allproducts() {

    $product=product::all();
     // print_r($category)  
        return view('project1/back/module/products/allproducts',compact('product')); }

 //////////////////////////////////////////////////// Insert data 
  public function storeproducts(Request $request) {

       $product= new Product();
        $product->productname=$request->productname;
        $product->productcategory=$request->productcategory;
        $product->productprice=$request->productprice;
        $img = time().'.'.$request->img->getClientOriginalExtension();
        $destination="public/img/" ;  
         $product->img=$request->img->move($destination, $img);
       $product->save();
     return redirect() -> back(); 
}
///////////////////////////////////////////////////// delete 
public function delproduct($id) {

 $product = product::find($id);
     // print_r($product) ;
 $product->delete();
 return redirect() -> back(); 
}
/////////////////////////////////////////////////// edit  data

public function editproduct($id) {

 $product = product::find($id);
      //print_r($product) ;
 return view('project1/back/module/products/editproducts',compact('product'));
 }

//////////////////////////////////////////////////   update

public function updateproduct(Request $request) {
    $id=$request->id;
    $product = product::find($id);
    $product->productname=$request->productname;
     $product->productcategory=$request->productcategory;
     $product->productprice=$request->productprice;
     $img = time().'.'.$request->img->getClientOriginalExtension();
        $destination="public/img/" ;  
         $product->img=$request->img->move($destination, $img);
      // print_r($product);
     $product->update();
    return redirect('allproducts');
}

//////////////////////////////////////////   ORDERS

public function allorders() {

    $order=order::all();  

  //    echo Carbon::createFromDate(2001, 4, 21,'UTC')->diffForHumans(); 

     return view('project1/back/module/orders/allorders',compact('order')); 
    }


public function orderdetails() {

    $orderdetail=Orderproduct::all();
   //   print_r($orderdetail);  
   return view('project1/back/module/orders/orderdetails',compact('orderdetail')); 
    }













//******************************cart***************************//

public function addtocart($id) {
    $product = product::find($id);
     Cart::add(array(
       'id' =>  $product->id,
       'name' =>  $product->productname,
       'price'  =>  $product->productprice,
       'quantity'  => 1,
       'attributes' => array('img'=>$product->img,)
     ));
  return redirect()->back();
}
public function remove($id) {
 Cart::remove($id);
 Session::flash('message','item removed Successfully!');
 return redirect()->back();
}


public function order() {
  $user = Auth:: user();
 if (!empty($user)) {
   $userid=$user->id ;
   //echo $userid;
    $totalprice=Cart::getTotal();
    //echo $totalprice;
    $order = new Order() ;
      // echo "Created";

    $order->userid=$userid;
        // echo "done";
        $order->totalprice=$totalprice;
        // echo "done";
        
          $order->save();

          $orderid= $order->id;
      //    echo $orderid;


                            $cartCollection = Cart::getContent(); 
                foreach ($cartCollection as $items) {
                       $ordp=new Orderproduct();

                      $ordp->orderid=$orderid ;
                      $ordp->productid=$items->id;
                      $ordp->price=$items->price;
                      $ordp->quantity=$items->quantity;
                           $ordp->totalprice=$items->price*$items->quantity;
                     $ordp->save();


                 return view('project1/front/pages/checkout');

                }

}




  else
    {   
     return redirect('/home');   }

// return redirect()->back();
}



}