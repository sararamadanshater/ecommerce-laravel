<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index(){
        $sliderCount= Slider::all()->count();
        return view('dashboard.home.index',compact( 'sliderCount'));
    }
}
