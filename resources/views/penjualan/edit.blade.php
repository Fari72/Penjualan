@extends('layout.app')

@section('title')
    Penjualan
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Penjualan</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('penjualan.update', $pjn->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="nama">Barang id</label>
                    <input type="number" name="barang" class="form-control" value="{{$pjn->barang}}" @error('barang') is invalid @enderror>
                    @error('barang')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">    
                        <label for="nama">Pembeli id</label>
                        <input type="number" name="pembeli" class="form-control" value="{{$pjn->pembeli}}" @error('pembeli') is invalid @enderror>
                        @error('pembeli')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="number" name="jumlah" class="form-control" value="{{$pjn->jumlah}}" @error('jumlah') is invalid @enderror>
                        @error('jumlah')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="number" name="harga" class="form-control" value="{{$pjn->harga}}" @error('harga') is invalid @enderror>
                        @error('harga')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="/penjualan" class="btn btn-secondary" role="button">Close</a>
                <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i> Update</button>
            </div>
        </form>
    </div>
@endsection