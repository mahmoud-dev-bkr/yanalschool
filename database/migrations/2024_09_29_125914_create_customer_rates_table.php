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
        Schema::create('customer_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('rate');
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('customer_rate_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_rate_id')->constrained('customer_rates')->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('title');
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_rates');
        Schema::dropIfExists('customer_rate_translations');
    }
};
