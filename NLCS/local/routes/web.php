<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */



//admin
route::get('th-admin', ['as' => 'trangchuAdmin', 'uses' => 'AdminController@getindex']);
route::group(['prefix' => 'th-admin'], function () {
    route::group(['prefix' => 'loaisanpham'], function () {

        Route::post('them-loai-sp', ['as' => 'postthemloaisanpham', 'uses' => 'AdminController@postloaisanpham']);
        Route::get('them-loai-sp', ['as' => 'themloaisanpham', 'uses' => 'AdminController@getloaisanpham']);
        route::get('sua-loai-sp/{id_loai}', ['as' => 'sualoaisanpham', 'uses' => 'AdminController@sualoaisanpham']);
        route::post('sua/{id}', ['as' => 'sualoai', 'uses' => 'AdminController@postsualoai']);
        route::get('xoa-loai-sp/{id}', ['as' => 'xoaloaisanpham', 'uses' => 'AdminController@xoaloaisanpham']);
    });

    route::group(['prefix' => 'nhasanxuat'], function () {
        Route::post('them-nha-sx', ['as' => 'postthemnhasanxuat', 'uses' => 'AdminController@postnhasanxuat']);
        Route::get('them-nha-sx', ['as' => 'postthemnhasanxuat', 'uses' => 'AdminController@getnhasanxuat']);
        Route::get('sua-nha-sx/{id}', ['as' => 'suanhasanxuat', 'uses' => 'AdminController@suanhasanxuat']);
        Route::post('sua/{id}', ['as' => 'postsua', 'uses' => 'AdminController@postsuanhasanxuat']);
        Route::get('xoa-nha-sx/{id}', ['as' => 'xoanhasanxuat', 'uses' => 'AdminController@xoanhasanxuat']);
    });

    route::group(['prefix' => 'sanpham'], function () {

        Route::get('them-san-pham', ['as' => 'themsanpham', 'uses' => 'AdminController@getsanpham']);
        Route::post('them-san-pham', ['as' => 'postthemsanpham', 'uses' => 'AdminController@postsanpham']);
        Route::get('sua-san-pham/{id}/{id_ma_loai}/{id_ma_nsx}', ['as' => 'suasanpham', 'uses' => 'AdminController@suasanpham']);
        Route::post('sua-san-pham/{id}', ['as' => 'postsuasanpham', 'uses' => 'AdminController@postsuasanpham']);
        Route::get('xoa-san-pham/{id}', ['as' => 'xoasanpham', 'uses' => 'AdminController@xoasanpham']);
        route::get('themspkm/{id}', ['as' => 'themspkm', 'uses' => 'AdminController@getthemspkm']);
        route::post('themspkm/{id}', ['as' => 'themspkm', 'uses' => 'AdminController@postthemspkm']);
        route::get('xoaspkm/{id}', ['as' => 'xoaspkm', 'uses' => 'AdminController@getxoaspkm']);


        Route::get('them-mo-ta-sp/{id}', ['as' => 'themmotasanpham', 'uses' => 'AdminController@getmotasanpham']);
        Route::post('them-mo-ta-sp1/{id_ma_loai}', ['as' => 'postthemmotasanpham', 'uses' => 'AdminController@postthemmotasanpham']);
    });
    route::group(['prefix' => 'quangcao'], function () {

        Route::get('them-quang-cao', ['as' => 'themquangcao', 'uses' => 'AdminController@getquangcao']);
    });
    route::group(['prefix' => 'taikhoan'], function () {
        Route::get('them-tai-khoan', ['as' => 'themtaikhoan', 'uses' => 'AdminController@gettaikhoan']);
        Route::post('them-tai-khoan', ['as' => 'posttaikhoan', 'uses' => 'AdminController@posttaikhoan']);
        route::get('xoa-tai-khoan/{id}', ['as' => 'xoatk', 'uses' => 'AdminController@xoataikhoan']);
    });
    route::group(['prefix' => 'loaisanpham'], function () { });
    route::group(['prefix' => 'khuyenmai'], function () {
        Route::get('them-khuyen-mai', ['as' => 'themkm', 'uses' => 'AdminController@getkm']);
        Route::post('them-khuyen-mai', ['as' => 'postthemkm', 'uses' => 'AdminController@postthemkm']);
        route::get('xoa-khuyen-mai/{id}', ['as' => 'xoakhuyenmai', 'uses' => 'AdminController@getxoakm']);
        route::get('sua-khuyen-mai/{id}', ['as' => 'suakhuyenmai1', 'uses' => 'AdminController@getsuakm']);
        route::post('sua-khuyenma/{id}', ['as' => 'suakhuyenmai', 'uses' => 'AdminController@postsuakm']);
    });
    route::group(['prefix' => 'chinhanh'], function () {
        Route::get('cuahang', ['as' => 'cuahang', 'uses' => 'AdminController@getcuahang']);
        route::post('themcuahang', ['as' => 'themcuahang', 'uses' => 'AdminController@postcuahang']);
        route::get('xoacuahang{id}', ['as' => 'xoacuahang', 'uses' => 'AdminController@getxoacuahang']);
        route::post('suacuahang/{id}', ['as' => 'suacuahang', 'uses' => 'AdminController@postsuacuahang']);
        route::get('suacuahang/{id}', ['as' => 'suacuahang', 'uses' => 'AdminController@getsuacuahang']);
    });
});



