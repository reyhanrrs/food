@extends('layouts.template')

@section('title')
    Home
@endsection

@section('content')
	<main>
		<header class="row tm-welcome-section">
			<h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
			<p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
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
									<a href={{ url("/detail-product/$product->id"); }}>
										{{$product->name}}
									</a>
								</h4>
								<p class="tm-gallery-description">{{$product->description}}</p>
								<p class="tm-gallery-price">Rp.{{$product->price}}</p>
							</figcaption>
						</figure>
					</article>
				@endforeach		
			</div> <!-- gallery page 1 -->
			
			<!-- gallery page 2 -->
			<div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
				<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
					<figure>
						<img src="{{asset('templates/img/gallery/04.jpg')}}" alt="Image" class="img-fluid tm-gallery-img" />
						<figcaption>
							<h4 class="tm-gallery-title">Salad Menu One</h4>
							<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
							<p class="tm-gallery-price">$25</p>
						</figcaption>
					</figure>
				</article>
			</div> <!-- gallery page 2 -->
		</div>
	</main>
@endsection

	

		