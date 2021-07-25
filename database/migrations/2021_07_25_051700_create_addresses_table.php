<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('neighborhood')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('city_id')->references('id')
            ->on('cities')->onDelete('cascade');

            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');
        });

        // Pivot table between Address and Phone
        Schema::create('address_phones', function(Blueprint $table){
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('phone_id');

            $table->primary(['address_id','phone_id']);
            
            $table->foreign('address_id')->references('id')
            ->on('addresses')->onDelete('cascade');
            
            $table->foreign('phone_id')->references('id')
            ->on('phones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_phones');
        Schema::dropIfExists('addresses');
    }
}
