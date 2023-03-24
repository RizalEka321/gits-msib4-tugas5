<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tokoku||Market';
        $category = Category::all();
        $product = Product::with('category')->get();
        return view('market.index', compact('title','product','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $title = 'Tokoku||Masukkan Produk';
        $list = Product::all();
        $product = Product::find($id);
        return view('market.add', compact('title','product','list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'qty'       => 'required',
            'product_id'       => 'required',
            'price' => 'required'
        ]);

        $cek = Cart::where('product_id', $request->product_id)->first();
        if ($cek) {
            Cart::where('id', $cek->id)->update(['qty'=>$request->qty + $cek->qty]);
        } else {
            Cart::create([
                'qty'     => $request->qty,
                'product_id' => $request->product_id,
                'sub_total' => $request->price * $request->qty
            ]);
        }
        return redirect('/keranjang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
