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
          //           AREA
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
    
    public function manage_area(){
        $all=DB::table('tbl_area')->get();
        $area=view('admin.pages.manage_area')
                ->with('all',$all);
        return view('admin.master')
        ->with('area',$area);

    }

    public function edit_area($id){
        $find_area=DB::table('tbl_area')->where('area_id',$id)->first();
        $area=view('admin.pages.edit_area')
                ->with('find_area',$find_area);
        return view('admin.master')
        ->with('area',$area);

    }

    public function update_area(Request $request){

        
        DB::table('tbl_area')
              ->where('area_id', $request->id)
              ->update(['area_name' => $request->area_name]);

        Toastr::success('Area Updated Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        return Redirect::back();

    }

    public function delete_area($id){
        DB::table('tbl_area')->where('area_id',$id)->delete();
        Toastr::success('Area Deleted Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        return Redirect::back();

    }
          


   
   
       //SPECIALIST

    public function add_specialist(){
        $specialist=view('admin.pages.add_specialist');
        return view('admin.master')
        ->with('specialist',$specialist);

    }
    public function save_specialist(Request $request){

        $data=array();
        $data['spl_name'] = $request->specialist_name;

        $image = $request->file('spl_image');


        if ($request->hasFile('spl_image')) {

            $imageName = $image->getClientOriginalName();
            $image->move(public_path('spl_icon'), $imageName);

            $data['spl_image'] = 'spl_icon/' . $imageName;

            DB::table('tbl_specialist')->insert($data);

            Toastr::success('specialist add Successfully', 'Info', ["positionClass" => "toast-top-center"]);
            return Redirect::back();
        }
        return redirect()->back()->with('error', 'Something went wrong !');



    }
    public function manage_specialist(){
        $all=DB::table('tbl_specialist')->get();
        $specialist=view('admin.pages.manage_specialist')
                ->with('all',$all);
        return view('admin.master')
        ->with('specialist',$specialist);

    }
    public function edit_spl($id){
        $find_spl=DB::table('tbl_specialist')->where('spl_id',$id)->first();
        $spl=view('admin.pages.edit_spl')
                ->with('find_spl',$find_spl);
        return view('admin.master')
        ->with('spl',$spl);

    }

    public function update_specialist(Request $request){

        
        DB::table('tbl_specialist')
              ->where('spl_id', $request->id)
              ->update(['spl_name' => $request->spl_name]);

        Toastr::success('specialist Updated Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        return Redirect::back();

    }

    public function delete_specialist($id){
        DB::table('tbl_specialist')->where('spl_id',$id)->delete();
        Toastr::success('Specialist Deleted Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        return Redirect::back();

    }
  



    public function add_clinic(){
        $all_area=DB::table('tbl_area')->get();
        $clinic=view('admin.pages.add_clinic')
                ->with('all_area',$all_area);
        return view('admin.master')
        ->with('clinic',$clinic);

    }

    public function save_clinic(Request $request){

        //print($request->clinic_name);
        DB::table('tbl_clinic')->insert([
            'clinic_name' => $request->clinic_name,
            'area_id' => $request->area_id
            
        ]);

        Toastr::success('Clinic add Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        return Redirect::back();

    }

    public function manage_clinic(){
        $all = DB::table('tbl_clinic')
            ->join('tbl_area', 'tbl_clinic.area_id', '=', 'tbl_area.area_id')
            
            ->select('tbl_clinic.*', 'tbl_area.area_name')
            ->get();
           
        $clinic=view('admin.pages.manage_clinic')
                ->with('all',$all);
        return view('admin.master')
        ->with('clinic',$clinic);

    }
    public function edit_clinic($id){
        $find_clinic=DB::table('tbl_clinic')->where('clinic_id',$id)->first();
        $clinic=view('admin.pages.edit_clinic')
                ->with('find_clinic',$find_clinic);
        return view('admin.master')
        ->with('clinic',$clinic);

    }
    public function update_clinic(Request $request){

        
        DB::table('tbl_clinic')
              ->where('clinic_id', $request->id)
              ->update(['clinic_name' => $request->clinic_name]);

        Toastr::success('Clinic Updated Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        return Redirect::back();

    }
   
    public function delete_clinic($id){
        DB::table('tbl_clinic')->where('clinic_id',$id)->delete();
        Toastr::success('clinic Deleted Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        return Redirect::back();

    }
    public function manage_dr(){
        $all=DB::table('tbl_dr_profile')
        ->join('tbl_specialist', 'tbl_dr_profile.spl_id', '=', 'tbl_specialist.spl_id')
            
            ->select('tbl_dr_profile.*', 'tbl_specialist.spl_name')
            ->get();

        $dr=view('admin.pages.manage_dr')
                ->with('all',$all);
                
        return view('admin.master')
        ->with('dr',$dr);
    }
    
    public function add_dr(){
        $all=DB::table('tbl_specialist')->get();
        $dr=view('admin.pages.add_dr')
                ->with('all_spl',$all);
        return view('admin.master')
        ->with('dr',$dr);

    }
  
    public function save_dr(Request $request){

        $validated = $request->validate([
            'dr_name' => 'required',
            'spl_id' => 'required',
            'dr_qualification' => 'required',
            'dr_exp' => 'required',
            'dr_image' => 'required',
        ]);
       
        $data=array();
        //print($request->area_name);
       
            $data['dr_name'] = $request->dr_name;
            $data['spl_id'] = $request->spl_id;
            $data['dr_qualification'] = $request->dr_qualification;
            $data['dr_exp'] = $request->dr_exp;
            //$data['dr_image'] = $request->dr_image;
        
        $image = $request->file('dr_image');
        //dd($data);

        if ($request->hasFile('dr_image')) {

            $imageName = $image->getClientOriginalName();
            $image->move(public_path('dr_image'), $imageName);

            $data['dr_image'] = 'dr_image/' . $imageName;

            //dd($data);

            DB::table('tbl_dr_profile')->insert($data);

            
      
         Toastr::success('Doctor add Successfully', 'Info', ["positionClass" => "toast-top-center"]);
         return Redirect::back();
        }
        return redirect()->back()->with('error', 'Something went wrong !');
        

    }
   

      //           Dr Date and time 

      public function add_date_dr($id){
        $all_clinic=DB::table('tbl_clinic')->get();
        $area=view('admin.pages.add_date_dr')
            ->with('all_clinic',$all_clinic)
                ->with('find_dr',$id);
        return view('admin.master')
        ->with('area',$area);

    }
    public function save_date_dr(Request $request){

        //print($request->area_name);
        DB::table('tbl_dr_date')->insert([
            'dr_id' => $request->dr_id,
            'clinic_id' => $request->clinic_id,
            'dr_date' => $request->dr_date,
            'dr_time' => $request->dr_time
            
        ]);

        Toastr::success('Date add Successfully', 'Info', ["positionClass" => "toast-top-center"]);
        
        return Redirect::back();

    }

}
