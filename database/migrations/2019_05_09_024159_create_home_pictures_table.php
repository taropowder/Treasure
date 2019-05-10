<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('picture')->comment('图片');
            $table->string('description')->nullable()->comment('描述');
            $table->integer('car_id')->nullable()->comment('绑定车型');
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
        Schema::dropIfExists('home_pictures');
    }
}
