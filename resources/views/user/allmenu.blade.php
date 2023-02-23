@extends('dashboardshop')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="card" style="margin:15px;padding:0">
                <img class="card-img-top" src="/image/{{ $product->image }}" alt=" Card image cap" style="height:15vh">
                <div class=" card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">Rp.{{number_format($product->harga)}}</p>
                    <a href="{{ url('add-to-cart/'.$product->id) }}" role="button" class="btn btn-primary">Pesan</a>
                </div>
            </div>



        </div>
        @endforeach
        {!! $products->links() !!}
    </div>
</div>
<style>
    th {
        text-align: center;
    }
</style>

@endsection