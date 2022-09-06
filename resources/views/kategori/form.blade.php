@extends('layout.app')

@section('title')
    Kategori
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Kategori</h5>

    <div class="card-body">
            <form action="{{route('kategori.update', $kategori->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama" value="{{$kategori->nama}}" class="form-control 
                    @error('nama') is-invalid @enderror">
                      @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                      @enderror
                </div>
            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
@endsection