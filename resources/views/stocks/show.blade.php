@extends('stocks/layout')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>	 
<body>
	
	
	@section('content')
	<h1 id="text3d" >{{$produit->name}}</h1>
	<h2 id="textProduit" ><div>Price : {{$produit->price/100}}€</div></h2>
	<h2>
		<h2 id="textProduit" ><div>Stock : {{$produit->gestionStock}}</div></h2>

		<form action="/stocks/sell/{{$produit->id}}" method="post">
			{{csrf_field()}}
			<button class="ui orange button">-</button>
		</form>

		<form action="/stocks/restock/{{$produit->id}}" method="post">
			{{csrf_field()}}
			<button class="ui orange button">+</button>
		</form>
		
		@stop

	</body>

	</html>