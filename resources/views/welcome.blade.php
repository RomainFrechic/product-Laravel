<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: blue;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: black;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            html {
  height: 100%;
}

body {
  overflow: hidden;
  margin: 0;
  padding: 0;
  background: rgba(206,188,155,1);
  background: -moz-linear-gradient(-45deg, rgba(206,188,155,1) 0%, rgba(85,63,50,1) 51%, rgba(42,31,25,1) 100%);
  background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(206,188,155,1)), color-stop(51%, rgba(85,63,50,1)), color-stop(100%, rgba(42,31,25,1)));
  background: -webkit-linear-gradient(-45deg, rgba(206,188,155,1) 0%, rgba(85,63,50,1) 51%, rgba(42,31,25,1) 100%);
  background: -o-linear-gradient(-45deg, rgba(206,188,155,1) 0%, rgba(85,63,50,1) 51%, rgba(42,31,25,1) 100%);
  background: -ms-linear-gradient(-45deg, rgba(206,188,155,1) 0%, rgba(85,63,50,1) 51%, rgba(42,31,25,1) 100%);
  background: linear-gradient(135deg, rgba(206,188,155,1) 0%, rgba(85,63,50,1) 51%, rgba(42,31,25,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cebc9b', endColorstr='#2a1f19', GradientType=1 );
}

h1 {
  width: 100%;
  margin: 0 auto 0 auto;
  font-family: 'Lato', sans-serif;
  line-height: 280px;
  font-size: 11.5rem;
  padding: 80px 50px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
}

/*  
============
    Light
============
*/
h1::before {
  content:"";
  width: 100%;
  height: 750px;
  position: absolute;
  top: -200px;
  left: 10px;
  transform: rotate(55deg);
  background: rgba(206,188,155,.7);
  background: -moz-linear-gradient(left, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  background: -webkit-gradient(left top, right top, color-stop(0%, rgba(206,188,155,.7)), color-stop(65%, rgba(42,31,25,0)));
  background: -webkit-linear-gradient(left, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  background: -o-linear-gradient(left, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  background: -ms-linear-gradient(left, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  background: linear-gradient(to right, rgba(206,188,155,.7) 0%, rgba(42,31,25,0) 65%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cebc9b', endColorstr='#2a1f19', GradientType=0.7 ); );
}



/*  
========================
            3D Effect
========================
*/
#text3d {
    color: #70869d;
    letter-spacing: .15em;
    text-shadow: 
      -1px -1px 1px #efede3, 
      0px 1px 0 #2e2e2e, 
      0px 2px 0 #2c2c2c, 
      0px 3px 0 #2a2a2a, 
      0px 4px 0 #282828, 
      0px 5px 0 #262626, 
      0px 6px 0 #242424, 
      0px 7px 0 #222, 
      0px 8px 0 #202020, 
      0px 9px 0 #1e1e1e, 
      0px 10px 0 #1c1c1c, 
      0px 11px 0 #1a1a1a, 
      0px 12px 0 #181818, 
      0px 13px 0 #161616, 
      0px 14px 0 #141414, 
      0px 15px 0 #121212,
      2px 20px 5px rgba(0, 0, 0, 0.9),
      5px 23px 5px rgba(0, 0, 0, 0.3),
      8px 27px 8px rgba(0, 0, 0, 0.5),
      8px 28px 35px rgba(0, 0, 0, 0.9);
 }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   <h1 id="text3d"> STOCK LARAVEL</h1>
                </div>

                <div class="links">
                   <button class="ui orange button"> <a href="stocks">Produits</a></button>
                   <button class="ui pink button"> <a href="">Laracasts</a></button>
                      <button class="ui red button"><a href="">News</a></button>
                     <button class="ui yellow  button"> <a href="">Forge</a></button>
                     <button class="ui green button"> <a href="">GitHub</a></button>
                </div>
            </div>
        </div>
    </body>
</html>
