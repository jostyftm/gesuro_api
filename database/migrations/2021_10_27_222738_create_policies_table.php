<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('policy_state_id');
            $table->unsignedInteger('policy_validity_id');
            $table->unsignedBigInteger('company_service_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('client_id');
            $table->decimal('net_price', 10, 2)->default(0);
            $table->decimal('total_price', 10, 2)->default(0);
            $table->timestamp('issued_at');
            $table->timestamp('started_at');
            $table->timestamp('finished_at');
            $table->timestamps();

            $table->foreign('policy_state_id')->references('id')
            ->on('policy_states')->onDelete('cascade');

            $table->foreign('policy_validity_id')->references('id')
            ->on('policy_validities')->onDelete('cascade');

            $table->foreign('company_service_id')->references('id')
            ->on('company_services')->onDelete('cascade');

            $table->foreign('employee_id')->references('id')
            ->on('employees')->onDelete('cascade');
            
            $table->foreign('client_id')->references('id')
            ->on('clients')->onDelete('cascade');
        });

        Schema::create('policy_taxes', function(Blueprint $table){
            $table->unsignedBigInteger('company_tax_id');
            $table->unsignedBigInteger('policy_id');
            $table->decimal('value', 10, 2);

            $table->primary(['company_tax_id', 'policy_id']);

            $table->foreign('company_tax_id')->references('id')
            ->on('company_taxes')->onDelete('cascade');

            $table->foreign('policy_id')->references('id')
            ->on('policies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('policy_taxes');
        Schema::dropIfExists('policies');
    }
}
