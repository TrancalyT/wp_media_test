<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Albums;

class AlbumsController extends Controller
{
    public function index()
    {
        return Albums::all();
    }

    public function store(Request $request)
    {   
        $cover = $request->file('cover');
        $fileName = sprintf('cover_%s.jpg', $request->input('title'));
        $cover->move(public_path('images/albums'), $fileName);
        
        $album = new Albums([
            'link' => $request->input('link'),
            'year' => $request->input('year'),
            'title' => $request->input('title'),
            'cover' => $fileName,
        ]);
        $album->save();
    }

    public function update(Request $request, Albums $album)
    {
        $album->update($request->all());
    }

    public function destroy(Albums $album)
    {   
        $coverPath = public_path('images/albums/' . $album->cover);

        if (File::exists($coverPath)) {
            File::delete($coverPath);
        }

        $album->delete();
    }
}