@extends('dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn" style="background-color:#3A4F7A;color:white" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>


    <div class="card" style="padding:20px;">
        <div class="row">
            <div class="col-md-4">

                <div class="form-group">
                    <img src="/image/{{ $product->image }}" width="200px">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <h2>{{ $product->name }}</h2>
                </div>
                <div class="form-group">
                    <strong>stok:</strong>
                    {{ $product->stok }}
                </div>
                <div class="form-group">
                    <strong>harga:</strong>
                    Rp.{{ number_format($product->harga) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection