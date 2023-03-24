@extends('layouts.app')
@section('content')
    <div class="mt-5">
        <div class="container border py-4 mb-2">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Keranjang</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" method="post">
                        <table class="table table-hover">
                            <tr>
                                <th> Produk</th>
                                <th>Harga Satuan</th>
                                <th>Kuantitas</th>
                                <th>Total Harga</th>
                                <th class="text-center">Aksi</th>
                            </tr>

                            @foreach ($cart as $c)
                                <tr>
                                    <td>
                                        <a href="{{ Route('market.add', $c->product->id) }}"
                                            class="btn btn-default">{{ $c->product->name }}</a>
                                    </td>
                                    <td>{{ number_format($c->product->price, 0, '.', '.') }}</td>
                                    <td>{{ $c->qty }}</td>
                                    <td>{{ number_format($c->sub_total, 0, '.', '.') }}</td>
                                    <td class="text-center">
                                        <a href="{{ Route('keranjang.hapus', $c->id) }}" class="cart-btn py-2 px-4">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <th>
                                    <hr>
                                </th>
                                <th>
                                    <hr>
                                </th>
                                <th>Jumlah Barang :</th>
                                <th> Total ({{ $qty }} Produk)</th>
                                <th class="text-center">
                                    <a href="#" class="cart-btn py-2 px-4">Hapus Semua</a>
                                </th>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="container border py-4 text-end">
            <h2 class="price_cart">Rp {{ number_format($total, 0, '.', '.') }}</h2>
            <a href="#" class="cart-btn py-2 px-5">Checkout</a>
        </div>
    </div>
@endsection
