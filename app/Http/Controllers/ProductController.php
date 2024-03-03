<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function shops(){
    //     $products = Product::all();
    //     return view('products.shops', compact('products'));
    // }

    function index(){
        $products = Product::all();
        return view('shops.index', compact('products'));
    }

    function shop_single(){
        $products = Product::all();
        return view('shops.shop-single', compact('products'));
    }
    
}


