<div class="header container-fluid">
    <!--top-->
    <div class="top row">
        <div class="col-md-8">
            <ul>
                <li> <a href="{{route('trangchu')}}">Trang Chủ</a></li>
                <li>|</li>
                <li><i class="fas fa-shopping-cart ml-1 iconspham"></i>
                    <a href="#" style="margin: 8px;">Sản Phẩm </a></li>
                <li>|</li>
                <li><i class="fas fa-phone mr-2 iconphone"></i>
                    <a href="#">Trực tuyến</a></li>
                <li>|</li>
                <li><a href="#">Tin tức nổi bậc</a></li>
                
                   
            </ul>
        </div>
        <div class="col-md-4">
            <ul>
                <li>
                    <a href="#">HỆ THỐNG CỬA HÀNG</a>
                </li>
               
            </ul>
        </div>
    </div>
    <!-- end top-->
    <!--danh muc san pham-->
    <div class="row danhmuc">
        <div class="col-md-3">
            <ul>
                <div class="menu menusp1">
                    <div class="danhmucspp mucsp fas fa-bars icon">
                        <span class="dmsp">DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="menu-content">
                        @foreach($loai_sp as $loai)
                        <a class="dinhdang" href="{{route('loaisanpham',$loai->id)}}">{{$loai->ten_loai}}</a>
                        @endforeach
                    </div>
                </div>
                </li>

            </ul>
        </div>
        <div class="col-md-3">
            <div class="search">
                <form method="get" action="{{route('posttimkiem')}}" enctype="multipart/form-data">

                    <input type="text" class="text" id="text_search" name="tktimkiem" placeholder="Gõ từ khóa tìm kiếm..." autocomplete="off" style="width: 344px;">
                    <input type="submit" id="submit_search" value="Tìm kiếm" class="far fa-search">
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <p>Đặt hàng online</p>
                    <h3>0907338376</h3>
                </div>
                <div class="col-md-7">
                   
                    @if(Auth::check())
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <p class="tk" style="margin-left:30px">Xin chào</p>
                            <div class="tk1">
                            <i class="fas fa-user-alt">{{Auth::user()->tendangnhap}}</i>
                                
                                <i style="font-size: 10px">|</i>
                                <a href="{{url('log-out')}}"><i class="fas fa-sign-out-alt"> Đăng xuất</i></a>
                                <!-- <form action="{{route('logout')}}" method="post">
                                <input type="hidden" name="_token" vuale="csrf_token()">
                           <button type="submit" name="submit"> Dng xuat</button>
                            </form> -->
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-md-3">
                        <i class="fas fa-user-circle icon1"></i>
                    </div>
                    <div class="col-md-9">
                        <p class="tk">Tài khoản</p>
                        <div class="tk1">
                            <a href="{{route('dangkytv')}}">Đăng ký</a>
                            <i style="font-size: 10px">|</i>
                            <a href="{{route('dangnhap')}}">Đăng nhập</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="menu">
                <div class="danhmucspp cart fas fa-cart-plus">
                    <span class="cartghh">
                        @if(Session::has('cart'))
                        <a style="color:white" href="{{route('hienthigiohang')}}">Giỏ hàng</a>
                        @else
                        Giỏ hàng
                        @endif
                        (@if(Session::has('cart'))
                        {{Session('cart')->totalQty}}
                        @else 0 @endif)
                    </span>
                </div>
                @if(Session::has('cart'))
                <div class="menu-content">
                    @foreach($product_cart as $product)
                    <a>
                        <span><img class="hinh_gh" src="http://localhost/local/resources/upload/{!!$product['item']['hinh_sp']!!}" alt="">
                        </span>
                        <div>
                            <span class=" ten_gh border-bottom">{!!$product['item']['ten_sp']!!}</span><br>
                            <span class="tien_gh">{{$product['qty']}}* <span>

                                    @if($product['item']['giakm']==0)

                                    {{$product['item']['gia']}}

                                    @else

                                    {{$product['item']['giakm']}}
                                    @endif
                                </span></span>
                        </div>
                        <a class=" dinhle" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-times"></i></a> </span>
                    </a>
                    @endforeach
                    <span class="tien">Tổng tiền: {{Session('cart')->totalPrice}}</span>

                </div>
                @endif
            </div>

        </div>

    </div>
    <!-- end danhmucsanpham-->
</div>