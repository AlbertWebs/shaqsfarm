<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $title = "Onions, Tomato Farm, Watermelons in Nairobi - Shaq's Farm Limited";
        $url = url('/');
        $page = "home";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.shop',compact('title','url','page','keywords'));
    }
}
