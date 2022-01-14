<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
