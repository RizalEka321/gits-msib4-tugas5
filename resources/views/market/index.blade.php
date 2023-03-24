@extends('layouts.app')
@section('content')
    <section>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4 text-center" id="title">TOKO<u>KU</u></h1>
                    <p class="lead text-center">Tersedia barang yang anda butuhkan
                    </p>
                </div>
            </div>
            <div class="container border mb-3 py-4">
                <h3 class="judul">Kategori Produk</h3>
                <hr>
                <div class="row row-cols-1 row-cols-md-5 g-4">
                    @foreach ($category as $c)
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://placeimg.com/250/250/nature" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $c->name }}</h5>
                                    <p class="card-text">{{ $c->description }}.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container border py-4">
                <h3>Produk</h3>
                <hr>
                <div class="row row-cols-1 row-cols-md-5 g-4">
                    @foreach ($product as $p)
                        <div class="col">
                            <div class="card h-100">
                                <a href="{{ Route('market.add', $p->id) }}">
                                    <img src="https://placeimg.com/250/250/nature" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $p->name }}</h5>
                                        <span>{{ $p->category->name }}</span>
                                        <p class="card-price">Rp{{ number_format($p->price, 0, '.', '.') }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        <a href="{{ Route('keranjang') }}" class="act-btn">
            <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
    </section>
@endsection
