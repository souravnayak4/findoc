<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Toastr;
use Redirect;
class AdminController extends Controller
{
    public function dashboard(){
        $dashboard=view('admin.pages.dashboard');
        return view('admin.master')
        ->with('dashboard',$dashboard);

    }
    
    public function messages(){
        $messages=view('admin.pages.messages');
        return view('admin.master')
        ->with('messages',$messages);

    }
    public function book(){
        $book=view('admin.pages.book');
        return view('admin.master')
        ->with('book',$book);

    }
    public function reviews(){
        $reviews=view('admin.pages.reviews');
        return view('admin.master')
        ->with('reviews',$reviews);

    }
    public function bookmarks(){
        $bookmarks=view('admin.pages.bookmarks');
        return view('admin.master')
        ->with('bookmarks',$bookmarks);

    }
    public function add_listing(){
        $book=view('admin.pages.add_listing');
        return view('admin.master')
        ->with('book',$book);

    }
    public function user_profile(){
        $user_profile=view('admin.pages.user_profile');
        return view('admin.master')
        ->with('user_profile',$user_profile);

    }
    public function doctor_profile(){
        $doctor_profile=view('admin.pages.doctor_profile');
        return view('admin.master')
        ->with('doctor_profile',$doctor_profile);

    }
    public function charts(){
        $charts=view('admin.pages.charts');
        return view('admin.master')
        ->with('charts',$charts);

    }
    public function tables(){
        $tables=view('admin.pages.tables');
        return view('admin.master')
        ->with('tables',$tables);

    }

    public function add_area(){
        $area=view('admin.pages.add_area');
        return view('admin.master')
        ->with('area',$area);

    }
    public function save_area(Request $request){

        //print($request->area_name);
        DB::table('tbl_area')->insert([
            'area_name' => $request->area_name
            
        ]);

        Toastr::success('Area add Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        return Redirect::back();

    }
    public function add_clinic(){
        $clinic=view('admin.pages.add_clinic');
        return view('admin.master')
        ->with('clinic',$clinic);

    }
    public function add_specialist(){
        $specialist=view('admin.pages.add_specialist');
        return view('admin.master')
        ->with('specialist',$specialist);

    }


}
