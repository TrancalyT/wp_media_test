<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crawls extends Model
{
    use HasFactory;

    protected $table = 'crawls';
    protected $fillable = ['status_id'];
}
