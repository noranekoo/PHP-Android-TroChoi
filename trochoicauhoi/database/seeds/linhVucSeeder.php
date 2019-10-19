<?php

use Illuminate\Database\Seeder;

class linhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('linh_vuc')->insert([
    		'ten_linh_vuc'=>'Cà khịa'
    	]);
    	DB::table('linh_vuc')->insert([
    		'ten_linh_vuc'=>'Thể thao'
    	]);
    	DB::table('linh_vuc')->insert([
    		'ten_linh_vuc'=>'Âm nhạc'
    	]);
    	DB::table('linh_vuc')->insert([
    		'ten_linh_vuc'=>'Chính trị'
    	]);
    	DB::table('linh_vuc')->insert([
    		'ten_linh_vuc'=>'Lịch sử'
    	]);
    	DB::table('linh_vuc')->insert([
    		'ten_linh_vuc'=>'Du Lịch'
    	]);
    }
}
