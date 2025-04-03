<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner = getMeta('service');
           // Set Meta Home
           metaGenerate($metaBanner);
           $query =  \App\Models\Service::query();


            $service = Service::findOrFail(request('service_id')?? $query->first()->id);
        return view('front.services.index',[
            'services' =>  $query->paginate(20),
            'service' => $service,
            'metaBanner' => $metaBanner
        ]);
    }

}
