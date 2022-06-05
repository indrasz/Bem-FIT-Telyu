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
        Schema::table('vokasi_store_galleries', function (Blueprint $table) {
            $table->foreign('vokasi_stores_id', 'fk_vokasi_store_galleries_to_vokasi_store')->references('id')->on('vokasi_stores')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vokasi_store_galleries', function (Blueprint $table) {
            $table->dropForeign('fk_vokasi_store_galleries_to_vokasi_store');
        });
    }
};
