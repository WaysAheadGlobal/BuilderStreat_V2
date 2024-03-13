@extends('layouts.app')

@section('content')
   
	<div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <h3 class="mb-0">{{ __('Edit Profile') }}</h3>
                </div>
            </div>
            <div class="card-body">
            	<form action="{{ route('admin.update.stockist') }}" method="post" enctype="multipart/form-data">
                	@csrf
                	<div class="row">
                		<div class="mb-3 col">
                		    <label class="form-label" for="code">Code</label>
                		    <input type="hidden" value="{{ $stockist->id}}" name="id">
                		    <input type="text" class="form-control" id="code" name="code" placeholder="code" value="{{ $stockist->code }}">
                		</div>
                		<div class="mb-3 col">
                		    <label class="form-label" for="name">Name</label>
                		    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $stockist->name}}">
                		</div>
                	</div>
                    <div class="row">
                    	<div class="mb-3 col">
                    	    <label class="form-label" for="username">Login name</label>
                    	    <input type="text" class="form-control" id="username" name="username" value="{{ $stockist->login_name}}" placeholder="Login name" autocomplete="off">
                    	</div>
                    	<div class="mb-3 col">
                    	    <label class="form-label" for="password">Password</label>
                    	    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" readonly="true">
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="mb-3 col">
                    	    <label class="form-label" for="address">Address</label>
                    	    <textarea name="address" class="form-control" id="address">{{ $stockist->address}}</textarea>
                    	</div>
                    	<div class="mb-3 col">
                    	    <label class="form-label" for="city">City</label>
                    	    <input type="text" class="form-control" id="city" name="city" value="{{ $stockist->city}}" placeholder="City name">
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="mb-3 col">
                    	    <label class="form-label" for="phone1">Phone No. 1</label>
                    	    <input type="text" class="form-control" id="phone1" name="phone1" value="{{ $stockist->phone1}}" placeholder="Phone number1">
                    	</div>
                    	<div class="mb-3 col">
                    	    <label class="form-label" for="phone2">Phone No.2</label>
                    	    <input type="text" class="form-control" id="phone2" name="phone2" value="{{ $stockist->phone2}}" placeholder="Phone No. 2">
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="mb-3 col">
                    		<button type="submit" class="btn btn-primary">Update</button>
                    	</div>
                    </div>
                </form>
            	    
            </div>
        </div>
    </div>

@endsection

@push('js')
	
@endpush