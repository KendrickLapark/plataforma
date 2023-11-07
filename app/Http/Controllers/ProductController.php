<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.products', compact('products'));
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
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'tipo' => $request->tipo,
            'price' => $request->price,
            'code' => random_int(100, 10000)
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $imagePath = $image->storeAs('public/products', $imageName);
                $productImage = ProductImages::create([
                    'name' => $imageName,
                    'path_name' => $imagePath,
                    'product_id' => $product->id
                ]);

                $productImage->save();

                $product->images()->save($productImage);
            }

        }

        $product->save();

        if($product){
            return redirect()->route('products')->with('status', 'Producto creado con éxito.');
        }

            return redirect()->route('products')->with('status', 'Producto no creado.');
    }
}
