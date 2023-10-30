<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index()
    {
        return Tour::all();
    }

    public function store(Request $request)
    {
        Tour::create($request->all());
    }

    public function update(Request $request, Tour $tour)
    {
        $tour->update($request->all());
    }

    public function destroy(Tour $tour)
    {
        $tour->delete();
    }
}