Route::post('them-mo-ta-sp', ['as' => 'postthemmotacuthe', 'uses' => 'AdminController@postmotasanpham']);
Route::post('them-quang-cao', ['as' => 'postthemquangcao', 'uses' => 'AdminController@postquangcao']);











//goitrangchu
route::get('index', ['as' => 'trangchu', 'uses' => 'trangchuController@getindex']);
Route::get('/', 'trangchuController@getindex');
// route::get('{all?}','trangchuController@getindex')->where('all','(.*)');
//--goitrangchu

//loaisanpham
route::get('loai-san-pham/{id}', ['as' => 'loaisanpham', 'uses' => 'trangchuController@getloaisp']);
route::get('san-pham/{id_nsx}/{id_loai}', ['as' => 'sanpham', 'uses' => 'trangchuController@sanpham']);
route::get('sapxep/{type}/{t}', ['as' => 'sapxep', 'uses' => 'trangchuController@sapxep']);
route::get('sapxep/{type}/{t}/{id_nha_sx}', ['as' => 'sapxep1', 'uses' => 'trangchuController@sapxepl']);
route::get('sapxep/{t}', ['as' => 'sapxep', 'uses' => 'trangchuController@sapxeptt']);
//loaisanpham

//gio hang
route::get('gio-hang', ['as' => 'giohang', 'uses' => 'trangchuController@giohang']);
route::get('del-tocat/{id}', ['as' => 'xoagiohang', 'uses' => 'trangchuController@deltocart']);
route::get('del-tocat1/{id}', ['as' => 'xoagiohang1', 'uses' => 'trangchuController@deltocart1']);
route::get('show-cart', ['as' => 'hienthigiohang', 'uses' => 'trangchuController@showcart']);
route::get('add-to-cart/{id}', ['as' => 'themgiohang', 'uses' => 'trangchuController@getaddtocart']);
route::post('dathang', ['as' => 'dathang', 'uses' => 'trangchuController@postdathang']);
route::get('dathangxong', 'trangchuController@getdathangxong');
//--giohang

//dangnhap
route::get('dang-nhap', ['as' => 'dangnhap', 'uses' => 'LoginController@dangnhap']);
route::post('dang-nhap-thanh-vien', ['as' => 'postdangnhap', 'uses' => 'LoginController@dangnhaptv']);
//--dangnhap

//dangky
Route::get('dang-ky', ['as' => 'dangkytv', 'uses' => 'UserController@formdangky']);
Route::post('dang-ky-thanh-vien', ['as' => 'postdangky', 'uses' => 'UserController@dangkytv']);
//--dangky

//chitietsanp/binhluan

route::get('chi-tiet-san-pham/{id_ma_sp}', ['as' => 'chitietsanpham', 'uses' => 'trangchuController@chitietsp']);
Route::post('binh-luan-sp/{id_ma_sp}', ['as' => 'postbinhluansp', 'uses' => 'trangchuController@binhluansp']);
//--chitietsanp/binhluan

// dinh danh
//route::get('{all?}', 'NLCSController@index')->where('all', '(.*)');
route::get('log-out', ['as' => 'logout', 'uses' => 'LoginController@logout1']);



