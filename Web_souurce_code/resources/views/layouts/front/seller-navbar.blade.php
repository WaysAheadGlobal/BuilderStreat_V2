

<?php
    if(Route::currentRouteName() == "register"){
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
      <div class="site-menu ">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('what-we-do')}}">What we do</a></li>
          <li><a href="{{url('our-categories')}}">Our Categories</a></li>
             <li><a href="{{url('faq')}}">FAQ</a></li>
         
          <li><a  class="{{$class}}" href="{{url('teams')}}">Teams</a></li>
         <li><a   class="{{$class}}" href="{{url('blog')}}">Knowledge Center</a></li>
          <li><a  class="{{$class}}" href="{{url('testimonials')}}">Testimonial</a></li>
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
    <div class=" seller-nav">
      <ul>
         <li><i class="fa fa-home"></i><a href="{{ route('seller.dashboard')}}">Dashboard</a></li>
          <li><i class="fa fa-bell"></i><a href="{{ route('seller.notification') }}">Notification</a></li>
          <li><i class="fa fa-comments"></i><a href="{{url('seller-message')}}">Messages</a></li>
            <li class="">
                <div class="dropdown">
                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #000000;">
                      Profile <i class="fa fa-caret-down" aria-hidden="true" style="color:#7B4425"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="btn" href="{{ route('seller.getProfile') }}">My Profile</a>
                        <a class="btn" href="{{ route('seller.allRfq') }}">All RFQs</a>
                        <a class="btn" href="{{ route('seller.subscription.history') }}">Subscription History</a>
                        <a class="btn" href="{{ route('seller.payment') }}">Payment History</a>
                        <a class="btn" href="{{ route('seller.logout') }}">Logout</a>
                    </div>
                </div>
           </li>
      </ul>
      <ul class="ulright">
        <li class="signuptop1">
          <a style="color: white;" href="{{ route('seller.createPost') }}">Create Listing</a>
        </li>
      </ul>
      
    </div>
    <!-- end site-menu -->
    <div class="search"> <i class="lni lni-search-alt"></i> </div>
    <!-- end search -->
    
    <div class="hamburger">
      <div id="hamburger"> <span></span> <span></span> <span></span> </div>
      <div id="cross"> <span></span> <span></span> </div>
    </div>
     
</nav>
    
    
    <style>
    
    .navbar .seller-nav ul {
    display: flex;
    margin: 0;
    padding: 0;
    float: left;
    width: 100%;
    justify-content: flex-end;
    align-items: center;
    gap: 27px;
}
   .navbar .seller-nav {
    display: flex;
    margin: 0 20px;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 20px;
    text-transform: capitalize;
    
    width: 83%;
    float: right;
} 
        .dropdown-menu {
    position: absolute;
    top: 100%;
    left: -13px;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 1.125rem 0 0;
    font-size: 1rem;
    color: #6E7E1D !important;
    text-align: left;
    list-style: none;
    background-color: white;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 0.25rem;
}
        
         .signuptop a{
font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
text-transform: capitalize;
color: #FFFFFF!important;
        }
        
        
/*
      .seller-nav  a  {
          color: #7B4425!important;  
        }    
*/
        
        
        a#dropdownMenuButton1 {
    color: #000000 !important;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 20px;
    
}
        
        li.signuptop1 {
    border-radius: 4px;
    padding: 16px 11px 8px 14px !IMPORTANT;
    color: #fff!important;
    width: 192px;
    height: 56px;
    background: #6E7E1D;
    border-radius: 2px;
}
        
        
        .navbar .seller-nav ul li {
    display: inline-block;
    margin: 0 10px;
    padding: 0;
    list-style: none;
    position: relative;
    text-align: center;
    color: #7B4425!important;          
}
    
    
    </style>
    