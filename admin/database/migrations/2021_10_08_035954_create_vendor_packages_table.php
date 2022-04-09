<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_packages', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->bigInteger('vendor_id');
            $table->bigInteger('category_id');
            $table->string('name');
            $table->string('products');
            $table->string('market_price');
            $table->string('our_price');
            $table->string('description');
            $table->string('package_image');
            $table->string('package_status');
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
        Schema::dropIfExists('vendor_packages');
    }
}
