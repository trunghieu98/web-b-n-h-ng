@extends('master')
@section('content1')

<!--body left-->
<div class="">
    <!--bd1khung-->

    <!--//1khung-->
    <!--bd1khung-->
    <div class="colbody1">
        <h3 class="tieudechu text-center font-italic mauchu">Giỏ hàng của bạn</h3>

        <div class="row">
            <div class="">
                <div class="row text-center">
                    <h4 class="ttdh">Đặt hàng</h4>
                </div>

                <form>
                    <div class="leftright">
                        <div class="row lf1">
                            <div class="col-md-3 bd-r1">Hinh ảnh sản phẩm</div>

                            <div class="col-md-3 bd-r1">Tên sản phẩm</div>
                            <div class="col-md-1 bd-r1">Số lượng</div>
                            <div class="col-md-2 bd-r1 ">Giá (VND)</div>
                            <div class="col-md-2 bd-r1">Thành tiền (VND)</div>
                            <div class="col-md-1 bd-r11">Xoa</div>
                        </div>
                        @if(Session::has('cart'))
                        @foreach($spgh as $spgh)
                        <div class=" row  lf1 mt1">

                            <div class="col-md-3  bd-r"><img class="imgct" src="http://localhost/local/resources/upload/{{$spgh['item']['hinh_sp']}}" alt="">
                            </div>
                            <div class="col-md-3  bd-r">
                                <div class="spanct">{{$spgh['item']['ten_sp']}}
                                </div>
                            </div>
                            <div class="col-md-1  bd-r">
                                <div class="spanct">

                                    <div>
                                        @if($spgh['qty']==1)
                                        <span class="buttont" style="color:black">-</span>
                                        @else
                                        <a href="{{route('xoagiohang1',$spgh['item']['id'])}}" class="buttont">-</a>
                                        @endif

                                        <span id="idsoluong"> {{$spgh['qty']}}</span>
                                        @if($spgh['qty']>8)
                                        <span class="buttont" style="color:black">+</span>
                                        @else
                                        <a href="{{route('themgiohang',$spgh['item']['id'])}}" class="buttont">+</a>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-2 bd-r">
                                <div class="spanct spanct1 idgia">
                                        @if($spgh['item']['khuyen_mai']==0)
                                    {{number_format($spgh['item']['gia'])}}
                                        @else
                                        {{number_format($spgh['item']['gia']-($spgh['item']['gia']*$spgh['item']['khuyen_mai'])/100)}}
                                        @endif
                                </div>
                            </div>
                            <div class="col-md-2  bd-r">
                                <div class="spanct spanct1 idgiatong">
                                @if($spgh['item']['khuyen_mai']==0)
                                    {{number_format($spgh['qty']* $spgh['item']['gia'])}}
                                    @else
                                    {{number_format($spgh['qty']* 
                                    ($spgh['item']['gia']-($spgh['item']['gia']*$spgh['item']['khuyen_mai'])/100))}}
                                        @endif
                                </div>
                            </div>
                            <div class="col-md-1">
                                <a href="{{route('xoagiohang',$spgh['item']['id'])}}"><i class="spanct fa fa-times"></i></a>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>
                </form>

            </div>

        </div>
        <div class="row">
            <div class="xlgh">
                <h4 style="font-weight: bold;">Tổng tiền cần thanh toán:
                    <span class="fontc">{{number_format(Session('cart')->totalPrice)}} (VND)</span>
                    <button class="xlghtt">Mua tiếp</button>
                    <button class="xlghtt xlghttx">Xóa giỏ hàng</button></h4>

            </div>
        </div>
        <div class="row">

            <div class="">
                <div class="row text-center">
                    <h4 class="ttdh">Vui lòng điền đầy đủ thông tin bên dưới để tiến hành đặt hàng
                    </h4>
                </div>
                <div class="row">
                    <div class="from-dh">
                        <form action="{{route('dathang')}}" method="post" enctype="multipart/form-data">
                            <div style=" max-width: 38%;margin-left: 368px;">

                                <div class="form-group"><label for="">Email:</label>
                                    <input class="form-control" type="text" name="email">
                                </div>



                                <div class="form-group"><label for="">Họ tên</label>
                                    <input class="form-control" type="text" name="hoten">
                                </div>

                                <div class="form-group"><label for="">Số điện
                                        thoại</label>
                                    <input class="form-control" type="text" name="sdt">
                                </div>

                                <div class="form-group"><label for="">Địa chỉ</label>
                                    <input class="form-control" type="text" name="diachi">
                                </div>

                                <div class="form-group"><label for="">Ghi chú</label>
                                    <input class="form-control" type="text" name="ghichu">
                                </div>

                            </div>

                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-2 btn1"><input type="submit" value="Thanh toán" class="btn btn2">
                                </div>

                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>



        <!--//1khung-->

    </div>
    <!--end bodyleft-->

    <!-- body right-->

    <!--end body right-->
</div>


@endsection
@section('script')
<script>
    $(document).ready(function() {
        $("#idsoluong").click(function() {
            var soluong = $(this).val();
            var id = $("#idsoluong1").val();
            $.get('ajax/giohang/' + id + '/' + soluong, function(data) {
                $("#idsoluong").html(data);
            });
        });

    });
</script>
@endsection