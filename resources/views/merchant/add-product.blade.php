@extends('layouts.template')

@section('title')
    Add | Manage Product
@endsection

@section('content')
	<main>
		<header class="row tm-welcome-section">
			<h2 class="col-12 text-center tm-section-title">Add Products</h2>
 		</header>

         <form class="mt-5 col-10 m-auto" action="{{url('product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="description" id="inputPassword" placeholder="description">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                    <input type="text" name="total" class="form-control" placeholder="total">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                    <input type="text" name="price" class="form-control" placeholder="price">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2 ml-3">Submit</button>
        </form> 
	</main>
@endsection

	

		