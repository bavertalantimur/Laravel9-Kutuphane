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
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',244)->nullable();
            $table->string('keywords',244)->nullable();
            $table->string('description',244)->nullable();
            $table->string('company',244)->nullable();
            $table->string('address',244)->nullable();
            $table->string('phone',244)->nullable();
            $table->string('fax',244)->nullable();
            $table->string('email',244)->nullable();
            $table->string('smtpserver',244)->nullable();
            $table->string('smtpemail',244)->nullable();
            $table->string('smtppassword',244)->nullable();
            $table->string('smtpport',244)->nullable();
            $table->string('facebook',244)->nullable();
            $table->string('instagram',244)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
            $table->string('status',10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *id



    aboutus
    contact
    references
    …
    status
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
