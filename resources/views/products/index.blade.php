@extends('dashboard')
@section('content')
<div class="container">
    <a class="btn" style="background-color:#3A4F7A;color:white" href="{{ route('products.create') }}"><i class="bi bi-plus-circle"></i> Add new</a><br><br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Stok</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->stok }}</td>
            <td>Rp.{{ number_format($product->harga) }}</td>
            <td style="text-align: center;">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn" style="background-color: #6096B4;color:white" href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="btn" style="background-color: #F2CD5C;color:393053" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn" style="background-color: #CD5888;color:white" onclick="return confirm('apakah anda yakin ingin menghapus produk tersebut?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
</div>
<style>
    th {
        text-align: center;
    }
</style>

@endsection