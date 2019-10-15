<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThemKhoaNgoaiLsMuaCredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lich_su_mua_credit', function (Blueprint $table) {
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
            $table->foreign('goi_credit_id')->references('id')->on('goi_credit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lich_su_mua_credit', function (Blueprint $table) {
            //
        });
    }
}
