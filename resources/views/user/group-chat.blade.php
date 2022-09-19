@extends('layouts.simple_template')

@section('title')
    Chat
@endsection

@section('content')
    <style>
        a .card:hover {
            position: relative;
            bottom: 8px
        }

        .card {
            background: rgba( 255, 255, 255, 0.25 );
            box-shadow: 0 5px 15px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 5.5px );
            -webkit-backdrop-filter: blur( 10.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
    </style>
    <main>  
        <h1 class="mb-5 text-center">Chat</h1>
        <a href="/" class="mx-3">
            << back
        </a>
        <div class="container">
            <h5 class="my-3 text-center">Your Chats</h5>
            @foreach ($chats as $chat)
            <a href="/show-chat/{{$chat->user_id}}/{{ $chat->product_id }}" style="color: inherit; text-decoration: none">
                <div class="card my-3">
                    <div class="card-body">
                        {{ $chat->message }}
                    </div>
                </div>
            </a>
            @endforeach

            @if(auth()->user()->merchant_id)
            <h5 class="my-3 mt-5 text-center">Merchant Chats</h5>
            @foreach ($merchant_chats as $chat)
            <a href="/show-chat/{{$chat->user_id}}/{{ $chat->product_id }}" style="color: inherit; text-decoration: none">
                <div class="card my-3">
                    <div class="card-body">
                        {{ $chat->message }}
                    </div>
                </div>
            </a>
            @endforeach
            @endif
        </div>
    </main>
@endsection