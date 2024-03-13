@extends('layouts.buyer-app')

@section('content')
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
}

/*
.rsptable .row:nth-of-type(odd) {
 background-color: #e0e0e0;
}
*/

.rsptable .row.header {
 width: 1121px;
height: 90px;


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

    
    .data-btn{
        width: 101px;
height: 35px;
left: 1136px;
top: 358px;

background: #FFCB8D;
border-radius: 17.5px;
}
    
 
    
    .data-btn2{
        width: 101px;
height: 35px;
left: 1136px;
top: 426px;
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
    }
    
    .data-btn3{
        width: 101px;
height: 35px;
left: 1136px;
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
    
    .dropdown-containerr{
        position: relative;
    }
    

    .table{
        display:table;
    border-collapse:collapse;
    border-spacing: 15px;    
    }
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
        z-index: -1;
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
        text-decoration: none;
        color: black;
      }
      
      .dropdowns a div {
        padding: 10px;
      }

    
    
</style>
<div class="container-fluid "  style="background-color: lightgrey;">
    <div class="container" style="background-color: white; height: 550px;" >
        <div class="profile-edit" style="margin-top: 20px;">
            <h3>All RFQ's</h3>
        </div>
        <div class="rsptable table">
            <div class="row header">
                <div class="cell ">DATA CREATED</div>
                <div class="cell">RFQ ID</div>
                <div class="cell">BID STATUS</div>
                <div class="cell">QUANTITY</div>
                <div class="cell">BID BY</div>
                <div class="cell"></div>
            </div> 
            <?php
            if((isset($rfqs)) && (count($rfqs) > 0) ){
                 foreach ($rfqs as $key => $value) { ?>
            <div class="row">
                <div class="cell data">{{ date('M d, Y', strtotime($value->created_at)) }} {{ date('h:i a', strtotime($value->created_at)) }} </div>
                <div class="cell data"><a href="{{url('rfq-details')}}">#{{ $value->id }}</a></div>
                <div class="cell data">
                    <?php
                    if($value->bid_status == null){ ?>
                     <button class="data-btn approval"> Hold </button>
                <?php }
                else if($value->bid_status == 1){ ?>
                    <button class="data-btn2 approval">Approved </button>
                <?php }
                else{ ?>
                    <button class="data-btn3 approval">Rejected</button>
                <?php }
                ?>
                </div>
                <div class="cell data">{{ $value->quantity }}</div>
                <div class="cell data">{{ $value->com }}</div>
                <div class="cell data">
                    <div class="dropdown-containerr" tabindex="-1">
                        <div class="three-dots"></div>
                        <div class="dropdowns">
                            <a href="{{ url('/buyer-rfq-details'.'/'.$value->id) }}"><div><i class="fa-solid fa-bars"></i>&nbsp;View Details</div></a>
                        </div>
                    </div>
            </div>
            </div> 
            <?php
             }
             }
             ?>

        </div>

<!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->

</div>


@endsection