<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }
    public function show(Product $product)
    {
        return response()->json($product);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $product = Product::createProduct($data);
        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->updateStatus($request->input('status'))
            ->updateStock((int) $request->input('stock'))
            ->updatePrice((float) $request->input('price'));

    return response()->json($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }

   
}
