<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StockController extends Controller
{
    public function getprice_view(){
       
        session(['User' => '1']);
        $value = session('User');
       
        if($value==0){
            return redirect('/login');
        }else{
            return view('/stock_price',['task'=>'get']);
        }
    }

    public function storeprice(Request $request){
        $str= empty($request->str) ? "" : json_decode(base64_decode($request->str));
      //  print_r($str);
        
       
        $data=array('symbol'=> $str->{'01. symbol'},"high"=>$str->{'03. high'},"low"=>$str->{'04. low'},"price"=>$str->{'05. price'});
        $insert=DB::table('stock')->insert($data);
        //print_r($insert);
       if($insert){
        return view('/stock_price',['task'=>'view','output'=>array('symbol'=> $str->{'01. symbol'},"high"=>$str->{'03. high'},"low"=>$str->{'04. low'},"price"=>$str->{'05. price'})]);
         }

       

    }
}
