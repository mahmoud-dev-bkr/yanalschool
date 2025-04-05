<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('about');
           // Set Meta Home

           metaGenerate($metaBanner);
        return view('front.courses.index',[
            'about' =>  \App\Models\About::first(),
            'metaBanner' => $metaBanner,
            'features' => \App\Models\Feature::get(),
        ]);
    }


    public function show($id = null)
    {
        $course = null;
        return view('front.courses.show', compact('course'));
    }

}
