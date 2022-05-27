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
						<h2><i class="fa fa-location-pin"></i>Add dr</h2>
					</div>
					
					<form method="post" action="/save-dr">
						@csrf
					<div class="form-group">
						<label>Dr Name</label>
						<input class="form-control @error('dr_name') is-invalid @enderror" type="text" name="dr_name" value="{{ old('dr_name') }}">
						@error('dr_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
					</div>
					<div class="form-group">
                    <label>Specialist</label>
                    <select class="form-control @error('spl_id') is-invalid @enderror" name="spl_id">
                        <option value="">Select Specialist</option>
                        @foreach($all_spl as $v_spl)
                        <option value="{{$v_spl->spl_id}}">{{$v_spl->spl_name}}</option>
						
                        @endforeach
                    </select>
					@error('spl_id')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                </div>
					<div class="form-group">
						<label>Qualification</label>
						<input class="form-control @error('dr_qualification') is-invalid @enderror" type="text" name="dr_qualification" value="{{ old('dr_qualification') }}">
						@error('dr_qualification')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
					</div>
					<div class="form-group">
						<label>Experience</label>
										<input class="form-control @error('dr_qualification') is-invalid @enderror" type="text" name="dr_qualification" value="{{ old('dr_qualification') }}">
						@error('dr_qualification')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
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