//--tim kiem
route::get('tim-kiem', ['as' => 'posttimkiem', 'uses' => 'trangchuController@posttimkiem']);
/*

        route::group(['prefix' => 'schema/create'], function () {
        route::get('taikhoan', function () {
            Schema::create('taikhoan', function ($table) {
                $table->increments('idtk');
                $table->string('tendangnhap');
                $table->string('matkhau');
                $table->string('email');
                $table->string('hoten');
                $table->date('ngaysinh');
                $table->string('cmnd');
                $table->string('sodienthoai');
                $table->string('diachi');
                $table->timestamps();
            });
        });
        //sx
        route::get('nhasanxuat', function () {
            Schema::create('nhasanxuat', function ($table) {
                $table->increments('ma_nha_sx');
                $table->string('ten_nha_sx');

            });
        });
        //loai
        route::get('loaisanpham', function () {
            Schema::create('loaisanpham', function ($table) {
                $table->increments('ma_loai');
                $table->string('ten_loai');

            });
        });
        // sanpham 
        route::get('sanpham', function () {
            Schema::create('sanpham', function ($table) {
                $table->increments('ma_sp');
                $table->integer('ma_loai')->unsigned();
                $table->string('ten_nha_sx');
                $table->string('ten_sp');
                $table->foreign('ma_loai')->references('ma_loai')->on('loaisanpham')->onDelete('cascade');
            });
        });
        route::get('giohang', function () {
            Schema::create('giohang', function ($table) {
                $table->increments('stt');

            });
        });
        route::get('hoadon', function () {
            Schema::create('hoadon', function ($table) {
                $table->string('so_hoa_don')->primary('so_hoa_don');
                $table->integer('stt');
                $table->foreign('stt')->references('stt')->on('giohang')->onDelete('cascade');
            });
        });
        route::get('sanphamcuthe', function () {
            Schema::create('sanphamcuthe', function ($table) {
                $table->string('ma_sp_ct')->primary('ma_sp_ct');
                $table->string('so_hoa_don');
                $table->integer('ma_sp');;
                $table->foreign('so_hoa_don')->references('so_hoa_don')->on('hoadon')->onDelete('cascade');
                $table->foreign('ma_sp')->references('ma_sp')->on('sanpham')->onDelete('cascade');
            });
        });
        route::get('khuyenmai', function () {
            Schema::create('khuyenmai', function ($table) {
                $table->increments('ma_km');
                $table->string('ten_km');
                $table->string('mo_ta_km');
                $table->date('ngay_bd');
                $table->date('ngay_kt');
            });
        });
        route::get('khuyenmaisanpham', function () {
            Schema::create('khuyenmaisanpham', function ($table) {
                $table->integer('ma_km')->primary('ma_km');
                $table->integer('ma_sp')->primary('ma_sp');
                $table->string('gia_tri_km');
                $table->foreign('ma_km')->references('ma_km')->on('khuyenmai')->onDelete('cascade');
                $table->foreign('ma_sp')->references('ma_sp')->on('sanpham')->onDelete('cascade');

            });
        });

    });


        route::get('ho-chi-minh', ['as' => 'hcm', function () {
        return 'anbg bnbg hjjbh';
    }]);
    //dinh danh group
    route::group(['prefix' => 'sanpham'], function () {
        Route::get('Test1', function () {
            echo 'xin chao A';
        });
        Route::get('Test2', function () {
            echo 'xin chao 2';
        });
        Route::get('Test3', function () {
            echo 'xin chao 3';
        });
    });

    route::get('goi-view', function () {
        return view('index');
    });
    route::get('url/full', function () {
        return URL::full();
    });
    route::get('url/asset', function () {
        return asset('css/style1.css');
    });
    route::get('url/to', function () {
        return URL::to('truyen', ['x122132']);
    });

    //tao csdl
    route::get('binhluan/create', function () {
        Schema::create('binhluan', function ($table) {
            $table->increments('id');
            $table->integer('ma_sp');
            $table->string('email');
            $table->integer('ten');
            $table->string('noidung');
            $table->timestamps();
        });
    });

    //tao mo ta chi tiet
    route::get('motachitiet/create', function () {
        Schema::create('motachitiet', function ($table) {
            $table->increments('id');
            $table->integer('ma_sp');
            $table->string('ten_sp');
            $table->string('chip');
            $table->string('ram');
            $table->string('phan_cung');
            $table->string('do_hoa');
            $table->string('man_hinh');
            $table->string('he_dieu_hanh');
            $table->string('cam_truoc');
            $table->string('cam_sau');
            $table->string('cpu');
            $table->string('bo_nho');
            $table->string('hinh_sp1');
            $table->string('hinh_sp2');
            $table->string('hinh_sp3');
            $table->foreign('ma_sp')->references('ma_sp')->on('sanpham')->onDelete('cascade');
            $table->timestamps();
        });
    });

    //tao 1 du lieu cho 1 thuoc tinh
    route::get('schema/creatchủe/abc', function ($table) {
        Schema::create('taikhoan', function ($table) {
            $table->increments('idtk');
            $table->string('tendangnhap');
            $table->string('matkhau');
            $table->string('email');
            $table->string('hoten');
            $table->date('ngaysinh');
            $table->string('sodienthoai');
            $table->integer('kn_id')->unsigned();
            $table->integer('kn_id')->references('id')->on('abcd')->onDelete('cascade');
            $table->timestamps();
        });
        // them 1 cot
        route::get('binhluanabc', function () {
            Schema::table('binhluan', function ($table) {
                $table->integer('gia');
                $table->integer('giakm');
                $table->integer('new');
                $table->timestamps();
            });
        });
        //lay cot du lieu
        route::get('query/select-column', function () {
            $data = DB::table('abcxxx')->select('name')->get();
            echo '<pre>';
            print_r($data);
            echo '<pre>';
        });
        //dieu kien
        route::get('query/where', function () {
            $data = DB::table('abcxxx')->where('gia', 2000)->orwhere('gia', 4000)->get;
            echo '<pre>';
            print_r($data);
            echo '<pre>';
        });
        //dem so dong
        route::get('query/count', function () {
            $data = DB::table('abcxxx')->count();
            echo $data;
        });

        route::get('query/update', function () {
            DB::table('abcxxx')->where('id', 2)->update(['name' => 'ooooooooo', 'gia' => '2000000000']);

            return 'thanh cong';
        });
    });
*/
Auth::routes();
