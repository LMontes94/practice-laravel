<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __construct()
    {
        $this->middleware('example');
    }

    public function index()
    {
        return response()->json("Hello world", 200);
    }

    public function noAccess()
    {
        return response()->json("No access", 200);
    }
}
