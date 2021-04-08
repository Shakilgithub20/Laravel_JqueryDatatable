<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function all(){
        //$products = Product::all();
        $products = product::join('categories','products.category_id','categories.id')
                     ->select ('products.id','products.name as product','products.price',
                                'categories.name as category')
                                ->orderBy('products.id')
                     ->get();

        return view('product.all',compact('products'));
    }
}
