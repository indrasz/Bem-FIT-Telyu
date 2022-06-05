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
        Schema::create('vokasi_store_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vokasi_stores_id')->nullable()->index('fk_vokasi_store_galleries_to_vokasi_store');
            $table->string('thumbnail');
            $table->softDeletes();
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
        Schema::dropIfExists('vokasi_store_galleries');
    }
};
