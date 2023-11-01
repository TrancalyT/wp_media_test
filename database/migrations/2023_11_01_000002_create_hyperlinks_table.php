<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hyperlinks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crawl_id');
            $table->longText('hyperlink');
            $table->foreign('crawl_id')->references('id')->on('crawls');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hyperlinks');
    }
};
