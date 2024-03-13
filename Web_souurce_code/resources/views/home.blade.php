@extends('layouts.app')
@section('content')
<div class="slider white-space-bottom">
   <div class="container">
      <div class="swiper-container slider-content">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="inner">
                  <p class="digi">A digital marketplace enabling match making for
                     recycled or ready to be disposed Construction
                     & Demolition (C&D) material
                  </p>
                  <!--            <p class="innerptop">CONSTRUCTION SPECIALIST</p>-->
                  <h2>We Help To Construct Your Dream In Life</h2>
                  <p class="pbottom">Turn C&D waste material into resources</p>
                  <!-- <a href="#">EXPLORE FLATS <i class="lni lni-arrow-right"></i></a>-->
                  <p><a class="qt">Get a Quote</a> <a class="tr scrollLink" href="#about_us">Track</a></p>
               </div>
               <!-- end inner -->
            </div>
         </div>
         <!-- end swiper-wrapper -->
         <!--<div class="controls">
            <div class="swiper-pagination"></div>

            <div class="button-prev"><i class="lni lni-arrow-left"></i></div>

            <div class="button-next"><i class="lni lni-arrow-right"></i></div>

            </div>-->
         <!-- end controls -->
      </div>
      <!-- end slider-content -->
      <div class="swiper-container slider-main">
         <div class="swiper-wrapper">
            <div class="swiper">
               <div class="slide-image">
                  <video src="https://builderstreat.ca/public/images/new-video.mp4" width="100%" loop autoplay controls>
                  </video>
                  <img src="https://builderstreat.ca/public/images/start-video.svg" style="z-index: 99999;
                     position: absolute;
                     top: 47%;
                     left: 52%;
                     }">
               </div>
            </div>
         </div>
         <!-- end swiper-wrapper -->
         <!--<div class="header-box"> <img src="images/23.png" class="img-responsive"> </div>-->
         <!-- end header-box -->
      </div>
      <!-- end slider-main -->
   </div>
   <!-- end container -->
