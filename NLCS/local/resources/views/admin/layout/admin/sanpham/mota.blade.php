@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Thêm mô tả sản phẩm
                    @if(Session::has('tc'))
               <div class="alert alert-{{Session::get('tc')}}">
                   {{Session::get('message')}}

               </div>
            @endif
                </div>
                <div class="panel-body">
                    @if($sanpham->id_ma_loai==1)
                    <form action="{{route('postthemmotasanpham',$sanpham->id_ma_loai)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div>
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$sanpham->id}}">
                                        <input type="hidden" name="id_ma_loai" value="{{$sanpham->id_ma_loai}}">
                                        <input required type="hidden" name="ten_sp" value="{{$sanpham->ten_sp}}">
                                        <label for="">Tên sản phẩm</label>
                                        <label class="form-control"> {{$sanpham->ten_sp}}</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Hệ điều hành</label>
                                        <p>{{$errors->first('he_dieu_hanh')}}</p>
                                        <input type="text" name="he_dieu_hanh" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>CPU</label>
                                        <p>{{$errors->first('cpu')}}</p>
                                        <input type="text" name="cpu" class="form-control">


                                    </div>

                                    <div class="form-group">
                                        <label>Màn hình</label>
                                        <p>{{$errors->first('man_hinh')}}</p>
                                        <input type="text" name="man_hinh" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ram</label>
                                        <p>{{$errors->first('ram')}}</p>
                                        <input type="text" name="ram" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Bộ nhớ</label>
                                        <p>{{$errors->first('bo_nho')}}</p>
                                        <input type="text" name="bo_nho" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Cart đồ họa</label>
                                        <p>{{$errors->first('do_hoa')}}</p>
                                        <input type="text" name="do_hoa" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pin</label>
                                        <p>{{$errors->first('pin')}}</p>
                                        <input type="text" name="pin" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kích thước</label>
                                        <p>{{$errors->first('kich_thuoc')}}</p>
                                        <input type="text" name="kich_thuoc" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Đèn bàn phím</label>
                                        <p>{{$errors->first('ban_phim')}}</p>
                                        <input type="text" name="ban_phim" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Thêm ảnh cho sản phẩm 1</label>
                                        <p>{{$errors->first('hinh_sp1')}}</p>
                                        <input type="file" name="hinh_sp1" class="form-control" onchange="document.getElementById('hinh1').src = window.URL.createObjectURL(this.files[0])">
                                        <img id="hinh1" src="" , height=100px; width=100px />
                                    </div>
                                    <div class="form-group">
                                        <label>Thêm ảnh cho sản phẩm 2</label>
                                        <p>{{$errors->first('hinh_sp2')}}</p>
                                        <input id="img" type="file" name="hinh_sp2" class="form-control" onchange="document.getElementById('hinh2').src = window.URL.createObjectURL(this.files[0])">
                                        <img id='hinh2' src="" height=100px; width=100px />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Thêm ảnh sản phẩm 3</label>
                                        <p>{{$errors->first('hinh_sp3')}}</p>
                                        <input type="file" name="hinh_sp3" onchange="document.getElementById('hinh3').src= window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="hinh3" height=100px; width=100px />
                                    </div>
                                </div>

                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="#" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    @elseif($sanpham->id_ma_loai==2)
                    <form action="{{route('postthemmotasanpham',$sanpham->id_ma_loai)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div>
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$sanpham->id}}">
                                        <input type="hidden" name="id_ma_loai" value="{{$sanpham->id_ma_loai}}">
                                        <input required type="hidden" name="ten_sp" value="{{$sanpham->ten_sp}}">
                                        <label for="">Tên sản phẩm</label>
                                        <label class="form-control"> {{$sanpham->ten_sp}}</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Hệ điều hành</label>
                                        <p>{{$errors->first('he_dieu_hanh')}}</p>
                                        <input type="text" name="he_dieu_hanh" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>CPU</label>
                                        <p>{{$errors->first('cpu')}}</p>
                                        <input type="text" name="cpu" class="form-control">


                                    </div>

                                    <div class="form-group">
                                        <label>Màn hình</label>
                                        <p>{{$errors->first('man_hinh')}}</p>
                                        <input type="text" name="man_hinh" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ram</label>
                                        <p>{{$errors->first('ram')}}</p>
                                        <input type="text" name="ram" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Bộ nhớ</label>
                                        <p>{{$errors->first('bo_nho')}}</p>
                                        <input type="text" name="bo_nho" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Camera trước</label>
                                        {{$errors->first('cam_truoc')}}
                                        <input class="form-control" type="text" name="cam_truoc">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Camera sau</label>
                                        {{$errors->first('cam_sau')}}
                                        <input class="form-control" type="text" name="cam_sau">

                                    </div>
                                    <div class="form-group">
                                        <label>Pin</label>
                                        <p>{{$errors->first('pin')}}</p>
                                        <input type="text" name="pin" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kích thước</label>
                                        <p>{{$errors->first('kich_thuoc')}}</p>
                                        <input type="text" name="kich_thuoc" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Thêm ảnh cho sản phẩm 1</label>
                                        <p>{{$errors->first('hinh_sp1')}}</p>
                                        <input type="file" name="hinh_sp1" class="form-control" onchange="document.getElementById('hinh1').src = window.URL.createObjectURL(this.files[0])">
                                        <img id="hinh1" src="" , height=100px; width=100px />
                                    </div>
                                    <div class="form-group">
                                        <label>Thêm ảnh cho sản phẩm 2</label>
                                        <p>{{$errors->first('hinh_sp2')}}</p>
                                        <input id="img" type="file" name="hinh_sp2" class="form-control" onchange="document.getElementById('hinh2').src = window.URL.createObjectURL(this.files[0])">
                                        <img id='hinh2' src="" height=100px; width=100px />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Thêm ảnh sản phẩm 3</label>
                                        <p>{{$errors->first('hinh_sp3')}}</p>
                                        <input type="file" name="hinh_sp3" onchange="document.getElementById('hinh3').src= window.URL.createObjectURL(this.files[0])">
                                        <img src="" id="hinh3" height=100px; width=100px />
                                    </div>
                                </div>

                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="#" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>

    </div>
    <!--/.row-->
</div>

@endsection