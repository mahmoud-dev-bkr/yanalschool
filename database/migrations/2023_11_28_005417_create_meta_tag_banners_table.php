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
        Schema::create('meta_tag_banners', function (Blueprint $table) {
            $table->id();
            $table->string('page')->comment('this column will be enum');
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::create('meta_tag_banner_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->string('locale')->index();
            $table->foreignId('meta_tag_banner_id')->constrained('meta_tag_banners')->onDelete('cascade');
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
        Schema::dropIfExists('meta_tag_banners');
    }
};
