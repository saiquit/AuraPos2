<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.products.index');
    }
    public function show($id)
    {
        $product = \App\Models\Product::find($id);
        return view('pages.products.show', compact('product'));
    }
}
