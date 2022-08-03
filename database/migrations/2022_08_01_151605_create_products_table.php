<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->string('image_path')->nullable();
            $table->double('retail');
            $table->string('weight')->nullable();
            $table->integer('rated_by')->nullable();
            $table->double('rating')->nullable();
            $table->bigInteger('upc')->nullable();
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
        Schema::dropIfExists('products');
    }
};
