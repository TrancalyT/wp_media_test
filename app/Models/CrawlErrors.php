<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrawlErrors extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'crawl_errors';
    protected $fillable = ['crawl_id', 'error'];
}
