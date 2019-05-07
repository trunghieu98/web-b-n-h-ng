@extends('master')
@section('content1')

<!--body left-->
<div class="col-md-9">
    <!--bd1khung-->


    <div class="row" style="margin-left:0;">

        <div>
            @foreach($nsx as $nsx2)
            @if($nsx2->loai==1 && $type==1)
            <a href="{{route('sanpham',[$nsx2->id,$type])}}"><img class="iconhang" src="http://localhost/local/resources/upload/{{$nsx2->hinhanh}}" alt="">
            </a>
           
            @elseif($nsx2->dt==1 && $type==2)
            <a href="{{route('sanpham',[$nsx2->id,$type])}}"><img class="iconhang" src="http://localhost/local/resources/upload/{{$nsx2->hinhanh}}" alt="">
            </a>
            @endif

            @endforeach
        </div>
        <div class="colbody1">
            <h3 class="tieudechu text-center font-italic" style="color:red">{{$ten->ten_loai}}</h3>
            <div class="row">
                <!--1cot--><?php $i = count($loai);
                            if ($i == 0) {
                                echo    '<div class="col-md-12">
                        <h3 class="tieudechu text-center font-italic">Không có sản phẩm nào... Vui lòng tìm sản phẩm khác!!!</h3>
                         </div>';
                            }


                            ?>
                @foreach($loai as $loai1)
                @if(count($loai)>0)
                <div class="col-md-4 ">
                    <!--1khung-->
                    <div class="khung">
                        <div class="text-center mtop-5">
                            <img src="http://localhost/local/resources/upload/{{$loai1->hinh_sp}}" alt="">
                        </div>
                        <div class="text-center border-top mtop-4">
                            <h4 class="">
                                <a href="{{route('chitietsanpham',$loai1->id)}}">{{$loai1->ten_sp}}</a>
                            </h4>
                            <div class="my-2">
                                @if($loai1->giakm==0)
                                <span>{{number_format($loai1->gia)}}</span>
                                @else
                                <del>{{number_format($loai1->gia)}}</del>
                                <span class="">{{number_format($loai1->giakm)}}</span>

                                @endif
                            </div>
                            <div class="kichthuocvo mbt1">
                                <fieldset>
                                    <button type="submit" name="submit" class="button btn theasubmit">
                                        <a class="thehover" href="{{route('themgiohang',$loai1->id)}}">Them vao gio hang</a>

                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!--hetkhung-->
                </div>

                @endif
                @endforeach


            </div>
        </div>
        <!--//1khung-->
        <!--bd1khung-->

    </div>
</div>
  

<div class="col-md-3">
    <div class="bodyleft">
        <div class="border-bottom">
            <h3 class="theh3">Search Here..</h3>
            <form method="get" action="{{route('posttimkiem')}}" enctype="multipart/form-data">




                <input type="search" placeholder="Tìm kiếm..." name="tktimkiem" required="" id="tksearch">
                <input type="submit" value=" " id="tksubmit">
            </form>
        </div>


        <div class="lefttong border-bottom">
            <h3 class=""> Sản phẩm Khác</h3>
            <div class="canhle">
                <ul>
                    @foreach($loai_sp as $l)
                    <li>
                        <a href="{{route('loaisanpham',$l->id)}}"  class="my-1">{{$l->ten_loai}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--gia-->
        <div class="lefttong border-bottom">
            <h3 class=""> Giá</h3>
            <div class="canhle">
                <ul>
                    <li>
                      <?php $t=1?>
                        <a href="{{route('sapxep1',[$type,$t,$id_nha_sx])}}">Dưới 5triệu</a>
                    </li>
                    <li class="my-1">
                    <?php $t=2?>
                        <a href="{{route('sapxep1',[$type,$t,$id_nha_sx])}}">Từ 5triệu-10triệu</a>
                    </li>
                    <li>
                    <?php $t=3?>
                        <a href="{{route('sapxep1',[$type,$t,$id_nha_sx])}}">Từ 10triệu-15triệu</a>
                    </li>
                    <li class="my-1">
                    <?php $t=4?>
                        <a href="{{route('sapxep1',[$type,$t,$id_nha_sx])}}">Từ 15triệu-20triệu</a>
                    </li>
                    <li>
                    <?php $t=5?>
                        <a href="{{route('sapxep1',[$type,$t,$id_nha_sx])}}">Trên 20triệu</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--//gia-->
        <!--giam gia-->
        <div class="lefttong border-bottom">
            <h3 class="">Khuyến mãi</h3>
            <div class="canhle">
                <ul>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">5% - 10%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">10% -20%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">20% - 30%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">30% -40%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked">
                        <span class="span">Trên 40%</span>
                    </li>

                </ul>
            </div>
        </div>
        <!--//giamgia-->

        
    </div>
</div>
    <!--end bodyleft-->

    <!-- body right-->

    @endsection