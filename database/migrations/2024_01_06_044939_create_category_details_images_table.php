<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryDetailsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_details_images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->enum('dimension', ['portrait', 'landscape']); 
            $table->unsignedBigInteger('category_details_id');
            $table->foreign('category_details_id')->references('id')->on('category_details')->onDelete('cascade');
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
        Schema::dropIfExists('category_details_images');
    }
}
