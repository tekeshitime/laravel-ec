<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Stock $stock)
    {
        $items = Stock::all();
        $stocks = $items;
        return view('shop', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'fee' => 'required|numeric',
            'imgpath' => 'required|image',
        ]);

        $stock = new Stock();

        $stock->name = $request->name;
        $stock->detail = $request->detail;
        $stock->fee = $request->fee;

        $originalName = $request->file('imgpath')->getClientOriginalName();
        $name = date('Yms_His') . '_' . $originalName;
        $request->file('imgpath')->move('storage/images', $name);

        $stock->imgpath = $name;
        $stock->save();
        return back()->with('message', '商品の投稿が完了しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
