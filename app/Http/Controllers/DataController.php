<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\products;
use Illuminate\Http\Request;


class DataController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('index', compact(['categories']));
    }

    public function product($CategoryID)
    {
        $product = products::where('CategoryID', $CategoryID)->get();
        return view('productPage', compact(['product']));
    }

    public function productDetail($productID)
    {
        $detail = products::where('ProductID', $productID)->get();
        return view('productDetail', compact(['detail']));
    }

    public function sessionData(Request $request)
    {
        $request->session()->put('productName', $request->productName);
        $request->session()->put('productprice', $request->price);
        $request->session()->put('jumlah', $request->jumlah);
        $request->session()->put('total', $request->jumlah * $request->price);
        return view('cartinput');
    }
    public function processPostData(Request $request)
    {
        if ($request->session()->has('productName') && $request->session()->has('productprice') && $request->session()->has('jumlah') && $request->session()->has('total')) {
            return view('cart', compact('request'));
        } else {
            echo 'Tidak ada data dalam session.';
        }
    }
}
