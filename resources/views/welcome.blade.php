<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<body>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->

                @if (Route::has('login'))

                    <div class="navbar navbar-expand-md navbar-light navbar-laravel">
                        @auth

                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </div>

                @endif
            </ul>
        </div>
    </div>
</nav>


@include('includes.header')
<div class="container" mb-10 style="font-family: sans-serif;">
    <H1>Certified Pre-Owned Cars! Honda, Toyota and Ford!</H1>

    <h5>We will help you find the right Certified Pre-Owned car for you. Please explore our site and reach us @ 2038327980</h5>
    <br/>
    <br/>
    <div class="carouselsize">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <h3>Mark Automobiles Photo Gallery</h3>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                         src="https://www.ford.com/content/dam/vdm_ford/live/en_us/ford/nameplate/ecosport/2018/collections/_360/Canyon%20Ridge/ecosport_17_canyon_ridge_1.jpg"
                         alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                         src="https://di-uploads-pod3.dealerinspire.com/westmichiganhonda/uploads/2017/07/01-2018-Honda-Fit-Exterior-Front-Angle-Passenger-Side-1024x516.jpg"
                         alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                         src="https://icdn-1.motor1.com/images/mgl/QVV6Z/s3/2018-toyota-hilux-facelift.jpg"
                         alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @include('includes.footer')
    </div>
</div>

</body>
</html>
