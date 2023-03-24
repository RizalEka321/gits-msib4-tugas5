@extends('layouts.app')
@section('content')
    <section>
        <div class="mt-5">
            <div class="container border mb-3">
                <div class="row">
                    <div class="col-md-4 py-5">
                        <img class="w-100" src="https://placeimg.com/250/250/nature" alt="gambar alam">
                    </div>
                    <div class="col-md-8 py-5">
                        <div class="mb-3">
                            <h2 id="title">{{ $product->name }}</h2>
                            <span>{{ $product->category->name }}</span>
                        </div>
                        <h2 class="price_add">Rp {{ number_format($product->price, 0, '.', '.') }}</h2>
                        <div class="mb-3">
                            <p>{{ $product->description }}</p>
                        </div>
                        <form action="{{ Route('market.tambah') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3" id="quantity">
                                <div class="form-group" id="qty">
                                    <span class="btn" id="minus" ><i class="fa fa-minus"></i></span>
                                    <input type="text" id="input" name="qty">
                                    <span class="btn" id="plus"><i class="fa fa-plus"></i></span>
                                </div>
                            </div>
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <div class="mb-3">
                                <button type="submit" name="product_id" value="{{ $product->id }}"
                                    class="add-btn border-0 py-2 px-4"><i class="fa-solid fa-cart-plus"></i>&nbsp; Masukkan
                                    Keranjang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container border mb-3 py-4">
                <h3>Produk</h3>
                <hr>
                <div class="row row-cols-1 row-cols-md-5 g-4">
                    @foreach ($list as $p)
                        <div class="col">
                            <div class="card h-100">
                                <a href="{{ Route('market.detail', $p->id) }}">
                                    <img src="https://placeimg.com/250/250/nature" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $p->name }}</h5>
                                        <span>{{ $p->category->name }}</span>
                                        <p class="card-price">Rp {{ number_format($p->price, 0, '.', '.') }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <a href="{{ Route('keranjang') }}" class="act-btn">
            <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
    </section>
@endsection
