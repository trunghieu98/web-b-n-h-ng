@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý danh mục
               
            </h1>
            @if(Session::has('tc'))
                <div class="alert alert-{{Session::get('tc')}}"> {{Session::get('message')}}
                </div>
                @endif
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6">

            <div class="panel panel-primary">
                <div class="panel-heading">Sửa Khuyến mãi</div>
                <div class="panel-body">
                    <form action="{{route('suakhuyenmai',$khuyenmai->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">`

                                <div class="form-group">
                                    <label>Tên khuyến mãi</label>
                                    <p style="color:red">{{$errors->first('ten_km')}}</p>
                                    <input type="text" name="ten_km" class="form-control" value="{{$khuyenmai->ten_km}}">
                                </div>
                                <div class="form-group">
                                    <label>Số tiền giảm giá tính theo phân trăm</label>
                                    <p style="color:red">{{$errors->first('tien_km')}}</p>
                                    <input type="text" name="tien_km" class="form-control" value="{{$khuyenmai->phantram}}">
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

   

   <div class="col-xs-12 col-md-6 col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách khuyến mãi</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-primary">
                                    <th>Tên khuyến mãi</th>
                                    <th>Phầm trăm giảm giá</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($km as $km1)
                                <tr>
                                    <td>{{$km1->ten_km}}</td>
                                    <td>{{$km1->phantram}}</td>
                                    <td>
                                        <a href="{{route('suakhuyenmai1',$km1->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                        <a href="{{route('xoakhuyenmai',$km1->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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

@endsection