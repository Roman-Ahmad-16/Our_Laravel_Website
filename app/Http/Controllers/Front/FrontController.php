<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\team;
use App\Models\Testimonial;


class FrontController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('id', 'DESC')->get();
        $testimonials = Testimonial::orderBy('id','DESC')->get();
        return view('front.index',compact('teams','testimonials' ));
    }


}