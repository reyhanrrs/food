@extends('layouts.template')

@section('title')
    Edit Product | Manage Product
@endsection

@section('content')
	<main>
		<header class="row tm-welcome-section">
			<h2 class="col-12 text-center tm-section-title">Add Products</h2>
 		</header>

        <form class="mt-5 col-10 m-auto" action="{{ url('edit-product') }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="text" name="id" class="d-none form-control" 
            placeholder="image" style="display: none; visibility: hidden" value="{{ $product->id }}" hidden>
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="name" value="{{ $product->name }}">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="description" id="inputPassword" placeholder="description" value="{{ $product->description }}">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                    <input type="text" name="total" class="form-control" placeholder="total" value="{{ $product->total }}">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                    <input type="text" name="price" class="form-control" placeholder="price" value="{{ $product->price }}">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                    <img id="previewImage" src={{asset("img/$product->image")}} alt="">
                    <input type="file" name="image" class="form-control" 
                    placeholder="image" value="{{ $product->image }}"
                    onchange="changeImage()"
                    >
                    <input type="text" name="old_image" class="d-none form-control" 
                    placeholder="image" style="display: none; visibility: hidden" value="{{ $product->image }}" hidden
                    >
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2 ml-3">Submit</button>
        </form> 

        <script>
            function changeImage(){
                const previewImage = document.getElementById("previewImage")
                previewImage.style.display = "none"
            }
        </script>
	</main>
@endsection

	

		