<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $page = 'home';
        $categories = Category::where('display', 1)->get();
        return view('website.home.index', compact('categories'));
    }

    public function category(Category $category)
    {
        return view('website.categories.show', compact('category'));
    }
    public function products()
    {
        $products = Product::all();
        return view('website.products', compact('products'));
    }
}