</div>
<!-- end slider -->
<!-- end section-note -->
<!-- end content-section -->
<section id="about_us" class="content-section1 no-spacing" style="background-color: #323232;margin-bottom: 100px !IMPORTANT;">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-12">
            <div class="section-title">
               <!-- <h6>OUR HISTORY</h6>
                  <h2>Quality & Passion With<br>
                    Our Services</h2>-->
            </div>
            <!-- end section-title -->
         </div>
         <!-- end col-12 -->
         <div class="col-lg-4">
            <figure class="side-image" ><img src="{{ asset('images/buil-about.png') }}" alt="Image"></figure>
            <!-- end side-image -->
         </div>
         <!-- end col-6 -->
         <div class="col-lg-5 offset-col-md-3" >
            <div class="side-content">
               <h5 style="color:#fff;">About Us</h5>
               <p class ="" style="color:#fff;padding-right:5px;">Our Platform helps companies turn C&D waster
                  material into resources and thus into revenue with
                  our innovation digital marketplace enabling match
                  making for recycled or ready to be disposed C&D
                  material, thereby promoting sustainable construction
                  activity in Canada.
               </p>
            </div>
            <!-- end side-content -->
         </div>
         <!-- end col-6 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<section class="content-section no-spacing">
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
<style>
   .icon-small h2{
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
<section class="content-section know-sec">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title text-left text-blog" style="text-align:center !Important;">
               <h1>Knowledge center about our various
                  C&D waste projects
               </h1>
            </div>
            <!-- end section-title -->
         </div>
         <div class="col-lg-3">
            <div class="step-box">
               <figure class="image"><img src="{{ asset('images/4.png') }}" alt="Image"></figure>
               <!-- end content -->
               <!-- <h3>New Design Concept & Idea</h3>
                  <small>Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill</small> <a href="#"></a> -->
               <h3>White Papers</h3>
               <small>In-depth research papers highlighting the environmental impact of C&D waste and the benefits of recycling and re-using such materials.</small> <a href="#"></a>
            </div>
            <!-- end icon-content -->
         </div>
         <!-- end col-4 -->
         <div class="col-lg-3">
            <div class="step-box">
               <figure class="image"><img src="{{ asset('images/5.png') }}" alt="Image"></figure>
               <!-- end content -->
               <!-- <h3>Biggest Construction Design</h3>
                  <small>Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill</small> <a href="#"></a> -->
               <h3>Blog Posts</h3>
               <small>Updated blog posts discussing various topics related to C&D waste management, recycling techniques, innovative uses of recycled materials in construction, and success stories of businesses implementing sustainable practices.</small> <a href="#"></a>
            </div>
            <!-- end icon-content -->
         </div>
         <!-- end col-4 -->
         <div class="col-lg-3">
            <div class="step-box">
               <figure class="image"><img src="{{ asset('images/7.png') }}" alt="Image"></figure>
               <!-- end content -->
               <!-- <h3>Steel construction design concept</h3>
                  <small>Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill</small> <a href="#"></a> -->
               <h3>Information Workshops</h3>
               <small>Workshops or webinars to provide interactive learning experiences for users. Sessions will cover topics such as C&D waste segregation, recycling technologies, regulatory guidelines, and sustainable construction practices.</small> <a href="#"></a>
            </div>
            <!-- end icon-content -->
         </div>
         <div class="col-lg-3">
            <div class="step-box">
               <figure class="image"><img src="{{ asset('images/8.jpg') }}" alt="Image"></figure>
               <!-- end content -->
               <!-- <h3>Steel construction design concept</h3>
                  <small>Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill</small> <a href="#"></a> -->
               <h3>User Testimonials</h3>
               <small>Testimonials from businesses and individuals who have successfully incorporated C&D waste recycling and re-use into their construction projects.</small> <a href="#"></a>
            </div>
            <!-- end icon-content -->
         </div>
         <!-- end col-4 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<style type="text/css">
   #main {
   margin: 50px 0;
   }
   #main #faq .card {
   margin-bottom: 30px;
   border: 0;
   }
   .faq h1{
   font-family: 'Ubuntu';
   font-style: normal;
   font-weight: 700;
   font-size: 36px;
   line-height: 39px;
   /* or 108% */
   font-feature-settings: 'pnum' on, 'lnum' on;
   color: #1B3138;
   padding-top: 6%;
   }
   #main #faq .card .card-header {
   border: 0;
   -webkit-box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
   box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
   border-radius: 2px;
   padding: 0;
   }
   #main #faq .card .card-header .btn-header-link {
   color: #fff;
   display: block;
   text-align: left;
   /*  background: #FFE472;*/
   color: #222;
   padding: 20px;
   }
   #main #faq .card .card-header .btn-header-link:after {
   content: "\f107";
   font-family: 'Font Awesome 5 Free';
   font-weight: 900;
   float: right;
   }
   #main #faq .card .card-header .btn-header-link.collapsed {
   background: #A541BB;
   color: #fff;
   }
   #main #faq .card .card-header .btn-header-link.collapsed:after {
   content: "\f106";
   }
   #main #faq .card .collapsing {
   /*  background: #FFE472;*/
   line-height: 30px;
   }
   #main #faq .card .collapse {
   border: 0;
   }
   #main #faq .card .collapse.show {
   /*  background: #FFE472;*/
   line-height: 30px;
   color: #222;
   }
   .accordion .card .card-header a {
   width: 100%;
   float: left;
   height: 104px;
   display: flex;
   align-items: center;
   padding: 23px 20px;
   gap: 91px;
   font-family: 'Montserrat';
   font-style: normal;
   font-weight: 700;
   font-size: 16px;
   line-height: 22px;
   /* identical to box height, or 138% */
   font-feature-settings: 'pnum' on, 'lnum' on;
   /* Text/Title Text */
   color: #333333;
   border-bottom: 4px solid #eaebee;
   background: white;
   }
   .btn{text-align: left;}
