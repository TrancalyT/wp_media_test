<?php

namespace App\Http\Crawler;

use Spatie\Crawler\CrawlObservers\CrawlObserver;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\UriInterface;

use App\Models\CrawlErrors;
use App\Models\Hyperlinks;

class MainCrawlObserver extends CrawlObserver
{   
    public $crawlId;
    public $linksArray = [];

    public function __construct($crawlId)
    {
        $this->crawlId = $crawlId;
    }

    public function crawled(UriInterface $url, ResponseInterface $response, UriInterface $foundOnUrl = null, string $linkText = null): void
    {
        // Convert response in text
        $content = (string) $response->getBody();

        // Regex to extract hyperlinks
        preg_match_all('/<a\s+(?:[^>]*?\s+)?href="([^"]*)"/i', $content, $matches);
        $links = $matches[1];

        // Manage hyperlinks replica
        foreach ($links as $link) {
            if (!in_array(trim($link), $this->linksArray)) {
                $this->linksArray[] = trim($link);
            }
        }
    }

    public function crawlFailed(UriInterface $url, RequestException $requestException, UriInterface $foundOnUrl = null, string $linkText = null): void
    {   
        $error = sprintf('Error while getting %s.', $url);

        CrawlErrors::create([
            'crawl_id' => $this->crawlId,
            'error' => $error,
        ]);
    }

    public function finishedCrawling(): void
    {
        // Push hyperlinks in database
        foreach ($this->linksArray as $link) {
            Hyperlinks::create([
                'crawl_id' => $this->crawlId,
                'hyperlink' => $link,
            ]);
        }
    }
}