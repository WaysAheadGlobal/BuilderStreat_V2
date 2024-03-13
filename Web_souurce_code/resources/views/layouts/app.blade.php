<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('images/logo.png') }}" rel="icon" type="image/png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="{{ asset('nucleo/css/nucleo.css') }}" rel="stylesheet">
        <link href="{{ asset('@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/argon.css?v=1.0.0') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->
        <link href="{{ asset('css/lineicons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/odometer.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fancybox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/buyer.css') }}" rel="stylesheet">
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VYG9MR4ZB7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VYG9MR4ZB7');
</script>
    </head>
    <body class="{{ $class ?? '' }}">
        <div class=""></div>
            <!-- end first-transition -->
            <div class=""></div>
            <!-- end page-transition -->
            <div class="search-box">
              <div class="inner">
                <form>
                  <input type="search" placeholder="Tyhe here to search">
                  <input type="submit" value="SEARCH">
                </form>
              </div>
            </div>
            <!-- end search-box -->
             @include('layouts.front.navbar')

        @include('flash-message')
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        @endauth

        <div class="main-content">

            @yield('content')
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

           @include('layouts.front.footer')

            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('js/swiper.min.js') }}"></script>
            <script src="{{ asset('js/fancybox.min.js') }}"></script>
            <script src="{{ asset('js/odometer.min.js') }}"></script>
            <script src="{{ asset('js/isotope.min.js') }}"></script>
            <script src="{{ asset('js/scripts.js') }}"></script>
            <script src="{{ asset('js/buyer.js') }}"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stack('js')

        <!-- Argon JS -->
        <!-- <script src="{{ asset('js/argon.js?v=1.0.0') }}"></script> -->

        <script>
        $(document).ready(function(){
//      $('.center-slider').slick({
//        slidesToShow: 3,
//        slidesToScroll: 1,
//        centerMode: true,
//        arrows: true,
//        dots: false,
//        speed: 300,
////        centerPadding: '20px',
//        infinite: true,
//        autoplaySpeed: 5000,
//        autoplay: true
//      });

        $('.my-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,


 });




//
//            $('.center-slider').slick({
//    dots: true,
//    infinite: true,
//    speed: 300,
//    slidesToShow: 3,
//    centerMode: true,
//
// });
 });

      </script>

        <script>

  $(document).ready(function(){

    $('.items').slick({
  dots: true,
  arrows:false,
  infinite: true,
  speed: 800,
 autoplay: true,
 autoplaySpeed: 2000,
  slidesToShow: 3,
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



    </body>
</html>