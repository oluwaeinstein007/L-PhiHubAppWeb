
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>

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
                    Portfolio

                    <i class="fa fa-briefcase fa-3x"></i>
                </div>
                
             <input type="text" placeholder="Search.." name="place" id="place">

                        <h2>Location is;</h2>
                       <h3 id="location_name"></h3>
                       <h2>Temp is;</h2>
                       <h3 id="location_temp"></h3>
                       <h2>Cloudiness is;</h2>
                       <h3 id="location_cloud"></h3>
                

            </div>

            <script>
    var url = "https://api.weatherbit.io/v2.0/forecast/daily?city=london,gb,&key=a89a7d649c8e476f8af212be6467abc3";

    function getWeather(){
    $.getJSON( url, function( data ) {
      var items = [];

      items.push("<li>"+data.city_name+"</li>");
      items.push("<li>"+data.lon+"</li>");
      items.push("<li>"+data.timezone+"</li>");
      items.push("<li>"+data.lat+"</li>");
      items.push("<li>"+data.state_code+"</li>");


      $( "<ul>", {
        "class": "my-new-list",
        html: items.join( "" )
      }).appendTo( "body" );
    });
    }

    getWeather();
  </script>
    </body>
    
    <script>
    
        var options = {
      method: 'GET',
      url: 'https://foreca-weather.p.rapidapi.com/location/search/mumbai',
      params: {lang: 'en', country: 'in'},
      headers: {
        'x-rapidapi-host': 'foreca-weather.p.rapidapi.com',
        'x-rapidapi-key': 'ea792d285cmsh5fc3404e3a41585p1ea0bfjsn803acf421b81'
        }
        };

            axios.request(options).then(function (response) {
            console.log(response.data);
            let locations = response.data.locations;
            let x = document.getElementById("location_name");
            x.innerHTML = locations[0].name;
            }).catch(function (error) {
            console.error(error);
            });


    </script>

<script>
    
    var options = {
  method: 'GET',
  url: "https://foreca-weather.p.rapidapi.com/current/101275339?alt=0&tempunit=C&windunit=MS&tz=Europe%2FLondon&lang=en",
  params: {lang: 'en', country: 'in'},
  headers: {
    "x-rapidapi-host": "foreca-weather.p.rapidapi.com",
		"x-rapidapi-key": "ec71b998ebmshe861b618b344dabp11a79fjsn54b2dc78dd7d"
    }
    };

        axios.request(options).then(function (response) {
        console.log(response.data);
        let current = response.data.current;
        let y = document.getElementById("location_temp");
        y.innerHTML = current.temperature;
        let z = document.getElementById("location_cloud");
        z.innerHTML = current.cloudiness;
        }).catch(function (error) {
        console.error(error);
        });


</script>
    

</html>
