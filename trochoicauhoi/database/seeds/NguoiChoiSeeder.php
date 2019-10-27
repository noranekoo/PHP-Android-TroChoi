<?php

use Illuminate\Database\Seeder;

class NguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NguoiChoi::create([
        'ten_dang_nhap'=>'player1',
        'mat_khau'=>'123456',
        'email'=>'player1@gmail.com',
        'hinh_dai_dien'=>'',
        'diem_cao_nhat'=>'1000'
    ]);
        NguoiChoi::create([
        'ten_dang_nhap'=>'player2',
        'mat_khau'=>'123456',
        'email'=>'player2@gmail.com',
        'hinh_dai_dien'=>'',
        'diem_cao_nhat'=>'2000'
    ]);
        NguoiChoi::create([
        'ten_dang_nhap'=>'player3',
        'mat_khau'=>'123456',
        'email'=>'player3@gmail.com',
        'hinh_dai_dien'=>'',
        'diem_cao_nhat'=>'3000'
    ]);
        NguoiChoi::create([
        'ten_dang_nhap'=>'player4',
        'mat_khau'=>'123456',
        'email'=>'player4@gmail.com',
        'hinh_dai_dien'=>'',
        'diem_cao_nhat'=>'4000'
    ]);
        NguoiChoi::create([
        'ten_dang_nhap'=>'player5',
        'mat_khau'=>'123456',
        'email'=>'player5@gmail.com',
        'hinh_dai_dien'=>'',
        'diem_cao_nhat'=>'5000'
    ]);
    }
    }
}
