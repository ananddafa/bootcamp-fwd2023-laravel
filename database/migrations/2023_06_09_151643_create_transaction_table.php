<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id')->nullable()->index
            ('fk_transaction_to_appointment');
            $table->integer('config_payment')->nullable();
            $table->string('fee_doctor')->nullable();
            $table->string('fee_specialist')->nullable();
            $table->string('fee_hospital')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('vet')->nullable();
            $table->string('total')->nullable();
            $table->timestamps();
            $table->softDeletes();
           /*  $table->id();
            $table->string('transaction_code');
            $table->string('fee_doctor');
            $table->string('fee_specialist');
            $table->string('fee_hospital');
            $table->string('sub_total');
            $table->string('vat');
            $table->string('total');
            $table->enum('status', [1,2]);
            $table->timestamps();
            $table->softDeletes(); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
