@extends('layouts.template')

@section('title')
    Manage Product
@endsection

@section('content')
	<main>
		<header class="row tm-welcome-section">
			<h2 class="col-12 text-center tm-section-title">Your Products</h2>
 			</header>

		<!-- Gallery -->
		<div class="row tm-gallery">
			<!-- gallery page 1 -->
			<div id="tm-gallery-page-pizza" class="tm-gallery-page">

				@foreach ($products as $product)
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src={{asset("img/$product->image")}}  alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">
									<a href={{ url("/edit-product/$product->id"); }}>
										{{$product->name}}
									</a>
								</h4>
								<p class="tm-gallery-description">{{$product->description}}</p>
								<p class="tm-gallery-price">Rp.{{$product->price}}</p>
							</figcaption>
						</figure>
					</article>
				@endforeach		
				
				
				<article class="fs-1 border border-primary ol-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
					<a href="/tambah-product" class="text-center d-flex justify-content-center align-items-center" style="width: 100%; height:100%; text-decoration: none">
					+
					</a>
				</article>
				
				
			</div> <!-- gallery page 3 -->
		</div>
	</main>
@endsection

	

		