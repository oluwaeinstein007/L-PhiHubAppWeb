
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
                background-color: #fff;
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


   
            <div class="content">
                <div class="title m-b-md">
                 Contacts
                    
                </div>
                
                    <a href="tel:{08057322330}">Call Us</a>


                   <div class="card justify-content-center col-sm-8 m-auto rounded">
                       <div class="card-body" id>
                       <form method="post" action="{{route('email')}}" enctype="multipart/form-data">
                 @csrf
                 
                 <div class="form-group">
                 <label for="">Email</label>
                 <input type="email" class="form-control" name="from_mail" id="from_mail" placeholder="Enter Your Email">
                   <label for="subject">Subject</label>
                 <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                 </div>
                  <div class="form-group">
                   <label for="">Email</label>
                 <textarea type="text" class="form-control" name="content" id="video_descrip" placeholder="Email Content"></textarea>
                 </div>
         
               <button class="r btn btn-danger rounded-pill float-right" name="send_email" type="submit">Send Email</button>
                </form>
                       </div>
                  
                   </div>

                <div id="map"></div>
            </div>
    </body>
    
    <script src="/js/app.js"> </script>
</html>
