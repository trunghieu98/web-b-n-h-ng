



        <?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(loaisanphamTableSeeder::class);
        //$this->call(nhasanxuatTableSeeder::class);
         //$this->call(sanphammtTableSeeder::class);
        //$this->call(motachitietTableSeeder::class);
        
        $this->call(sanphamtabTableSeeder::class);
    }

}
class loaisanphamTableSeeder extends Seeder{

    public function run()
    {
        DB::table('loaisanpham')->insert([
            array('ten_loai'=>'Laptop'),
            array('ten_loai'=>'Điện thoại'),
            array('ten_loai'=>'Máy Tính Bản'),
            array('ten_loai'=>'Phụ kiện điện thoại'),
            array('ten_loai'=>'Phụ kiện máy tính'),
            array('ten_loai'=>'Ram'),
            array('ten_loai'=>'Tảng nhiệt'),

            
        ]);
    }
}
class nhasanxuatTableSeeder extends Seeder{

    public function run()
    {
        DB::table('nhasanxuat')->insert([
            array('ten_nha_sx'=>'Apple'),
            array('ten_nha_sx'=>'Samsung'),
            array('ten_nha_sx'=>'Asus'),
            array('ten_nha_sx'=>'Oppo'),
            array('ten_nha_sx'=>'Dell'),
            array('ten_nha_sx'=>'MSI'),
            array('ten_nha_sx'=>'Lenovo'),
            array('ten_nha_sx'=>'HP'),

            
        ]);
    }
}
class sanphammtbTableSeeder extends Seeder{

    public function run()
    {
        DB::table('sanpham')->insert([
            //loai 1.1
              //loai 2
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'','hinh_sp'=>'dt1_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'Iphone 6','hinh_sp'=>'dt1_2.jpg','gia'=>'000000'),
  
              //loai 2.1
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung J7','hinh_sp'=>'dt2_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung A8','hinh_sp'=>'dt2_2.jpg','gia'=>'000000'),
              
              //loai 2.2
              array('ma_loai'=>'2','ma_nha_sx'=>'3','ten_sp'=>'Zenfone 2','hinh_sp'=>'dt3_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'3','ten_sp'=>'Zenfone 5','hinh_sp'=>'dt3_2.jpg','gia'=>'000000'),

              //array('ma_loai'=>'1','ma_nha_sx'=>'4','ten_sp'=>'Oppo','hinh_sp'=>'dt1_.jpg','gia'=>'000000'),
             // array('ma_loai'=>'2','ma_nha_sx'=>'5','ten_sp'=>'Dell DS725','hinh_sp'=>'dt1_.jpg','gia'=>'000000'),
            //array('ma_loai'=>'','ma_nha_sx'=>'6','ten_sp'=>'MSI IM968','hinh_sp'=>'dt1_.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'7','ten_sp'=>'Lenovo K5','hinh_sp'=>'dt4_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Z5','hinh_sp'=>'dt5_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Y5','hinh_sp'=>'dt6_1.jpg','gia'=>'000000'), 
        ]);
    }
}

class sanphampkltTableSeeder extends Seeder{

