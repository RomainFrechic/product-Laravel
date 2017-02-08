@extends('stocks/layout')

@section('content')

<h1 id="text3d">Ma liste de produits</h1>
<!-- @foreach($stockage as $produit)
	<li id="textProduit"><h2>Produit : {{$produit->name}}</h2></li>
	<li id="textProduit"> prix : {{$produit->price}}</li>
	<li id="textProduit"> stock : {{$produit->gestionStock}}</li>
	
	@endforeach -->

	<div>
		<table>
			<thead>
				<tr>
					<th id="textProduit" ><h2>ID</h2></th>
					<th id="textProduit" ><h2>Produit</h2></th>
					<th id="textProduit" ><h2>Price</h2></th>
					<th id="textProduit" ><h2>Stock</h2></th>
            <th id="textProduit" ><h2>Description</h2></th>
				</tr>	
			</thead>
			<tbody>
				
	@foreach($stockage as $produit)
				<tr>
	<th id="textProduit">{{$produit->id}}</th>			
	<th id="textProduit"><a href="/stocks/show/{{$produit->id}}">{{$produit->name}}</a></th>
	<td id="textProduit">{{$produit->price}}</td>
	<td id="textProduit">{{$produit->gestionStock}}</td>
  <td id="textProduit">{{$produit->description}}</td>
	
	@endforeach
				</tr> 
    </tbody>
  </table>
  <button class="ui green button"><a href="/stocks/addProduit">Formulaire =></a></button>

@stop