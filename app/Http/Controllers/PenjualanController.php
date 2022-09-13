<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
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
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.add', compact('penjualan'));
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
            'pembeli' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric'

        ]);

        $penjualan = Penjualan::create($request->all());
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
            'barang' => 'required|numeric',
            'pembeli' => 'required|numric',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric'
            
        ]);

        $penjualan->update([
            'barang'=>$request->barang,
            'pembeli'=>$request->pembeli,
            'jumlah'=>$request->jumlah,
            'harga'=>$request->harga
            
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
