<?php

use Illuminate\Database\Seeder;

class cauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cau_hoi')->insert([
    		'noi_dung'=>'Thằng Luân mập không ^-^ ?',
    		'linh_vuc_id'=>'1',
    		'phuong_an_a'=>'Thấy cũng mập',
    		'phuong_an_b'=>'Thấy rất mập',
    		'phuong_an_c'=>'Thấy cũng hơi mập',
    		'phuong_an_d'=>'Thấy mập vừa vừa',
    		'dap_an'=>'Thấy rất mập'
    	]);
    	DB::table('cau_hoi')->insert([
    		'noi_dung'=>'Tỷ số chung cuộc trận đá bóng giữa Việt nam và indonesia là bao nhiêu ?',
    		'linh_vuc_id'=>'2',
    		'phuong_an_a'=>'1-1',
    		'phuong_an_b'=>'0-0',
    		'phuong_an_c'=>'1-3',
    		'phuong_an_d'=>'0-3',
    		'dap_an'=>'1-3'
    	]);
    	DB::table('cau_hoi')->insert([
    		'noi_dung'=>'Bài hát buồn lắm em ơi do ca sĩ nào trình bày ?',
    		'linh_vuc_id'=>'3',
    		'phuong_an_a'=>'Trình Thăng Bình',
    		'phuong_an_b'=>'Trình Công Sơn',
    		'phuong_an_c'=>'Trịnh Đình Quang',
    		'phuong_an_d'=>'Trịnh Đình Công',
    		'dap_an'=>'Trịnh Đình Quang'
    	]);
    	DB::table('cau_hoi')->insert([
    		'noi_dung'=>'Thuộc tính đặc trưng của vật chất theo quan niệm MácLênin là gì?',
    		'linh_vuc_id'=>'4',
    		'phuong_an_a'=>'Là một phạm trù triết học',
    		'phuong_an_b'=>'Là thực tại khách quan tồn tại bên ngoài, không lệ thuộc vào cảm giác',
    		'phuong_an_c'=>'Là toàn bộ thế giới hiện thực',
    		'phuong_an_d'=>'Là tất cả những gì tác động vào giác quan ta gây lên cảm giác',
    		'dap_an'=>'Là thực tại khách quan tồn tại bên ngoài, không lệ thuộc vào cảm giác'
    	]);
    	DB::table('cau_hoi')->insert([
    		'noi_dung'=>'Việt Nam giải phóng miền Nam năm bao nhiêu ?',
    		'linh_vuc_id'=>'5',
    		'phuong_an_a'=>'2019',
    		'phuong_an_b'=>'1999',
    		'phuong_an_c'=>'1975',
    		'phuong_an_d'=>'1945',
    		'dap_an'=>'1975'
    	]);
    		DB::table('cau_hoi')->insert([
    		'noi_dung'=>'Đâu là hang động tự nhiên lớn nhất thế giới ?',
    		'linh_vuc_id'=>'6',
    		'phuong_an_a'=>'Sơn Đoòng',
    		'phuong_an_b'=>'Thiên Cung',
    		'phuong_an_c'=>'Phong Nha',
    		'phuong_an_d'=>'Thủ Thiêm :D',
    		'dap_an'=>'Sơn Đoòng'
    	]);
    }
}
