<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      return view('front.home');
    }

    public function privacy_policy(){
        return view('front.privacy-policy');
      }

}
