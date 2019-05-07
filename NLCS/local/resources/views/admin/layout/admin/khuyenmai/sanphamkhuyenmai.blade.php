@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">

    <div class="row">
      
            <div class="col-xs-12 col-md-6 col-lg-6">

                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm khuyến mãi sản phẩm</div>
                    @if(Session::has('tc'))
               <div class="alert alert-{{Session::get('tc')}}">
                   {{Session::get('message')}}
                   @endif
                    <div class="panel-body">
                        <form action="{{route('themspkm',$sanpham->id)}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <label>Chọn loại khuyến mãi</label>
                                        <select required name="sp_km" class="form-control">
                                            @foreach($khuyenmai as $km1)
                                            <option value="{{$km1->phantram}}">{{$km1->ten_km}}</option>
                                            @endforeach
                                        </select>
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
    <!--/.row-->
</div>
@endsection