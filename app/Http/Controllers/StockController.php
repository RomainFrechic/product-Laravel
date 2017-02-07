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
}