<!doctype html>
<html lang="en">
  <head>
    <title>Movie Deal</title>
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
    <div class="topnav ">
      <a href="">News</a>
      <a id="/" href="/">Home</a>
      <a href="/about">Ours</a>
    </div>

    <header class="header" style="background-color:rgba(0, 0, 0, 0.432);">
      <div class="vertical-center">
          <div style= "background-color: transparent;" >
              <img src="{{ asset('img/pokemon.png') }}" style="width:500px;">
              <!-- <h1 style="color:rgb(255, 255, 255)">Pokémon</h1> -->
              <h4 style="color:rgb(255, 255, 255)">Gotta catch them all!</h4>
          </div>
          
          <video id="bgvid" playsinline autoplay loop>
            <!-- video source -->
              <source src="{{ asset('video/Pokemon.mp4') }}" type="video/mp4">
              <!-- <source src="video\Oscar Nominees 2017 - Best Visual Effects - A Showcase.mp4" type="video/mp4"> -->
              <!-- <source src="video\Oscar Nominees 2016 - Visual Effects.mp4" type="video/mp4"> -->
              
          
          </video>
              <br>
          <form method="get" action="/show">
              <input type="text" name="pokemon" placeholder="Gotcha!">
          </form>
    </div>
    </header>


    <footer class="jumbotron custom-j">
   
      <div class="row">
        <div class="col-sm-3" style="display:flex;
          justify-content:center;
          align-items:center;
          padding-top:10px;
          padding-right:10px;
          padding-bottom:10px">
          
           <!-- <a href="https://github.com/RawitSHIE/ITFWEB"> 
            <div class="responsive_grid" style="padding-bottom:0px">
            <div class="team_member"> 
              <div class="info">
                  <img class="git" src="Img/github-svg.svg">
                  <div style="padding-left:10px; padding-top:15px">
                          <img src="Img/github-logo-white.png" style="width:100px">
                        <p class="col-sm-2">
                          Fork Project
                        </p>
                  </div>
              </div>
              <div class="info_reveal">
                    <p><a href="mailto:address@addresss.com">s.goodman@fbi.gov</a></p>
                    <p></p>
              </div>
              </div>
            </div>
          </div> -->
       
          <div class="over row">
           
              <!-- <img class="git" src="Img/github-svg.svg">                -->
              <div class="img" style="width:100px; height:100px;"></div>
              <div style="padding-left:10px; padding-top:15px">
                <img src="{{ asset('img/github-logo-white.png') }}" style="width:100px">
                
                <p>
                  Fork Project
                </p>
              </div>
          </div> 
        </div>
        
         <div class="col-sm-3 col-xs-12 hor-cen" style=" 
        padding-left:2.5%;
        padding-right:2.5%;        
        display:flex;">
        <div>
          <h1 style="width:100%;">KMITL</h1>
          <p>Faculty of Information Technology</p>
        </div>
        </div>
        <div class="col-sm-6" style="width:100%; display:flex; vertical-align:center; padding:0px;">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam a culpa enim ratione omnis possimus aperiam iusto harum exercitationem eaque minima quam repellendus rerum, et deleniti officia laboriosam quibusdam quia!
        </div>
      </div>

    </footer>
    <div style="background-color:black; height:30px; width:100%; align-items:right; color:rgb(255, 255, 255); display: flex;
    justify-content: center;">
      &copycopyright Lorem ipsum
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
