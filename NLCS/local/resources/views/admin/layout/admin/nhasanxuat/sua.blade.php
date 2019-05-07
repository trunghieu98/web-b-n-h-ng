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
                    @if(Session::has('tc'))
                    <div class="alert alert-{{Session::get('tc')}}"> {{Session::get('message')}}

                    </div>
                    @endif
                </div>
                <div class="panel-body">
                    <form action="{{route('postsua',$nsanxuat->id)}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tên nhà sản xuất</label>
                                  
                                   <p style="color:red">{{$errors->first('ten_nsx')}}</p> 
                                    <input  type="text" name="ten_nsx" class="form-control" value="{{$nsanxuat->ten_nha_sx}}">
                                </div>
                                <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input id="img" type="file" name="hinh_sp" class="form-control" onchange="document.getElementById('hinh').src = window.URL.createObjectURL(this.files[0])">
                                        <img id='hinh' src="http://localhost//local/resources/upload/{{$nsanxuat->hinhanh}}" height=100px; width=100px />
                                    </div>


                                <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                <a href="{{route('postthemnhasanxuat')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
    <!--/.row-->
</div>
@endsection