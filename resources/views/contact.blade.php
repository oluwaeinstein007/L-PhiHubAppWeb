
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
                    <br>

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

                    <img id="icon" data-toggle="tooltip" data-placement="top" title="Click me to change color theme" src="/svg/Moon.svg" alt="">
                </div>
            @endif


                    </div>
                </div>
                </nav>
<br>

             <div>
             <img class="justify-content-right top-left" src="/svg/Profile.svg" alt="">
             
             </div>
             <div class="justify-content-left">
             
             </div>

            <div class="content">
                <div class="title m-b-md">
                 Contacts
                    
                </div>

                

                <br>
                <img src="/svg/Social.svg" alt="Social Media">
                <p>Whether you are interested to do business with me, want to chat or hang out with me, I’m happy to talk to you, my prefered way of contacts are WhatsApp and Email</p>
                <br>
                <p>Feel free to check out my social media presence below to get to know me better.</p>
                

                    
            <br>
            <div id="map"></div>
            <section class="location">
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8977152248194!2d3.2814459!3d6.534600499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8fa32398c311%3A0x2cc35b43c9141ba6!2s18%20Jamiu%20Raji%20St%2C%20Egbe%2C%20Lagos!5e0!3m2!1sen!2sng!4v1616770518121!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </section>
            <br>
          

                   




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
            <br>
            <br>

                    <div>
                    <footer>
                        <a class="conIcon" href="tel:{08057322330}"><img src="/svg/Phone.svg" alt="Call Us"></a>
                        <a class="conIcon" href="sms:{08057322330}?body={content}"><img src="/svg/sms.svg" alt="SMS Us"></a>
                        <a class="conIcon" href="mailto:{slanre26@gmail.com}?subject={subject}&body={content}"><img src="/svg/Email.svg" alt="Email Us"></a>
                        <a class="conIcon" href="https://twitter.com/OluwaEinstein?s=09"><img src="/svg/Twitter.svg" alt="Tweet Us"></a>
                        <a class="conIcon" href="https://wa.me/message/YJE5JURSSSUPE1"><img src="/svg/WhatsApp.svg" alt="WhatsApp"></a>
                        <a class="conIcon" href="https://www.linkedin.com/in/sanni-lanre-686125ba"><img src="/svg/LinkedIn.svg" alt="Connect on LinkedIn"></a>
                        <a class="conIcon" href="https://github.com/oluwaeinstein007"><img src="/svg/GitHub.svg" alt="GitHub"></a>
                    </footer>
                    </div>
    </body>
    
    <script src="/js/app.js"> </script>
</html>
