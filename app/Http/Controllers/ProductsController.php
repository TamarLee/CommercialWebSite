<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function showProducts(){
    	$products = Product::paginate(12);
    	$products = $products->chunk(3);

    	return view('products', [
    		'products' => $products
    	]);
    }
}
