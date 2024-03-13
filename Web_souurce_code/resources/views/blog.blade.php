@extends('layouts.app')

@section('content')
<!--
<section class="content-section white-space-bottom" data-background="#f7f6f1" style="background: rgb(247, 246, 241);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-left">
          <h5>OUR CATEGORIES</h5>
          <h2>Most Populular Categories</h2>
        </div>
-->
        <!-- end section-title -->
<!--      </div>-->
      <!-- end col-7 -->

      <!-- end col-5 -->
<!--
      <div class="col-lg-4">
        <div class="step-box">
          <figure class="image"><img src="{{ asset('images/1.png') }}" alt="Image"></figure>

-->
          <!-- end content -->
<!--        </div>-->
        <!-- end step-box -->
<!--      </div>-->
      <!-- end col-4 -->
<!--
      <div class="col-lg-4">
        <div class="step-box">
          <figure class="image"><img src="{{ asset('images/2.png') }}" alt="Image"></figure>
-->

          <!-- end content -->
<!--        </div>-->
        <!-- end step-box -->
<!--      </div>-->
      <!-- end col-4 -->
<!--
      <div class="col-lg-4">
        <div class="step-box">
          <figure class="image"><img src="{{ asset('images/3.png') }}" alt="Image"></figure>
-->

          <!-- end content -->
<!--        </div>-->
        <!-- end step-box -->
<!--      </div>-->
      <!-- end col-4 -->
<!--    </div>-->
    <!-- end row -->
<!--  </div>-->
  <!-- end container -->
<!--</section>-->
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

<style>

.know-sec {
    padding-top: 20px;
    padding-bottom: 10%;
}

</style>




@endsection