    public function run()
    {
        DB::table('sanpham')->insert([
            //loai 1.1
              //loai 2
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'tai phone','hinh_sp'=>'dt1_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'Pin','hinh_sp'=>'dt1_2.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'Iphone 7','hinh_sp'=>'dt1_3.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'Iphone X','hinh_sp'=>'dt1_4.jpg','gia'=>'000000'),
  
              //loai 2.1
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung J7','hinh_sp'=>'dt2_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung A8','hinh_sp'=>'dt2_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung A9','hinh_sp'=>'dt2_3.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung Note 5','hinh_sp'=>'dt2_4.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung Note 6','hinh_sp'=>'dt2_5.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung Note 9','hinh_sp'=>'dt2_6.jpg','gia'=>'000000'),
              
              //loai 2.2
              array('ma_loai'=>'2','ma_nha_sx'=>'3','ten_sp'=>'Zenfone 2','hinh_sp'=>'dt3_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'3','ten_sp'=>'Zenfone 5','hinh_sp'=>'dt3_2.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'3','ten_sp'=>'Zenfone C','hinh_sp'=>'dt3_3.jpg','gia'=>'000000'),

              //array('ma_loai'=>'1','ma_nha_sx'=>'4','ten_sp'=>'Oppo','hinh_sp'=>'dt1_.jpg','gia'=>'000000'),
             // array('ma_loai'=>'2','ma_nha_sx'=>'5','ten_sp'=>'Dell DS725','hinh_sp'=>'dt1_.jpg','gia'=>'000000'),
            //array('ma_loai'=>'','ma_nha_sx'=>'6','ten_sp'=>'MSI IM968','hinh_sp'=>'dt1_.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'7','ten_sp'=>'Lenovo K5','hinh_sp'=>'dt4_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Z5','hinh_sp'=>'dt5_1.jpg','gia'=>'000000'),
              array('ma_loai'=>'2','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Y5','hinh_sp'=>'dt6_1.jpg','gia'=>'000000'), 
        ]);
    }
}

class slidesTableSeeder extends Seeder{

    public function run()
    {
        DB::table('slides')->insert([
           
              array('images'=>'banner-l-1.png','gia'=>'000000'),
              array('images'=>'banner-l-2.png','gia'=>'000000'),
              array('images'=>'banner-l-3.png','gia'=>'000000'),
              array('images'=>'banner-l-4.png','gia'=>'000000'),
              array('images'=>'banner-l-5.png','gia'=>'000000'),
              array('images'=>'banner-l-6.png','gia'=>'000000'),
        ]);
    }
}

class sanphammtTableSeeder extends Seeder{

