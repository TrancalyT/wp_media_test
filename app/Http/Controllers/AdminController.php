<?php

namespace App\Http\Controllers;

class AdminController extends Controller 
{   
    public function index () 
    {
        $newsController = new NewsController();
        $newsData = $newsController->index();

        $tourController = new TourController();
        $tourData = $tourController->index();

        $albumsController = new AlbumsController();
        $albumsData = $albumsController->index();

        return view('pages.admin', compact('newsData', 'tourData', 'albumsData'));
    }

}