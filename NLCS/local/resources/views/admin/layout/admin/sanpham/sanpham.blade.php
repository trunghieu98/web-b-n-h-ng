@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý danh mục
                <div class="themsanpham">
                    <button class="button btn theasubmit thetsp" onclick="getElementById('themsanpham').style.display='block'"> Thêm sản phẩm mới </button>
                </div>
            </h1>

        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div id="themsanpham">
            <div class="col-xs-12 col-md-6 col-lg-6">

                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm sản phẩm</div>
                    @if(Session::has('tc'))
               <div class="alert alert-{{Session::get('tc')}}">
                   {{Session::get('message')}}
                   @endif
                    <div class="panel-body">
                        <form action="{{route('postthemsanpham')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <label>Chọn nhà sản xuất</label>
                                        <select required name="nha_sx" class="form-control">
                                            <option value=""></option>
                                            @foreach($nhasx as $nhasx4)
                                            <option value="{{$nhasx4->id}}">{{$nhasx4->ten_nha_sx}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Chọn loai sản phẩm</label>
                                        <select required name="loai_sp" class="form-control">
                                            <option value=""></option>
                                            @foreach($loai as $loai1)
                                            <option value="{{$loai1->id}}">{{$loai1->ten_loai}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input type="text" name="ten_sp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input id="img" type="file" name="hinh_sp" class="form-control" onchange="document.getElementById('hinh').src = window.URL.createObjectURL(this.files[0])">
                                        <img id='hinh' src="" height=100px; width=100px />
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>

                                        <input type="number" name="gia_sp" class="form-control" value="1000000" )">


                                    </div>

                                    <div class="form-group">
                                        <label>Bảo hành (thang/nam)</label>
                                        <input required type="number" name="bh_sp" class="form-control">
                                    </div>

                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <a href="#" class="btn btn-danger">Hủy bỏ</a>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="scrollbar scrollbar-primary">
                <div class="force-overflow">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Danh sách sản phẩm</div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>Tên sản phẩm </th>
                                            <th>Nhà sản xuất</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Hình ảnh sản phẩm</th>
                                            <th>Thêm mô tả</th>
                                            <th style="width:30%">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sanpham as $sanpham1)
                                        <tr>
                                            <td>{{$sanpham1->ten_sp}}</td>
                                            @foreach($nhasx as $nsx3)
                                            @if($nsx3->id==$sanpham1->id_ma_nsx)
                                            <td>{{$nsx3->ten_nha_sx}}</td>
                                            @endif
                                            @endforeach

                                            @foreach($loai as $loaisp5)
                                            @if($loaisp5->id==$sanpham1->id_ma_loai)
                                            <td>{{$loaisp5->ten_loai}}</td>
                                            @endif
                                            @endforeach
                                            <td>
                                                 <img style="height:100px; width:100px"src="http://localhost//local/resources/upload/{{$sanpham1->hinh_sp}}" alt=""></td>
                                            <td>
                                              @if($sanpham1->mota!=1)
                                                <a href="{{route('themmotasanpham',$sanpham1->id)}}" class="btn btn-warning">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                    Thêm mô tả
                                                </a>
                                                @else 

                                                <a href="{{route('themmotasanpham',$sanpham1->id)}}" class="btn btn-warning">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                    
                                                    
                                                    Sửa mô tả
                                                </a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('suasanpham',[$sanpham1->id,$sanpham1->id_ma_loai,$sanpham1->id_ma_nsx])}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                                <a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <div class="ptrang">
                               
                            </div>
                                </table>
                                
                            </div>
                           
                            <div class="clearfix"></div>
                        </div>
                        <div class="row text-center">
                                        {{$sanpham->links()}}
                                </div>
                    </div>
                </div>
            </div>



        </div>




    </div>
    <!--/.row-->
</div>
@endsection