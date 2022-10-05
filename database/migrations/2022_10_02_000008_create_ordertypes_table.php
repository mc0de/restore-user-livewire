<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdertypesTable extends Migration
{
    public function up()
    {
        Schema::create('ordertypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
