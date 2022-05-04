<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAreaTable extends Migration
{
    /**
     * Run the migrations.
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_area', function (Blueprint $table) {
            $table->id('area_id');
            $table->string('area_name');
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
        Schema::dropIfExists('tbl_area');
    }
}
