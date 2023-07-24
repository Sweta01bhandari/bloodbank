<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();

        return view('stock.index', compact('stocks'));
    }

    public function create()
    {
        return view('stock.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sn' => 'required',
            'blood_group' => 'required',
            'stock' => 'required'
        ]);

        $stock = Stock::create($validatedData);

        return redirect()->route('stock.index');
    }

    public function show(Stock $stock)
    {
        return view('stock.show', compact('stock'));
    }

    public function edit(Stock $stock)
    {
        return view('stock.edit', compact('stock'));
    }

    public function update(Request $request, Stock $stock)
    {
        $validatedData = $request->validate([
            'sn' => 'required',
            'blood_group' => 'required',
            'stock' => 'required'
        ]);

        $stock->update($validatedData);

        return redirect()->route('stock.index', $stock->id);
    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        $stock_id = $request->stock;
        $stock = Stock::findOrFail($stock_id);
        // Delete stock
        $stock->delete();

        return redirect()->route('stock.index');
    }
}
