@extends('admin.master')
@section('title', 'specialist')
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
						<h2><i class="fa fa-location-pin"></i>Add Specialist</h2>
					</div>
					<form method="post" action="/save-specialist" enctype="multipart/form-data">
						@csrf
					<div class="form-group">
						<label>Specialist Name</label>
						<input class="form-control" type="text" name="specialist_name">
					</div>
					<div class="form-group">
						<label>Specialist ICON</label>
						<input class="form-control" type="file" name="spl_image">
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