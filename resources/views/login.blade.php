@extends('layouts.template')

@section('title')
    Login
@endsection

@section('content')
	<main style="width:50%" class="m-auto">
        <form class="mt-5" action="{{route('login')}}" method="POST">
            @csrf
            <div class="mb-3 row d-flex">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" placeholder="username">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <label for="inputPassword" class="form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" id="inputPassword" placeholder="***">
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Sign In</button>
        </form> 
        <div class="mt-5">
            <p style="display: inline-block">Or if you have'nt already any account, </p>
            <a href="/register" style="text-decoration: underline">sign up</a>
           
        </div>
    </main>
@endsection

	

		