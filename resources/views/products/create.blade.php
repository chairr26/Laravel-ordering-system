@extends('dashboard')
@section('content')
<div class="container">
    <a class="btn" style="background-color:#3A4F7A;color:white" href="{{ route('products.index') }}"><i class="bi bi-arrow-left-short"></i> Back</a><br><br>


    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
    </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" style="margin:55px">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Produk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Produk:</strong>
                    <input type="text" name="harga" class="form-control" placeholder="harga">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stok Produk:</strong>
                    <input type="text" name="stok" class="form-control" placeholder="stok">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
            </div>
            <br><br>
            <br><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn" style="background-color:#3A4F7A;color:white">Submit</button>
            </div>
        </div>

    </form>
</div>
<style>
    .form-group {
        margin-top: 15px;
    }
</style>
@endsection