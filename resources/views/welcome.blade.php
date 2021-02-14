
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>L'Phi Hub</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="/css/app/.css" rel="stylesheet">
        <style>
            html, body {
               
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

     <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container">
                    <a href="{{ url('/') }}" class="navbar-brand">L'Phi</a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/portfolio') }}">Portfolio and Services</a>
                        </li>
                    </ul>

                    <div class="justify-content-right">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


                    </div>
                </div>
                </nav>

        <div class="container">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                    
                             <div id="slider1" class="carousel slide mt-5" data-ride="carouel">
                                     <!-- Indicator for the Slider -->
                                     <ol class="carousel-indicators">
                                     <li class="active" data-target="#slider1" data-slide-to="0"></li>
                                     <li data-target="#slider1" data-slide-to="1"></li>
                                     <li data-target="#slider1" data-slide-to="2"></li>
                                     </ol>

                                        <!-- Carousel Slider -->
                                <div class="carousel-inner" role="listbox">

                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" alt="first slide" src="/svg/image-20151123-18264-j336wc.jpg">
                                        <div class="carousel-caption d-none d-md-block">
                                                        <h3>Just for You</h3>
                                                        <p>We're here just to solve you problem</p>
                                                    </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" alt="second slide" src="/svg/screen-2.jpg">
                                        <div class="carousel-caption d-none d-md-block">
                                                        <h3>Yes, We can</h3>
                                                        <p>Dream it, believe because together, we can!</p>
                                                    </div>
                                    </div>
                                    <div class="carousel-item">
                                         <img class="d-block img-fluid" alt="third slide" src="/svg/hacker-with-anonymous-mask_23-2147985387.jpg">
                                         <div class="carousel-caption d-none d-md-block">
                                                        <h3>Ahead of Minds</h3>
                                                        <p>Always ahead to achieve itS</p>
                                                    </div>
                                    </div>
                    
                                </div>
                                         <!-- Carousel Slide Control -->
                                    <a href="#slider1" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                     <span class="sr-only">Previous</span>
                                    </a>
                                    <a href="#slider1" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>

                                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             
    </body>
    
    <script src="/js/app.js"> </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>
