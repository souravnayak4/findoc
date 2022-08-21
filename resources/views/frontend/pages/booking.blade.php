
<?php $sc=($find_dr->dr_fees)* 0.1 ;
$total=$find_dr->dr_fees + $sc;
?>

@extends('frontend.master')
@section('title', 'booking')
@section('content')
<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
				<div class="box_general_3 cart">
					<div class="message">
						<p>Exisitng Customer? <a href="#0">Click here to login</a></p>
					</div>
					<div class="form_title">
						<h3><strong>1</strong>Your Details</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<form method="post" action="/confirm">
						@csrf
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" id="firstname_booking" name="cust_name" placeholder="Jhon">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Age</label>
									<input type="number" class="form-control" id="lastname_booking" name="age" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								
									<label>Gender</label>
								<div class="form-group">
									<select class="form-control" name="gender" id="gender">
										<option value="">Select your Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Others">Others</option>
									</select>
								</div>
								
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Address</label>
									<input type="text" id="address" name="address" class="form-control" placeholder="Address">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Phone</label>
									<input type="text" id="phone" name="phone" class="form-control" placeholder="00 44 678 94329">
								</div>
							</div>
						</div>
					</div>
					<hr>
					<!--End step -->

					 <div class="form_title">
						<h3><strong>2</strong>Select Payment Method</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div> 
					 <div class="step">
						 <div class="form-group">
							<label>Offline</label>
							<input type="radio" class="form-control" id="payment_method" name="payment_method" value="0" >
						</div>
						<div class="form-group">
							<label>Online</label>
							<input type="radio" id="payment_method" name="payment_method" class="form-control" value="1">
						</div>
						 
						
					</div>
					<hr>
					<!--End step -->

					
					<hr>
					<!--End step -->
					<div id="policy">
						<h4>Cancellation policy</h4>
						<div class="form-group">
							<label>
								<input type="checkbox" name="policy_terms" id="policy_terms"> I accept terms and conditions and general policy.
							</label>
						</div>
					</div>
					<input type="hidden" value="{{ $total }}" name="total">
					<input type="hidden" value="{{ random_int(100000, 999999); }}" name="order_id">
					<input type="hidden" value="{{ $find_dr->dr_id }}" name="dr_id">
					<input type="hidden" value="{{ $find_dr->dr_date }}" name="dr_date">
					<input type="hidden" value="{{ $find_dr->clinic_id }}" name="clinic_id">
							<input type="submit" class="btn_1 full-width" value="Confirm and pay">
							
						</form>
				</div>
				</div>
				<!-- /col -->
				
							<aside class="col-xl-4 col-lg-4" id="sidebar">
							<div class="box_general_3 booking">
						
							<div class="title">
								<h3>Your booking</h3>
							</div>
							<div class="summary">
								<ul>
									<li>Date: <strong class="float-right">{{ $find_dr->dr_date }}</strong></li>
									<li>Time: <strong class="float-right">{{ $find_dr->dr_time }}</strong></li>
									<li>Dr. Name: <strong class="float-right">{{ $find_dr->dr_name }}</strong></li>
								</ul>
							</div>
							
							<ul class="treatments checkout clearfix">
								<li>
									Dr. Fees <strong class="float-right">{{ $find_dr->dr_fees }}</strong>
								</li>
								<li>
									Service Fees <strong class="float-right">{{ $sc }}</strong>
								</li>
								
								<li class="total">
									Total <strong class="float-right">{{ $total }}</strong>
								</li>
							</ul>
							<hr>
							
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
    @endsection