@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')

    <div class="row g-2 text-center ">
        <div class="col-3">
            <div class="p-3 border bg-light mt-3"><a href="/barang" class="nav-link">Barang </a>
                <i class="fa fa-boxes-stacked"></i>
            </div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-light mt-3"><a href="/kategori" class="nav-link">Kategori </a> 
                <i class="fa fa-tag"></i>
            </div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-light mt-3"><a href="/suplier" class="nav-link">Suplier </a> 
                <i class="fa fa-truck"></i>
            </div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-light mt-3"><a href="/pembeli" class="nav-link">Member </a>
                <i class="fa fa-person"></i>
            </div>
        </div>
        </div>
@endsection