<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Barang;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $penjualan = Penjualan::all();
        $pembeli = Pembeli::all();
        return view('penjualan.index', compact('penjualan','barang','pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $barang = Barang::all();
        $pembeli = Pembeli::all();
        $penjualan = Penjualan::all();
        return view('penjualan.add', compact('penjualan','barang','pembeli'));
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
            'barang_id' => 'required',
            'pembeli_id' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'harga_jual' => 'required|numeric'

        ]);

        $penjualan = Penjualan::create($request->all());

        $id_barang = $request->barang_id;
        $barang = Barang::find($id_barang);
        $barang->stok -= $request->jumlah;
        $barang->update();

        $penjualan->save();

        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pjn = Penjualan::find($id);
        return view('penjualan.edit', compact('pjn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        $validate = $request->validate([
            'barang_id' => 'required|numeric',
            'pembeli_id' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'harga_jual' => 'required|numeric'
            
        ]);

        $penjualan->update([
            'barang_id'=>$request->barang_id,
            'pembeli_id'=>$request->pembeli_id,
            'jumlah'=>$request->jumlah,
            'harga_jual'=>$request->harga_jual
            
        ]);
        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = penjualan::find($id);
        $penjualan->delete();

        return redirect('penjualan');
    }
}
