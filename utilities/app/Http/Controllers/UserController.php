<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('index', compact('users'));
    }

    public function search()
    {
        return view('search');
    }

    public function searchPost(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:255']
        ]);

        $users = User::where('name', '%LIKE%', $request->name)->get();
        return view('search-results', compact('users'));
    }
}
