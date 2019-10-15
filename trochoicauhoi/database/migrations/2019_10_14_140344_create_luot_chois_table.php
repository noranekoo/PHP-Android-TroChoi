<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_choi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('nguoi_choi_id');
            $table->integer('so_cau');
            $table->string('diem');
            $table->string('ngay_gio');
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
        Schema::dropIfExists('luot_choi');
    }
}
