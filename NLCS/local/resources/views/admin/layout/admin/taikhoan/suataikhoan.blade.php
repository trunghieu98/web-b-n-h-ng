@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý tài khoản
        </div>
        <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Sửa tài khoản

                </div>
               
                <div class="panel-body">
                    <form action="{{route('postsuataikhoan',$taikhoan->id)}}" class="container widthdk" name="frmThem" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <p style="color:red">{!! $errors->first('tk') !!}</p>
                                    <input type="text" class=" form-control" placeholder="abc123" name="tk" value="$taikhoan->tendangnhap">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <p style="color:red">{!! $errors->first('email') !!}</p>
                                    <input type="text" class=" form-control" placeholder="abc123@gmail.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <p style="color:red">{!! $errors->first('hten') !!}</p>
                                    <input type="text" class=" form-control" placeholder="Nguyễn văn xxx" name="hten">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoai</label>
                                    <p style="color:red">{!! $errors->first('sdt') !!}</p>
                                    <input type="text" class=" form-control" placeholder="012345xxx" name="sdt">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <p style="color:red">{!! $errors->first('dc') !!}</p>
                                    <input type="text" class=" form-control" placeholder="Đường/xã/quận/huyện/tỉnh/thànhphố" name="dc">
                                </div>
                                <div class="form-group">
                                   <label for="">Loại tài khoản</label>
                                   <p style="color:red">{!! $errors->first('level') !!}</p>
                                   <select name="level" class="form-control">
                                   <option value=""></option>
                                   <option value="0">Thường</option>
                                   <option value="1">Admin</option>
                                   </select>

                                </div>

                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{route('trangchuAdmin')}}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    </div>
 





</div>
@endsection