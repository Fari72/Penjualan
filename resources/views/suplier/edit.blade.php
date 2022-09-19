@extends('layout.app')

@section('title')
    Suplier
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Suplier</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('suplier.update', $s->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="nama">Nama Suplier</label>
                    <input type="text" name="nama" class="form-control" value="{{$s->nama}}" @error('nama') is invalid @enderror>
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
                        <input type="text" name="telepon" class="form-control" value="{{$s->telepon}}" @error('telepon') is invalid @enderror>
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
                        <textarea type="text" name="alamat" class="form-control" @error('alamat') is invalid @enderror>{{$s->alamat}}</textarea>
                        @error('alamat')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                    <div class="modal-footer">
                        <a href="/suplier" class="btn btn-secondary" role="button">Close</a>
                        <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i> Update</button>
                    </div>
        </form>
                </div>
@endsection