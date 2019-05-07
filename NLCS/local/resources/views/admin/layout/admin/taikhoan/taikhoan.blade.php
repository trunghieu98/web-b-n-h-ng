@extends('admin.layout.index')
@section('content2')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main main11">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý tài khoản
                
                <div class="themtaikhoan">
                    <button class="button btn theasubmit thetsp" onclick="getElementById('themtaikhoan').style.display='block'"> Thêm tài khoản mới</button>
                </div>
            </h1>

        </div>
        <div class="row" id="themtaikhoan" style="display:none">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Tài khoản mới!

                </div>
               
                <div class="panel-body">
                    <form action="{{route('posttaikhoan')}}" class="container widthdk" name="frmThem" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <p style="color:red">{!! $errors->first('tk') !!}</p>
                                    <input type="text" class=" form-control" placeholder="abc123" name="tk">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <p style="color:red">{!! $errors->first('passw') !!}</p>
                                    <input type="password" class=" form-control" placeholder="abc123" name="passw">
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <p style="color:red">{!! $errors->first('passw1') !!}</p>
                                    <input type="password" class=" form-control" placeholder="abc123" name="passw1">
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
    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="scrollbar scrollbar-primary">
            <div class="force-overflow">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách tài khoản</div>
                    @if(Session::has('tc'))
                <div class="alert alert-{{Session::get('tc')}}">
                    {{Session::get("tb")}}

                </div>
                @endif
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>Tên đăng nhập </th>
                                        <th>Email</th>
                                        <th>Cấp độ</th>
                                        <th style="width:30%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($taikhoan as $taikhoan1)
                                    <tr>
                                        <td>{{$taikhoan1->tendangnhap}}</td>
                                        <td>{{$taikhoan1->email}}</td>

                                        <td>@if($taikhoan1->level==0)
                                            Tài khoản Thường
                                            @else
                                            Tài khoản Admin
                                            @endif
                                        </td>




                                        <td>
                                            <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                            <a href="{{route('xoatk',$taikhoan1->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <div class="ptrang">

                                </div>
                            </table>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="row text-center">
                        {{$taikhoan->links()}}
                    </div>
                </div>
            </div>
        </div>



    </div>
   





</div>
@endsection