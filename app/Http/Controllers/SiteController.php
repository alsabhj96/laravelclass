<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resturant;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function  gethome(){
        $data = [
            'foods'=>Product::all()
        ];
        return view('site.home',$data);
    }

    //for view deatils of product
    public function getProductDetails(Product $product){ 
        $data =[
            'food'=>$product
        ];
        return view ('site.productdetail',$data);

    }

//CART
    public function postAddToCart(Request $request){
     

         $name = $request->input('product_name');
         $productid = $request->input('product_id');
         $qty = $request->input('qty');
         $productcost= $request->input('product_cost');
         $totalamount = $productcost*$qty;
         
       
 
        if(Session::get('cartcode')){
            $xyz = New Cart;
            $xyz->cart_code = Session::get('cartcode');
            $xyz->product_id = $productid;
            $xyz->product_name = $name;
            $xyz->product_quantity = $qty;
            $xyz->product_cost = $productcost ;
            $xyz->total_amount = $totalamount;
            $xyz->save();
        }
        else{

            $code = Str::random(4);
            $xyz = New Cart;
            $xyz->cart_code = $code;
            $xyz->product_id = $productid;
            $xyz->product_name = $name;
            $xyz->product_quantity = $qty;
            $xyz->product_cost = $productcost ;
            $xyz->total_amount = $totalamount;
            $xyz->save();
            Session::put('cartcode', $code);
        }
        return redirect()->route('getCart');
    
    }
    public function getCart(){
        $data =[
            'carts' => Cart::where('cart_code', Session::get('cartcode'))->get(),
            'grandtotal' => Cart::where('cart_code', Session::get('cartcode'))->sum('total_amount')
        ];
        return view('site.cart', $data);
    }

    //TESTCART
    public function gettestcart(){
        return view('site.testcart');
    }

    //how to save in session  (save something in browser for temporary)
    public function Posttestcart(){
        if(Session::get('sessionname')){
            dd('session  pahilaay chaa');
        }
        else{
           
            $code = Str::random(4); //auto generate  random code
            Session::put('sessionname', $code);
            
        }
    }


    public function  getabout(){
        return view('site.about');
    }

    public function  getrestaurants(){
        return view('site.restaurants');
    }

    public function  getcontactus(){
        return view('site.contactus');
    }

    public function  getSignupandLogin(){
        return view('site.signupandlogin');
    }



    public function  getservice(){
        return view('service');
    }


    public function xyz(){
        return view ('form');
     }

    public function srijanachowk(Request $request){
       // dd($request->all());
        $name = $request->input('fullname');
        $dob = $request->input('dob');
        $address = $request->input('address');
        $mobile = $request->input('mobile');

        $abc = New Resturant;
        $abc->fullname = $name;  // fullname is from database and name is from form 
        $abc->dob = $dob;
        $abc->address = $address;
        $abc->mobile = $mobile;
        $abc->save();
       
    } 
}
