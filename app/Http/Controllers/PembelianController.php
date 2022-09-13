<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use Illuminate\Http\Request;

class pembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = Pembelian::all();
        return view('pembelian.index', compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembelian = Pembelian::all();
        return view('pembelian.add', compact('pembelian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'barang' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric'

        ]);

        $pembelian = Pembelian::create($request->all());
        return redirect('pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembelian = Pembelian::find($id);
        return view('pembelian', compact('pembelian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembelian $pembelian)
    {
        $validate = $request->validate([
            'barang' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric'
            
        ]);

        $pembelian->update([
            'barang'=>$request->barang,
            'jumlah'=>$request->jumlah,
            'harga'=>$request->harga
            
        ]);
        return redirect('pembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->delete();

        return redirect('pembelian');
    }
}
