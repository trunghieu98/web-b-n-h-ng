@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Thêm nhà sản xuất
                   
                </div>
                @if(Session::has('tc'))
                    <div class="alert alert-{{Session::get('tc')}}">
                        {{Session::get("message")}}

                    </div>
                    @endif
                <div class="panel-body">
                    <form action="{{route('postthemnhasanxuat')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tên nhà sản xuất</label>
                                    <input required type="text" name="ten_nsx" class="form-control">
                                </div>

                                <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input id="img" type="file" name="hinh_sp" class="form-control" onchange="document.getElementById('hinh').src = window.URL.createObjectURL(this.files[0])">
                                        <img id='hinh' src="" height=100px; width=100px />
                                    </div>

                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="#" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-7 col-lg-7">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách nhà sản xuất</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-primary">
                                    <th>Tên nhà sản xuất</th>
                                    <th>ID nhà sản xuất</th>
                                    <th>Ảnh đại diện</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nsanxuat as $nsanxuat)
                                <tr>
                                    <td>{{$nsanxuat->ten_nha_sx}}</td>
                                    <td>{{$nsanxuat->id}}</td>
                                    <td><img style="height:50px; width:100px; padding:15px;" src="http://localhost//local/resources/upload/{{$nsanxuat->hinhanh}}" alt=""></td>
                                    <td>
                                        <a href="{{route('suanhasanxuat',$nsanxuat->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                        <a href="{{route('xoanhasanxuat',$nsanxuat->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
@endsection