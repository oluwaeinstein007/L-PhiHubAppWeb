
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

       
            <br>



            <!-- Put picture of me saying HI here -->
                
                
                <div class="container container-sm card">
                <img src="/svg/Profile.svg" alt="">
                
                <h1>Hello, I’m Lanre <img src="/svg/hand2.svg"></h1>
                <p>and I building <img src="/svg/Love.svg" alt="Love"> Web./Mobile apps.</p>
                <img src="/svg/MWL.svg" alt="Mobile, Web, anything">
                <br>

                <!-- Laptop here -->
                <p>I’m am a full-stack developer based in Lagos, the commercial center of Nigeria, I can do both remote/on-site and freelance/full-time job at anyplacein the world</p>
                <button>Set up a meeting</button>
                <br>
                <img src="/svg/VueReact.svg" alt="Vue and React">
                <p>For frontend dev., I can readily adapt to both Vue.js and React.js but peronally, I perfer React.js and I’m a huge fan of the ease of switching to React-Native</p>
                <br>

                <img src="/svg/BootSass.svg" alt="SASS and Bootstrap">
                <p>For frontend design frameworks, Bootstrap and Sass are my everyday goto tools, and I specially love how Sass givens me full control of everything whiles also making dev time shorter</p>
                <br>

                <img src="/svg/hjc.svg" alt="HTML, CSS and JavaScript">
                <p>Primarily, I use Laravel (PHP framework) for my backend because of the ease of development</p>
                <br>

                <img src="/svg/Tex.svg" alt="LaTeX">
                <p>For technical write-ups, thesis and any research based writing,my favorite writing tool is LaTeX for its ease in writing equations and technical symbols</p>
                <br>

                <img src="/svg/Figma.svg" alt="Figma">
                <p>Let’s not forget my favorite UI/UX design tool, Figma, which helps me design and visualize the entire workflow before starting to code and even experiment changes to frontend layouts</p>
                <br>

                <img src="/svg/GoogleCode.svg" alt="Code">
                <p>I work best when I’m given the freedom to plan the entire workflow (with or without a team), select tools for the solution I come up with and build everything according to plan with occasional changes</p>
                <br>

                
        
                <br>
                <p>Check <a href="{{ url('/portfolio') }}"><button>Portfolio</button> </a> for previous works  </p>
                

                <!-- Put carousel slider here -->
                </div>
                <br>

                <nav >
                    <ul class="list">
                        <li>Home</li> 
                        <li>About</li>
                        <li>Blog</li>
                        <li>Contact</li>
                    </ul>
                </nav>
                

                

             

            

            
              

               



             
    </body>
    
    <script src="/js/app.js"> </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>

                var icon = document.getElementById("icon");
                icon.onclick = function(){
                    document.body.classList.toggle("dark-theme");
                }

    </script>
</html>
