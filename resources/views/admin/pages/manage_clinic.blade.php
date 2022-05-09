@extends('admin.master')
@section('title', 'tables')
@section('main_content')
<script type="text/javascript">
    function check_delete() {
        chk = confirm("Are you sure to delete item ?");
        if (chk) {
            return true;
        } else {
            return false;
        }
    }

</script>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Clinic</th>
                  
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <!-- <tfoot>
                <tr>
                <th>ID</th>
                  <th>clinic</th>
                 
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot> -->
              <tbody>
                  @foreach($all as $v_all)
                <tr>
                  <td>{{$v_all->clinic_id}}</td>
                  <td>{{$v_all->clinic_name}}</td>
                  
                  <td><a href="{{URL::to('edit-clinic/'.$v_all->clinic_id)}}">Edit</a></td>
                  <td><a href="{{URL::to('delete-clinic/'.$v_all->clinic_id)}}"
                                                    data-toggle="tooltip" data-original-title="Close"
                                                    onclick="return check_delete();">Delete</td>
                 
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
    @endsection
