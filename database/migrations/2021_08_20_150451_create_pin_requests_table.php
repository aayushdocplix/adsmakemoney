<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pin_requests', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('package_id')->nullable(false);
            $table->unsignedTinyInteger('pin_quentity')->nullable(false);
            $table->string('payment_method',50)->nullable(false);
            $table->unsignedTinyInteger('bank_id')->nullable(false);
            $table->string('refrence_number')->nullable(false);
            $table->string('receipt_file',255)->nullable(false);
            $table->date('deposit_date')->nullable(false);
            $table->time('deposit_time')->nullable(false);
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
        Schema::dropIfExists('pin_requests');
    }
}
