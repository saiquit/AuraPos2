<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('pages.store.index');
    }
    public function show($id)
    {
        $store = \App\Models\Store::find($id);
        return view('pages.store.show', compact('store'));
    }
}
