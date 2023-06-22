<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addproduct;
use App\UserMode;
use App\CartModel;
use Illuminate\Support\Facades\DB;
class AddproductController extends Controller
{
    public function index(){

        $data = Addproduct::all();
        return view('addproduct',compact('data'));
    }

    public function addproducts(Request $request)
    {
        $product = new Addproduct;

        $product->product_name = $request->input('product_name');
        $product->product_title = $request->input('product_title');
        $product->product_price = $request->input('product_price');
        $product->product_description = $request->input('product_description');

       
        if ($file = $request->file('product_image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('assets/images/blog/', $name);
            $product['product_image'] = $name;
        }
        $product->save();
        return redirect()->back();
    } 

    public function detaills($id){

        $userid  = UserMode::get();

        $product  = Addproduct::find($id);
        return view('detaills',compact('product','userid'));
    }
    public function addtocart(Request $request){
       $data = new CartModel;
       $data->user_id = $request->user_id;
       $data->product_id = $request->product_id;
       $data->save();
       return redirect()->back();

    } 

    static function carttotal()
    {
        $userid  = UserMode::get('id');
       return CartModel::where('user_id',$userid[0]->id)->count();
    }

public function cardlisting(){
    $userid  = UserMode::get('id');
    
    $cartdata = DB::table('cart')
    ->join('product','cart.product_id','product.id')
    ->select('product.*')
    ->where('cart.user_id',$userid[0]->id)
    ->get();
    return view('addcartlist',compact('cartdata'));
}

    function removeitem($id){

    CartModel::destroy($id);
    return redirect()->back();
}



}
