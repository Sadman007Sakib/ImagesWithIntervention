<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function all(){
        // $products = Product::all();
        // $products = Product::join('categories','products.category_id', 'categories.id')
        //           ->select('products.id', 'products.name as product', 
        //                     'products.price', 'categories.name as category')
        //           ->orderBy('products.id', 'asc')
        //           ->get();

        $products =DB::table('products')
        ->join('categories','products.category_id', 'categories.id')
        ->select('products.id', 'products.name as product', 
                  'products.price', 'categories.name as category')
        ->orderBy('products.id', 'asc')
        ->get();
        return view ('product.all', compact('products'));
    }
}
