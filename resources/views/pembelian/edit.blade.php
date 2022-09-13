@extends('layout.app')

@section('title')
    Pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Pembelian</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('pembelian.update', $pan->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="barang">barang</label>
                    <input type="number" name="barang" class="form-control" value="{{$pembelian->barang}}" @error('barang') is invalid @enderror>
                    @error('barang')
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
                        <input type="number" name="jumlah" class="form-control" value="{{$pembelian->jumlah}}" @error('jumlah') is invalid @enderror>
                        @error('jumlah')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="number" name="harga" class="form-control" value="{{$pembelian->harga}}" @error('harga') is invalid @enderror>
                        @error('harga')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="/pembelian" class="btn btn-secondary" role="button">Close</a>
                <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i> Update</button>
            </div>
        </form>
    </div>
@endsection