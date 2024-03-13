@extends('layouts.buyer-app')

@section('content')
<style type="text/css">
    h3.heading {
    background: #E3E4E6;
    width: 400px;
    height: 50px;
    border: 1px solid #B6B7BA;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 17px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #333537;
    opacity: 0.8;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding-left: 18px;
}
    p {
    padding: 10px 10px;
    font-family: 'Ubuntu';
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 23px;
    text-transform: capitalize;
    color: #333537;
}
    
    .price-input{
        display: flex;
    gap: 23px;
    }
    
    .btn-sub{
        background-color: #6e840b;
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    margin: 10px 82% 20px 0px;
    margin: 1px 76% 20px;
    display: flex;
    width: 25%;    
        
    }
</style>
<div class="container-fluid" style="background-color: lightgrey; height:  ">

<div class="container" style="background-color:white; padding-bottom: 10%;  padding-top:40px;">

    <div class="col-lg-12">
         <div class="profile-edit" style="margin-top: 10px;margin-bottom: 20px;">
        <h3> RFQs ID #{{$rfq->id}} </h3>
        </div>
        <div class="row">
            
            <div class="col-md-6">
                <h3 class="heading">Contact Information</h3>
                    <p>Name: {{$user->name}}</p>
                    <p>Email Id:  {{$user->email}}</p>
                    <p>Mobile Number: {{$user->phone}}</p>

                 <h3 class="heading">Shipping Address</h3>
                    <p>Name:{{$detail->user_name}}</p>
                     <p>Company Name: {{$detail->company_name}}</p>
                     <p>Country: {{$detail->country}}</p>
                     <p>Address: {{$detail->address}}</p>
                    <p>State: {{$detail->state}}</p>
                    <p>Zip Code: {{$detail->zipcode}}</p>
             
            </div>

            <div class="col-md-6">
                <h3 class="heading">Product Information</h3>
                <p>Name:  {{$rfq->product}}</p>
                <p>Condition of Material: {{$rfq->condition_of_materials}}</p>
                <p>Quantity: {{$rfq->quantity}} Unit</p>
                <h3 class="heading">Other Details </h3>
                <p>Shipping Preferences: {{$rfq->shipping_reference}}</p>
                <p>Pick up Facility: {{$rfq->pickup_faculty}}</p>
                <p>Additional Details:{{$rfq->additional_details}}</p>
                <h3 class="heading">Pricing
Details</h3>
               <label>Price in CAD {{$post->price}}</label>
                <div class=" price-input">
                <input type="text" placeholder="CAD 0">
                <input type="text" placeholder="CAD 1000">
                </div>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Negotiable</label>
                <div class=""><a href="#"  class="btn-sub"type="button">Submit Bid</a></div>
            </div>
            

<!--            <div class="col-md-6">&nbsp;</div>-->
            

        </div>

    </div>    
    
</div>

    
</div>
@endsection