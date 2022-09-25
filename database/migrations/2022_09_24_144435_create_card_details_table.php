<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_payment_id');
            $table->unsignedInteger('card_number')->comment('card番号');
            $table->string('brand_name', 100)->comment('cardブランド');
            $table->string('method_of_payment')->comment('支払い形式');
            $table->timestamps();

            $table->foreign('card_payment_id')->references('id')->on('card_payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_details');
    }
};
