<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->BigIncrements('id_category');
            $table->UnsignedBigInteger('id');
            $table->UnsignedBigInteger('id_course');
            $table->Enum('status', ['active','inactive']);
            $table->timestamps();

            $table->foreign('id_course')->references('id_course')->on('courses');
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cattegories');
    }
}
