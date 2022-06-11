<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

class HomeController extends Controller
{
    public function index(){
      return view('front.home');
    }

    public function privacy_policy(){
        return view('front.privacy-policy');
    }

    public function sectors($slung){
        $Sector = Sector::where('slung',$slung)->get();
        return view('front.sectors',compact('Sector'));
    }
}





