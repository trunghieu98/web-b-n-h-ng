<div class="container-fluid">
    <div id="navbar" class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('trangchuAdmin')}}">Home</a></li>
                    </ul>
                   
                    <p id="logout" class="navbar-text navbar-right">@if(Auth::check())
                    
                    <i class="fas fa-user-alt">{{Auth::user()->tendangnhap}}</i>
                                
                                <i style="font-size: 10px">|</i>
                         <a href="{{url('log-out')}}"><i class="fas fa-sign-out-alt"> Đăng xuất</i></a> 
                      
                        @endif
                    </a></p>
                </div>
            </nav>
        </div>
    </div>
</div>