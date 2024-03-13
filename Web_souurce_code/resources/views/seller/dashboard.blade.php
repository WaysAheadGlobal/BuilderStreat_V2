@extends('layouts.sellerApp')

@section('content')
<div class="container-fluid" style="background-color: lightgrey;">
	<div class="card" style="width: 80rem;margin-left: 5rem;margin-right: 5rem;height: 550px;">
	  <div class="card-body">
	    <h5 class="card-title">Listed Items</h5>
	    <h6 class="card-subtitle mb-2 ">C&D Waste Materials</h6>
	    <div class="row">
	    	<?php
	    	if((isset($posts)) && (count($posts) > 0 )){
	    		$image = '';
	    		foreach ($posts as $key => $value) { 
	    			if($value->file){
	    				$img = explode("|", $value->file);
	    				$image = 'images/posts/'.$img['0'];
	    			}else{
	    				$image = 'images/seller/category1.png';
	    			}
	    	?>
			    	<div class="card" style="width: 17rem;margin: 1rem; border: 1.1984px solid #EDEBEB;
					box-shadow: 0px 4.79361px 4.79361px rgba(0, 0, 0, 0.25);border-radius: 1.58002px;">
			    	  	<img src='{{ asset("$image") }}' class="card-img-top" alt="...">
			    	  	<div class="card-body">
			    	    	<h5 class="card-title"  style="color:maroon"> <i class="fa-solid fa-screwdriver-wrench"></i> {{ ($value->product_name) ? $value->product_name : ''}}</h5>
			    	    	<p class="card-text">&nbsp;&nbsp;CAD {{ ($value->price) ? $value->price : ''}}</p>
			    	  	</div>
			    	</div>
			<?php
	    		} ?>
	    </div>
	    	<?php
	    }else{ ?>
    		<div class="card" style="width: 30rem;margin: 1rem; border: 1.1984px solid #EDEBEB;
					box-shadow: 0px 4.79361px 4.79361px rgba(0, 0, 0, 0.25);border-radius: 1.58002px;margin-left: 25rem;margin-top: 10rem;">
    			<span style="color: red;text-align: center;">No list items found</span>
    		</div>
    	<?php
    	}
    	?>
	    	
	   

	  </div>
	</div>
</div>


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


</style>

@endsection