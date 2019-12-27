<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThemDeleteAtCauHinhTroGiup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cau_hinh_tro_giup', function (Blueprint $table) {
            $table->softDeletes();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cau_hinh_tro_giup', function (Blueprint $table) {
            //
        });
    }
}
