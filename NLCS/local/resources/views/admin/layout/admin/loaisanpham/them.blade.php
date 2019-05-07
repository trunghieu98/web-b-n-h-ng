@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục sản phẩm</h1>
            @if(Session::has('tc'))
            <div class="alert alert-{{Session::get('tc')}}">{{Session::get('message')}}</div>

            @endif
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Thêm danh mục
                    
                </div>
                <div class="panel-body">
                    <form action="{{route('postthemloaisanpham')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                   <p> {{$errors->first('ten_loai')}} </p>
                                    <input type="text" name="ten_loai" class="form-control">
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
                <div class="panel-heading">Danh sách danh mục</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-primary">
                                    <th>Tên danh mục</th>
                                    <th>ID loai</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($loai as $loai1)
                                <tr>
                                    <td>{{$loai1->ten_loai}}</td>
                                    <td>{{$loai1->id}}</td>
                                    <td>
                                        <a href="{{route('sualoaisanpham',$loai1->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                        <a href="{{route('xoaloaisanpham',$loai1->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row text-center">
                                        {{$loai->links()}}
                                </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
@endsection