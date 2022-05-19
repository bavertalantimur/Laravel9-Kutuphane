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
        Schema::create('books', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('author_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->text('detail')->nullable();
            $table->string('number_page',8);
            $table->string('language',25);
            $table->string('publishing_date');
            $table->string('status',5)->nullable()->default('False');
            $table->string('slug');
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
        Schema::dropIfExists('books');
    }
};
