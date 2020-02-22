<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('type');
          $table->string('state');
          $table->float('base_price', 11, 2);
          $table->float('public_price', 11, 2);
          $table->string('description')->nullable();
          $table->integer('stock')->nullable()->default(0);
          $table->integer('initial_stock')->nullable()->default(0);
          $table->integer('sold')->nullable()->default(0);
          $table->integer('reserved');
          $table->softDeletes();
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
