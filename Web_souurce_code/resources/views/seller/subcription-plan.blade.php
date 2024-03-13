@extends('layouts.sellerApp')

@section('content')

<section class="subcription-sec">

<div class="container">
    <div class="box">

    <h1>Choose Best plan that suit your <br> business needs <span></span></h1>
        <div class="my-bor"></div>
    <div class="price-card">
        <?php
        if((isset($plans)) && (count($plans) > 0) ){
            foreach ($plans as $key => $value) { ?>
                <div class="sub-card">
                    <div class="membership-detail">
                  <img src="{{asset('images/badge.png')}}">
                    <h4> {{ ($value->name) ? $value->name : ''}}</h4>
                   <h2>Success Fees : {{ ($value->success_fee) ? $value->success_fee : ''}} on Total Trade Value </h2>
                    <?php
                    $array = explode(',', $value->features);
                    foreach ($array as $key => $values) { ?>
                        <h3>{{ $values }}</h3>
                    <?php
                    }
                    ?>
                        </div>

                    <div class="sub-price">

                        <h1>CAD {{ $value->price}}/User/Month</h1>
                        <a href="{{  route('seller.payments',$value->id) }}"> Get started</a>

                    </div>
                </div>
        <?php
            }
        }
        ?>
<!--
         <div class="sub-card">
            <div class="membership-detail">
          <img src="https://getmethat.ca/ecowaste/public/images/badge.png">
            <h4> Basic</h4>
           <h2>Success Fees : 0.75% on Total Trade Value </h2>
                <h3>Company Profile Page</h3>
                <h5>Escrow Payments</h5>
                <h6>Verification</h6>
                </div>

            <div class="sub-price">

                <h1>CAD 15.99/User/Month</h1>
                <a href="#"> Get started</a>

            </div>
        </div>
-->

        <!-- <div class="sub-card">
            <div class="membership-detail">
          <img src="https://getmethat.ca/ecowaste/public/images/badge.png">
            <h4> PRO</h4>
           <h2>Success Fees : 0.5% on Total Trade Value</h2>
                <h3>All Basic Membership Features</h3>
                <h5>Alerts</h5>
                <h6>Ratings and Reviews</h6>
                </div>

            <div class="sub-price">

                <h1>CAD 25.99/User/Month</h1>
                <a href="#"> Get started</a>

            </div>
        </div> -->
    </div>

        <div class="sub-btns">

   <a class="back-to" href="#"> Back To Home</a>
     <a class="continue-btn" href="#"> Continue</a>


    </div>


    </div>




</div>

</section>


@endsection


<style>

    .subcription-sec{
        background:  linear-gradient( rgba(0,0,0,.5), rgba(0,0,0,.5) ),
                       url(https://getmethat.ca/ecowaste/public/images/sub-banner.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100vh;

    }

    .box{
        width: 100%;
        height: 700px;
        background: white;
        border-radius: 8px;
        position: relative;
    top: 20px;
    }

    .box h1{
        font-family: 'Ubuntu';
font-style: normal;
font-weight: 700;
font-size: 32px;
line-height: 52px;
margin-top: 20px;
text-align: center;
letter-spacing: 0.2px;
padding-top: 20px;
color: #1B1D21;
padding-bottom: 42px;

    }


   .sub-card {
    top: 21%;
    background: url(https://builderstreat.ca/public/images/sub-card.png);
    height: 400px;
    background-repeat: no-repeat;
    /* display: flex; */

    left: 27%;
    width: 270px;
    padding: 23px;
}

    .price-card{
    display: flex;
    justify-content: center;
    gap: 40px;
    }
    .membership-detail h4{
        font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 12.9907px;
line-height: 16px;
/* identical to box height */

letter-spacing: 0.108256px;

color: #1B1D21;
    }

    .membership-detail h2{
        font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 10.5112px;
line-height: 18px;
/* or 171% */

letter-spacing: 0.13139px;

color: #5D6B6F;

    }

    .membership-detail h3{
        font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 10.5112px;
line-height: 18px;
/* identical to box height, or 171% */

letter-spacing: 0.13139px;

color: #5D6B6F;
    }

    .membership-detail h5{
        font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 10.5112px;
line-height: 18px;
/* or 171% */

letter-spacing: 0.13139px;

color: #5D6B6F;
    }

    .membership-detail h6{
        font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 10.5112px;
line-height: 18px;
/* or 171% */

letter-spacing: 0.13139px;

color: #5D6B6F;
    }

    .sub-price h1{
        width: 230px;
height: 46px;

font-family: 'Poppins';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 45px;
/* or 225% */


/* logo brown */

color: #7B4425;

    }

    .sub-btns{
        display: flex;
        justify-content: center;
        gap:32px;
        margin-top: 41px;

        }



    .continue-btn{
        width: 169px;
height: 61px;
padding:  16px 32px 16px 32px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 180%;
        text-align: center;
/* identical to box height, or 29px */


color: #FFFFFF;
background: #6E7E1D;
border-radius: 2px;
    }

    .sub-price{
        display: flex;
    flex-direction: column;
    gap: 30px;
    }

    .sub-price a{
        padding: 20px 20px;
        background: white;
        font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 13.5144px;
line-height: 16px;
text-align: center;
letter-spacing: 0.16893px;
border: 1.5px solid #6E7E1D;
border-radius: 2px;
        height: 42.04472732543945px;
width: 222.23641967773438px;
display: flex;
    align-items: center;
    justify-content: center;
/* logo green 3 */

color: #6E7E1D;

    }


    .back-to{

height: 61px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 180%;
/* identical to box height, or 29px */


color: #6E7E1D;
padding: 16px 32px 16px 32px;
border: 1.5px solid #6E7E1D;
border-radius: 2px;
    }

    .my-bor {
    width: 100px;
    height: 0px;

    border: 1px dashed #7B4425;
    display: flex;
    justify-content: center;
    flex-direction: row;
    position: absolute;
    top: 20%;
    left: 45%;
}

</style>