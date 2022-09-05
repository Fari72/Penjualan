@extends('layout.app')

@section('title')
    Kategori
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Kategori</h5>
            <button type="button" class="btn btn-danger btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modaltambah"><i class="fa fa-plus"></i>
            </button>
        </div>
    </div>

<!-- tabel -->
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
    </div>
        <tbody>
          @foreach($kategori as $item)
          <tr>
              <td width="5%">{{$loop->iteration}}</td>
              <td>{{$item->nama}}</td>
              <td width="15%">
                  <a href="/kategori/edit/{{$item->id}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                  <!-- <form action="{{route('kategori.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa-solid fa-trash"></i>
                  </button>
                  </form> -->
                  <a href="/kategori/hapus/{{$item->id}}" class="btn btn-danger btn-sm ">
                    <i class="fa-solid fa-trash"></i></a>
                </td>
          </tr>
          @endforeach
        </tbody>
        </table>
    </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('kategori.store')}}" method="post">
          @csrf 
          <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection