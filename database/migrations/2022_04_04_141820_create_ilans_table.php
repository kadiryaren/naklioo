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
        Schema::create('ilans', function (Blueprint $table) {
            $table->id();
            $table->string('ilan_türü');
            $table->integer('user_id')->nullable();
            $table->string('ilan_basligi')->nullable();
            $table->string('nereden')->nullable();
            $table->string('nereye')->nullable();
            $table->string('arac')->nullable();
            $table->string('ürün_cesit')->nullable();
            $table->string('ürün')->nullable();
            $table->string('ton')->nullable();
            $table->string('fiyat')->nullable();
            $table->string('telefon')->nullable();
            $table->text('aciklama')->nullable();
            $table->string('tarih')->nullable();
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
        Schema::dropIfExists('ilans');
    }

    
};
