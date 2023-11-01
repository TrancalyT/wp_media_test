<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NewsController;

class MainController extends Controller 
{   
    public function index () 
    {
        $newsController = new NewsController();
        $news = $newsController->index();

        $tourController = new TourController();
        $tour = $tourController->index();

        $albumsController = new AlbumsController();
        $albums = $albumsController->index();

        return view('main', compact('news', 'tour', 'albums'));
    }

}