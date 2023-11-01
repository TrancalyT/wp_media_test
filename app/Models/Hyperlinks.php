<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hyperlinks extends Model
{
    use HasFactory;
    
    public $timestamps = false;


    protected $table = 'hyperlinks';
    protected $fillable = ['crawl_id', 'hyperlink'];
}
