<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;

class StockController extends Controller
{
    public function list()
    {
        return view('stocks');
    }
    public function add(Request $request)
    {
        $this->validate($request, stock::$rules);
        $form = $request->all();
        stock::create($form);
        return redirect('/stock');
    }
}
