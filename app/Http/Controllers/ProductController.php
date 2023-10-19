<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function search(Request $request)
    {
        $product = Product::all();
    }

    public function product_create()
    {
        return view('products.create');
    }

    public function product_store(ProductRequest $request)
    {
        $product = Product::create( $request->all());

        if($product){
            return redirect()->route('products')->with('status', 'Producto creado con éxito.');
        }

            return redirect()->route('products')->with('status', 'Producto no creado.');
    }
}
