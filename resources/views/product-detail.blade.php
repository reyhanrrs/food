@extends('layouts.template')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="card mx-2 my-5">
          @auth
              @if (auth()->user()->merchant_id == $product->merchant_id)
              <button type="submit" class="btn btn-warning">
                <a href="{{ url('edit-product/'.$product->id) }}" class="text-decoration-none text-white">
                  Edit this product
                </a>
              </button>
              @endif
          @endauth
            <div class="card-body d-flex">
                <figure>
                    <img src={{asset("img/$product->image")}} alt="" style="width:40vw">
                </figure>

                <div class="content ml-3">
                    <div class="product-description ">
                        <h2 class="tm-gallery-title">{{ $product->name }}</h2>
                        <p class="tm-gallery-price mb-2">Rp. {{ $product->price }}</p>
                        <p class="tm-gallery-description">{{ $product->description }}</p>
                        <p class="tm-gallery-description">Posting at: {{ $product->updated_at ?? $product->created_at }}</p>
                        <p class="tm-gallery-description">Remain: {{ $product->total }}</p>
                    </div>

                    <a href="/chat/{{ $product->id }}">
                      <button class="btn btn-info">
                        Chat Seller
                      </button>
                    </a>
    
                    <div class="merchant-description card my-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$product->merchant->name}}</h5>
                              <p class="card-text">{{$product->merchant->description}}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection