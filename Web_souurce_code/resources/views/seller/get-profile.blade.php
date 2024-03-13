@extends('layouts.sellerApp')

@section('content')

<div class="container-fluid" style="background-color: lightgrey; ">

<div class="container" style="background-color:white; padding-bottom: 10%; height: 550px; padding-top:40px;">
    <div class="profile-edit">
    <h3> My Profile </h3>
   <a href="{{url('edit-profile')}}"> <h5>Edit<i class='fa fa-edit'></i></h5></a>
    </div>
    
    <div class="profile">
    <div class="pro-pic">
          <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png" width="172px" height="172px">
        </div>
        <div>
            <div class="pro-name">
            <h3> Name:</h3>
                <h2>{{ (isset($sellerDetails) && !empty($sellerDetails->name)) ? $sellerDetails->name : ''}}</h2>
            
            </div>
         <div class="pro-name">
            <h3>Email Id:</h3>
                <h2> {{ (isset($sellerDetails) && !empty($sellerDetails->email)) ? $sellerDetails->email : ''}}</h2>
            
            </div>
            <div class="pro-name">
            <h3>Mobile Number:</h3>
                <h2>{{ (isset($sellerDetails) && !empty($sellerDetails->phone)) ? $sellerDetails->phone : ''}}</h2>
            
            </div>
            <div class="pro-name">
                <h3>Company Name:</h3>
                <h2> {{ (isset($sellerDetails) && !empty($sellerDetails->sellerDetails->company)) ? $sellerDetails->sellerDetails->company : ''}} 
                </h2>
            </div>
            <?php
            $image = (isset($sellerDetails) && !empty($sellerDetails->sellerDetails->image)) ? $sellerDetails->sellerDetails->image : ''
            ?>
            <div class="pro-name">
                <h3>Registration Documents:</h3>
                <a style="width: 148px;height: 33.41px;font-family: 'Montserrat';font-style: normal;font-weight: 600;font-size: 11px;line-height: 13px;text-align: center;letter-spacing: 0.5px;display: flex;justify-content: center;align-items: center;margin-left: 23px;color: #FFFFFF;background: #2F80ED;border-radius: 4px;" href='{{ asset("images/seller/$image") }}' target="_blank">{{$image}}
                </a>
            </div>
        </div>
    
    </div>
<!--
    <div class="nextpro">
   <div class="pro-name">
            <h4>Company Name:</h4>
                <h5> Blue Laddder Construction </h5>
            
            </div>
        <div class="pro-name">
            <h4>Country:</h4>
                <h5> Canada </h5>
            
            </div>
    
    </div>
-->
<!--
     <div class="nextpro">
   <div class="pro-name">
            <h4>Address:</h4>
                <h5> 21 street. nagar stphen road </h5>
            
            </div>
        <div class="pro-name">
            <h4> Zip Code:</h4>
                <h5>1111111 </h5>
            
            </div>
    
    </div>
-->
<!--
     <div class="nextpro">
   
        <div class="pro-name">
            <h4> State:</h4>
                <h5>Ontorio</h5>
            
            </div>
    <div class="pro-name">
            <h4></h4>
                <h3>  </h3>
            
            </div>
    </div>
-->
    
    </div>
    
    
</div>

<style>
    .profile-edit h5{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 16px;
line-height: 17px;
/* identical to box height, or 106% */

letter-spacing: 1px;
text-decoration-line: underline;
text-transform: capitalize;

color: #6E7E1D;

opacity: 0.8;

    }



</style>


@endsection