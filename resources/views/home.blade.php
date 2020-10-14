<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name','Adilonapsh') }}</title>
        <link rel="stylesheet" href="{{ asset('css/AOStyle.css') }}">
        <script type="text/javascript" src="JS/Main.js"></script>
    </head>
    <body>                                                                                                                                                                                                                
        <div class="container1">
            <div class="nav">
                <h2>{{ config('app.name', 'Adilonapsh') }}</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    @auth
                        <li><a href="/Nodemcu">Nodemcu</a></li> 
                    @endauth 
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Elements</a></li>
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>   
                        <li><a href="{{ route('register') }}">Register</a></li>   
                    @else
                        <a href="{{ route('logout') }}" id="Users" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ Auth::user()->name }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
            <div class="Page1">
                <img src="{{ asset('Assets/Images/Profile_picture.png') }}" width="295" height="554" id="PP">
                <div class="greeting">
                    <div class="greet">
                        <h2>HI, IM ADIL IVANSYAH L</h2>
                        <h3>IM WEB DESIGNER</h3>
                        <p>Want More Information About Me </p>
                        <a href="#">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Page2">
            <div class="descs">

                <div class="desc-1">
                    <p>What Do I Best</p>
                    <h2>A website designer and android application focusing on building professional looking website. </h2>
                </div>
                <div class="desc-2">
                    <p>A Bit About Me</p>
                    <h2>Hungry, ambitious, and loves to give back by openly sharing about technology, tech maniac, and more.</h2>
                </div>
            </div>
            <img src="{{ asset('Assets/Images/Asset_2.png') }}" id="elemets1">
        </div>
        <div class="Page3">
            <div class="desc-3">
                <h1>Services</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod  </p>
            </div>
            <div class="cards1">
                <div class="card1">
                    <img src="Assets/Images/Asset_3.png" width="20" height="20">
                    <h3>Web Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
                </div>
            </div>
            <div class="cards2">
                <div class="card1">
                    <img src="Assets/Images/Asset_3.png" width="20" height="20">
                    <h3>Android Development</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
                </div>
            </div>
        </div>
        
        <div class="Page4">
            <h1>Adilonapsh</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
            <div class="line"></div>
            <div class="Menu">
                <ul>
                    <li><a href="#">Legal Information</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Data Privacy</a></li>
                    <li><a href="#">Sizing</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="Menu2">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Term Of Services</a></li>
                </ul>
            </div>
            <div class="line2"></div>
            <div class="sosmed">
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                </ul>
            </div>
        </div>
    </body>
</html>