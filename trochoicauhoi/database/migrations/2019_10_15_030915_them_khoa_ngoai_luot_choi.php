<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThemKhoaNgoaiLuotChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luot_choi', function (Blueprint $table) {
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('luot_choi', function (Blueprint $table) {
            //
        });
    }
}
