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

<!-- <section class="testimonial">
<div class="container">
    <div class="row testi">
        <h3>Happy Clients</h3>
          <h1>What Our Clients Says!</h1>
           <p>These are the things that clients who have our<br> Feature say</p>
    
    
    </div>
    
    <div class="items">
  
 <div class="card1">
     
     <div class="col-sm-12">

                                    <img class="profile-pic" src="https://getmethat.ca/ecowaste/public/images/testi1.png">
                                    
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
                                   
                                        <div class="testi-rate"> 
                                   <p class="cust-profession">CEO Of Mabar </p> 
                                   <img class="" src="https://getmethat.ca/ecowaste/public/images/rating.png">
                                  </div>

                                    </div>
                                  
                                  
                                    
                                    
                              </div>
                              

                        </div>
                    </div>
                </div>


                <div class="card1">
                     <div class="col-sm-12">

                                   <img class="profile-pic" src="https://getmethat.ca/ecowaste/public/images/testi2.png">


                                    
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
                                      
                                      <h4 class="cust-name">Emilia Tadashi</h4>
                                    

                                    </div>
                                   <div class="testi-rate">
                                  <p class="cust-profession
">Housewife</p>    
                                   <img class="" src="https://getmethat.ca/ecowaste/public/images/rating.png">
                                  </div>  
                                    
                              </div>
                              

                        </div>
                    </div>
                </div>


                <div class="card1">
                    <div class="col-sm-12">

                                    <img class="profile-pic" src="https://getmethat.ca/ecowaste/public/images/testi3.png">
                                    
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
                                   <img class="" src="https://getmethat.ca/ecowaste/public/images/rating.png">
                                  </div>   
                                    
                              </div>
                              

                        </div>
                    </div>
                </div>


                <div class="card1">
                    <div class="col-sm-12">

                                    <img class="profile-pic" src="https://getmethat.ca/ecowaste/public/images/testi1.png">
                                    
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
                                   <img class="" src="https://getmethat.ca/ecowaste/public/images/rating.png">
                                  </div>
                                    
                              </div>
                              

                        </div>
                    </div>
                </div>


                <div class="card1">
                    <div class="col-sm-12">

                                    <img class="profile-pic" src="https://getmethat.ca/ecowaste/public/images/testi2.png">
                                    
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
                                   <img class="" src="https://getmethat.ca/ecowaste/public/images/rating.png">
                                  </div>  
                              </div>
                              

                        </div>
                    </div>
                </div>



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


</script> -->


@endsection