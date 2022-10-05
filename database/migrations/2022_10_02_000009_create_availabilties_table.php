<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailabiltiesTable extends Migration
{
    public function up()
    {
        Schema::create('availabilties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
