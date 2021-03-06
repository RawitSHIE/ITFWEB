<!doctype html>
<html lang="en">
  <head>
    <title>Pokémon</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hovereffect.css') }}" rel="stylesheet">
    <!-- <link href="framework.css" rel="stylesheet"> -->
  </head>
  <body>
  
    
    <!--nav bar -->
    <div class="topnav">
      <a id="home" href="/" >Home</a>
      @if(Auth::check())
        <a id="login" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
          <a id="login" href="/console">Edit</a>
        @else
          <a id="login" href="/login">Login</a>
      @endif
    </div>

    <header class="header" style="background-color:rgba(0, 0, 0, 0.432);">
      <div class="vertical-center">
          <div style= "background-color: transparent;" >
              <img src="{{ asset('img/pokemon.png') }}" style="width:500px; max-width: 100%;">
              <!-- <h1 style="color:rgb(255, 255, 255)">Pokémon</h1> -->
              <h4 style="color:rgb(255, 255, 255)">ALL OF POKEMON</h4>
          </div>
          
          <video id="bgvid audio" playsinline autoplay loop muted>
            <!-- video source -->
              <source src="{{ asset('video/Pokemon.mp4') }}" type="video/mp4">
              <!-- <source src="video\Oscar Nominees 2017 - Best Visual Effects - A Showcase.mp4" type="video/mp4"> -->
              <!-- <source src="video\Oscar Nominees 2016 - Visual Effects.mp4" type="video/mp4"> -->
              



          </video>
              <br>
          <div>
          </div>




    </div>
    </header>

    <container>
      <div class="jumbotron propic-row" style="padding:5%; background-color:rgb(255, 255, 255)">
      <div class="row" style="
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      "> 
          @foreach(\App\Pokemon::all('name') as $pokemon)
              <div class="col-lg-2 col-sm-4 col-12 contact-pro" style="width:100%;" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="multiCollapse5">
                  <a href="/show?pokemon={{ $pokemon->name }}" style="text-decoration:none;">
                  <div class="vertical-cen" style="background-color:white; width:100%;">
                    <img src="{{ asset('img/pokemon_web/'.strtolower($pokemon->name).'.jpg') }}" style="max-height:200px; width:100%">
                  </div>
                      <p style="text-align:center;"><h3 style="margin:0%;  text-decoration:none;">{{ $pokemon->name }}</h3></p>
                  </a>
              </div>
          @endforeach
        </div>
        </div>
    </container>

    <footer class="jumbotron custom-j">
   
      <div class="row">
        <div class="col-sm-4" style="display:flex;
          justify-content:center;
          align-items:center;
          padding-top:10px;
          padding-right:10px;
          padding-bottom:10px">
       
          <a href="https://github.com/RawitSHIE/ITFWEB" target="_blank"><div class="over row">
           
              <!-- <img class="git" src="Img/github-svg.svg">                -->
              <div class="img" style="width:100px; height:100px;"></div>
              <div style="padding-left:10px; padding-top:15px">
                  <img src="{{ asset('img/github-logo-white.png') }}" style="width:100px">
                
                <p>
                  Fork Project
                </p>
              </div>
          </div></a>
        </div>
        
         <div class="col-sm-4 col-xs-12 hor-cen" style=" 
        padding-left:2.5%;
        padding-right:2.5%;        
        display:flex;">
        <div>
          <h1 style="width:100%;">KMITL</h1>
          <p>Faculty of Information Technology</p>
        </div>
        </div>

        <div class="col-sm-4 sidebar-right" style="width:100%;
                display:flex;
                vertical-align:center;
                padding:10px;
                background-color:rgba(0,0,0,0)">
                <a href="/about"><div class="contact-2 over row">
                        <div class="img2" style="width:100px; height:100px;"></div>
                            <div style="padding-left:15px; padding-top:0px">
                                 <h2 style="margin-bottom:0px; padding:0px; margin-top:15px; text-decoration:none; color:white;">Contact us</h2>
                                 <p style="margin-top:-5px; padding:0px;">For more information</p>
                            </div>
                        </div>
                    </div></a>
      </div>

    </footer>
    <div style="background-color:black; height:30px; width:100%; align-items:right; color:rgb(255, 255, 255); display: flex;
    justify-content: center;">
    Copyright &copy ITF Group
    </div>
    <script>
       //change music icon
       $("#audio").on('dblclick', function(){
                $("#audio").attr("src","button/audio_on");
            document.getElementById("#background").volume = 1;


            });

                $("#audio").on('click', function(){
             $("#audio").attr("src","button/audio_off");
                    document.getElementById("#background").volume = 0;

            });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
