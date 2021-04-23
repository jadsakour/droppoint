<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->integer('usr_id')->unsigned();
            $table->float('total_cost',10,2);
            $table->float('delivery_cost',10,2);
            $table->float('tax',10,2);
            $table->integer('status');
            $table->string('pickup_location_longitude');
            $table->string('pickup_location_Altitude');
            $table->string('shipping_location_longitude');
            $table->string('shipping_location_Altitude');
            $table->timestamps();

            $table->foreign('type_id')
          ->references('id')
          ->on('order_types')
          ->onDelete('cascade');

          $table->foreign('service_id')
        ->references('id')
        ->on('services')
        ->onDelete('cascade');

        $table->foreign('usr_id')
      ->references('id')
      ->on('users')
      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
