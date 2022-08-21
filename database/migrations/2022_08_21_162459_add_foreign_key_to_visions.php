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
        Schema::table('visions', function (Blueprint $table) {
            $table->foreign('ormawas_id', 'fk_visions_to_ormawa')->references('id')->on('ormawas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visions', function (Blueprint $table) {
            $table->dropForeign('fk_visions_to_ormawa');
        });
    }
};
