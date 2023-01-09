<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id')
            ->references('id')
            ->on('transactions');

            $table->unsignedBigInteger('user_id')
            ->references('id')
            ->on('users');

            $table->unsignedBigInteger('product_id')
            ->references('id')
            ->on('products');

            $table->string('product_name');
            $table->string('product_img');
            $table->string('product_price');
            $table->string('product_qty');
            $table->string('product_subtotal');
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
        Schema::dropIfExists('product_carts');
    }
}
