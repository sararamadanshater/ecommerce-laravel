<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index(){
        $page = 'home';
        $sliders = Slider::where('display', 1)->get();
        $categories = Category::where('display', 1)->get();
        return view('website.home.index', compact('categories','sliders'));
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

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $products = Product::where('category_id', $product['category_id'])
            ->where('id', '!=', $product['id'])->get()->toArray();
        $products = sliderFormat($products, 4);
        return view('website.products.show', compact('product', 'products'));
    }
}
