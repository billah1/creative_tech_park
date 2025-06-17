<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::with('categories')->get();
    return view('products.index', compact('products'));
}

public function create()
{
    $categories = Category::all();
    return view('products.create', compact('categories'));
}

public function store(Request $request)
{
    $product = Product::create($request->only('name', 'description', 'price'));
    $product->categories()->sync($request->categories);
    return redirect()->route('products.index');
}

public function edit(Product $product)
{
    $categories = Category::all();
    return view('products.edit', compact('product', 'categories'));
}

public function update(Request $request, Product $product)
{
    $product->update($request->only('name', 'description', 'price'));
    $product->categories()->sync($request->categories);
    return redirect()->route('products.index');
}

public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('products.index');
}

}
