<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return News::all();
    }

    public function store(Request $request)
    {
        News::create($request->all());
    }

    public function update(Request $request, News $news)
    {
        $news->update($request->all());
    }

    public function destroy(News $news)
    {
        $news->delete();
    }
}
