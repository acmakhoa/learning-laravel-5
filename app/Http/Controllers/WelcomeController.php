<?php
/**
 * Created by PhpStorm.
 * User: khoa
 * Date: 7/11/2015
 * Time: 11:58 AM
 */

namespace Blog\Http\Controllers;


class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function contact(){
        return view("pages.contact");
    }

}