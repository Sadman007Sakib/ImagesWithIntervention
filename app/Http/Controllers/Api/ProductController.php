<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function products(){
        $products = DB::table('products as p')
            ->join('categories as c', 'p.category_id', 'c.id')
            ->select('p.id', 'p.name as product', 'p.price', 'c.name as category')
            ->get();

        if($products) {
            $error=false;
            $msg = 'Data Retrieved';
        }
        else{
            $error = true;
            $msg = 'Could not Retrieved Data ';
        }

        return response()-> json([
            'data' => $products,
            'error' =>$error,
            'message' => $msg
        ]);
    }

    public function insert(Request $req){
        $obj = new Product();
        $obj -> name = $req ->productname;
        $obj -> price = $req ->productprice;
        $obj -> details = $req ->productsdetails;
        $obj -> specification =$req -> prospec;
        $obj -> category_id = $req ->category_id;

        if($obj->save()){
            return response() -> json([
                'data'=> $obj,
                'error' => false,
                'msg' => 'Successfully Inserted'    
            ]);
        }
    }

    public function getProductByID($id){
        $products = DB::table('products')
                    ->where('id', '=', $id)
                    ->first();
        
        if($products){
            $error = false;
            $msg = 'Data Found';
        }
        else{
            $error = true;
            $msg = 'Data not Found';
        }

    return response() -> json([

        'data' => $products,
        'error'=> $error,
        'message'=> $msg
    ]);
    }
}
