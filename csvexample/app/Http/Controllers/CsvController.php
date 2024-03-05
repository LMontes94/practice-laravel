<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function import(Request $request)
    {
        dd("todo");
    }

    public function export()
    {
        dd("todo");
    }
}
