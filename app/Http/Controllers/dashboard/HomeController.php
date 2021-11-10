<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $sliderCount= Slider::all()->count();
        $productCount= Product::all()->count();
        $categoryCount= Category::all()->count();
        return view('dashboard.home.index',compact( 'sliderCount','categoryCount','productCount'));
    }
}
