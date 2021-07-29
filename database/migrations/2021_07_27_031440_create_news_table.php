<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('title_kh')->nullable();
            $table->string('title_th')->nullable();
            $table->string('format')->nullable();
            $table->string('status')->nullable();
            $table->date('publish_at')->nullable();
            $table->date('expired_date')->nullable();
            $table->string('category')->nullable();
            $table->string('ref_link')->nullable();
            $table->string('description')->nullable();
            $table->string('description_kh')->nullable();
            $table->string('description_th')->nullable();
            $table->string('image')->nullable();
            $table->string('source')->nullable();
            $table->string('source_kh')->nullable();
            $table->string('source_th')->nullable();
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
        Schema::dropIfExists('news');
    }
}
