<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
  line-height: 140px;
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

 li{
    list-style: none;

 }

 #textProduit{
 	color: #FDD692;
    letter-spacing: .15em;
    text-shadow: 
      -1px -1px 1px #efede3, 
   
      2px 20px 5px rgba(0, 0, 0, 0.9),
      5px 23px 5px rgba(0, 0, 0, 0.3),
      8px 27px 8px rgba(0, 0, 0, 0.5),
      8px 28px 35px rgba(0, 0, 0, 0.9);
 }
  </style>
	<title>Produits</title>
</head>
<body>
<h1 id="text3d">Ma liste de produits</h1>
@foreach($stockage as $produit)
	<li id="textProduit"><h2>Produit : {{$produit->name}}</h2></li>
	<li id="textProduit"> prix : {{$produit->price}}</li>
	<li id="textProduit"> stock : {{$produit->gestionStock}}</li>
	
	@endforeach
</body>
</html>