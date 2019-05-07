<font face="arial">
    <div>
        <div></div>
        <h3>
            <font color="#0033FF">
                Thông tin khách hàng
            </font>
        </h3>
        <p>
            <strong class="info">
                Khách hàng
            </strong>
            {{$thongtin['hoten']}}
        </p>
        <p>
            <strong class="info">
                Email
            </strong>
            {{$thongtin['email']}}
        </p>
        <p>
            <strong class="info">
                Điện thoại<tr>

                </tr>
            </strong>
            {{$thongtin['sdt']}}
        </p>
        <p>
            <strong class="info">
                Địa chỉ
            </strong>
            {{$thongtin['diachi']}}
        </p>
    </div>
    <!-- hoa don mua hang -->
    <div>
        <h3>
            <font color="#0033FF">
                Hóa Đơn mua hàng
            </font>
        </h3>
        <table border="1" cellspacing="0">
            <tr>
                <td><strong>Tên sản phẩm</strong></td>
                <td><strong>Giá</strong></td>
                <td><strong>Số lượng</strong></td>
                <td><strong>Thành tiền</strong></td>
            </tr>
            @foreach($spgh as $spghh)
            <tr>
                <td>{{$spghh['item']['ten_sp']}}</td>
                <td>{{number_format($spghh['item']['gia'])}}</td>
                <td>{{$spghh['qty']}}</td>
                <td>{{number_format($spghh['qty']*$spghh['item']['gia'])}}</td>
            </tr>
            @endforeach
            <tr>
                <td>Tổng tiền:</td>
                <td colspan="3" align="center">{{number_format($gia_g)}} </td>
            </tr>
        </table>
    </div>
    <!-- the end  -->
    <div>
        <h3>
            <font color="#FF9600"> Đặt hàng thành công xin cảm ơn quý khách đã mua hành của cửa hàng chúng tôi!</font>
        </h3>
        <p>* Hóa đơn mua hàng của quý khách đã được chuyển đến địa chỉ email của quý khách.
        </p>
        <p>* Hóa đơn mua hàng của quý khách đã được chuyển đến địa chỉ có trong phần thông tin khách hàng, thời gian giao hàng từ 2 đén 3 ngày, tính từ khi xác nhận đơn hàng.
        </p>
        <p>Chúng tôi sẽ liên hệ với quý khách để xác nhận đơn hàng trong vòng 24h.
        </p>
        <p>Chân thành cảm ơn quý khách đã sử dụng sản phẩm của chúng tôi.
        </p>
        <p color="red"> Đường day nóng: 0907338376 hoặc email:trunghieu.lth1998@gmail.com
        </p>
    </div>

</font>