<?php

use Illuminate\Database\Seeder;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
class ThemQuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuanTriVien::create(
        	[ 'ten_dang_nhap'=>'admin1','mat_khau'=>Hash::make('123456'),'ho_ten'=>'Nguyễn Anh Thi' ]
        );
        QuanTriVien::create(
        	[ 'ten_dang_nhap'=>'admin2','mat_khau'=>Hash::make('123456'),'ho_ten'=>'Lê Đình Bảo Duy' ]
        );
        QuanTriVien::create(
        	[ 'ten_dang_nhap'=>'admin3','mat_khau'=>Hash::make('123456'),'ho_ten'=>'Nguyễn Hiếu Luân' ]
        );
    }
}
