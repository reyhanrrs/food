@extends('layouts.template')

@section('title')
    Join Merchants
@endsection

@section('content')
	<main class="d-flex justify-content-center">
        <form class="mt-5" action="{{ route('merchant')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Merchant Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="name">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" placeholder="description">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" placeholder="address">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Join</button>
        </form>
    </main>
@endsection

	

		