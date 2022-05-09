@extends('admin.master')
@section('title', 'user profile')
@section('main_content') 
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add clinic</li>
      </ol>
		
		<!-- /box_general-->
		<div class="row">
			<div class="col-md-6">
				<div class="box_general padding_bottom">
					<div class="header_box version_2">
						<h2><i class="fa fa-location-pin"></i>Add Clinic</h2>
					</div>
					<form method="post" action="/update-clinic">
						@csrf
					<div class="form-group">
						<label>Clinic Name</label>
						<input class="form-control" type="text" name="clinic_name" value="{{$find_clinic->clinic_name}}">
					<input type="hidden" name="id" value="{{$find_clinic->clinic_id}}">
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