@extends('layouts.adminapp')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<style>
  .overlay {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.8);
      z-index: 2;
    }

    .confirm-box {
    position: absolute;
    width: 35%;
    height: 31%;
    top: 26%;
    left: 34%;
    text-align: center;
    background: white;
    border: 1px solid;
    border-radius: 5%;
    padding: 29px;
}
     .my-two{
        margin-top:23px;
    }

    .close {
      cursor: pointer;
    }
</style>
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
              	  <h6 class="h3 text-primary d-inline-block mb-0">Sellers Request</h6>
              	</div>
              	<div class="col-lg-6 col-5 text-right">

              	</div>
              </div>
              <!-- Light table -->
              <div class="table-responsive">
                <table class="table align-items-center table-flush" id="seller-list">
                  <thead class="thead-light">
                    	<tr>
              			<th>Sr.No.</th>
              			<th>Name</th>
              			<th>Email Id</th>
              			<th>Phone No.</th>
              			<th>Role</th>
              			<th>Approved Status</th>
              			<th>Status</th>
              			<!-- <th>Action</th>  -->
              		</tr>
                  </thead>
                  <tbody class="list">
                    <?php
                    $i = 1;
                      if(isset($sellers) && (count($sellers) >0) ){
                        foreach ($sellers as $key => $value) { ?>
                          <tr>
                            <td>{{ ($i) ? $i : '' }}</td>
                            <td>{{ ($value->name) ? $value->name : '' }}</td>
                            <td>{{ ($value->email) ? $value->email : '' }}</td>
                            <td>{{ ($value->phone) ? $value->phone : '' }}</td>
                            <td>{{ ($value->role) ? $value->role : '' }}</td>
                            <td>
                              <?php
                              if($value->approved == null){ ?>

                              <button onclick="showConfirmBox()" class="btn btn-primary approval" id="{{ $value->id}}">Not-approved</button>
                              <?php }
                              else if($value->approved == 1){ ?>
                              <button onclick="showConfirmBox()" class="btn btn-success approval" id="{{ $value->id}}">Approved</button>
                              <?php }
                              else{ ?>
                              <button onclick="showConfirmBox()" class="btn btn-danger approval" id="{{ $value->id}}" >Rejected</button>
                              <?php }
                              ?>
                            </td>
                            <td>{{ ($value->status == '1') ? 'active' : 'Inactive' }}</td>
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

        <div class="overlay" id="overlay" hidden>
          <div class="confirm-box">
            <div onclick="closeConfirmBox()" class="close">&#10006;</div>
            <h2>Confirmation</h2>
            <p>Do you want to approve/reject this request?</p>
              <div class="my-two">
            <button class="btn btn-success" onclick="isConfirm(true)">Approved</button>
            <button class="btn btn-danger" onclick="isConfirm(false)">Reject</button>
                  </div>
          </div>
        </div>

@endsection

@push('js')
    <script src="{{ asset('chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('chart.js/dist/Chart.extension.js') }}"></script>

    <script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>
  <script>
    $(document).ready(function () {
      $('#seller-list').DataTable();
    });
    var id = '';
    function showConfirmBox() {
      document.getElementById("overlay").hidden = false;
    }
    function closeConfirmBox() {
      document.getElementById("overlay").hidden = true;
    }

    $(document).on('click', '.approval', function(e){
      id = $(this).attr('id');
    });

    function isConfirm(answer) {
      if(answer){
        let status = '1';
        $.ajax({
          url : '{{ route("admin.approve.seller") }}',
          type : 'post',
          data : {_token:'{{ csrf_token() }}', status:status, id:id},
          success : function(response){
            if(response['success']){
              alert('This request has been approved successfully');
              location.reload();
            }
          }
        });
      }else{
        let status = '0';
        $.ajax({
          url : '{{ route("admin.approve.seller") }}',
          type : 'post',
          data : {_token:'{{ csrf_token() }}', status:status, id:id},
          success : function(response){
            if(response['success']){
              alert('This request has been rejected!');
              location.reload();
            }
          }
        });
      }
      closeConfirmBox();
    }

  </script>

@endpush