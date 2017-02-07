<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;

class StockController extends Controller
{

	public function getIndex(){
		$stocks = \App\Stock::all();
		return view('stocks.index',['stockage'=>$stocks]);
	}

	public function getShow($id){
		$stock = Stock::find($id);
		return view('stocks.show',['produit'=>$stock]);
	}


	public function postcountPrice($id){
		$stocks = Stock::find($id);
		$stocks->price--;
		$stocks->save();
		return back();
	}

	public function postdecountPrice($id){
		$stocks = Stock::find($id);
		$stocks->price++;
		$stocks->save();
		return back();
	}

	public function postSell($id){
		$stocks = Stock::find($id);
		$stocks->gestionStock--;
		$stocks->save();
		return back();
	}

	public function postRestock($id){
		$stocks = Stock::find($id);
		$stocks->gestionStock++;
		$stocks->save();
		return back();
	}

}