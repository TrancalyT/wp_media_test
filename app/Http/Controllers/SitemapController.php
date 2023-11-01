<?php

namespace App\Http\Controllers;

use App\Models\Crawls;
use App\Models\Hyperlinks;

class SitemapController extends Controller 
{   
    public function index () 
    {
        $tree = [];
        $lastActiveCrawl = Crawls::latest('id')->first();

        if ($lastActiveCrawl) {
            $hyperlinks = Hyperlinks::where('crawl_id', $lastActiveCrawl->id)->get();

        
            foreach ($hyperlinks as $link) {
                if (str_contains($link['hyperlink'], env('APP_NAME'))) {
                    if (str_contains($link['hyperlink'], '#')) {
                        if (!array_key_exists('Home', $tree)) {
                            $tree['Home'] = [];
                        }
                        
                        array_push($tree['Home'], ucfirst(explode('#', $link['hyperlink'])[1]));
                    } else {
                        $element = explode('/', $link['hyperlink']);
                        $tree[ucfirst(end($element))] = [];
                    }
                }
            }
        }

        return view('sitemap', compact('tree'));
    }
}