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
  <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset("js/aos.js") }}"></script>

</head>
<body>
  <div class="navs p-0 fixed-top wow">
    <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand nav-brand-style">Adilonapsh</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- menu kiri -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <!-- menu kanan -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item nav-link-style"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item nav-link-style"><a href="/dashboard" class="nav-link">Dashboard</a></li>
                    <li class="nav-item nav-link-style"><a href="#" class="nav-link">Nodemcu</a></li>
                    <li class="nav-item nav-link-style"><a href="#" class="nav-link">Blog</a></li>
                    @guest
                        <li class="nav-item nav-link-style"><a href="{{ route('login') }} " class="nav-link">Login</a></li>   
                        <li class="nav-item nav-link-style"><a href="{{ route('register') }}" class="nav-link">Register</a></li>   
                    @else
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown nav-link" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
  <div class="container-fluid p-0 bg-1">
    <div class="vh-100">
      <div class="container">
        <div class="row vh-100">
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
  <div class="container-fluid bg-2 p-5" id="about">
    <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-12 text-center"  data-aos="fade-up" data-aos-delay="100"><h3>About Us</h3></div>
    </div>
    <div class="row justify-content-center text-justify">
      <div class="col-lg-5">
        <p data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda neque placeat, labore atque dignissimos dolorum nobis asperiores molestias repellat aperiam saepe culpa rem voluptatum vitae debitis quis iure quae aut omnis similique, odio illum consequatur quam. Vero optio repellat fugi?</p>
        <p data-aos="fade-up" data-aos-delay="300"><i class="fad fa-check-double"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p data-aos="fade-up" data-aos-delay="400"><i class="fad fa-check-double"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p data-aos="fade-up" data-aos-delay="500"><i class="fad fa-check-double"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="col-lg-5">
        <p data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda neque placeat, labore atque dignissimos dolorum nobis asperiores molestias repellat aperiam saepe culpa </p>
        <a href="#" class="btn-get-started buttons shadow pt-2" data-aos="fade-up" data-aos-delay="500">Learn More</a>
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
        <div class="col-lg-4 pl-5 pt-lg-5">
          <h3 data-aos="fade-left" data-aos-delay="200">Lorem, ipsum dolor.</h3>
          <p data-aos="fade-left" data-aos-delay="300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus impedit placeat, quos saepe facilis soluta ex! Cupiditate non modi dicta, minima, excepturi dolor ex tenetur sapiente nobis quia iste. Enim.</p>
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