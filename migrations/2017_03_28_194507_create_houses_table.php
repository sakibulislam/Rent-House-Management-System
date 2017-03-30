<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('house_type');
            $table->string('house_status');
            $table->string('address');
            $table->string('city');
            $table->string('area');
            $table->integer('cost');
            $table->string('flat_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('houses');
    }
}
