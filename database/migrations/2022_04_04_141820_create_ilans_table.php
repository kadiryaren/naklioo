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
            $table->string("ilan_turu");
            $table->string("urun_cesidi");
            $table->string("urunun_tam_adi");
            $table->string("ilan_basligi");
            $table->string("nereden");
            $table->string("nereye");
            $table->boolean("yurtdisi");
            $table->string("ulke");
            $table->string("arac_cesidi");
            $table->string("arac_ustu");
            $table->float("fiyat");
            $table->float("kac_ton");
            $table->integer("telefon_numarasi");
            $table->string("ek_aciklama");
           // Yuk alabileceginiz iller many to many 
            $table->string("yukun_adi");
            $table->string("kac_kapak_bos");
            $table->string("ne_kadar_yuk_alabilirsin");
            $table->string("alabileceginiz_yuk_cesidi");
            // fotograf tablosu icin one to many 
            

            $table->string("yukun_adi");
            $table->string("yukun_adi");



            $table->float("fiyat");
            $table->float("fiyat");
            $table->float("fiyat");
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
