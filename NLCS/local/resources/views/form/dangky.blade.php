<!-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/css1/css/admin.css')}}">

    <link rel="stylesheet" href="<?php echo asset('public/css1/bootstrap/css/bootstrap.min.css'); ?> ">
    <link href="<?php echo asset('public/css1/bootstrap/css/bootstrap.css'); ?> " rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Đăng ký thanh viên</title>
</head>

<body>

    <div class="hero-image">
        <div class="container ">
            <div class="colbody1">
                <div class="row"> -->
                @extends('master')
@section('content1')
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Thêm tài khoản mới!

                            </div>
                            @if(Session::has('tc'))
                            <div class="alert alert-{{Session::get('tc')}}">
                                {{Session::get("message")}}

                            </div>
                            @endif
                            <div class="panel-body">
                                <form action="{{route('postdangky')}}" class="container widthdk" name="frmThem" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="row" style="margin-bottom:40px">
                                        <div class="col-xs-8">
                                            <div class="form-group">
                                                <label>Tài khoản</label>
                                                <p style="color:red">{!! $errors->first('tk') !!}</p>
                                                <input type="text" class=" form-control" placeholder="Tài khoản" name="tk">
                                            </div>
                                            <div class="form-group">
                                                <label>Mật khẩu</label>
                                                <p style="color:red">{!! $errors->first('passw') !!}</p>
                                                <input type="password" class=" form-control" placeholder="Enter Password" name="passw">
                                            </div>
                                            <div class="form-group">
                                                <label>Nhập lại mật khẩu</label>
                                                <p style="color:red">{!! $errors->first('passw1') !!}</p>
                                                <input type="password" class=" form-control" placeholder="Enter Password" name="passw1">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <p style="color:red">{!! $errors->first('email') !!}</p>
                                                <input type="text" class=" form-control" placeholder="Enter Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label>Họ tên</label>
                                                <p style="color:red">{!! $errors->first('hten') !!}</p>
                                                <input type="text" class=" form-control" placeholder="Enter Email" name="hten">
                                            </div>
                                            <div class="form-group">
                                                <label>Số điện thoai</label>
                                                <p style="color:red">{!! $errors->first('sdt') !!}</p>
                                                <input type="text" class=" form-control" placeholder="012345xxx" name="sdt">
                                            </div>
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <p style="color:red">{!! $errors->first('dc') !!}</p>
                                                <input type="text" class=" form-control" placeholder="Địa chỉ" name="dc">
                                            </div>

                                            <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                            <a href="{{route('trangchu')}}" class="btn btn-danger">Hủy bỏ</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endsection 
                <!-- </div>
            </div>
        </div>
    </div>
</body>

</html> -->