<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThemDeleteAtCauHinhDiemCauHoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cau_hinh_diem_cau_hoi', function (Blueprint $table) {
            $table->softDeletes();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cau_hinh_diem_cau_hoi', function (Blueprint $table) {
            //
        });
    }
}
