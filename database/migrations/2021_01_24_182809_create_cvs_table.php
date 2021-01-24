<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->string('name',50)->nullable();
            $table->string('email',75)->nullable();
            $table->string('phone',20)->nullable();
            $table->text('address')->nullable();
            $table->string('cinsiyet',20)->nullable();
            $table->string('uyruk',20)->nullable();
            $table->string('ehliyet',20)->nullable();
            $table->string('askerlik',50)->nullable();
            $table->text('deneyim')->nullable();
            $table->text('egitim')->nullable();
            $table->string('yabanci_dil',100)->nullable();
            $table->text('yetenekler')->nullable();
            $table->text('hobiler')->nullable();
            $table->string('status',5)->default('New');
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
        Schema::dropIfExists('cvs');
    }
}
