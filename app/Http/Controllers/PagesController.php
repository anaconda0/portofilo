<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\About;

class PagesController extends Controller
{
    //
    public function index(){
        $services=Service::orderBy('id','DESC')->limit(4)->get();
        $about=About::find(1);

        return view('index',[
            'services'=>$services,
            'about'=>$about
        ]);
    }
}
