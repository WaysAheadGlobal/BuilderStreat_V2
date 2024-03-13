@extends('layouts.buyer-app')

@section('content')

<style>
    .card-title{
        font-family: 'Ubuntu';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 40px;
/* identical to box height, or 165% */

display: flex;
align-items: center;
letter-spacing: -0.329609px;
text-transform: capitalize;
gap: 10px;
color: #424242;

    }
    
    .card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1pxsolidrgba(0,0,0,.125);
    border-radius: 0.25rem;
    top: 19px;
}
    
    .card-subtitle{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 10.5475px;
line-height: 180%;
border-bottom: 2px dashed #7B4425;
        
/* identical to box height, or 19px */

letter-spacing: 0.0015em;
text-transform: uppercase;

/* logo green 1 */

color: #A8BC25;

    }
    
    .card-body h2{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
/* identical to box height */

text-transform: capitalize;
margin-left: 40px;
color: #B4B4B4;
    }
    
    
    .card-text{
        font-family: 'Ubuntu';
font-style: normal;
font-weight: 500;
font-size: 20px!important;
line-height: 23px;
/* identical to box height */

text-transform: capitalize;

/* logo green 3 */

color: #6E7E1D;

    }
    
    .fa-screwdriver-wrench:before, .fa-tools:before {
    content: "\f7d9";
    /* border: 1px solid black; */
    border-radius: 50%;
    padding: 5px;
    font-size: 17px;
    border: 2.42424px solid #7B4425;
    color: #6E7E1D;
} 
/*
    .card-title h5{
    font-family: 'Ubuntu';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 28px;
 identical to box height 

letter-spacing: 1px;

color: #424242;

opacity: 0.8;
    }
*/

.card-body p {
    font-size: 14px;
    margin: 8px 0 16px 25px;
}
</style>


<div class="container-fluid" style="background-color: lightgrey;">
	<div class="card" style="width: 80rem;margin-left: 5rem;margin-right: 5rem;height: 550px;">
	  <div class="card-body profile-edit">
	    <h3 class="card-title ">Wishlist</h3>
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
	    <div class="row">
            <?php 
            if((isset($deatils2)) && (count($deatils2) > 0) ){
                ?>
             @foreach($deatils2 as $detail)
	    	<div class="card" style="width: 255px;height: 450px;margin: 1rem; border: 1.1984px solid #EDEBEB;box-shadow: 0px 4.79361px 4.79361px rgba(0, 0, 0, 0.25);border-radius: 1.58002px;">
                <?php if($detail->file !=""){
                    $img = explode("|", $detail->file);
                    $image = 'images/posts/'.$img['0'];
              ?>
              <img src='{{ asset("$image") }}' style="height:px;" class="card-img-top" alt="...">
              <!-- <img src='{{ asset("$image") }}' style="height: px;" class="card-img-top" alt="..."> -->
              <?php }
             else{

             ?>
	    	  	<img src="{{ asset('images/seller/category2.png') }}" style="height: px;" class="card-img-top" alt="...">
                <?php } ?>
	    	  	<div class="card-body">
                    <div>
                    <a href="{{ url('/buyer-wishlist-remove'.'/'.$detail->id) }}">
                    <img src="{{ asset('images/seller/wishlist_icon.svg') }}" style="position: absolute;top: -4px;right: 2px;">
                </a>
	    	    	<h5 class="card-title"  style="color: maroon"><i class="fa-solid fa-screwdriver-wrench"></i> {{$detail->product_name}}</h5>
                    <h2>{{$detail->name}}<!-- United state --></h2>
	    	    	<p class="card-text">&nbsp;&nbsp;CAD{{$detail->price}}</p>
                        </div>
	    	  	</div>
	    	</div>
            @endforeach
        <?php } ?>
	    	
	    </div>

	  </div>
	</div>
</div>



@endsection