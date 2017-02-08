<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
	<title>List</title>
</head>
<body>
	


	<h1 id="text3d">Liste de produits</h1>

	<div class="ui two column centered grid">
		@foreach($stockage as $produit)
		<div class="ui link card">
			<div class="image">
				<img src="https://unsplash.it/458/354?image=889">
			</div>
			<div class="content">
				<a class="header" href="/stocks/show/{{$produit->id}}">{{$produit->name}}</a>
				<div class="meta">
					<span class="date">{{$produit->price/100}} €</span>
				</div>
				<div class="description">{{$produit->description}}</div>
			</div>
			<div class="extra content">
				<a><i class="user icon"></i>Stock disponible : {{$produit->gestionStock}} Produits</a>
			</div>
		<form  action="/stocks/modifStock/{{$produit->id}}" method="get">
		 	{{csrf_field()}}
		 	<input class="ui primary button" type="submit" value="modifier">
		 </form>
		 <form  action="/stocks/index/{{$produit->id}}" method="post">
		 	{{csrf_field()}}
		 	<input class="ui red button" type="submit" value="suprimer">
		 </form> 
		 
</div>
		@endforeach
	</div>	
	<button class="ui green button"><a href="/stocks">Tableau de produit</a></button>

</body>
</html>