@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Thêm sản phẩm</div>
                <div class="panel-body">
                    <form action="{{route('postthemquangcao')}}"method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                
                                <div class="form-group">
                                    <label> Hình ảnh</label>
                                  
                                    <input required id="img" type="file" name="images" class="form-control" onchange="document.getElementById('hinh').src = window.URL.createObjectURL(this.files[0])">
			                    	<img id='hinh' src="" height=100px; width=100px/>
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