@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')

    <div class="row g-2 text-center ">
        <div class="col-3">
            <div class="p-3 border bg-light mt-3"> Barang 
                <i class="fa fa-boxes-stacked"></i>
            </div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-light mt-3"> Kategori 
                <i class="fa fa-tag"></i>
            </div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-light mt-3"> Supplier 
                <i class="fa fa-truck"></i>
            </div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-light mt-3"> Member
                <i class="fa fa-person"></i>
            </div>
        </div>
        </div>
@endsection