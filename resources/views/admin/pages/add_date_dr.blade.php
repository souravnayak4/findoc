@extends('admin.master')
@section('title', 'clinic')
@section('main_content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add listing</li>
        </ol>

        <!-- /box_general-->
        <div class="row">
            <div class="col-md-6">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-location-pin"></i>Add Boking Date </h2>
                    </div>
                    <form method="post" action="/save-date-dr">
						@csrf
                        <div class="form-group">
                            <label>Clinic</label>
                            <select class="form-control" name="clinic_id">
                                <option value="">Select clinic</option>
                                @foreach($all_clinic as $v_clinic)
                                <option value="{{$v_clinic->clinic_id}}">{{$v_clinic->clinic_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input class="form-control" type="text" name="dr_date">
                            <input class="form-control" type="hidden" name="dr_id" value={{ $find_dr }}>
                        </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input class="form-control" type="text" name="dr_time">
                    </div>

                </div>
            </div>

            

        </div>
        <!-- /row-->
        <p><input type="submit" class="btn_1 medium" value="Save"></p>
</form>
    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->
@endsection
