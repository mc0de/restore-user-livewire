<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('ordertype_id')->nullable();
            $table->foreign('ordertype_id', 'ordertype_fk_7415822')->references('id')->on('ordertypes');
        });
    }
}
