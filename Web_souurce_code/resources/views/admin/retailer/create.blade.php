@extends('layouts.app')

@section('content')
   
	<div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <!-- <h3 class="mb-0">{{ __('Edit Profile') }}</h3> -->
                </div>
            </div>
            <div class="card-body">
            	<form action="{{ route('admin.save.retailer') }}" method="post" enctype="multipart/form-data">
            		<h6 class="heading-small text-muted mb-4">{{ __('Retailer information')}}</h6>
            		@csrf
            		<div class="row">
            			<div class="mb-3 col">
            			    <label class="form-label" for="code">Code</label>
            			    <input type="text" class="form-control" id="code" name="code" value="" placeholder="code">
            			    @if ($errors->has('code'))
            	                <span class="text-danger">{{ $errors->first('code') }}</span>
            	            @endif
            			</div>
            			<div class="mb-3 col">
            			    <label class="form-label" for="name">Name</label>
            			    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter name">
            			    @if ($errors->has('name'))
            	                <span class="text-danger">{{ $errors->first('name') }}</span>
            	            @endif
            			</div>
            		</div>
            	    <div class="row">
            	    	<div class="mb-3 col">
            	    	    <label class="form-label" for="address">Address</label>
            	    	    <textarea name="address" class="form-control" id="address"></textarea>
            	    	    @if ($errors->has('address'))
            	                <span class="text-danger">{{ $errors->first('address') }}</span>
            	            @endif
            	    	</div>
            	    	<div class="mb-3 col">
            	    	    <label class="form-label" for="phone1">Phone No. 1</label>
            	    	    <input type="text" class="form-control" id="phone1" name="phone1" value="" placeholder="Phone number1">
            	    	    @if ($errors->has('phone1'))
            	                <span class="text-danger">{{ $errors->first('phone1') }}</span>
            	            @endif
            	    	</div>
            	    </div>
            	    <div class="text-center">
            	        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
            	    	<button type="reset" class="btn btn-warning mt-4">Reset</button>
            	    	
            	    </div>
            	    <!-- <div class="row">
            	    	<div class="mb-3 col">
            	    		<button type="submit" class="btn btn-primary">Submit</button>
            	    	</div>
            	    	<div class="mb-3 col">
            	    		<button type="reset" class="btn btn-primary">Reset</button>
            	    	</div>
            	    </div> -->
            	</form>
                
            </div>
        </div>
    </div>

@endsection

@push('js')
	<script>
		$(document).ready(function(){
			// let randomString = Math.random().toString(36).substr(2, 6)
			// var val = Math.floor(1 + Math.random() * 9);
			var val = Math.floor(1000 + Math.random() * 9000);
			// $("#username").val(randomString);
			$("#code").val(val);

			
		});
	</script>
@endpush