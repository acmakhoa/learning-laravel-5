<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
        $people=[
            "Lan","Son","Tuan"
        ];
        return view('pages.about',compact('people'));
    }
    public function contact(){

        return view('pages.contact');
    }
}
