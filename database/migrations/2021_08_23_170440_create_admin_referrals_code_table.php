<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminReferralsCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_referrals_code', function (Blueprint $table) {
            $table->id();
            $table->string('referral_code',20);
            $table->unsignedBigInteger('generated_pins_id');
            $table->timestamps();
            $table->foreign('generated_pins_id')->references('id')->on('generated_pins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_referrals_code');
    }
}
