@extends('layouts.app')

@section('content')
<style>
margin-left: -14%;
   }
   .rated p{
   width: 361px;
   font-family: 'Montserrat';
   font-style: normal;
   font-weight: 400;
   font-size: 16px;
   line-height: 180%;
   letter-spacing: 0.0015em;
   color: #646464;
   margin-left: 20px;
   }
   .rated h2{
   font-family: 'Ubuntu';
   font-style: normal;
   font-weight: 700;
   font-size: 40px;
   line-height: 60px;
   /* identical to box height, or 150% */
   letter-spacing: -0.5px;
   text-transform: capitalize;
   margin-left: -21%;
   color: #000000;
   }
</style>
<section class="content-section cate-sec white-space-bottom" data-background="" style="">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title text-left category ">
               <h5>OUR CATEGORIES</h5>
               <h2>Most Popular Categories</h2>
               <h6> C&D Waste </h6>
            </div>
            <!-- end section-title -->
         </div>
         <!-- end col-7 -->
         <!-- end col-5 -->
         <div class="col-lg-4">
            <div class="step-box">
               <figure class="image"><img src="{{ asset('images/card - 2.png') }}" alt="Image"></figure>
               <!-- end content -->
            </div>
            <!-- end step-box -->
         </div>
         <!-- end col-4 -->
         <div class="col-lg-4">
            <div class="step-box">
               <figure class="image"><img src="{{ asset('images/card - 3.png') }}" alt="Image"></figure>
               <!-- end content -->
            </div>
            <!-- end step-box -->
         </div>
         <!-- end col-4 -->
         <div class="col-lg-4">
            <div class="step-box">
               <figure class="image"><img src="{{ asset('images/card - 4.png') }}" alt="Image"></figure>
               <!-- end content -->
            </div>
            <!-- end step-box -->
         </div>
         <!-- end col-4 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>



@endsection