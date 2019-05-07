@extends('master')
@section('content1')
<script>
    var IMAGE_PATHS11 = [];
    IMAGE_PATHS11[0] = "http://localhost/local/resources/upload/{{$chitiet->hinh_sp1}}";
    IMAGE_PATHS11[1] = "http://localhost/local/resources/upload/{{$chitiet->hinh_sp2}}";
    IMAGE_PATHS11[2] = "http://localhost/local/resources/upload/{{$chitiet->hinh_sp3}}";
    var n11 = 0;
    var n10 = 0;

    function chuyen(n11) {
        document.getElementById("laptopImg11").src = IMAGE_PATHS11[n11];
        n10 = n11;
    }

    function changeSlide() {

        n10 = n10 + 1;
        if (n10 < 0) {
            n10 = IMAGE_PATHS11.length - 1;
        }
        if (n10 > IMAGE_PATHS11.length - 1) {
            n10 = 0;
        }
        document.getElementById("laptopImg11").src = IMAGE_PATHS11[n10];

    }
    var A = setInterval(function() {
        changeSlide();
    }, 5000)
</script>
<div>
    <div class="container colbody1 clbd1">
        <!--image-->
        <div class="row">
            <p style="text-align:center; font-size:40px; color:blue;"> Thông Tin Sản Pham</p>
        </div>
        <!-- // image-->
        <!--row1-->
        <div class="row">
            <!--thongtin_left-->
            <div class="col-md-6 text-center">
                <div class="row ">
                    <div class="hinhanh">
                        <a href="#" target="_blank" id="link"><img id="laptopImg11" src="http://localhost/local/resources/upload/{{$chitiet->hinh_sp1}}" /></a>
                    </div>

                </div>
                <div class="ngancach">
                </div>
                <div class="row ">
                    <div class="col-md-4 col-left">
                        <img class="cursor right-sp" src="http://localhost/local/resources/upload/{{$chitiet->hinh_sp1}}" onclick="chuyen(0)" alt="">
                    </div>
                    <div class="col-md-4 col-center">
                        <img class="cursor right-sp" src="http://localhost/local/resources/upload/{{$chitiet->hinh_sp2}}" onclick="chuyen(1)" alt="">
                    </div>
                    <div class="col-md-4 col-right">
                        <img class="cursor right-sp" src="http://localhost/local/resources/upload/{{$chitiet->hinh_sp3}}" onclick="chuyen(2)" alt="">
                    </div>
                </div>
            </div>
            <!--//thongtin_left-->

            <!--thongtin_rigth-->
            <div class="col-md-6">
                <div>
                    <h2 class="text-h2">{{$chitiet->ten_sp}}</h2>
                    @if($loai->id_ma_loai==1)
                    <ul class="right_sp">
                        <li>
                            <span>
                                CPU
                            </span>
                            <div>{{$chitiet->cpu}}</div>
                        </li>
                        <li>
                            <span>Hệ điều hành:</span>
                            <div>{{$chitiet->he_dieu_hanh}}</div>
                        </li>

                        <li>
                            <span>Màn hình:</span>
                            <div>{{$chitiet->man_hinh}}</div>
                        </li>


                        <li class=""><span>RAM:</span>
                            <div>{{$chitiet->ram}}</div>
                        </li>
                        <li class=""><span>Bộ nhớ:</span>
                            <div>{{$chitiet->bo_nho}}</div>
                        </li>
                        <li class=""><span>Cart đồ họa:</span>
                            <div>{{$chitiet->do_hoa}}</div>
                        </li>
                        <li class=""><span>Pin</span>
                            <div>{{$chitiet->pin}}</div>
                        </li>
                        <li class=""><span>Đèn bàn phím</span>
                            <div>{{$chitiet->ban_phim}}</div>
                        </li>
                        <li></li>
                        <fieldset>
                            <button type="submit" name="submit" class="button btn theasubmit">
                                <a class="thehover" href="{{route('themgiohang',$loai->id)}}">Them vao gio hang</a>

                            </button>
                        </fieldset>




                    </ul>

                    @else
                    <ul class="right_sp">
                        <li>
                            <span>Màn hình:</span>
                            <div>{{$chitiet->man_hinh}}</div>
                        </li>
                        <li>
                            <span>Hệ điều hành:</span>
                            <div>{{$chitiet->he_dieu_hanh}}</div>
                        </li>
                        <li>
                            <span>Camera sau</span>
                            <div>{{$chitiet->cam_sau}}</div>
                        </li>
                        <li>
                            <span>
                                Camera trước
                            </span>
                            <div>{{$chitiet->cam_truoc}}</div>
                        </li>
                        <li>
                            <span>
                                CPU
                            </span>
                            <div>{{$chitiet->cpu}}</div>
                        </li>
                        <li class=""><span>RAM:</span>
                            <div>{{$chitiet->ram}}</div>
                        </li>
                        <li class=""><span>Bộ nhớ trong:</span>
                            <div>{{$chitiet->bo_nho}}</div>
                        </li>
                        <li class=""><span>Pin</span>
                            <div>{{$chitiet->pin}}</div>
                        </li>
                        <li></li>
                        <fieldset>
                            <button type="submit" name="submit" class="button btn theasubmit">
                                <a class="thehover" href="{{route('themgiohang',$loai->id)}}">Them vao gio hang</a>

                            </button>
                        </fieldset>
                    </ul>
                    @endif



                </div>
            </div>
            <!--//thongtin_rigth-->
        </div>
        <!--// row1-->

        <!--binhluan -->
        <div class="row">

            <h4 class="ttdh ttdh1">Bình Luận
            </h4>
            <div class="col-md-9 comment">
                <form action="{{route('postbinhluansp',$chitiet->id_ma_sp)}}" name="frmThem" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token()  }}">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        {!! $errors->first('email1') !!}
                        <input type="email" class="form-control" name="email1">
                    </div>
                    <div class="form-group">
                        <label for="name">Tên:</label>
                        {!! $errors->first('ten') !!}
                        <input type="text" class="form-control" name="ten">
                    </div>
                    <div class="form-group">
                        <label for="cm">Bình luận:</label>
                        {!! $errors->first('ghichu') !!}
                        <textarea required="" rows="10" id="cm" class="form-control" name="ghichu"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-default">Gửi</button>
                    </div>
                </form>
            </div>


        </div>
        <div class="ndbl">
            <div class="row">
                @foreach($comment as $cm)
                <div class="row">
                    <ul style="width:488px;background-color:#efeaea;
    margin-left: 15px;">
                        <li>
                            <b class="fas fa-user-tie"> {{$cm->ten}}</b>
                            <br>
                            <span>{{date('d/m/Y H:i',strtotime($cm->created_at))}}</span>
                        </li>
                        <li>
                            {{$cm->noi_dung}}
                            <i class="style-scope yt-icon"></i>
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
        <!--binhluan -->
        <!--row2-->
      


        <!--//row2-->





    </div>
</div>

@endsection