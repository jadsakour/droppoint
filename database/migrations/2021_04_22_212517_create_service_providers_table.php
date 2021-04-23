<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('isOpen');
            $table->timestamp('open_time')->nullable()->default(null);
            $table->timestamp('close_time')->nullable()->default(null);
            $table->integer('place_type_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->string('location_longitude');
            $table->string('location_Altitude');
            $table->timestamps();

            $table->foreign('place_type_id')
                    ->references('id')
                    ->on('place_types')
                    ->onDelete('cascade');

                    $table->foreign('service_id')
                            ->references('id')
                            ->on('services')
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
        Schema::dropIfExists('service_providers');
    }
}
