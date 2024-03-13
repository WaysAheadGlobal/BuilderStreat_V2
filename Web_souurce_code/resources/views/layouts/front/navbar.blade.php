<?php
    if((Route::currentRouteName() == "home") || (Route::currentRouteName() == "buyer.register") || (Route::currentRouteName() == "seller.register") ){
        $class="white-nav";
    } else{
        $class=""; 
    }

?> 


<aside class="side-widget">
  <div class="inner">
    <div class="logo"> <a href="index-2.html"><img src="{{ asset('images/logo.png') }}" alt="Image"></a> </div>
    <!-- end logo -->
    <div class="hide-mobile">
      <p>Extremity direction existence as dashwoods do up. Securing <u>marianne led</u> welcomed offended but offering six raptures. </p>
      <figure class="gallery"><img src="images/slide02.jpg" alt="Image"><img src="{{ asset('images/slide03.jpg') }}" alt="Image"></figure>
      <h6 class="widget-title">ADDRESS</h6>
      <address class="address">
      <p>228 Cardigan Road, Leeds<br>
        Geneva Switzerland</p>
      <p>+1 (850) 344 0 66 #20</p>
      </address>
      <h6 class="widget-title">FOLLOW US</h6>
      <ul class="social-media">
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
      </ul>
    </div>
    <!-- end hide-mobile -->
    <div class="show-mobile">
      <div class="languages">
        <ul>
          <li><a href="#">en</a></li>
          <li><a href="#">ru</a></li>
        </ul>
      </div>
      <!-- end languages -->
      <div class="site-menu">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('what-we-do')}}">What we do</a></li>
          <li><a href="{{url('our-categories')}}">Our Categories</a></li>
            <li><a href="{{url('faq')}}">FAQ</a></li>
         
          <li><a class="{{$class}}" href="{{url('teams')}}">Teams</a></li>
             <li><a class="{{$class}}" href="{{url('blog')}}">Knowledge Center</a></li>
          
          <li><a class="{{$class}}" href="{{url('testimonials')}}">Testimonial</a></li>
        </ul>
      </div>
      <!-- end site-menu --> 
    </div>
    <!-- end show-mobile --> 
    <!--<small>© 2020 Consto | Industrial Construction Company</small>--> </div>
  <!-- end inner --> 
</aside>
<!-- end side-widget -->

<nav class="navbar">
  <div class="container">
    <div class="logo"> <a href="{{url('/')}}"><img src="{{ asset('images/new-logo.png') }}" alt="Image"></a> </div>
    <!-- end logo -->
    
    <!-- end languages -->
    <div class="site-menu">
      <ul>
         <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('what-we-do')}}">What we do</a></li>
          <li><a href="{{url('our-categories')}}">Our Categories</a></li>
           <li><a href="{{url('faq')}}">FAQ</a></li>
         
          <li><a class="{{$class}}" href="{{url('teams')}}">Teams</a></li>
          <li><a class="{{$class}}" href="{{url('blog')}}">Knowledge Center</a></li>
          <li><a class="{{$class}}" href="{{url('testimonials')}}">Testimonial</a></li>
      </ul>
      <ul class="ulright">
         <li class="signuptop"><!-- <a href="#">Login / Register</a> -->
           
          <div class="dropdown">
          <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login / Register <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="btn-buyer" href="{{url('buyer-registration')}}">Buyer</a>
            <a class="btn-seller" href="{{url('seller-registration')}}">Seller</a>
            
          </div>
        </div>

         </li>
          <!-- <li class="buyer"><a href="#">Buyer</a></li>
          <li class="buyer"><a href="#">Seller</a></li> -->
      </ul>
      
    </div>
    <!-- end site-menu -->
    <div class="search"> <i class="lni lni-search-alt"></i> </div>
    <!-- end search -->
    
    <div class="hamburger">
      <div id="hamburger"> <span></span> <span></span> <span></span> </div>
      <div id="cross"> <span></span> <span></span> </div>
    </div>
    <!-- end hamburger --> 
    <!-- end hamburher --> 
   <!-- <a href="#sales-specialist-form" class="navbar-button" data-fancybox><i class="lni lni-mobile"></i> <span>SALES SPECIALIST</span></a>--> </div>
  <!-- end container --> 
</nav>