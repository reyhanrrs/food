@extends('layouts.template')

@section('title')
    Register
@endsection

@section('content')
	<main  style="width:50%" class="m-auto">
        <form class="mt-5" action="{{ route('register')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="example@gmail.com">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" name="name" placeholder="name">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" id="inputPassword" placeholder="***">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
        <div class="mt-5">
            <p style="display: inline-block">Already have an account? </p>
            <a href="/login" style="text-decoration: underline">sign in</a>
           
        </div>
    </main>
@endsection

	

		