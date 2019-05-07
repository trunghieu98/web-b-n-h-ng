@extends('master')
@section('content1')
<div class="bodythan">
    <div class="than container">
        <div class="row">
            <!--body left-->
            <!--bd1khung-->
            <div class="colbody1 colbody12">
                <div >

                <form action="{{route('postdangnhap')}}"  class="container widthdk" name="frmThem" method="post">   
                        <input type="hidden" name="_token" value="{{ csrf_token()  }}" > 
                        <h1 style="margin-left:200px; color:red">Đăng Nhập</h1>
                        @if(Session::has('tc'))
                        <div class="alert alert-{{Session::get('tc')}}">{{Session::get('message')}}</div>
                        @endif
                        <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        {!! $errors->first('tendangnhap')  !!}
                        <input style="max-width:550px" type="text" placeholder="Nhập Email" name="tendangnhap" class="form-control">

                        </div>
                    <div class="form-gr">
                    <label for="psw"><b>Password</b></label>
                        {!! $errors->first('matkhau')  !!}
                        <input style="max-width:550px" type="password" placeholder="Nhập Password" name="matkhau" class="form-control" >
                    </div>
                        <input style="margin-top:20px" type="submit" name="submit" value="Đăng Nhập" class="btn btn-primary">
                        <input style="margin-top:20px" type="submit" name="submit" value="Hủy" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 