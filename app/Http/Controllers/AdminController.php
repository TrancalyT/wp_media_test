<?php

namespace App\Http\Controllers;

use Spatie\Crawler\Crawler;
use App\Http\Crawler\MainCrawlObserver;
use App\Models\CrawlErrors;
use App\Models\Crawls;
use App\Models\Hyperlinks;
use Spatie\Crawler\CrawlProfiles\CrawlInternalUrls;

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

        $lastActiveCrawl = Crawls::latest('id')->first();

        $hyperlinks = [];
        $crawlErrors = [];
        
        if ($lastActiveCrawl) {
            $hyperlinks = Hyperlinks::where('crawl_id', $lastActiveCrawl->id)->get();
            $crawlErros = CrawlErrors::where('crawl_id', $lastActiveCrawl->id)->get();
        }

        return view('admin', compact('newsData', 'tourData', 'albumsData', 'lastActiveCrawl', 'hyperlinks', 'crawlErros'));
    }

    public function crawl()
    {
        $url = sprintf('http://localhost/%s/public/index.php', env('APP_NAME'));

        // Turn last crawl to inactive status (1 = ACTIVE / 2 = INACTIVE)
        $lastActiveCrawl = Crawls::latest('id')->first();

        if ($lastActiveCrawl) {
            $lastActiveCrawl->update(['status_id' => 2]);
        }

        // Create a new crawl in database
        $crawl = Crawls::create();
        $crawlId = $crawl->id;

        Crawler::create()
        ->setCrawlObserver(new MainCrawlObserver($crawlId))
        ->setCrawlProfile(new CrawlInternalUrls($url))
        ->startCrawling($url);
    }
}