<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('company_id');
            $table->timestamps();

            $table->foreign('service_id')->references('id')
            ->on('services')->onDelete('cascade');
            
            $table->foreign('company_id')->references('id')
            ->on('companies')->onDelete('cascade');
        });

        Schema::create('company_insurance_services', function(Blueprint $table){
            $table->unsignedBigInteger('company_service_id');
            $table->unsignedBigInteger('insurance_company_id');
            $table->unsignedInteger('percentage');
            $table->unsignedInteger('commission');

            $table->primary(['company_service_id', 'insurance_company_id'], 'ci_primary');
            
            $table->foreign('company_service_id')->references('id')
            ->on('company_services')->onDelete('cascade');
            
            $table->foreign('insurance_company_id')->references('id')
            ->on('insurance_companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_insurance_services');
        Schema::dropIfExists('company_services');
    }
}
