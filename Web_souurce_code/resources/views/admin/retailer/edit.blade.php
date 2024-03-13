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
            	<form action="{{ route('admin.update.retailer') }}" method="post" enctype="multipart/form-data">
            		<h6 class="heading-small text-muted mb-4">{{ __('Update Retailer information')}}</h6>
                	@csrf
                	<div class="row">
                		<div class="mb-3 col">
                		    <label class="form-label" for="code">Code</label>
                		    <input type="hidden" name="id" value="{{ $retailer->id }}">
                		    <input type="text" class="form-control" id="code" name="code" value="{{ (isset($retailer) && !empty($retailer->code)) ? $retailer->code : '' }}" placeholder="code">
                		</div>
                		<div class="mb-3 col">
                		    <label class="form-label" for="name">Name</label>
                		    <input type="text" class="form-control" id="name" name="name" value="{{ (isset($retailer) && !empty($retailer->name)) ? $retailer->name : '' }}" placeholder="Enter name">
                		</div>
                	</div>
                    <div class="row">
                    	<div class="mb-3 col">
                    	    <label class="form-label" for="address">Address</label>
                    	    <textarea name="address" class="form-control" id="address">{{ $retailer->address}}</textarea>
                    	</div>
                    	<div class="mb-3 col">
                    	    <label class="form-label" for="phone1">Phone No. 1</label>
                    	    <input type="text" class="form-control" id="phone1" name="phone1" value="{{ (isset($retailer) && !empty($retailer->phone1)) ? $retailer->phone1 : '' }}" placeholder="Phone number1">
                    	</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
                    </div>
                </form>
            	    
            </div>
        </div>
    </div>

@endsection

@push('js')
	
@endpush