    public function run()
    {
        DB::table('sanpham')->insert([
            //loai 1.1
            array('ma_loai'=>'1','ma_nha_sx'=>'1','ten_sp'=>'MacBook Pro 2018','hinh_sp'=>'lt1_1.jpg','gia'=>'5000000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'1','ten_sp'=>'MacBook Air 2018','hinh_sp'=>'lt1_2.jpg','gia'=>'5000000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'1','ten_sp'=>'MacBook Pro 2019','hinh_sp'=>'lt1_3.jpg','gia'=>'6000000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'1','ten_sp'=>'MacBook Air 2019','hinh_sp'=>'lt1_4.jpg','gia'=>'7000000','giakm'=>'0','new'=>'0'),

            //loai1.2
            array('ma_loai'=>'1','ma_nha_sx'=>'2','ten_sp'=>'Samsung i5-5300','hinh_sp'=>'lt2_1.jpg','gia'=>'7500000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'2','ten_sp'=>'Samsung i5-6300','hinh_sp'=>'lt2_2.jpg','gia'=>'8500000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'2','ten_sp'=>'Samsung i5-7300','hinh_sp'=>'lt2_3.jpg','gia'=>'9500000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'2','ten_sp'=>'Samsung i7-5300','hinh_sp'=>'lt2_4.jpg','gia'=>'1000000','giakm'=>'0','new'=>'0'),
            
            //loai 1.3
            array('ma_loai'=>'1','ma_nha_sx'=>'3','ten_sp'=>'Asus NP359','hinh_sp'=>'lt3_1.jpg','gia'=>'5000000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'3','ten_sp'=>'Asus NP360','hinh_sp'=>'lt3_2.jpg','gia'=>'9000000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'3','ten_sp'=>'Asus NP450','hinh_sp'=>'lt3_3.jpg','gia'=>'8000000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'3','ten_sp'=>'Asus NP530','hinh_sp'=>'lt3_4.jpg','gia'=>'10000000','giakm'=>'0','new'=>'0'),

            //array('ma_loai'=>'1','ma_nha_sx'=>'4','ten_sp'=>'Oppo.jpg','gia'=>'000000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'5','ten_sp'=>'Dell DS725','hinh_sp'=>'lt4_1.jpg','gia'=>'6000000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'5','ten_sp'=>'Dell DS725','hinh_sp'=>'lt4_2.jpg','gia'=>'3000000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'5','ten_sp'=>'Dell DS725','hinh_sp'=>'lt4_3.jpg','gia'=>'2500000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'5','ten_sp'=>'Dell DS725','hinh_sp'=>'lt4_4.jpg','gia'=>'4500000','giakm'=>'0','new'=>'0'),

            array('ma_loai'=>'1','ma_nha_sx'=>'6','ten_sp'=>'MSI IM968','hinh_sp'=>'lt5_1.jpg','gia'=>'3700000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'6','ten_sp'=>'MSI IM968','hinh_sp'=>'lt5_2.jpg','gia'=>'2800000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'6','ten_sp'=>'MSI IM968','hinh_sp'=>'lt5_3.jpg','gia'=>'6900000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'6','ten_sp'=>'MSI IM968','hinh_sp'=>'lt5_4.jpg','gia'=>'5200000','giakm'=>'0','new'=>'0'),
            
            array('ma_loai'=>'1','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Y520','hinh_sp'=>'lt6_1.jpg','gia'=>'4700000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Y520','hinh_sp'=>'lt6_2.jpg','gia'=>'6900000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Y520','hinh_sp'=>'lt6_3.jpg','gia'=>'3800000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Y520','hinh_sp'=>'lt6_4.jpg','gia'=>'200000','giakm'=>'0','new'=>'0'),
            
            array('ma_loai'=>'1','ma_nha_sx'=>'8','ten_sp'=>'HP PS728','hinh_sp'=>'lt7_1.jpg','gia'=>'600000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'8','ten_sp'=>'HP PS728','hinh_sp'=>'lt7_2.jpg','gia'=>'4500000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'8','ten_sp'=>'HP PS728','hinh_sp'=>'lt7_3.jpg','gia'=>'2900000','giakm'=>'0','new'=>'0'),
            array('ma_loai'=>'1','ma_nha_sx'=>'8','ten_sp'=>'HP PS728','hinh_sp'=>'lt7_4.jpg','gia'=>'9900000','giakm'=>'0','new'=>'0'),
            // h
        ]);
    }
}

class sanphamdtTableSeeder extends Seeder{

    public function run()
    {
        DB::table('sanpham')->insert([
            //loai 1.1
              //loai 2
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'Iphone 5','hinh_sp'=>'dt1_1.jpg','gia'=>'1000000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'Iphone 6','hinh_sp'=>'dt1_2.jpg','gia'=>'2000000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'Iphone 7','hinh_sp'=>'dt1_3.jpg','gia'=>'4500000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'1','ten_sp'=>'Iphone X','hinh_sp'=>'dt1_4.jpg','gia'=>'3200000','giakm'=>'0','new'=>'0'),
  
              //loai 2.1
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung J7','hinh_sp'=>'dt2_1.jpg','gia'=>'2700000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung A8','hinh_sp'=>'dt2_1.jpg','gia'=>'6400000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung A9','hinh_sp'=>'dt2_3.jpg','gia'=>'4700000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung Note 5','hinh_sp'=>'dt2_4.jpg','gia'=>'3200000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung Note 6','hinh_sp'=>'dt2_5.jpg','gia'=>'100000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'2','ten_sp'=>'Samsung Note 9','hinh_sp'=>'dt2_6.jpg','gia'=>'200000','giakm'=>'0','new'=>'0'),
              
              //loai 2.2
              array('ma_loai'=>'2','ma_nha_sx'=>'3','ten_sp'=>'Zenfone 2','hinh_sp'=>'dt3_1.jpg','gia'=>'3000000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'3','ten_sp'=>'Zenfone 5','hinh_sp'=>'dt3_2.jpg','gia'=>'4000000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'3','ten_sp'=>'Zenfone C','hinh_sp'=>'dt3_3.jpg','gia'=>'5000000','giakm'=>'0','new'=>'0'),

              //array('ma_loai'=>'1','ma_nha_sx'=>'4','ten_sp'=>'Oppo','hinh_sp'=>'dt1_.jpg','gia'=>'000000','giakm'=>'0','new'=>'0'),
             // array('ma_loai'=>'2','ma_nha_sx'=>'5','ten_sp'=>'Dell DS725','hinh_sp'=>'dt1_.jpg','gia'=>'000000','giakm'=>'0','new'=>'0'),
            //array('ma_loai'=>'','ma_nha_sx'=>'6','ten_sp'=>'MSI IM968','hinh_sp'=>'dt1_.jpg','gia'=>'000000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'7','ten_sp'=>'Lenovo K5','hinh_sp'=>'dt4_1.jpg','gia'=>'6000000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Z5','hinh_sp'=>'dt5_1.jpg','gia'=>'7000000','giakm'=>'0','new'=>'0'),
              array('ma_loai'=>'2','ma_nha_sx'=>'7','ten_sp'=>'Lenovo Y5','hinh_sp'=>'dt6_1.jpg','gia'=>'8000000','giakm'=>'0','new'=>'0'), 
        ]);
    }

}

class motachitietTableSeeder extends Seeder{

    public function run()
    {
        DB::table('motachitiet')->insert([
            //loai 1.1
              //loai 2
              array('ma_sp'=>'165',
              'ten_sp'=>'MacBook Pro 2018',
              'chip'=>'Intel Core i5 8th 1.6GHz dual-core (Turbo Boost up to 3.6GHz',
              'ram'=>'8Gb 2133MHz LPDDR3',
              'phan_cung'=>'128GB SSD',
              'do_hoa'=>'Intel UHD Graphics 617',
              'man_hinh'=>'13.3 inch Retina (2560x1600) Diagonal LED-backlit, IPS',
              'he_dieu_hanh'=>'Mac Os',
              'hinh_sp1'=>'lt_1_1_1',
              'hinh_sp2'=>'lt_1_1_2',
              'hinh_sp3'=>'lt_1_1_3'),

              array('ma_sp'=>'166',
              'ten_sp'=>'MacBook Air 2018',
              'chip'=>'Intel Core i5 8th 1.6GHz dual-core (Turbo Boost up to 3.6GHz',
              'ram'=>'8Gb 2133MHz LPDDR3',
              'phan_cung'=>'128GB SSD',
              'do_hoa'=>'Intel UHD Graphics 617',
              'man_hinh'=>'13.3 inch Retina (2560x1600) Diagonal LED-backlit, IPS',
              'he_dieu_hanh'=>'Mac Os',
              'hinh_sp1'=>'lt_1_1_1',
              'hinh_sp2'=>'lt_1_1_2',
              'hinh_sp3'=>'lt_1_1_3'),

              array('ma_sp'=>'167',
              'ten_sp'=>'MacBook Pro 2019',
              'chip'=>'Intel Core i5 8th 1.6GHz dual-core (Turbo Boost up to 3.6GHz',
              'ram'=>'8Gb 2133MHz LPDDR3',
              'phan_cung'=>'128GB SSD',
              'do_hoa'=>'Intel UHD Graphics 617',
              'man_hinh'=>'13.3 inch Retina (2560x1600) Diagonal LED-backlit, IPS',
              'he_dieu_hanh'=>'Mac Os',
              'hinh_sp1'=>'lt_1_1_1',
              'hinh_sp2'=>'lt_1_1_2',
              'hinh_sp3'=>'lt_1_1_3'),

              array('ma_sp'=>'168',
              'ten_sp'=>'MacBook Pro 2019',
              'chip'=>'Intel Core i5 8th 1.6GHz dual-core (Turbo Boost up to 3.6GHz',
              'ram'=>'8Gb 2133MHz LPDDR3',
              'phan_cung'=>'128GB SSD',
              'do_hoa'=>'Intel UHD Graphics 617',
              'man_hinh'=>'13.3 inch Retina (2560x1600) Diagonal LED-backlit, IPS',
              'he_dieu_hanh'=>'Mac Os',
              'hinh_sp1'=>'lt_1_1_1',
              'hinh_sp2'=>'lt_1_1_2',
              'hinh_sp3'=>'lt_1_1_3'),
              ]);
              
    }
}

class sanphamtabTableSeeder extends Seeder{

    public function run()
    {
        DB::table('sanpham')->insert([
            //loai 1.1
              //loai 2
              array('ma_sp'=>'1','ma_loai'=>'3','ma_nha_sx'=>'1','ten_sp'=>'Table Apple NPS','hinh_sp'=>'mb1_1.jpg','gia'=>'1000000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'2','ma_loai'=>'3','ma_nha_sx'=>'1','ten_sp'=>'Table Apple NPM6','hinh_sp'=>'mb1_2.jpg','gia'=>'2000000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'3','ma_loai'=>'3','ma_nha_sx'=>'1','ten_sp'=>'Table Apple NPM7','hinh_sp'=>'mb1_3.jpg','gia'=>'4500000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'4','ma_loai'=>'3','ma_nha_sx'=>'1','ten_sp'=>'Table Apple NPMX','hinh_sp'=>'mb1_4.jpg','gia'=>'3200000','giakm'=>'0','new'=>'0'),
  
              //loai 2.1
              array('ma_sp'=>'5','ma_loai'=>'3','ma_nha_sx'=>'2','ten_sp'=>'Table Samsung J7','hinh_sp'=>'ss1_1.jpg','gia'=>'2700000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'6','ma_loai'=>'3','ma_nha_sx'=>'2','ten_sp'=>'Table Samsung A8','hinh_sp'=>'ss1_1.jpg','gia'=>'6400000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'7','ma_loai'=>'3','ma_nha_sx'=>'2','ten_sp'=>'Table Samsung A9','hinh_sp'=>'ss1_3.jpg','gia'=>'4700000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'8','ma_loai'=>'3','ma_nha_sx'=>'2','ten_sp'=>'Table Samsung Note 5','hinh_sp'=>'ss1_4.jpg','gia'=>'3200000','giakm'=>'0','new'=>'0'),
              
              //loai 2.2
              array('ma_sp'=>'9','ma_loai'=>'3','ma_nha_sx'=>'3','ten_sp'=>'Table Zenfone KPS2','hinh_sp'=>'as_1.jpg','gia'=>'3000000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'10','ma_loai'=>'3','ma_nha_sx'=>'3','ten_sp'=>'Table Zenfone KPS5','hinh_sp'=>'as_2.jpg','gia'=>'4000000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'11','ma_loai'=>'3','ma_nha_sx'=>'3','ten_sp'=>'Table Zenfone KPRC','hinh_sp'=>'as_3.jpg','gia'=>'5000000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'12','ma_loai'=>'3','ma_nha_sx'=>'3','ten_sp'=>'Table Zenfone KNSC','hinh_sp'=>'as_3.jpg','gia'=>'5000000','giakm'=>'0','new'=>'0'),

             // array('ma_sp'=>'1','ma_loai'=>'3','ma_nha_sx'=>'4','ten_sp'=>'Oppo','hinh_sp'=>'dt1_.jpg','gia'=>'000000','giakm'=>'0','new'=>'0'),
             array('ma_sp'=>'13','ma_loai'=>'3','ma_nha_sx'=>'5','ten_sp'=>'Table Dell DS725','hinh_sp'=>'de1_1.jpg','gia'=>'55000000','giakm'=>'0','new'=>'0'),
             array('ma_sp'=>'14','ma_loai'=>'3','ma_nha_sx'=>'5','ten_sp'=>'Table Dell DS850','hinh_sp'=>'de1_2.jpg','gia'=>'45000000','giakm'=>'4000000','new'=>'1'),
             array('ma_sp'=>'15','ma_loai'=>'3','ma_nha_sx'=>'5','ten_sp'=>'Table Dell DC525','hinh_sp'=>'de1_3.jpg','gia'=>'20000000','giakm'=>'1800000','new'=>'2'),
             array('ma_sp'=>'16','ma_loai'=>'3','ma_nha_sx'=>'5','ten_sp'=>'Table Dell DCS75','hinh_sp'=>'de1_4.jpg','gia'=>'73000000','giakm'=>'0','new'=>'0'),
            
             array('ma_sp'=>'17','ma_loai'=>'3','ma_nha_sx'=>'6','ten_sp'=>'Table MSI IM728','hinh_sp'=>'ms1_1.jpg','gia'=>'63000000','giakm'=>'6000000','new'=>'1'),
             array('ma_sp'=>'18','ma_loai'=>'3','ma_nha_sx'=>'6','ten_sp'=>'Table MSI IM868','hinh_sp'=>'ms1_2.jpg','gia'=>'47000000','giakm'=>'0','new'=>'0'),
             array('ma_sp'=>'19','ma_loai'=>'3','ma_nha_sx'=>'6','ten_sp'=>'Table MSI IP568','hinh_sp'=>'ms1_3.jpg','gia'=>'25000000','giakm'=>'0','new'=>'0'),
             array('ma_sp'=>'20','ma_loai'=>'3','ma_nha_sx'=>'6','ten_sp'=>'Table MSI IP768','hinh_sp'=>'ms1_4.jpg','gia'=>'15000000','giakm'=>'1200000','new'=>'1'),
              
             array('ma_sp'=>'21','ma_loai'=>'3','ma_nha_sx'=>'7','ten_sp'=>'Table Lenovo KC5','hinh_sp'=>'lv1_1.jpg','gia'=>'6000000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'22','ma_loai'=>'3','ma_nha_sx'=>'7','ten_sp'=>'Table Lenovo ZP7','hinh_sp'=>'lv1_12.jpg','gia'=>'7000000','giakm'=>'0','new'=>'0'),
              array('ma_sp'=>'23','ma_loai'=>'3','ma_nha_sx'=>'7','ten_sp'=>'Table Lenovo YN8','hinh_sp'=>'lv_3.jpg','gia'=>'8000000','giakm'=>'0','new'=>'0'), 
              array('ma_sp'=>'24','ma_loai'=>'3','ma_nha_sx'=>'7','ten_sp'=>'Table Lenovo CN4','hinh_sp'=>'lv_4.jpg','gia'=>'98000000','giakm'=>'0','new'=>'0'), 

              array('ma_sp'=>'25','ma_loai'=>'3','ma_nha_sx'=>'8','ten_sp'=>'Table HP CN3','hinh_sp'=>'hp_4.jpg','gia'=>'98000000','giakm'=>'0','new'=>'0'), 
              array('ma_sp'=>'26','ma_loai'=>'3','ma_nha_sx'=>'8','ten_sp'=>'Table HP CK1','hinh_sp'=>'hp_4.jpg','gia'=>'52000000','giakm'=>'400000','new'=>'1'), 
              array('ma_sp'=>'27','ma_loai'=>'3','ma_nha_sx'=>'8','ten_sp'=>'Table HP CP5','hinh_sp'=>'hp_4.jpg','gia'=>'74000000','giakm'=>'0','new'=>'0'), 
              array('ma_sp'=>'28','ma_loai'=>'3','ma_nha_sx'=>'8','ten_sp'=>'Table PH CN4','hinh_sp'=>'hp_4.jpg','gia'=>'68000000','giakm'=>'0','new'=>'0'), 
        ]);
    }

    
}
