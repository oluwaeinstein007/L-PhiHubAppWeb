
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
            <br>



            <!-- Put picture of me saying HI here -->
                
                <div class="container container-sm card">
                <legend>Hi, I'm Lanre</legend>
                
                <p>I'm a theoretical Physicist turn software developer <br>... and here are my stacks</p>
                
                <br>

             
            
            <legend>My STACK</legend>
                <!-- Put carousel slider here -->

            <br>

            
            <legend>What I do</legend>
                <!-- Put carousel slider here -->

            
            <br>


            
                <h5>Sorry for not properly Welcoming you to L'Phi Hub</h5>
               
                <br>

             


                
                <h3>About Us</h3>
              
                <img alt="" src="/svg/Rotating_earth_(large).gif">
                <br>
                <p class="animation text">L'Phi was founded by Lanre Sanni in July, 2020, as a group of Freelance/Remote software developers working to solve your software problems and bring your imaginatio to life</p>
                <p>We're based in Lagos, don't believe me? <button class="justify-content-right">Find Us</button></p>
                <br>
                <p>Check <a href="{{ url('/portfolio') }}"><button>Portfolio</button> </a> for previous works  </p>
                

                <!-- Put carousel slider here -->
                </div>
                

                

             

            <br>

            <section class="location">
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8977152248194!2d3.2814459!3d6.534600499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8fa32398c311%3A0x2cc35b43c9141ba6!2s18%20Jamiu%20Raji%20St%2C%20Egbe%2C%20Lagos!5e0!3m2!1sen!2sng!4v1616770518121!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </section>
            <br>

            <section class="contact-us">
                <div class="row">
                    <div class="contact-col">
                        <div>
                            <a href="tel:{08057322330}"> <button> Call Us</button></a>
                            <span>
                            <h5>call us</h5>
                            </span>
                            <a href="sms:{08057322330}?body={content}"><button>SMS</button></a>
                            <span>
                            <h5>sms us</h5>
                            </span>
                            <a href="mailto:{slanre26@gmail.com}?subject={subject}&body={content}"><button>Email</button></a>
                            <span>
                            <h5>email us</h5>
                            </span>
                            <a href="https://twitter.com/OluwaEinstein?s=09"><button>Twitter</button></a>
                            <span>
                            <h5>tweet us</h5>
                            </span>
                            <a href="https://wa.me/message/YJE5JURSSSUPE1"><button>WhatsApp</button></a>
                            <span>
                            <h5>inbox us</h5>
                            </span>
                            <a href="https://www.linkedin.com/in/sanni-lanre-686125ba"><button>LinkedIn</button></a>
                            <span>
                            <h5>our linkedin</h5>
                            </span>
                            <a href="https://github.com/oluwaeinstein007"><button>Git Hub</button></a>
                            <span>
                            <h5>our github</h5>
                            </span>
                        </div>

                    </div>

                    <div class="contact-col">
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
         
               <button class="r btn btn-danger rounded-pill float-right button" name="send_email" type="submit">Send Email</button>
                </form>
                    </div>

                </div>

            </section>


             
    </body>
    
    <script src="/js/app.js"> </script>

    <script>
        const card = document.querySelector(".card");
        const infoCard = document.querySelector(".infoCard");
        //Moving animation event
        infoCard.addEventListener('mousemove', (e) =>{
            console.log("fuck");
            let xAxis = window.innerWidth/2 - e.pageX;
            let yAxis = window.innerWidth/2 - e.pageY;
            card.style.transform = 'rotateY(${xAxis}deg) rotateX(${yAxis}deg)';
            
        });


    </script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</html>
