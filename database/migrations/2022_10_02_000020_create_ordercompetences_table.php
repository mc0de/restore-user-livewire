<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdercompetencesTable extends Migration
{
    public function up()
    {
        Schema::create('ordercompetences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
