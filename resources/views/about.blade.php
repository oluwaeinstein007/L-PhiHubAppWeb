
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
          .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" text-color="red">
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
                        <li class="nav-item">
                        <img id="icon" data-toggle="tooltip" data-placement="top" title="Click me to change color theme" src="/svg/Moon.svg" alt="">
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
               
                                
        
            <div class="container container-sm plate">
               <h1>Hello <img src="/svg/hand1.svg" alt=""> </h1>
               <br>
               <p>Hi, I’m Lanre, single and in my 20’s, full-stack Web./Mobile developer </> with an educational background in Physics, I’m doing freelance jobs based in Lagos, but I can also work remotely for international clients.</p>
                <br>
                

                <!--Educational-->
                <img src="/svg/Learn.svg" alt="">
            <h2><img src="/svg/Education.svg" alt="">Education</h2>
            <ul>
                <div class="block-1">
                <li>
                    <h6><strong>Web/Mobile development</strong></h6>
                    <p>Self-taught <br>2021 - Present</p>
                </li>
                <li>
                    <h6><strong>Microsoft Azure AZ900</strong></h6>
                    <p>Andela Learning Community <br>2021 - Present </p>
                </li>
                </div>
                
                <div class="block-1">
                <li>
                    <h6><strong>Google Africa Developer Scholarship</strong></h6>
                    <p>Andela Learning Community <br>2020</p>
                </li>
                <li>
                    <h6><strong>Engineering Physics</strong></h6>
                    <p>Department of Physics & Engineering Physics, Obafemi Awolowo University <br>2016-20 </p>
                </li>
                </div>
            </ul>
            
            

<!--                
                    <img src="/svg/Dev work.svg" alt="">
                    <h2><img src="/svg/Dev.svg" alt="">Education</h2>
            <div>
            <img src="/svg/HTML.svg" alt=""> <img src="/svg/Rectangle7.svg" alt=""> <br>
            <img src="/svg/CSS.svg" alt=""> <img src="/svg/Dev work.svg" alt=""> <br>
            <img src="/svg/JS.svg" alt=""> <img src="/svg/Dev work.svg" alt=""> <br>
            <img src="/svg/Vue.svg" alt=""> <img src="/svg/Dev work.svg" alt=""> <br>
            <img src="/svg/React.svg" alt=""> <img src="/svg/Dev work.svg" alt=""> <br>
            <img src="/svg/Laravel.svg" alt=""> <img src="/svg/Dev work.svg" alt=""> <br>
            <img src="/svg/Latex.svg" alt=""> <img src="/svg/Dev work.svg" alt=""> <br>
            <img src="/svg/FigmaBig.svg" alt=""> <img src="/svg/Dev work.svg" alt="">
            </div>
            <br> 
            --->

            <!--Working Exp.-->
            <img class="images sticker" src="/svg/work anywhere img.svg" alt="">
            <h2><img src="/svg/portf.svg" alt="">Work Experience</h2>
            <ul>
                <div class="block-1">
                <li>
                    <h6><strong>Founder/Developer</strong></h6>
                    <p>L’Phi Hub (my Start-up)<br>2020 - Present</p>
                </li>
                <li>
                    <h6><strong>Bootcamp Course Educator</strong></h6>
                    <p>Scholar Nurture<br>2021 - Present </p>
                </li>
                <li>
                    <h6><strong>Noir Portal</strong></h6>
                    <p>NoirLabs<br>2021 - Present </p>
                </li>
                </div>
                <div class="block-1">
                <li>
                    <h6><strong>MoboClinic App</strong></h6>
                    <p>Facebook + Andela #BuildForSDG<br>2020</p>
                </li>
                <li>
                    <h6><strong>E-Learning Web. App</strong></h6>
                    <p>Al-Faruk College<br>2020</p>
                </li>
                <blockquote>
            If you want to hire me, I’m interested to work in company that offer modern technologies such as Reactjs, Vue.js and Laravel, I’m looking for a role that challenges me and also helps me learn as I help design solutions
            </blockquote>
                <br>
                </div>
            </ul>
           <p></p>
            <br>

             <!--Interest-->
            <h2><img src="/svg/interest.svg" alt="">Interests</h2>
            <div >
            <p>
            <strong>Music:</strong> Rap (Eminem and 2pac) <br>
            <strong>Movies:</strong> I watch almost any movies ranging from Rom-Com to Sci-fi but I prefer Comedy and Action eg TBBT, Blacklist, Young Sheldon, Brooklyn nine-nine, etc also i:m a big fan of cartoons lik Family guy, Simpsons, and American dads etc <br>
            <strong>Food:</strong> I’m a foodie <br>
            <strong>Travel:</strong> I love travelling, exploring, mountaineering, watching nice landscapes and having fun <br>
            <strong>Gaming/Sport:</strong> I’m a diehard fan of #GGMU, I love playing football too (winger CR7 is GOAT) also I play PES and FIFA quite well
            </p>
            </div>







            </div>
    </body>
    
    <script src="/js/app.js"> </script>
    <script>

                var icon = document.getElementById("icon");
                icon.onclick = function(){
                    document.body.classList.toggle("dark-theme");
                }

    </script>
</html>
