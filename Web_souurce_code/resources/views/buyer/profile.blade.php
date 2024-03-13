@extends('layouts.buyer-app')

@section('content')
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
    .pro-pic{
        top: -30px;
    }



</style>

<div class="container-fluid" style="background-color: lightgrey; ">
    <div class="container" style="background-color:white; padding-bottom: 10%; height: 550px; padding-top:40px;">
        <div class="profile-edit">
            <h3> My Profile </h3>

            <a href="{{route('buyer.edit.Profile')}}"> <h5>Edit<i class='fa fa-edit'></i></h5></a>
        </div>
        <div class="profile">
            <div class="pro-pic">
                <?php if(isset($detail) && ($detail->image)){
                    ?>
    
                <img class="profile-pic" src="{{asset('images/users').'/'.$detail->image}}" width="172px" height="172px">
                <?php }
             else{

             ?>
             <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png" width="172px" height="172px">
             <?php } ?>
            </div>
            <div>

                <div class="pro-name">
                    <h3> Name:</h3>
                    <h2>{{$result->name}}</h2>
                </div>
                <div class="pro-name">
                    <h3>Email Id:</h3>
                    <h2>{{$result->email}}</h2>
                </div>
                <div class="pro-name">
                    <h3>Mobile Number:</h3>
                    <h2>{{$result->phone}}</h2>
                </div>
            </div>
        </div>
        <br>
        <div style="float:left;margin-left: 150px;">
            <div class="pro-name">
            <h3>Company Name:</h3>
                <h2>{{(isset($detail) && ($detail->company_name)) ? $detail->company_name : 'N/A'}}</h2>
            
            </div>
         <div class="pro-name">
            <h3>Address:</h3>
            <h2>{{(isset($detail) && ($detail->address)) ? $detail->address : 'N/A'}}</h2>
                
            
            </div>
            <div class="pro-name">
            <h3>State:</h3>
            <h2>{{(isset($detail) && ($detail->state)) ? $detail->state : 'N/A'}}</h2>
              
            
            </div>
         
        
        </div>
        <div style="float:right;margin-right: 150px;">
            <div class="pro-name">
            <h3>Country:</h3>
                <h2>{{(isset($detail) && ($detail->country)) ? $detail->country : 'N/A'}}</h2>
            
            </div>
         <div class="pro-name">
            <h3>Zip code:</h3>
                <h2>{{(isset($detail) && ($detail->zipcode)) ? $detail->zipcode : 'N/A'}}</h2>
            
            </div>
         
        
        </div>
    </div>
</div>




@endsection