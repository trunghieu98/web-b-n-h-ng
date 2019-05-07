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
                                <?php $i = 0; ?>
                                <div class="form-group">
                                    <label>Chọn loai sản phẩm</label>
                                    <br>
                                    @foreach($loai as $loai)

                                    <input type="radio" name="loai_sp" value="{{$loai->id}}" onclick="showhide({{$i}})"> {{$loai->ten_loai}} <br>
                                    <?php $i++; ?>
                                    @endforeach


                                </div>
                                <div id="idlaptop0">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input required type="text" name="ten_sp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input required id="img" type="file" name="hinh_sp" class="form-control" onchange="document.getElementById('hinh').src = window.URL.createObjectURL(this.files[0])">
                                        <img id='hinh' src="" height=100px; width=100px />
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>

                                        <input required type="number" name="gia_sp" class="form-control" value="1000000" )">


                                    </div>

                                    <div class="form-group">
                                        <label>Bảo hành (thang/nam)</label>
                                        <input required type="number" name="bh_sp" class="form-control">
                                    </div>
                                </div>
                                <div id="idlaptop1">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input required type="text" name="ten_sp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh sản phẩm</label>
                                        <input required id="img" type="file" name="hinh_sp" class="form-control" onchange="document.getElementById('hinh').src = window.URL.createObjectURL(this.files[0])">
                                        <img id='hinh' src="" height=100px; width=100px />
                                        <input type="">
                                        <input type=""> <input type=""> <input type=""> <input type="">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>

                                        <input required type="number" name="gia_sp" class="form-control" value="1000000" )">


                                    </div>

                                    <div class="form-group">
                                        <label>Bảo hành (thang/nam)</label>
                                        <input required type="number" name="bh_sp" class="form-control">
                                    </div>
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
                                    <th>Tên sản phẩm</th>
                                    <th>ID sản phẩm</th>
                                    <th style="width:30%">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sanpham as $sp)
                                <tr>
                                    <td>{{$sp->ten_sp}}</td>
                                    <td>{{$sp->id}}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                        <a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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
<script>
    function showhide(n) {
        var i = 0;

        document.getElementById('idlaptop' + n).style.display = 'block';
        for (i = 0; i < 9; i++) {
            if (i != n) {

                document.getElementById('idlaptop' + i).style.display = 'none';
            }
        }
    }
</script>
@endsection