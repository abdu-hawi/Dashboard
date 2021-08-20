<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name_ar');
            $table->string('site_name_en');
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('email')->nullable();
            $table->enum('main_lang',['ar','en'])->default('ar');
            $table->text('descriptions')->nullable();
            $table->text('keywords')->nullable();
            $table->enum('status',['close','open'])->default('open');
            $table->text('msg_maintenance_ar')->nullable();
            $table->text('msg_maintenance_en')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
