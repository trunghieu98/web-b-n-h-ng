@extends('master')
@section('content1')

<?php 
    function doimau($chuoi,$timkiem){
        
        
        return str_replace($timkiem,"<span style='color : red'>$timkiem</span>",$chuoi);
    }

?>
            <div class="col-md-9">
                <!--bd1khung-->
                <div class="colbody1">
                <?php $sl=count($items); ?>
                @if($sl<=0)
                    <h3 class="tieudechu text-center font-italic">Kết quả tim kiếm: không tìm thấy sản phẩm nào....Vui lòng nhập từ khóa khác</h3>
                    @else
                    <h3 class="tieudechu text-center font-italic">Kết quả tìm kiếm: {{$timkiem}}</h3>
                    <div class="row">
                        <!--1cot-->
                        
                        @foreach($items as $sp3)
                        <div class="col-md-4 ">
                            <!--1khung-->
                            <div class="khung">
                                <div class="text-center mtop-5">
                                    <a href="{{route('chitietsanpham',$sp3->id,$sp3->id_ma_loai)}}">
                                        <img src="http://localhost/local/resources/upload/{{$sp3->hinh_sp}}" alt=""></a>
                                </div>
                                <div class="text-center border-top mtop-4">
                                    <h4 class="">
                                    <?php $ten1=$sp3->ten_sp; 
                                            $tk=ucfirst(strtolower($timkiem));
                                    ?>
                                        <a href="{{route('chitietsanpham',$sp3->id)}}">{!! doimau($ten1,$tk) !!}</a>
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
                                                <a class="thehover" href="{{ route('themgiohang',$sp3->id) }}">Them vao gio hang</a>
                                            </button>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <!--hetkhung-->
                        </div>
                        @endforeach
                       
                    </div>
                    @endif
                </div>
            </div>
            @include('menuleft')
                <!--end bodyleft-->
                <!-- body right-->
            

    @endsection 