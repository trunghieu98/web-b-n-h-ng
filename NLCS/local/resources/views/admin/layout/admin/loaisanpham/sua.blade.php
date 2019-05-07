@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý danh mục
            </h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Thêm sản phẩm</div>

    @if(Session::has('tc'))
    <div class="alert alert-{{Session::get('tc')}}"> {{Session::get('message')}}

    </div>
    @endif

                <div class="panel-body">
                    <form action="{{route('sualoai',$loai->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                        
                                <div class="form-group">
                                    <label>Tên loai</label>
                                    <p>{{$errors->first('ten')}}</p>
                                    <input required type="text" name="ten" class="form-control" value="{{$loai->ten_loai}}">
                                </div>
                            

                                <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                <a href="{{route('themloaisanpham')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
@endsection