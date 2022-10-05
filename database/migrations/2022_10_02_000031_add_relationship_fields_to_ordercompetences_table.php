<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdercompetencesTable extends Migration
{
    public function up()
    {
        Schema::table('ordercompetences', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id', 'order_fk_7416010')->references('id')->on('orders');
            $table->unsignedBigInteger('competence_id')->nullable();
            $table->foreign('competence_id', 'competence_fk_7416011')->references('id')->on('competences');
        });
    }
}
