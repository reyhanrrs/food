<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{       
    //merchant
    public function messager()
    {    
        $merchant_id = auth()->user()->merchant_id;
        if($merchant_id) {
            $merchant_chats = DB::table('chat')->where('merchant_id', $merchant_id)->orderBy('created_at', 'desc')->groupBy('user_id', 'product_id')->latest()->get();
        } else {
            $merchant_chats = null;
        }

        $user_id = auth()->user()->id;
        return view('user/group-chat', [
            "chats" => DB::table('chat')->where('user_id', $user_id)->orderBy('created_at', 'desc')->groupBy('user_id', 'product_id')->latest()->get(),
            "merchant_chats" => $merchant_chats
        ]);
    }

    public function showMerchant($user_id, $product_id)
    {  
        // $product = Product::find($product_id);
        
        return view('merchant/chat', [
            "user_id" => $user_id,
            "product_id" => $product_id,
            "chats" => Chat::where('user_id', $user_id)->where('product_id', $product_id)->with('user')->get()
        ]);
    }

    public function reply(Request $request, $user_id, $product_id)
    {
        $chat = new Chat;

        $chat->user_id = $user_id;
        $chat->is_answer = 1;
        $chat->product_id = $product_id;
        $chat->message = $request->message;
        $chat->merchant_id = Product::find($product_id)->merchant_id;
        $chat->save();

        return back();
    }

    //user
    public function show($product_id)
    {
        $user_id = auth()->user()->id;
       
        // $product = Product::find($product_id);
        return view('user/chat', [
            "product_id" => $product_id,
            "chats" => Chat::where('user_id', $user_id)->where('product_id', $product_id)->with('merchant')->get()
        ]);
    }

    public function store(Request $request, $product_id)
    {
        $chat = new Chat;

        $chat->user_id = auth()->user()->id;
        $chat->is_answer = 0;
        $chat->product_id = $product_id;
        $chat->message = $request->message;
        $chat->merchant_id = Product::find($product_id)->merchant_id;
        $chat->save();

        return back();
    }

    public function index()
    {   
        //
    }

    public function create()
    {
        //
    }
   

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
