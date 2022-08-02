@extends('layouts.template')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="card mx-2 my-5">
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
    
                    <div class="merchant-description card my-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </main>
@endsection