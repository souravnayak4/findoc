<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
   
    public function index(){
        $all_spl=DB::table('tbl_specialist')->get();
        $home=view('frontend.pages.home')
                ->with('all_spl',$all_spl);
        return view('frontend.master')
        ->with('home',$home);

    }

    public function list($spl_id){
        $all=DB::table('tbl_dr_profile')
        ->join('tbl_specialist', 'tbl_dr_profile.spl_id', '=', 'tbl_specialist.spl_id')
            ->where('tbl_dr_profile.spl_id',$spl_id)
            ->select('tbl_dr_profile.*', 'tbl_specialist.spl_name')
            ->get();
        $list=view('frontend.pages.list')
                ->with('all_dr',$all);
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
