<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('value', 10, 2)->default(0);
            $table->unsignedBigInteger('policy_id');
            $table->unsignedInteger('payment_state_id');
            $table->unsignedInteger('payment_method_id');
            $table->timestamp('paymented_at');
            $table->timestamps();

            $table->foreign('policy_id')->references('id')
            ->on('policies')->onDelete('cascade');

            $table->foreign('payment_state_id')->references('id')
            ->on('payment_states')->onDelete('cascade');

            $table->foreign('payment_method_id')->references('id')
            ->on('payment_methods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
