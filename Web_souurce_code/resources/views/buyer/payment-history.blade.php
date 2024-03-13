@extends('layouts.buyer-app')

@section('content')
<style>

.rsptable {
    color: #616161;
    display: table;
    margin: 18px 0 1em 51px;
    width: 84%;
    /* background: #EFEFEF; */
/*    box-shadow: 0px -1px 4px rgb(0 0 0 / 25%);*/
    border-radius: 5px;
}

.rsptable .row {
height: 62px;
left: 170px;
top: 321px;

background: #FFFFFF;
box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
border-radius: 5px;
  display: table-row;
}

.rsptable .row:nth-of-type(odd) {
 background-color: #e0e0e0;
}

.rsptable .header {
 background: #EFEFEF;
height: 48px;    
box-shadow: 0px -1px 4px rgba(0, 0, 0, 0.25);
border-radius: 5px;
    font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 32px;
/* identical to box height */

text-transform: uppercase;

/* logo brown */

color: #7B4425;
}
    
    .pagination {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin: 0;
    justify-content: end;
}

.rsptable .cell {
    display: table-cell;
    padding: 6px 12px;
    text-align: center;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 44px;
    letter-spacing: 0.005em;
    text-transform: capitalize;
    
}


</style>
<div class="container-fluid "  style="background-color: lightgrey;">
    <style>

.rsptable {
    color: #616161;
    display: table;
    margin: 18px 0 1em 51px;
    width: 84%;
    /* background: #EFEFEF; */
/*    box-shadow: 0px -1px 4px rgb(0 0 0 / 25%);*/
    border-radius: 5px;
}

.rsptable .row {
height: 62px;
left: 170px;
top: 321px;

background: #FFFFFF;
box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
border-radius: 5px;
  display: table-row;
}

.rsptable .row:nth-of-type(odd) {
 background-color: #e0e0e0;
}

.rsptable .header {
 background: #EFEFEF;
height: 48px;    
box-shadow: 0px -1px 4px rgba(0, 0, 0, 0.25);
border-radius: 5px;
    font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 32px;
/* identical to box height */

text-transform: uppercase;

/* logo brown */

color: #7B4425;
}
    
    .pagination {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin: 0;
    justify-content: end;
}

.rsptable .cell {
    display: table-cell;
    padding: 6px 12px;
    text-align: center;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    line-height: 44px;
    letter-spacing: 0.005em;
    text-transform: capitalize;
    
}


</style>
<div class="container" style="background-color: white; height: 550px;" >
    <div class="profile-edit" style="margin-top: 20px;">
    <h3>Payment History</h3>
    <!-- <a style="border: 1px solid #6e840b; padding: 10px 20px" href="#">Create RFQ</a> -->
     
        </div>

   <div class="rsptable">
<div class="row header">
<div class="cell">S.NO</div>
<div class="cell">COMPANY NAME</div>
<div class="cell">CATEGORY</div>
<div class="cell">PAYMENT MODE</div>
<div class="cell">AMOUNT</div>
</div> 
<br>
    
  <div class="row">
    <?php $i = 0 ?>
    @foreach($results as $result)
    <?php $i++ ?>
<div class="cell">{{ $i}}</div>
<div class="cell">{{(isset($result2) && ($result2->company_name)) ? $result2->company_name : ''}} </div>
<div class="cell">{{ $result->plan_validity}}</div>
<div class="cell">{{ $result->card_type}}</div>
<div class="cell">CAD {{ $result->price}}</div>
@endforeach
</div>  
    </div>

<!--
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
-->

</div>

@endsection