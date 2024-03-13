
@extends('layouts.app')

@section('content')

<style>
   .card1 .card-body1 {
   padding: 1rem 1rem;
   border: 1px solid #BEBEBE;
   margin-left: 30px;
   }
   .card-body1 {
   flex: 1 1 auto;
   padding: 1.25rem
   }
   p {
   font-size: 0.875rem;
   margin-bottom: .5rem;
   line-height: 1.5rem
   }
   .testi-rate{
   align-items: center;
   display: flex;
   flex-direction: row;
   gap: 40px;
   }
   h4{
   line-height: .2 !important;
   }
   .profile1{
   margin-top: 16px;
   margin-left: 11px;
   display: contents;
   }
   .profile-pic {
   width: 75px;
   transform: translate(36px,25px);
   }
   .cust-name{
   font-family: 'Ubuntu';
   font-style: normal;
   font-weight: 700;
   font-size: 16px;
   line-height: 18px;
   /* Medium Dark */
   color: #646464;
   }
   .cust-profession{
   font-family: 'Ubuntu';
   font-style: normal;
   font-weight: 400;
   font-size: 16px;
   line-height: 18px;
   padding-top: 10px;
   /* Medium */
   color: #969696;
   }
   .items {
   width: 90%;
   margin: 0px auto;
   margin-top: 100px
   }
   .testi{
    margin-top: 30px !important;
   }
</style>







<section class="testimonial">
   <div class="container">
      <div class="row testi">
         <h3>Happy Clients</h3>
         <h1>What Our Clients Says!</h1>
         <p>These are the things that clients who have our<br> Feature say</p>
      </div>
      <div class="items">
         <div class="card1">
            <div class="col-sm-12">
               <img class="profile-pic" src="https://builderstreat.ca/public/images/testi1.png">
            </div>
            <div class="card-body1"  style="height: 275px;">
               <h4 class="card-title1"></h4>
               <div class="template-demo">
                  <p>“Were super friendly and happy to answer all my questions. I highly recommend them and will use their services for my future C&D waste management requirements.”</p>
               </div>
               <hr>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="profile1">
                        <h4 class="cust-name">Sauqi Arief</h4>
                        <div class="testi-rate">
                           <!-- <p class="cust-profession">CEO Of Mabar </p> -->
                           <img class="" src="https://builderstreat.ca/public/images/rating.png">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card1">
            <div class="col-sm-12">
               <img class="profile-pic" src="https://builderstreat.ca/public/images/testi2.png">
            </div>
            <div class="card-body1"  style="height: 275px;">
               <h4 class="card-title1"></h4>
               <div class="template-demo">
                  <!-- <p>“Best service highly recommend. Best service highly recommend. I will use this service in future as well.”</p> -->
                  <p>“Builderstreat has provided our business with tremendous support in the areas of C&D waste management and optimization. They continue to work on adding value to the trading relationship.them in the future.”</p>

               </div>
               <hr>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="profile1">
                        <h4 class="cust-name">Emilia Tadashi</h4>
                     </div>
                     <div class="testi-rate">
                        <!-- <p class="cust-profession">Housewife</p> -->
                        <img class="" src="https://builderstreat.ca/public/images/rating.png">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card1" >
            <div class="col-sm-12">
               <img class="profile-pic" src="https://builderstreat.ca/public/images/testi3.png">
            </div>
            <div class="card-body1" style="height: 275px;">
               <h4 class="card-title1"></h4>
               <div class="template-demo">
                  <!-- <p>“The employee was very helpful in fulfilling my requirement .best service till date.”</p> -->
                  <p>“First-class customer service, covering a wide range of waste stream products, they are approachable and competitively priced. This company goes above and beyond the normal service levels to achieve the position of a partner we trust and rely on.”</p>

               </div>
               <hr>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="profile1">
                        <h4 class="cust-name">Faiza Mubarak</h4>
                     </div>
                     <div class="testi-rate">
                        <!-- <p class="cust-profession">Succes Man</p> -->
                        <img class="" src="https://builderstreat.ca/public/images/rating.png">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="card1">
            <div class="col-sm-12">
               <img class="profile-pic" src="https://builderstreat.ca/public/images/testi1.png">
            </div>
            <div class="card-body1">
               <h4 class="card-title1"></h4>
               <div class="template-demo">
                  <p>“Were super friendly and happy to answer all my questions. I highly recommend and use them again for any other that I might have.”</p>
               </div>
               <hr>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="profile1">
                        <h4 class="cust-name">Faiza Mubarak</h4>
                     </div>
                     <div class="testi-rate">
                        <p class="cust-profession
                           ">Succes Man</p>
                        <img class="" src="https://builderstreat.ca/public/images/rating.png">
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- <div class="card1">
            <div class="col-sm-12">
               <img class="profile-pic" src="https://builderstreat.ca/public/images/testi2.png">
            </div>
            <div class="card-body1">
               <h4 class="card-title1"></h4>
               <div class="template-demo">
                  <p>“Were super friendly and happy to answer all my questions. I highly recommend and use them again for any other that I might have.”</p>
               </div>
               <hr>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="profile1">
                        <h4 class="cust-name">Sauqi Arief</h4>
                     </div>
                     <div class="testi-rate">
                        <p class="cust-profession
                           ">CEO Of Mabar</p>
                        <img class="" src="https://builderstreat.ca/public/images/rating.png">
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
      </div>
   </div>
</section>
<script>
   $(document).ready(function(){

       $('.items').slick({
     dots: true,
     infinite: true,
     speed: 800,
    autoplay: true,
    autoplaySpeed: 2000,
     slidesToShow: 4,
     slidesToScroll: 4,
     responsive: [
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 3,
           infinite: true,
           dots: true
         }
       },
       {
         breakpoint: 600,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 2
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       }

     ]
   });
             });


</script>
@endsection