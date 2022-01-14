<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   
    public function index(){
        $home=view('frontend.pages.home');
        return view('frontend.master')
        ->with('home',$home);

    }

    public function list(){
        $list=view('frontend.pages.list');
        return view('frontend.master')
        ->with('list',$list);

    }
    public function detail_page(){
        $detail_page=view('frontend.pages.detail_page');
        return view('frontend.master')
        ->with('detail_page',$detail_page);

    }
    public function booking(){
        $booking=view('frontend.pages.booking');
        return view('frontend.master')
        ->with('booking',$booking);

    }
    public function confirm(){
        $confirm=view('frontend.pages.confirm');
        return view('frontend.master')
        ->with('confirm',$confirm);

    }
}
