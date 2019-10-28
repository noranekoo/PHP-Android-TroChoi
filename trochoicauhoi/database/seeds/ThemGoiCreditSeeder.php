<?php

use Illuminate\Database\Seeder;
use App\GoiCredit;
class ThemGoiCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GoiCredit::create(
        	['ten_goi_credit'=>'Gói 20k','credit'=>'200','so_tien'=>'20000']);
        GoiCredit::create(
        	['ten_goi_credit'=>'Gói 10k','credit'=>'90','so_tien'=>'10000']);
        GoiCredit::create(
        	['ten_goi_credit'=>'Gói 50k','credit'=>'550','so_tien'=>'50000']);
        GoiCredit::create(
        	['ten_goi_credit'=>'Gói 100k','credit'=>'1200','so_tien'=>'100000']);
        GoiCredit::create(
        	['ten_goi_credit'=>'Gói 500k','credit'=>'7000','so_tien'=>'500000']);
    }
}
