<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Onions, Tomato Farm, Watermelons in Nairobi - Shaq's Farm Limited";
        $url = url('/');
        $page = "home";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.index',compact('title','url','page','keywords'));
    }

    public function contact()
    {
        $title = "Contact Us - Shaqs Farm Limited";
        $url = url('/the-company');
        $page = "contact";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.contact',compact('title','url','page','keywords'));
    }

    public function company()
    {
        $title = "The Company - Shaqs Farm Limited";
        $url = url('/');
        $page = "company";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.company',compact('title','url','page','keywords'));
    }

    public function services($slung)
    {
        $Services = DB::table('services')->where('slung', $slung)->get();
        foreach ($Services as $key => $value) {
            $title = "$value->title - Shaqs Farm Limited";
            $url = url('/the-company');
            $page = "service";
            $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
            Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
            return view('front.services',compact('title','url','page','keywords','Services'));
        }
    }

    public function product($slung)
    {
        $Services = DB::table('products')->where('slung', $slung)->get();
        foreach ($Services as $key => $value) {
            $title = "$value->title - Shaqs Farm Limited";
            $url = url('/products');
            $page = "service";
            $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
            Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
            return view('front.products',compact('title','url','page','keywords','Services'));
        }
    }

    public function blog($slung)
    {
        $Blog = DB::table('blogs')->where('slung', $slung)->get();
        foreach ($Blog as $key => $value) {
            $title = "$value->title - Shaqs Farm Limited";
            $url = url('/products');
            $page = "blog";
            $keywords = "";
            return view('front.blog',compact('title','url','page','keywords','Blog'));
        }
    }


    public function sector()
    {
        $title = "Sectors - Shaqs Farm Limited";
        $url = url('/the-company');
        $page = "sector";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.sector',compact('title','url','page','keywords'));
    }

    public function gallery()
    {
        $title = "Gallery - Shaqs Farm Limited";
        $url = url('/gallery');
        $page = "sector";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.gallery',compact('title','url','page','keywords'));
    }

    public function portfolio()
    {
        $title = "Portfolio - Shaqs Farm Limited";
        $url = url('/portfolio');
        $page = "portfolio";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.portfolio',compact('title','url','page','keywords'));
    }

    public function copyright()
    {
        $title = "Copyrigh Statement - Shaqs Farm Limited";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.copyright',compact('title','url','page','keywords'));
    }

    public function terms()
    {
        $title = "Terms and Conditions - Shaqs Farm Limited";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.terms',compact('title','url','page','keywords'));
    }

    public function policy()
    {
        $title = "Privacy Policy - Shaqs Farm Limited";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.policy',compact('title','url','page','keywords'));
    }
}
