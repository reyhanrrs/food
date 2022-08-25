<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $merchant_id = $user->merchant_id;

        return view('merchant.product', [
            "products" => Product::where('merchant_id', $merchant_id)->get()
        ]);
    }

    public function all()
    {
        return view('home', [
            "products" => Product::all()
        ]);
    }

    public function create()
    {
        return view('merchant.add-product');
    }

    public function store(Request $request)
    {

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/img'), $image_name);
        }

        $product = new Product;

        $product->merchant_id = auth()->user()->merchant_id;;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->total = $request->total;
        $product->price = $request->price;
        $product->image = $image_name ?? 'noimage.jpg';

        $product->save();

        return redirect('product');
    }

    public function show($product)
    {
        return view("product-detail", [
            "product" => Product::where('id', $product)->first()
        ]);
    }

    public function edit($idProduct)
    {
        return view('merchant.edit-product', [
            "product" => Product::where("id", $idProduct)->first()
        ]);
    }

    public function update(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            unlink("img/" . $request->old_image);
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/img'), $image_name);
        } else {
            $image_name = $request->old_image;
        }

        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->total = $request->total;
        $product->price = $request->price;
        $product->image = $image_name ?? 'noimage.jpg';

        $product->save();

        return redirect('product');
    }

    public function destroy(Product $product)
    {
        //
    }
}
