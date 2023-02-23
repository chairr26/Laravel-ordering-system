@extends('dashboardshop')
@section('content')
<div class="container">
    <a class="btn" style="background-color:#3A4F7A;color:white" href="{{ route('shop') }}"><i class="bi bi-arrow-left-short"></i> Back</a><br><br>
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th>Product</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th class="text-center">Subtotal</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            $id = 0; ?>
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <?php $total += $details['harga'] * $details['quantity'] ?>
            <tr>
                <td data-th="Product">
                    <h5 class="nomargin">{{ $details['name'] }}</h5>
                    <img src="image/{{ $details['image'] }}" width="150" height="100" class="img-responsive" />

                </td>
                <td data-th="harga">Rp.{{ number_format($details['harga']) }}</td>
                <td data-th="Quantity">
                    {{ $details['quantity'] }}
                </td>
                <td data-th="Subtotal" class="text-center">Rp.{{ number_format($details['harga'] * $details['quantity']) }}</td>
                <td class="actions" data-th="">
                    <button class="btn btn-danger btn-sm cart_remove" onclick="myFunction()"><i class="bi bi-trash"></i> Delete</button>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td data-th="Product" colspan="5">
                    <center>Belum ada pesanan</center>
                </td>
            </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total Rp.{{ number_format($total) }}</strong></td>

                <td><a href="{{ url('/') }}" class="btn" style="background-color:#3A4F7A;color:white"><i class="fa fa-angle-left"></i>Pesan</a></td>
            </tr>
        </tfoot>
    </table>
</div>

@endsection

<script type="text/javascript">
    function myFunction() {

        var ele = $(this);

        if (confirm("Do you really want to remove?")) {

            window.location.assign('http://127.0.0.1:8000/cart_remove/{{$id}}');
        }
    };
</script>