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
                        <a href="{{route('sapxep',$t)}}">Dưới 5triệu</a>
                    </li>
                    <li class="my-1">
                    <?php $t=2?>
                        <a href="{{route('sapxep',$t)}}">Từ 5triệu-10triệu</a>
                    </li>
                    <li>
                    <?php $t=3?>
                        <a href="{{route('sapxep',$t)}}">Từ 10triệu-15triệu</a>
                    </li>
                    <li class="my-1">
                    <?php $t=4?>
                        <a href="{{route('sapxep',$t)}}">Từ 15triệu-20triệu</a>
                    </li>
                    <li>
                    <?php $t=5?>
                        <a href="{{route('sapxep',$t)}}">Trên 20triệu</a>
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