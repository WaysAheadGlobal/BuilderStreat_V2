@extends('layouts.app')

@section('content')
   
  <!-- Main content -->
 <div class="main-content" id="panel">
    
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header row align-items-center py-4">
            	<div class="col-lg-6 col-7">
            	  <h6 class="h3 text-primary d-inline-block mb-0">Retailer List</h6>
            	</div>
            	<div class="col-lg-6 col-5 text-right">
            	  <a href="{{ route('admin.add.retailer') }}" class="btn btn-sm btn-neutral">Add retailer</a>
            	</div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="retailer-list">
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No.</th>
        			<th>Code</th>
        			<th>Name</th>
        			<th>Address</th>
        			<th>Phone No.1</th>
        			<th>Status</th>
        			<th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                	<?php
                		$i = 1;
                		if(isset($retailer) && count($retailer) > 0){
                			foreach ($retailer as $key => $value) { ?>
                				<tr>
                					<td>{{ $i }}</td>
                					<td>{{ $value->code }}</td>
                					<td>{{ $value->name }}</td>
                					<td>{{ $value->address }}</td>
                					<td>{{ $value->phone1 }}</td>
                					<td>
                						@if($value->status != 1)
                						    <a href='{{url("admin/update-stockist-status/$value->id/$value->status")}}'
                						       onclick="if(! confirm('Click Ok To Active ')){ return false}"
                						       class="btn btn  btn-danger" data-toggle="tooltip" >In-Active</a>
                						@else
                						    <a href='{{url("admin/update-stockist-status/$value->id/$value->status")}}'
                						       onclick="if(! confirm('Click Ok To InActivate')){ return false}"
                						       class="btn btn-success btn-sm" data-toggle="tooltip" >Active</a>
                						@endif
                					</td>
                					<td>
                						<a href="{{ route('admin.edit.retailer',$value->id) }}" title="edit">edit</a>
                					</td>
                				</tr>
                	<?php		
                				$i++;
                			}
                		}
                		?>                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
@endsection

@push('js')

<script>
	$(document).ready(function() {
	    $('#retailer-list').DataTable();
	} );
</script>
@endpush