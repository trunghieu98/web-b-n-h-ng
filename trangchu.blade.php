@extends('master')
@include('slides')
@section('content1')


<!--body left-->
<div class="col-md-9">
    <!--bd1khung-->
    <?php $i[]=0;
    $s=0 ?>
    @foreach($sanpham as $sptt)
        @if($sptt->khuyen_mai!=0)
            <?php $i[$s]=$s;
            $s++; ?>
        @endif
    @endforeach

@if(count($i)>0)
    <div class="colbody1">
        <h3 class="tieudechu text-center font-italic">Sản Phẩm khuyến mãi</h3>
        <div class="row">
            <!--1cot-->
            @foreach($sanpham as $spkm)
            @if($spkm->khuyen_mai!=0)
            <div class="col-md-4 ">
                <!--1khung-->
                <div class="khung">
                    <div class="text-center mtop-5">
                        <a href="{{route('chitietsanpham',$spkm->id,$spkm->id_loai_sp)}}">
                            <img src="http://localhost//local/resources/upload/{{$spkm->hinh_sp}}" alt=""></a>
                    </div>
                    <div class="text-center border-top mtop-4">
                        <h4 class="">
                            <a href="{{route('chitietsanpham',$spkm->id)}}">{{$spkm->ten_sp}}</a>
                        </h4>
                        <div class="my-2">

                            @if($spkm->khuyen_mai==0)
                            <span>{{number_format($spkm->gia)}}</span>
                            @else
                            <del>{{number_format($spkm->gia)}}</del>
                            <span class="">{{number_format($spkm->gia-($spkm->gia*$spkm->khuyen_mai)/100)}}</span>

                            @endif

                        </div>
                        <div class="kichthuocvo mbt1">
                            <fieldset>
                                <button type="submit" name="submit" class="button btn theasubmit">
                                    <a class="thehover" href="{{route('themgiohang',$spkm->id)}}">Them vao gio hang</a>

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
@endif
    @foreach($sanpham3 as $sp)
    @foreach($sanpham as $spp)
    <!-- loai -->
    @if($spp->ten_sp!="" && $spp->id_ma_loai==$sp->id)
    <div class="colbody1">
        <h3 class="tieudechu text-center font-italic">{{$sp->ten_loai}}</h3>
        <div class="row">
            <!--1cot-->
            @foreach($sanpham as $sp3)
            @if($sp3->id_ma_loai== $sp->id)

            <div class="col-md-4 ">
                <!--1khung-->
                <div class="khung">
                    <div class="text-center mtop-5">
                        <a href="{{route('chitietsanpham',$sp3->id,$sp3->id_loai_sp)}}">
                            <img src="http://localhost//local/resources/upload/{{$sp3->hinh_sp}}" alt=""></a>
                    </div>
                    <div class="text-center border-top mtop-4">
                        <h4 class="">
                            <a href="{{route('chitietsanpham',$sp3->id)}}">{{$sp3->ten_sp}}</a>
                        </h4>
                        <div class="my-2">

                            @if($sp3->khuyen_mai==0)
                            <span>{{number_format($sp3->gia)}}</span>
                            @else
                            <del>{{number_format($sp3->gia)}}</del>
                            <span class="">{{number_format($sp3->gia-($sp3->gia*$sp3->khuyen_mai)/100)}}</span>

                            @endif

                        </div>
                        <div class="kichthuocvo mbt1">
                            <fieldset>
                                <button type="submit" name="submit" class="button btn theasubmit">
                                    <a class="thehover" href="{{route('themgiohang',$sp3->id)}}">Them vao gio hang</a>

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
    @break
    @endif
    @endforeach
    @endforeach
    <!--//1khung-->
    <div class="ptrang">
        <div class="row text-center">

        </div>
    </div>
</div>
@include('menuleft')
<!--end bodyleft-->
<!-- body right-->


@endsection
<script>
    var IMAGE_PATHS = [];
    <?php $i = 0; ?>
</script>
@foreach($slide as $sl)
<script>
    IMAGE_PATHS[<?php echo $i; ?>] = "http://localhost/local/resources/slides/{{$sl->images}}";
    <?php $i++; ?>
</script>
@endforeach