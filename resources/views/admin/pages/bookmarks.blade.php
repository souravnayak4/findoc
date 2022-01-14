
@extends('admin.master')
@section('title', 'bookmarks')
@section('main_content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Bookmarks</li>
      </ol>
		<div class="box_general">
			<div class="header_box">
				<h2 class="d-inline-block">Bookmarks List</h2>
				<div class="filter">
					<select name="orderby" class="selectbox">
						<option value="Any time">Any time</option>
						<option value="Latest">Latest</option>
						<option value="Oldest">Oldest</option>
					</select>
				</div>
			</div>
			<div class="list_general">
				<ul>
					<li>
						<figure><img src="img/avatar1.jpg" alt=""></figure>
						<small>Primary care - Internist</small>
						<h4>Dr. Julia Jhones</h4>
						<p>2726 Shinn Street, New York<br></p>
						<p><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-user"></i> View profile</a></p>
						<ul class="buttons">
							<li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a></li>
						</ul>
					</li>
					<li>
						<figure><img src="img/avatar2.jpg" alt=""></figure>
						<small>Primary care - Internist</small>
						<h4>Dr. Mark Schumaker</h4>
						<p>2726 Shinn Street, New York<br></p>
						<p><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-user"></i> View profile</a></p>
						<ul class="buttons">
							<li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a></li>
						</ul>
					</li>
					<li>
						<figure><img src="img/avatar3.jpg" alt=""></figure>
						<small>Primary care - Internist</small>
						<h4>Dr. Lucas George</h4>
						<p>2726 Shinn Street, New York<br></p>
						<p><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-user"></i> View profile</a></p>
						<ul class="buttons">
							<li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- /box_general-->
		<nav aria-label="...">
			<ul class="pagination pagination-sm add_bottom_30">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<!-- /pagination-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
      @endsection