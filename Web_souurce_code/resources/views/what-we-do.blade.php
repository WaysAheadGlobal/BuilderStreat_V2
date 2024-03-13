@extends('layouts.app')

@section('content')

<section class="content-section">
   <div class="container">
      <div class="row align-items-center">
         <!-- end col-12 -->
         <div class="col-lg-4">
            <figure class="construction-img" style=""><img src="{{ asset('images/6.png') }}" style="width: 582px;
               height: 582px;" alt="Image"></figure>
            <!-- end side-image -->
         </div>
         <!-- end col-6 -->
         <div class="col-lg-8" style="background-color:#6E7E1D;">
            <div class="side-content what-we" style="padding:90px;margin-left: 23%;
               margin-top: -29px;">
               <h5>What we do</h5>
               <h2 style="font-family: 'Ubuntu';
                  font-style: normal;
                  font-weight: 700;
                  font-size: 40px;
                  line-height: 60px;
                  /* or 150% */
                  letter-spacing: -0.5px;
                  text-transform: capitalize;
                  /* White */
                  color: #FFFFFF;">We Help You To Build <br>Something For Future</h2>
               <p style="color:#fff;">Our Digital Marketplace helps small construction sites or contractors by enabling them to use recycled or surplus resource of large construction site.</p>
               <p>Big construction companies will be able to reduce their ecological impact and overall product waste.</p>
               <p>The platform will allow customized search of resources and ability to generate request for the same as per requirements.</p>
            </div>
            <!-- end side-content -->
         </div>
         <!-- end col-6 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<section style="margin-top: 10%">
   <div class="container">
      <div class="row">
         <div class="col-md-4 offset-md-2">
            <!-- <div class="rated">
               <h2><img src="https://builderstreat.ca/public/images/recycle.svg"> Recycle  </h2>
               <p>Making waste materials re-usable by recycling them.</p>
               
               </div> -->
            <div class="rated">
               <h2><img src="https://builderstreat.ca/public/images/trade.svg"> Trade </h2>
               <p>Helping small construction sites to access customized
                  resources based on requirements.
               </p>
            </div>
            <div class="rated">
               <h2><img src="https://builderstreat.ca/public/images/knowledge.svg"> Knowledge </h2>
               <p>Knowledge/information about recycling and
                  re-usability of waste, unused materials.
               </p>
            </div>
         </div>
         <div class="col-md-6">
            <img src="https://builderstreat.ca/public/images/crane.png">
         </div>
      </div>
   </div>
</section>

@endsection
