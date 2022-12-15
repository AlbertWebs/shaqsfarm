<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $title = "Onions, Tomato Farm, Watermelons in Nairobi - Shaq's Farm Limited";
        $url = url('/');
        $page = "home";
        $Product = Product::all();
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('shop.index',compact('title','url','page','keywords','Product'));
    }
}
