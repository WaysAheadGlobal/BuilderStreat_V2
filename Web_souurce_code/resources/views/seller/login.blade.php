@extends('layouts.app')

@section('content')
	<section class="vh-100" style="background-color: #eee;">
	  	<div class="container h-100">
	    	<div class="row d-flex justify-content-center align-items-center h-100">
	      		<div class="col-lg-12 col-xl-11">
	        		<div class="card text-black" style="border-radius: 25px;">
	          			<div class="card-body p-md-5">
	            			<div class="row justify-content-center">
	              				<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
	                				<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">LOGIN </p>

					                <form class="mx-1 mx-md-4" action="{{ route('seller.post.login') }}" method="post" enctype="multipart/form-data">
					                	@csrf
					                  	<div class="d-flex flex-row align-items-center mb-4">
					                    	<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
					                      	<input type="hidden" name="role" value="seller">
				                    		<div class="form-outline flex-fill mb-0">
					                      		<label class="form-label" for="phone">Mobile No.*</label>
					                      		<input type="text" id="phone" name="phone" class="form-control" />
					                      		@error('phone')
					                      		    <div class="alert alert-danger">{{ $message }}</div>
					                      		@enderror
					                    	</div>
					                  	</div>
					                  	<div class="d-flex flex-row align-items-center mb-4">
				  	                    	<i class="fas fa-key fa-lg me-3 fa-fw"></i>
				  	                    	<div class="form-outline flex-fill mb-0">
				  	                      		<label class="form-label" for="otp">OTP*</label>
				  	                      		<input type="text" id="otp" name="otp" class="form-control" />
				  	                      		@error('phone')
				  	                      		    <div class="alert alert-danger">{{ $message }}</div>
				  	                      		@enderror
				  	                    	</div>
				  	                  	</div>

					                  	<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
					                    	<button type="submit" class="btn btn-success btn-lg">Login</button>
					                  	</div>
					                </form>
	            				</div>
				              	<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
					                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
					                  class="img-fluid" alt="Sample image">
				              	</div>
	            			</div>
	          			</div>
	        		</div>
	      		</div>
	    	</div>
	  	</div>
	</section>

@endsection