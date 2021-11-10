<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('agent');
            $table->string('name_ar', 100);
            $table->string('name_en', 100);
            $table->text('desc_ar');
            $table->text('desc_en');
            $table->integer('quantity');
            $table->decimal('price', 8, 3);
            $table->date('expire');
            $table->string('weight');
            $table->string('cost');
            $table->decimal('discount', 8, 3);
            $table->date('discount_from');
            $table->date('discount_to');
            $table->boolean('display')->default(1);
            $table->tinyInteger('deliverable')->default(1);
            $table->foreign('category_id')->on('categories')->references('id');
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