</style>
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
</style>
<style>
   .button {
   font-size: 1em;
   padding: 10px;
   color: #fff;
   background-color: #6E7E1D;
   /* border: 2px solid #06D85F; */
   /* border-radius: 20px/50px; */
   text-decoration: none;
   cursor: pointer;
   transition: all 0.3s ease-out;
   }
   .button:hover {
   /* background: #06D85F; */
   text-decoration: none;
   box-shadow: 0 20px 20px #000;
   }
   .overlay {
   position: fixed;
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
   background: rgba(0, 0, 0, 0.7);
   transition: opacity 500ms;
   visibility: hidden;
   opacity: 0;
   }
   .overlay:target {
   visibility: visible;
   opacity: 1;
   }
   .popup {
   margin: 70px auto;
   padding: 20px;
   background: #fff;
   border-radius: 5px;
   width: 30%;
   position: relative;
   transition: all 5s ease-in-out;
   }
   .popup h2 {
   margin-top: 0;
   color: #333;
   font-family: Tahoma, Arial, sans-serif;
   }
   .popup .close {
   position: absolute;
   top: 20px;
   right: 30px;
   transition: all 200ms;
   font-size: 30px;
   font-weight: bold;
   text-decoration: none;
   color: #333;
   }
   .popup .close:hover {
   color: #06D85F;
   }
   .popup .content {
   max-height: 30%;
   overflow: auto;
   }
   @media screen and (max-width: 700px){
   .box{
   width: 70%;
   }
   .popup{
   width: 70%;
   }
   }
</style>
<section class="our-team">
   <h1 style="color:#0b0b0b;"> Our Team </h1>
   <p> Best and quality team members</p>
   <div class="container">
      <div class="team-member">
         <div class="team">
            <img src="{{ asset('images/javaid.jpg') }}" alt="Image" height="297">
            <h5>Mr. Javaid Latif</h5>
            <h6>Co-Founder & CEO</h6>
            <!-- <a class="button" href="#popup1">Know More</a> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Know More
            </button>
         </div>
         <div class="team">
            <img src="{{ asset('images/usman.jpg') }}" alt="Image" height="297">
            <h5>Mr. Usman Rasheed Lone</h5>
            <h6>Co-Founder & COO</h6>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
            Know More
            </button>
         </div>
         <div class="team">
            <img src="{{ asset('images/kasif.jpg') }}" alt="Image" height="297">
            <h5>Mr. Kashif Faisal</h5>
            <h6>Co-Founder & CFO</h6>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
            Know More
            </button>
         </div>
      </div>
   </div>
</section>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">About Me</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <ul>
               <li>30 years of entrepreneurial experience in construction and real estate development</li>
               <li>Professionally trained as a civil engineer</li>
               <li>Focused on overall company operations, executive networking for Business Development, and pursuing more sustainable practices for materials and processes at M/S DeeCon and BuildersTreat</li>
            </ul>
         </div>
         <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button> -->
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">About Me</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <ul>
               <li>3 decades of experience in operations, sales, and retail banking across multiple companies and continents</li>
               <li>Over 20 years in senior management roles, leading the national launch for multiple companies, managing operations and initial growth strategies</li>
               <li>Bachelor of Business Admin from City University, NY</li>
            </ul>
         </div>
         <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button> -->
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">About Me</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <ul>
               <li>Over 25 years experience in Financial Operations in the Construction and Banking industries.</li>
               <li>Specializing in financial oversight and review, IT platform implementations, government/regulatory compliance, and staff management/training.</li>
               <li>Certified Chartered Management Accountant, with a Bachelor and Master’s in Commerce.</li>
               <li>Leading all financial management and IT dev team communications at BuildersTreat. </li>
            </ul>
         </div>
         <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button> -->
         </div>
      </div>
   </div>
