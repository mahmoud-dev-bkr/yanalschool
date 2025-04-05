<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Admin;
use App\Models\Blog;
use App\Models\HowWork;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get Meta & Banner From DB
        $metaBanner = getMeta('home');
        // Set Meta Home
           metaGenerate($metaBanner);

        // dd("dsadsa");


        return view('front.home.index', [
            'slider' => Slider::first(),
        ]);
    }


    public function clinicLocation()
    {
        $metaBanner = getMeta('location');
        // Set Meta Home
           metaGenerate($metaBanner);

        return view('front.clinicLocation.index',[
            'metaBanner' => $metaBanner
        ]);
    }

    public function terms ()
    {

        return view('front.terms.index');
    }
    public function privacyPolicy ()
    {

        return view('front.privacy_policy.index');
    }
}
