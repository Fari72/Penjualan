@extends('layout.app')

@section('title')
    Pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Pembelian</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('pembelian.store')}}" method="POST">
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
                        <label for="jumlah">jumlah</label>
                        <input type="number" name="jumlah" class="form-control" value="{{old('jumlah')}}" @error('jumlah') is invalid @enderror>
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
                            <input type="numeric" name="harga" class="form-control" value="{{old('harga')}}" @error('harga') is invalid @enderror>
                            @error('harga')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="/pembelian" class="btn btn-secondary" role="button">Batal</a>
                    <button class="btn btn-danger" type="submit"><i class="fa fa-save"></i> Simpan</button>
                </div>
        </form>
    </div>
@endsection