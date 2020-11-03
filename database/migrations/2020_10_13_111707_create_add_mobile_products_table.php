<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddMobileProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_mobile_products', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_category');
            $table->integer('mobiles_category_id');
            $table->string('mobile_price');
            $table->float('mobile_size');
            $table->string('mobile_rear_camera');
            $table->string('mobile_front_camera');
            $table->string('mobile_battery_size');
            $table->string('mobile_warrantee');
            $table->float('mobile_version');
            $table->string('mobile_emi_option');
            $table->string('available_mobile_in_stock');
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
        Schema::dropIfExists('add_mobile_products');
    }
}
