@extends('layouts.sellerApp')

@section('content')

<style>

    .overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.8);
        z-index: 2;
        height: 167%;
      }

      .confirm-box {
        position: absolute;
        width: 25%;
        height: 22%;
        top: 40%;
        left: 35%;
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
<style>

.rsptable {
 color: #616161;
 display: table;
 margin: 18px 0 1em 0;
 width: 100%;
   
    
}

.rsptable .row {
 height: 64px;
background: #FFFFFF;
border: 1px solid #B6B7BA;
 display: table-row;
    position: relative;
}

/*
.rsptable .row:nth-of-type(odd) {
 background-color: #e0e0e0;
}
*/

.rsptable .row.header {
 width: 1121px;



background: #E3E4E6;
border: 1px solid #B6B7BA;
}
    
    .pagination {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin: 0;
    justify-content: end;
}
    
    .data{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 13px;
line-height: 17px;
/* identical to box height, or 131% */


color: #424242;

opacity: 0.8;
    }

    
    span.relative.z-0.inline-flex.shadow-sm.rounded-md {
    display: flex;
    align-items: center;
    margin-left: 5%;
}
    
    .data-btn{
        width: 101px;
height: 35px;
left: 1136px;
top: 358px;
padding: 12px 0px;
background: #FFCB8D;
        border: none;
border-radius: 17.5px;
}
    
 
    
    .data-btn2{
    width: 101px;
    height: 35px;
    /*left: 1136px;
    top: 426px;*/
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 500;
    font-size: 13px;
    line-height: 17px;
/* identical to box height, or 131% */


color: #FFFFFF;

opacity: 0.8;
/* logo green 3 */

background: #6E7E1D;
border-radius: 17.5px;
        border: none;
    }
    
    .data-btn3{
        width: 101px;  
height: 35px;
left: 1136px;
 border: none;    
top: 494px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 13px;
line-height: 17px;
/* identical to box height, or 131% */


color: #FFFFFF;

opacity: 0.8;
background: #D22600;
border-radius: 17.5px;
    }
    
.rsptable .cell {
 display: table-cell;
 padding: 22px 23px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 700;
font-size: 13px;
line-height: 17px;
/* identical to box height, or 131% */

letter-spacing: 1px;
text-transform: uppercase;
text-align: center;


opacity: 0.8;
    
    
}

    .table{
        display:table;
    border-collapse: separate;
    border-spacing: 0px 7px;
    }

   .dropdown-containerr{
        position: relative;
        float: right;
    }
    

    /*.table{
        display:table;
    border-collapse:collapse;
    border-spacing: 15px;    
    }*/
    .three-dots:after {
        cursor: pointer;
        color: #444;
        content: '\2807';
        font-size: 20px;
        padding: 0 5px;
      }
      .dropdowns {
        position: absolute;
     width: 161px;
    top: 31px;
    right: -18px;
        outline: none;
        opacity: 0;
        /*z-index: -1;*/
        max-height: 0;
        background: #FFFFFF;
        border: 1px solid #B6B7BA;
         
      }
      .dropdown-containerr:focus {
        outline: none;
      }
      
      .dropdown-containerr:focus .dropdowns {
        opacity: 1;
        z-index: 100;
        max-height: 100vh;
        transition: opacity 0.2s, z-index 0.2s, max-height: 0.2s;
      }

      .dropdowns a {
        width: 83px;
        height: 16px;


        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 13px;
        line-height: 16px;
        /* identical to box height */

        letter-spacing: 0.005em;
        text-transform: capitalize;

        /* logo brown */

        color: #7B4425;
      }
      
      .dropdowns a div {
        padding: 10px;
      } 
      .btn-processing{
        width: 101px;
        height: 35px;
        left: 1136px;
        top: 358px;
        color: #000000;
        background: #FFCB8D;
        border-radius: 17.5px;
      }
</style>
<div class="container-fluid "  style="background-color: #F3F2F4;">
<div class="container" style=" height: 550px;" >
    <div class="profile-edit" style="margin-top: 20px;">
    <h3>All RFQ's</h3>
        </div>
<div class="rsptable table">
<div class="row header">
<div class="cell ">DATA CREATED</div>
<div class="cell">RFQ ID</div>
<div class="cell">PRODUCT NAME</div>
<div class="cell">QUANTITY</div>
    <div class="cell">CREATED BY</div>
    <div class="cell">BID STATUS</div>
</div> 
<?php
if((isset($rfqs)) && (count($rfqs) > 0) ){
    foreach ($rfqs as $key => $value) { ?>
        <div class="row">
            <div class="cell data">{{ date('M d, Y', strtotime($value->created_at)) }} {{ date('h:i a', strtotime($value->created_at)) }} </div>
            <div class="cell data"><a href="{{ url('/seller-rfq-details'.'/'.$value->id) }}">#{{ $value->id }}</a> </div>
            <div class="cell data">{{ $value->product}}</div>
            <div class="cell data">{{ $value->quantity }}</div>
            <div class="cell data">{{ $value->getUser->name}}</div>
            <div class="">
                <?php
                if($value->bid_status == null){ ?>
                    <button class="data-btn2 approval btn-processing" onclick="showConfirmBox()" id="{{ $value->id}}" data-id="{{ $value->user_id }}"> Processing </button>
                    <!-- <a href="{{ url('/seller-rfq-details'.'/'.$value->id) }}">
                      <i style="position: absolute; right: 2%; bottom: 36%; color: #49796D; font-size: 24px;" class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </a> -->
                    
                      <div class="dropdown-containerr" tabindex="-1">
                          <div class="three-dots"></div>
                          <div class="dropdowns">
                              <a href="{{ url('/seller-rfq-details'.'/'.$value->id) }}"><div><i class="fa-solid fa-bars"></i>&nbsp;View Details</div></a>
                          </div>
                      </div>
                
                <?php }
                else if($value->bid_status == 1){ ?>
                    <button class="data-btn2 approval  btn-approved" onclick="showConfirmBox()" id="{{ $value->id}}" data-id="{{ $value->user_id }}">Approve</button><!-- <a href="{{ url('/seller-rfq-details'.'/'.$value->id) }}"><i style="position: absolute; right: 2%; bottom: 36%; color: #49796D; font-size: 24px;" class="fa fa-ellipsis-v" aria-hidden="true"></i></a> -->
                    <div class="dropdown-containerr" tabindex="-1">
                          <div class="three-dots"></div>
                          <div class="dropdowns">
                              <a href="{{ url('/seller-rfq-details'.'/'.$value->id) }}"><div><i class="fa-solid fa-bars"></i>&nbsp;View Details</div></a>
                          </div>
                      </div>
                <?php }
                else{ ?>
                    <button class="data-btn3 approval btn-rejected" onclick="showConfirmBox()" id="{{ $value->id}}" data-id="{{ $value->user_id }}">Rejected  </button><!-- <a href="{{ url('/seller-rfq-details'.'/'.$value->id) }}"><i style="position: absolute; right: 2%; bottom: 36%; color: #49796D; font-size: 24px;" class="fa fa-ellipsis-v" aria-hidden="true"></i></a> -->
                    <div class="dropdown-containerr" tabindex="-1">
                          <div class="three-dots"></div>
                          <div class="dropdowns">
                              <a href="{{ url('/seller-rfq-details'.'/'.$value->id) }}"><div><i class="fa-solid fa-bars"></i>&nbsp;View Details</div></a>
                          </div>
                      </div>
                <?php }
                ?>
            </div>
            
        </div>
<?php
    }
}

?>
       
</div>

    {!! $rfqs->render() !!}
  <!-- <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul> -->
<!-- </nav> -->

</div>

<div class="overlay" id="overlay" hidden>
  <div class="confirm-box">
    <div onclick="closeConfirmBox()" class="close">&#10006;</div>
    <h2>Confirmation</h2>
    <p>Do you want to approve/reject this request?</p>
      <div class="my-two">
    <button class="btn btn-success" onclick="isConfirm(true)">Approve</button>
    <button class="btn btn-danger" onclick="isConfirm(false)">Reject</button>
          </div>
  </div>
</div>

@endsection

@push('js')

<script>
    var id = '';
    var user_id = '';
    function showConfirmBox() {
      document.getElementById("overlay").hidden = false;
    }
    function closeConfirmBox() {
      document.getElementById("overlay").hidden = true;
    }

    $(document).on('click', '.approval', function(e){
      id = $(this).attr('id');
      userId = $(this).attr('data-id');
    });

    function isConfirm(answer) {
      if(answer){
        let status = '1';
        $.ajax({
          url : '{{ route("seller.approve.rfq") }}',
          type : 'post',
          data : {_token:'{{ csrf_token() }}', status:status, id:id, userId:userId},
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
          url : '{{ route("seller.approve.rfq") }}',
          type : 'post',
          data : {_token:'{{ csrf_token() }}', status:status, id:id, userId:userId},
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