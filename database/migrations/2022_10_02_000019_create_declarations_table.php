<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclarationsTable extends Migration
{
    public function up()
    {
        Schema::create('declarations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('user_start_time');
            $table->time('user_end_time');
            $table->integer('kilometers');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
