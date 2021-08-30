<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneratedPinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generated_pins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->foreign('package_id')->references('id')->on('packages');
            $table->foreign('user_id')->references('id')->on('users');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generated_pins');
    }
}