</div>
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
                           <p class="cust-profession">CEO Of Mabar </p>
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
                  <!-- <p>“If it can’t be reduced, reused, repaired, rebuilt, refurbished, refinished, resold, recycled, or composted, then it should be restricted, designed or removed from production.”</p> -->
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
                  <!-- <p>“Recycling, packaging, businesses are changing all of those things because that’s what consumers want.We are living on this planet as if we had another one to go to.”</p> -->
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
<section class="content-section" style="background:  #F8F9FA;">
   <div class="container">
      <div class="row">
         <div class="col-lg-2">&nbsp;</div>
         <div class="col-lg-8">
            <div class="section-title text-left faq" style="text-align:center !Important;">
               <h1>Frequently Asked Questions</h1>
            </div>
            <div class="accordion" id="faq">
               <div class="card">
                  <div class="card-header" id="faqhead1">
                     <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                        aria-expanded="true" aria-controls="faq1">1. What is Construction and Demolition Waste? <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  </div>
                  <div id="faq1" class="collapse " aria-labelledby="faqhead1" data-parent="#faq">
                     <div class="card-body">
                        Construction and demolition (C&D) waste is generated from construction, renovation, repair, and demolition of houses, large building structures, roads, bridges, piers, and dams. C&D waste is made up of wood, steel, concrete, gypsum, masonry, plaster, metal, and asphalt. C&D waste is notable because it can contain hazardous materials such as asbestos and lead. Estimates vary, but a commonly accepted estimate is that between 15% and 20% of municipal solid waste comes from construction and demolition projects.
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="faqhead2">
                     <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                        aria-expanded="true" aria-controls="faq2">2. What are type of waste, legal classification and examples ?<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  </div>
                  <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                     <div class="card-body">
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th width="25%">Type of Waste </th>
                                 <th width="35%">Legal Classification<br> In Connecticut</th>
                                 <th width="40%">Examples </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Landclearing debris</td>
                                 <td>Bulky waste</td>
                                 <td>Tree stumps, tree tops </td>
                              </tr>
                              <tr>
                                 <td>Demolition waste (from buildings) </td>
                                 <td>Bulky waste</td>
                                 <td>Concrete, wood, brick, plaster, roofing materials, wallboard, metals, carpeting, insulation</td>
                              </tr>
                              <tr>
                                 <td>Construction waste (from buildings)</td>
                                 <td>Municipal solid waste</td>
                                 <td>Pallets, wood scraps, wallboard, siding and roofing scraps, packaging, carpeting. Foam padding, insulation</td>
                              </tr>
                              <tr>
                                 <td>Highway construction and demolition waste</td>
                                 <td>Bulky waste, municipal solid waste</td>
                                 <td>Asphalt, concrete, steel, related construction and demolition wastes, utility poles, railroad ties, brick, block, rock</td>
                              </tr>
                              <tr>
                                 <td>Oversized MSW</td>
                                 <td>Municipal Solid Waste</td>
                                 <td>Furniture, furnishings, carpeting, rugs</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="faqhead3">
                     <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                        aria-expanded="true" aria-controls="faq3">3. Why Recycle C&D waste?<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  </div>
                  <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                     <div class="card-body">
                        Recycling construction and demolition (C&D) waste is beneficial for the environment and the construction industry. It conserves natural resources, reduces waste sent to landfills, and saves energy and carbon emissions. By recycling C&D waste, we can minimize the need for new raw materials, alleviate strain on landfill capacity, and contribute to mitigating climate change. Moreover, recycling can lead to cost savings, job creation, and improved environmental image for businesses. Overall, recycling C&D waste promotes sustainability, reduces environmental impact, and contributes to a more circular and efficient construction industry.
                     </div>
                  </div>
               </div>
               <!--<div class="card">
                  <div class="card-header" id="faqhead4">
                      <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                      aria-expanded="true" aria-controls="faq4">3. Why Recycle ?<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  </div>

                  <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                      <div class="card-body">
                      Recycling is the process of creating new products from used materials. When a product has reached the end of its useful life, it can be remanufactured into the same type or different type of product. Glass bottles can become bottles or jars; plastic jugs can become carpet or clothing; steel from an empty soup can might once have been part of a car; our roadways might have glass or asphalt roofing shingles in the pavement.
                      <br></br>
                      Recycling is an important part of managing solid waste to help reduce the use of raw materials, reduce air and water pollution, reduce energy consumption and lower greenhouse gas emissions which contribute to climate change.

                      </div>
                  </div>
                  </div>
                  <div class="card">
                  <div class="card-header" id="faqhead5">
                      <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                      aria-expanded="true" aria-controls="faq5">5. Loreum Ipsum is simply text of the printing and type setting industry?<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  </div>

                  <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                      <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                          moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                          Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                          shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                          proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                          aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                  </div>
                  </div> -->
            </div>
         </div>
         <div class="col-lg-2">&nbsp;</div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end footer-bar -->
<script>
   $(document).ready(function() {
       $(".scrollLink").click(function(event) {
           event.preventDefault();
           $("html, body").animate({
               scrollTop: $($(this).attr("href")).offset().top
             }, 500);
         });
     });
</script>
@endsection