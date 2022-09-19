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
                    <label for="barang_id">Barang id</label>
                    <select type="number" name="barang_id" class="form-control" value="{{$pjn->barang_id}}" @error('barang_id') is invalid @enderror>
                    @error('barang_id')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <option value="{{$pjn->barang_id}}" selected>{{! empty($pjn->barang->nama) ? $pjn->barang->nama : ''}}</option>
                    @foreach ($pjn as $item)
                    <option value="{{$pjn->nama}}">{{$pjn->nama}}</option>
                    @endforeach
                    </select>
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">    
                        <label for="pembeli_id">Pembeli id</label>
                        <select type="number" name="pembeli_id" class="form-control" value="{{$pjn->pembeli_id}}" @error('pembeli_id') is invalid @enderror>
                        @error('pembeli_id')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                        @enderror
                        <option value="{{$pjn->pembeli_id}}" selected>{{! empty($pjn->pembeli->nama) ? $pjn->pembeli->nama : ''}}</option>
                        @foreach ($pjn as $item)
                        <option value="{{$pjn->nama}}">{{$pjn->nama}}</option>
                        @endforeach
                        </select>
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
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="harga_jual">harga jual</label>
                        <input type="number" name="harga_jual" class="form-control" value="{{$pjn->harga_jual}}" @error('harga_jual') is invalid @enderror>
                        @error('harga_jual')
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