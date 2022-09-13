@extends('layout.app')

@section('title')
    Pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Pembeli</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('pembeli.update', $p->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="nama">Nama Pembeli</label>
                    <input type="text" name="nama" class="form-control" value="{{$p->nama}}" @error('nama') is invalid @enderror>
                    @error('nama')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">    
                        <label for="nama">telepon</label>
                        <input type="text" name="telepon" class="form-control" value="{{$p->telepon}}" @error('telepon') is invalid @enderror>
                        @error('telepon')
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
                        <label for="alamat">alamat</label>
                        <textarea type="text" name="alamat" class="form-control" @error('alamat') is invalid @enderror>{{$p->alamat}}</textarea>
                        @error('alamat')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/pembeli" class="btn btn-secondary" role="button">Close</a>
                    <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i> Update</button>
                </div>
        </form>
    </div>
@endsection