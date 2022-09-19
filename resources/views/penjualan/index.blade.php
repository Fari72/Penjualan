@extends('layout.app')

@section('title')
    Penjualan
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Penjualan</h5>
            <a class="btn btn-danger btn-sm float-end" href="{{route('penjualan.create')}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>

<!-- tabel -->
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Barang</th>
                    <th>Pembeli</th>
                    <th>Jumlah</th>
                    <th>Harga Jual</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penjualan as $item)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{! empty($item->barang->nama) ? $item->barang->nama : ''}}</td>
                <td>{{! empty($item->pembeli->nama) ? $item->pembeli->nama : ''}}</td>
                <td>{{$item->jumlah}}</td>
                <td>{{$item->harga_jual}}</td>
                <td>
                    <a href="/penjualan/edit/{{$item->id}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i> </a>
                    <a href="/penjualan/hapus/{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> </a>
                </td>
            </tr>
            @endforeach
        </div>
        </tbody>
        </table>
    </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Penjualan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
          <label for="nama">nama</label>
          <input type="text" name="nama" id="nama" class="formcontrol">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection