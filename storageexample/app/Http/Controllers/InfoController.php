<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfoRequest;
use Illuminate\Http\Request;
use App\Models\Info;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Info::get();
        return view('index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InfoRequest $request)
    {
        $fileName = time() . '.' . $request->file->extension();
        // $request->file->move(public_path('images'), $fileName);
        //$request->file->storeAs('images', $fileName);

        Storage::disk('local')->put();

        $info = new Info;
        $info->name = $request->name;
        //$info->file_uri = "images/".$fileName;
        $info->file_uri = $fileName;
        $info->save();

        //return redirect()->route('index');
        return Storage::download('nombrearchivo', $info->file_uri);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
