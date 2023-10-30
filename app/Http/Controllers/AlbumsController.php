<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albums;

class AlbumsController extends Controller
{
    public function index()
    {
        return Albums::all();
    }

    public function store(Request $request)
    {
        Albums::create($request->all());
    }

    public function update(Request $request, Albums $album)
    {
        $album->update($request->all());
    }

    public function destroy(Albums $album)
    {
        $album->delete();
    }
}