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
        <li class="breadcrumb-item active">Add listing</li>
      </ol>
		
		<!-- /box_general-->
		<div class="row">
			<div class="col-md-6">
				<div class="box_general padding_bottom">
					<div class="header_box version_2">
						<h2><i class="fa fa-location-pin"></i>Add Area</h2>
					</div>
					<div class="form-group">
						<label>Area Name</label>
						<input class="form-control" type="text">
					</div>
					
				</div>
			</div>
			
		</div>
		<!-- /row-->
		<p><a href="#0" class="btn_1 medium">Save</a></p>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    @endsection