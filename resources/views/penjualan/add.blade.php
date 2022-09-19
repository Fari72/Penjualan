@extends('layout.app')

@section('title')
    Penjualan
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Penjualan</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('penjualan.store')}}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="barang_id">barang</label>
                    <select type="numeric" name="barang_id" class="form-control" value="{{old('barang_id')}}" @error('barang_id') is invalid @enderror>
                    @error('barang_id')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    @foreach ($barang as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                    </select>
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">    
                        <label for="pembeli_id">pembeli</label>
                        <select type="number" name="pembeli_id" class="form-control" value="{{old('pembeli_id')}}" @error('pembeli_id') is invalid @enderror>
                        @error('pembeli_id')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                        @enderror
                        @foreach ($pembeli as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="number" name="jumlah" class="form-control" value="{{old('jumlah')}}" @error('jumlah') is invalid @enderror>
                        @error('jumlah')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">    
                        <label for="harga_jual">harga jual</label>
                        <input type="numeric" name="harga_jual" class="form-control" value="{{old('harga_jual')}}" @error('harga_jual') is invalid @enderror>
                        @error('harga_jual')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                </div>
            </div>

                <div class="modal-footer">
                    <a href="/penjualan" class="btn btn-secondary" role="button">Batal</a>
                    <button class="btn btn-danger" type="submit"><i class="fa fa-save"></i> Simpan</button>
                </div>
        </form>
    </div>
@endsection