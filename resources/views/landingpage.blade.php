<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Adilonapsh</title>
  <link rel="stylesheet" href="{{ asset("css/Style.css") }}">
  <link rel="stylesheet" href="{{ asset("css/aos.css") }}">
  <link rel="stylesheet" href="{{ asset("plugins/fontawesome5pro/css/all.css") }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset("js/aos.js") }}"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>

</head>
<body>
  <div class="navs p-0 fixed-top wow">
    <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand nav-brand-style">Adilonapsh</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- menu kiri -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <!-- menu kanan -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item nav-link-style"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    @auth
                      <li class="nav-item nav-link-style"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                      <li class="nav-item nav-link-style"><a href="{{ route('viewcctv') }}" class="nav-link">CCTV</a></li>  
                      <li class="nav-item nav-link-style"><a href="{{ route('nodemcu') }}" class="nav-link">Nodemcu</a></li>
                    @endauth
                    {{-- <li class="nav-item nav-link-style"><a href="#" class="nav-link">Blog</a></li> --}}
                    @guest
                        <li class="nav-item nav-link-style"><a href="{{ route('login') }} " class="nav-link">Login</a></li>   
                        <li class="nav-item nav-link-style"><a href="{{ route('register') }}" class="nav-link">Register</a></li>   
                    @else
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown nav-link" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('viewprofile') }}">
                          Profile
                          </a>
                          <a class="dropdown-item" href="#"onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          Logout 
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
      </div>
  </div>
  <div class="container-fluid bg-1 mb-5 px-5 ">
    <div class="mb-md-5">
      <div class="container">
        <div class="row vh-100 ">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
            <h1 data-aos="fade-up" data-aos-delay="500">Better Solutions For Your Business</h1>
            <h4 data-aos="fade-up" data-aos-delay="700">We are team of talanted designers making websites with Bootstrap</h4>
            <div class="mt-4 mb-4 d-lg-flex">
              <a href="#about" class="btn-get-started scrollto buttons shadow" data-aos="fade-up" data-aos-delay="800">Get Started</a>
              {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> --}}
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
            <img src="{{ asset("img/hero-img.png") }}" class="img-fluid animated">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-2 p-5 pb-sm-5" id="about">
    <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-12 text-center"  data-aos="fade-up" data-aos-delay="100"><h3>About Us</h3></div>
    </div>
    <div class="row justify-content-center text-justify">
      <div class="col-lg-5">
        <p data-aos="fade-up" data-aos-delay="200"> {{ config("app.name") }} is easy to set up, maintain, and scale, no matter how many locations you have. It can easily cope with any number of cameras. Whether you’re setting up a few cameras in a small store or several thousand in a major retail chain, {{ config('app.name') }} has your needs covered. You will get :</p>
        <p data-aos="fade-up" data-aos-delay="300"><i class="fad fa-check-double"></i>  Apps built on a single platform.</p>
        <p data-aos="fade-up" data-aos-delay="400"><i class="fad fa-check-double"></i>  Multilevel system redundancy.</p>
        <p data-aos="fade-up" data-aos-delay="500"><i class="fad fa-check-double"></i>  Hybrid system for data storage.</p>
      </div>
      <div class="col-lg-5">
        <p data-aos="fade-up" data-aos-delay="100">You enjoy the practically unlimited computing power. Our data centres can cope even with the most complex video analysis algorithms.</p>
        <a href="#kelebihan" class="btn-get-started buttons shadow pt-2" data-aos="fade-up" data-aos-delay="500">Learn More</a>
      </div>
    </div>
  </div>
</div>
  <div class="container-fluid bg-1 p-5" id="kelebihan">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex align-items-center mb-5">
          <img src="{{ asset("img/counts-img.svg") }}" class="img-fluid img-size-64" alt="" data-aos="fade-right" data-aos-delay="200">
        </div>
        <div class="col-lg-6 pl-5 pt-lg-2">
          <h3 data-aos="fade-left" data-aos-delay="200">Protecting The Everyday</h3>
          <p data-aos="fade-left" data-aos-delay="300">
            At {{ config("app.name") }}, we believe that, in order to create and maintain thriving public spaces, groups, including urban planners, city managers, security experts, enterprise executives, and community leaders, must work together to achieve true public safety. And a cornerstone of this open and collaborative approach is the development and implementation of multipurpose technology.
            Forward-thinking technology can provide a platform that facilitates communication and collaboration to improve public safety and support the advancement of the city and its interests. Our tools and solutions extend beyond physical security to contribute to the betterment of the daily lives of citizens.
            </p>
        </div>
      </div> 
    </div>
  </div>
  <div class="container-fluid bg-2 p-5" >
    <div class="container pb-3">
      <div class="row">
        <div class="col-lg-5 mb-4">
          {{-- <img id="logo" src="{{ asset('img/logo.png') }}" class="mb-4 img-fluid" width="80px" alt=""> --}}
          <h2 data-aos="fade-right" data-aos-delay="100">{{ config("app.name") }}</h2>
          <p data-aos="fade-right" data-aos-delay="200">Security Computing</p>
        </div>
        <div class="col-lg-3 mb-4">
          <ul class="p-0">
            <h4 class="" data-aos="fade-right" data-aos-delay="300">Product</h4> 
            {{-- <li class="link" data-aos="fade-right" data-aos-delay="400"><a href="#" class="nav-item text-white">Blog</a></li> --}}
            <li class="link" data-aos="fade-right" data-aos-delay="450"><a href="#" class="nav-item text-white">FAQ</a></li>
            <li class="link" data-aos="fade-right" data-aos-delay="500"><a href="#" class="nav-item text-white">Contact Us</a></li>
            <li class="link" data-aos="fade-right" data-aos-delay="550"><a href="https://play.google.com/store/apps/details?id=com.pas.webcam&hl=in&gl=US" class="nav-item text-white">Download</a></li>
          </ul>
        </div>
        <div class="col-lg-4 mb-4" >
          <h4 class="" data-aos="fade-right" data-aos-delay="300">Location</h4> 
          <iframe data-aos="fade-right" data-aos-delay="550" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4059.9686962210258!2d106.82069798278758!3d-6.594422766277874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x786770860af257c5!2sRealsoft%20Media%20Labs!5e0!3m2!1sid!2sid!4v1613453127783!5m2!1sid!2sid" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <p data-aos="fade-right" data-aos-delay="550">KPP IPB Baranang Siang 4 Blok B No 65, RT.03/RW.10, Tanah Baru, North Bogor, Bogor City, West Java 16154</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-2 p-2 d-flex d-md-none d-lg-block">
    <hr class="bg-white w-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          &copy {{ config("app.name") }} 2020
        </div>
        <div class="col-sm-4">
          <p class="text-right">
            All rights reserved
          </p>
        </div>
      </div>
    </div>
  </div>
  <script>
    function aos_init() {
    AOS.init({
      duration: 1000,
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });
  </script>
</body>
</html>