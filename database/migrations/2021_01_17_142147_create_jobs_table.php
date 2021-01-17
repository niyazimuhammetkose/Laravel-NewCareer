<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',75)->nullable();
            $table->integer('category_id')->default(0);
            $table->text('detail')->nullable();

            $table->string('tecrube',75)->nullable();
            $table->string('askerlik',75)->nullable();
            $table->string('egitim',150)->nullable();
            $table->string('bolum',150)->nullable();
            $table->string('yabanci_dil',150)->nullable();

            $table->string('firma_adi')->nullable();

            $table->string('sektor',75)->nullable();
            $table->string('departman',75)->nullable();
            $table->string('calisma_sekli',75)->nullable();
            $table->string('pozisyon',75)->nullable();
            $table->string('sehir',75)->nullable();

            $table->integer('user_id')->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->string('slug',100)->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
