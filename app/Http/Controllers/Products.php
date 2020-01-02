<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Tag;

class Products extends Controller
{
    function prod()
    {
        $products = Product::with('categories')->get();
        $categories = Category::with('products')->get();
        $tags = Tag::with('products')->get();
        return view('show', compact('products', 'categories', 'tags'));
        
    }

}