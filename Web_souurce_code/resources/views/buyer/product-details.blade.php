@extends('layouts.buyer-app')

@section('content')
<style>
.discount{
    padding: 10px;
    margin-left:10px ;
    background-color: #FAFF00; 
    /*border: solid black 1px;*/
    border-radius: 20px;
    font-family: 'Inter';
   font-style: normal;
   font-weight: 500;
   font-size: 16.2446px;
   line-height: 23px;
   text-align: center;
   color: #000000;
}
.profile{
padding-right: 5px;
background: #A8BC25;
opacity: 0.5;
border-radius: 1501.6px;



}
.title{
padding: 10px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
text-transform: capitalize;
color: #B4B4B4;
}

@keyframes fade {
  from {opacity: .9} 
  to {opacity: 1}

}
.font-input{
font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 28px;
letter-spacing: 0.005em;
text-transform: capitalize;
color: #424242;
opacity: 0.8;
}
.card-title{
font-family: 'Ubuntu';
font-style: normal;
font-weight: 500;
font-size: 34.4828px;
line-height: 40px;

text-transform: capitalize;

color: #7B4425;
}
.nego{
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
text-transform: capitalize;
color: #B4B4B4;
padding: 10px;
}
.titles{
   padding: 10px;
   margin-left:10px ;
   margin-right:10px ;
   margin-bottom: 10px;
   background: #A8BC25;
   opacity: 0.5;
   border-radius: 1501.6px;
   font-family: 'Inter';
  font-style: normal;
   font-weight: 500;
font-size: 16.2446px;
line-height: 23px;
/* identical to box height, or 143% */

text-align: center;

color: #000000; 
}
.chat{
    border: 1px solid #6e840b;
     padding: 10px 20px;
     margin-left:10px ;
   margin-right:10px ;
   margin-bottom: 10px;
   font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 14px;
line-height: 180%;
/* or 25px */


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
    
    .discount{
        background: #FAFF00;
border-radius: 2320.65px;
        width: 121px;
        height: 34px;
        font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 16.2446px;
line-height: 28px;
/* identical to box height, or 143% */

text-align: center;
margin-right: 12px;
color: #000000;

    }
    
    .card-title1{
        font-family: 'Ubuntu';
font-style: normal;
font-weight: 700;
font-size: 27.48px;
line-height: 32px;
/* identical to box height */

text-transform: capitalize;
margin-right: 12px;
/* logo green 3 */

color: #6E7E1D;

    }
    .save-post{
     background-color: #6E7E1D;
        color: white !important;
        padding: 10px 20px;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500!important;
font-size: 11.541px;
line-height: 180%;

}
    
</style>

<div class="container-fluid" style="background-color: lightgrey;">
    <div class="container" style="background-color:white; padding-bottom: 10%; padding-top:40px;position: relative;
    top: 19px;">
        <div class="profile-edit">
            <h3>Product Details</h3>
        </div>
          <div class="panel panel-default">
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div> @endif
        </div>
        <div class="row">
            <div class="col-md-3"> 
                <?php if($detail->file !=""){
                        $img = explode("|", $detail->file);
                        $image = 'images/posts/'.$img['0'];
                        ?>
                        <img class="profile-pic" src='{{ asset("$image") }}' width="250px;">
                        <?php }else{?>
                <img class="profile-pic" src="{{ asset('images/buyer/Rectangle 16.png') }}" width="250px;">
                <?php } ?>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title"  style="color: maroon"><i class="fa-solid fa-screwdriver-wrench"></i> {{$detail->product_name}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"style="display:flex">
                        <p class="title">{{$result->name}}</p>
                        <a style=" "href="#" class="titles"><i class="fa fa-eye" aria-hidden="true"></i> View profile</a> 
                        <!-- <a style=" "href="#" class="profile"><i class="fa fa-eye" aria-hidden="true"></i> View profile</a> --> 
                        <a class="chat" href="{{ url('/buyer-seller-chat'.'/'.$result->id) }}"><i class="fa-solid fas fa-comment-dots"></i> Chat</a>
                        <?php if($detail->bid != null){ ?>
                            <a class="chat" onclick="myFunction()" href="#">Bid</a>
                         <?php } ?>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10" style="display:flex">
                       <h3 class="card-title1"  style="color:#6e840b">CAD 1000</h3>
                       <a style=" "href="#" class="discount">{{$detail->discount}}%Discount</a>  
                       <a style=" "href="#" class="discount">{{$detail->offer}}%Offer</a>
                       <h6 class="nego">Negotiable</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="font-input">Brand Name:</label>
                        <input class="font-input" type="text" value="{{$detail->brand_name}}" readonly > 
                    </div>
                    <div class="col-md-4">
                        <label class="font-input">Model Number:</label>
                        <input class="font-input" type="text" value="{{$detail->modal_number}}" readonly> 
                    </div>
                    <div class="col-md-4">
                        <label class="font-input">Serial number:</label>
                        <input class="font-input" type="text" value="{{$detail->serial_number}}" readonly > 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="font-input">Free pickup material :</label>
                        <input class="font-input" type="text" value="{{$detail->pick_up_facility}}" readonly> 
                    </div>
                    <div class="col-md-4">
                        <label class="font-input">Condition of material:</label>
                        <input class="font-input" type="text" value="{{$detail->condtion_of_material}}" readonly > 
                    </div>
                    <div class="col-md-4">
                        <label class="font-input">Availability:</label>
                        <input class="font-input" type="text"  value="{{$detail->availabilite_date}}" readonly> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="font-input">Source:</label>
                        <input class="font-input" type="text" value="{{$detail->sources}}" readonly> 
                    </div>
                    <div class="col-md-4">
                        <label class="font-input">Hours of operations :</label>
                        <input class="font-input" type="text" value="{{$detail->hours_of_operations}}" readonly> 
                    </div>
                    <div class="col-md-4">
                        <label class="font-input">providing transport:</label>
                        <input class="font-input" type="text" value="{{$detail->providing_transport}}" readonly > 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="font-input">Cost of transportation:</label>
                        <input class="font-input" type="text" value="{{$detail->price}}" readonly>  
                    </div>
                    <div class="col-md-8" id="myDIV" style="display:none">
                        <form action="{{ route('buyer.buyer-bid-price') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input class="font-input" name="product_id" type="text" value="{{$detail->id}}" style="display:none">
                            <input class="font-input" name="seller_id" type="text" value="{{$result->id}}" style="display:none">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="font-input">Bid Price:</label>
                                    <input class="font-input" name="bid_price" type="text" value="">  
                                </div>
                                <div class="col-md-4">
                                    <div class="botto-btn"style="margin-top: 28%;">
                                        <button type="submit" style=" width: 122px; height: 44px;display: flex;justify-content: center; background: #6e840b;padding: 10px 20px;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #FFFFFF;"class="btn btn-primary log-in" style="color: white;">Save
                                        </button>
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
    </script>


@endpush