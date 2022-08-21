<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Toastr;
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
    public function detail_page($id){
        $all=DB::table('tbl_dr_profile')
        ->join('tbl_specialist', 'tbl_dr_profile.spl_id', '=', 'tbl_specialist.spl_id')
       
        ->where('tbl_dr_profile.dr_id',$id)
            ->select('tbl_dr_profile.*', 'tbl_specialist.spl_name')
            ->first();

        $all_date=DB::table('tbl_dr_profile')
            ->join('tbl_dr_date', 'tbl_dr_profile.dr_id', '=', 'tbl_dr_date.dr_id')
            ->where('tbl_dr_profile.dr_id',$id)
            ->select('tbl_dr_date.*')
                ->get();
        $detail_page=view('frontend.pages.detail_page')
                    ->with('dr_info',$all)
                    ->with('all_date',$all_date);
        return view('frontend.master')
        ->with('detail_page',$detail_page);

    }
    public function booking($dr_id,$date_id){

        $find_dr=DB::table('tbl_dr_profile')
        ->join('tbl_dr_date', 'tbl_dr_profile.dr_id', '=', 'tbl_dr_date.dr_id')
        ->where('tbl_dr_profile.dr_id',$dr_id)
        ->where('tbl_dr_date.id',$date_id)
        ->select('tbl_dr_date.*','tbl_dr_profile.*')
        ->first();

        $booking=view('frontend.pages.booking')
                ->with('find_dr',$find_dr);
        return view('frontend.master')
        ->with('booking',$booking);

    }
    public function confirm(Request $request){

        $id=DB::table('customer_info')->insertGetId([
            'name' => $request->cust_name,
            'order_id' => $request->order_id,
            'clinic_id' => $request->clinic_id,
            'dr_id' => $request->dr_id,
            'dr_date' => $request->dr_date,
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'payment_method' => $request->payment_method,
            'total' => $request->total

            
        ]);

        Toastr::success(' Booking Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        //return Redirect::back();

        $find_order=DB::table('customer_info')->where('id',$id)->first();
        
        $confirm=view('frontend.pages.confirm')->with('find_order',$find_order);
        return view('frontend.master')
        ->with('confirm',$confirm);

    }
}
