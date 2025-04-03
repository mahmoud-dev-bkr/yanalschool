<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner = getMeta('news');
           // Set Meta Home
           metaGenerate($metaBanner);
           $query =  \App\Models\News::Latest();

            // dd($query);
        return view('front.news.index',[
            'news' =>  $query->paginate(9),
            'metaBanner' => $metaBanner
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('news');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.news.show',[
            'new' =>  \App\Models\News::findOrFail($id),
            'latestnews' =>  \App\Models\News::latest()->take(5)->get(),
            'metaBanner' => $metaBanner
        ]);
    }
    // subscription form
    public function subscription(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);
        Subscription::create($request->all());
        alert()->success('', 'Subscribed Send successfully');
        return back();
    }
}
