<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
//            $table->string('thumbnail');
            $table->double('price');
            $table->string('thumbnail');
            $table->string('description');
            $table->string('detail');
            $table->integer('status')->default(1);
            $table->integer('id_categories');
//            $table->integer('status')->default(1);
//            $table->foreign('id')->references('id')->on('categories')
//                ->onDelete('cascade');
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
}
