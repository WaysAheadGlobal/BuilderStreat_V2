@extends('layouts.sellerApp')

@section('content')

<div class="container-fluid" style="background-color: lightgrey;   ">
<form action="{{ route('seller.update.profile') }}" method="post" enctype="multipart/form-data">
  @csrf
<div class="container" style="background-color:white; padding-bottom: 10%; padding-top:40px;position: relative;
    top: 19px;
    width: 60%;">
    <div class="profile-edit1">
      <input type="hidden" name="dId" value="{{ (isset($sellerDetails) && !empty($sellerDetails->sellerDetails->id)) ? $sellerDetails->sellerDetails->id : '' }}">
    <h3>Edit Profile </h3>
<!--   <a> <h5>Edit<i class='fa fa-edit'></i></h5></a>-->
    </div>
    
    <div class="profile1">
    <div class="pro-pic1">
          <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png" width="172px;">
        <a href="#" style="background-color: #6e840b;
    color: white;
    width: 122px;
    height: 44px;
     font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 11.541px;
line-height: 180%;
/* identical to box height, or 21px */
display: flex;
margin-left: 24px;                           
    justify-content: center;
    align-items: center;

color: #FFFFFF;

                      
    border-radius: 10px;"> Update Profile Pic</a>
        </div>
        <div style="margin-left: 2%;">
            <div class="pro-name1">
            <label> Full Name</label>
                <input class="my-input" type="text" id="name" name="name" placeholder="john cena" value="{{ (isset($sellerDetails) && !empty($sellerDetails->name)) ? $sellerDetails->name : ''}}">
            
            </div>
         <div class="pro-name1">
           <label> Email Id</label>
              <input class="my-input" type="email" id="email" name="email" placeholder="john cena@gmail.com" value="{{ (isset($sellerDetails) && !empty($sellerDetails->email)) ? $sellerDetails->email : ''}}">
            
            </div>
            <div class="pro-name1">
                <label>Mobile Number</label>
           <input class="my-input"  type="text" placeholder="+ 91 99999999" style=" width: 417px;" id="phone" name="phone" value="{{ (isset($sellerDetails) && !empty($sellerDetails->phone)) ? $sellerDetails->phone : ''}}" >
                
            
            </div>
            <div class="nextpro12">
            <div class="">
              <label>Company Name</label>
              <input class="my-input1" type="text" id="company" name="company" placeholder="Blue Laddder Construction" value="{{ (isset($sellerDetails) && !empty($sellerDetails->sellerDetails->company)) ? $sellerDetails->sellerDetails->company : ''}}">
            </div>
            <?php
            $image = (isset($sellerDetails) && !empty($sellerDetails->sellerDetails->image)) ? $sellerDetails->sellerDetails->image : ''
            ?>
            <div class=" " style="position: relative;left: -89px;top: 7px;">
              <label>Registration Documents:</label>
              <a class="my-input1" style="background: #999B9D; width: 148px; height: 33px; border-radius: 8px; color: white; padding: 10px;" href='{{ asset("images/seller/$image") }}' target="_blank">{{ $image }}</a>
            
            </div>
         </div>
        
        </div>
    
    
    </div>
    <div class="nextpro">
   <div class="pro-name1">
            <label> Choose Country</label>
        <select class="my-input1" id='country_select' name='country' >
               <option value="AF">Canada</option>
	<option value="AX">Åland Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
       </select>      
            </div>
        <div class="pro-name1">
            <label> State</label>
        <!-- <select class="my-input1" id='country_select' name='State'>
               <option value="AF">Ontorio</option>
	<option value="AX">Åland Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
       </select>  --> 
       <select class="my-input1" id='country_select' name='state'>
                         <option value="">select state</option>
                        <option value="Alberta">Alberta</option>
                        <option value="British Columbia">British Columbia</option>
                        <option value="Manitoba">jaipur</option>
                        <option value="New Brunswick">New Brunswick</option>
                        <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                        <option value="Northwest Territories">Northwest Territories</option>
                        <option value="Nova Scotia">Nova Scotia</option>
                        <option value="Nunavut">Nunavut</option>
                        <option value="Ontario">Ontario</option>
                        <option value="Prince Edward Island">Prince Edward Island</option>
                        <option value="Quebec">Quebec</option>
                        <option value="Saskatchewan">Saskatchewan</option>
                        <option value="Yukon">Yukon</option>
                    </select>    
            
            </div>
    
    </div>
     <div class="nextpro">
   <div class="pro-name1">
       <label>Address:</label>
              <input class="my-input1" type="text"  placeholder="21 street, Near. steaphen road" > 
            
            </div>
        <div class="pro-name1">
         <label> Zip Code</label>
              <input class="my-input1" type="text" placeholder="L0H 9Z9">
            
            </div>
    
    </div>
    
      
<!--
     <div class="nextpro">
   
        <div class="pro-name">
            <h4> State:</h4>
                <h3>Ontorio</h3>
            
            </div>
    <div class="pro-name">
            <h4></h4>
                <h3>  </h3>
            
            </div>
    </div>
-->
     <div class="botto-btn">
    
    <a style=" width: 122px;height: 44px;display: flex; justify-content: center;align-items: center; border: 1px solid #6e840b; padding: 10px 20pxfont-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #6E7E1D;" href="#"> Delete account</a>
      <input type="submit" name="update" value="Save" style=" width: 122px; height: 44px;display: flex;
    justify-content: center; background: #6e840b;padding: 10px 20px;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #FFFFFF;">
        <!-- <a href="#" style=" width: 122px; height: 44px;display: flex;
    justify-content: center; background: #6e840b;padding: 10px 20px;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 11.541px;line-height: 180%;color: #FFFFFF;"> Save</a> -->
    
    
    </div>
    </div>
 </form>
</div>

<style>
    .my-input{
        width: 515px !important;
        height: 49px !important;
        opacity: 0.5;
        border: 1px solid #6E7E1D;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 28px;
/* identical to box height, or 200% */

letter-spacing: 0.005em;

color: #424242;

    }
    
    .my-input1{
        width: 331px !important;
        height: 49px !important;
        opacity: 0.5;
        border: 1px solid #6E7E1D;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 28px;
/* identical to box height, or 200% */

letter-spacing: 0.005em;

color: #424242;

    }

</style>
@endsection