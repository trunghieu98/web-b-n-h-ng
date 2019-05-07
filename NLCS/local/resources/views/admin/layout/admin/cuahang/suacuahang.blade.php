@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hệ thống chi nhánh</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Thêm chi nhánh
                   
                </div>
                @if(Session::has('tc'))
                    <div class="alert alert-{{Session::get('tc')}}">
                        {{Session::get("message")}}

                    </div>
                    @endif
                <div class="panel-body">
                    <form action="{{route('suacuahang',$ch->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tên chi nhánh</label>
                                    <p style="color:red">
                                    {{$errors->first('ten_chi_nhanh')}}</p>
                                    
                                    <input type="text" name="ten_chi_nhanh" class="form-control" value="{{$ch->ten_chi_nhanh}}">
                                </div>
                                <div class="form-group">
                                    <label>Sô điện thoại</label>
                                    <p style="color:red">
                                    {{$errors->first('sdt')}}</p>
                                  
                                    <input type="number" name="sdt" class="form-control" value="{{$ch->sdt}}">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <p style="color:red">
                                    {{$errors->first('dia_chi')}}</p>
                                   
                                    <input  type="text" name="dia_chi" class="form-control" value="{{$ch->dia_chi}}">
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
                <div class="panel-heading">Danh sách hệ thống các chi nhánh</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-primary">
                                    <th>Tên chi nhánh </th>
                                    <th>Số điện thoại</th>
                                    <th>địa chỉ</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($chinhanh as $nsanxuat)
                                <tr>
                                    <td>{{$nsanxuat->ten_chi_nhanh}}</td>
                                    <td>{{$nsanxuat->sdt}}</td>
                                    <td>{{$nsanxuat->dia_chi}}</td>
                                     <td>
                                        <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                        <a href="{{route('xoacuahang',$nsanxuat->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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