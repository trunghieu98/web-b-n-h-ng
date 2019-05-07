<?php

namespace App\Http\Controllers;

use App\sanpham;
use App\slides;
use App\loaisanpham;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Cart;
use App\motachitiet;
use App\binhluan;
use App\Http\Requests\binhluanRequest;
use App\Http\Requests\dangnhapRequest;
use Mail;
use App\nhasanxuat;
use App\thongtinkhachhang;
use App\dondathang;
use App\chitietdonhang;
class trangchuController extends Controller
{

  //trangchu
  public function getindex()
  {
    $slide = slides::all();
    $slide1 = slides::all()->first();
    $sanpham3 = loaisanpham::all();
    $sanpham = sanpham::orderby('gia')->get();
  
    // return view('page.trangchu',['sanpham3'=>$sanpham3,'slide'=>$slide,'slide1'=>$slide1]);
    return view('page.trangchu', compact('slide', 'slide1', 'sanpham3', 'sanpham'));
    // $sanpham = sanpham::where('ma_loai', 1)->paginate(3);
    // $sanpham2 = sanpham::where('ma_loai', 2)->paginate(3);
    // $sanpham3 = sanpham::where('new', '<>', 0)->paginate(3);
    // $sanphamloai=sanpham::where('ma_loai', 3)->paginate(3);  
    // $loaisp=loaisanpham::get();

  }

  public function sapxeptt($t)
  {
    $slide = slides::all();
    $slide1 = slides::all()->first();
    $sanpham3 = loaisanpham::all();
    if ($t == 1) {
      $tien = 5000000;
      $sanpham = sanpham::where('gia', '<', $tien)->orderby('gia')->get();
      return view('page.trangchu', compact('slide', 'slide1', 'sanpham3', 'sanpham'));
    } else if ($t == 2) {

      $tien = 5000000;
      $tien1 = 10000000;
      $sanpham = sanpham::whereBetween('gia', [$tien, $tien1])->orderby('gia')->get();
      return view('page.trangchu', compact('slide', 'slide1', 'sanpham3', 'sanpham'));
    } else if ($t == 3) {

      $tien = 10000000;
      $tien1 = 15000000;
      $sanpham = sanpham::whereBetween('gia', [$tien, $tien1])->orderby('gia')->get();
      return view('page.trangchu', compact('slide', 'slide1', 'sanpham3', 'sanpham'));
    } else if ($t == 4) {

      $tien = 15000000;
      $tien1 = 20000000;
      $sanpham = sanpham::whereBetween('gia', [$tien, $tien1])->orderby('gia')->get();
      return view('page.trangchu', compact('slide', 'slide1', 'sanpham3', 'sanpham'));
    } else if ($t == 5) {

      $tien = 20000000;
      $sanpham = sanpham::where('gia', '>', $tien)->orderby('gia')->get();
      return view('page.trangchu', compact('slide', 'slide1', 'sanpham3', 'sanpham'));
    }
  }
  //--trangchu

  //loaisp//
  public function getloaisp($type)
  {
   
    $type = $type;
    $nsx = nhasanxuat::all();
    $ten = loaisanpham::where('id', $type)->get()->first();
    $loai = sanpham::where('id_ma_loai', $type)->orderby('gia')->get();
    $loai_sp = loaisanpham::all();
    return view('page.loaisanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp'));
  }
  public function sapxep($type, $t)
  {
    $type = $type;
    if ($t == 1) {
      $tien = 5000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->where('gia', '<', $tien)->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.loaisanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp'));
    } else if ($t == 2) {

      $tien = 5000000;
      $tien1 = 10000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->whereBetween('gia', [$tien, $tien1])->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.loaisanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp'));
    } else if ($t == 3) {

      $tien = 10000000;
      $tien1 = 15000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->whereBetween('gia', [$tien, $tien1])->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.loaisanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp'));
    } else if ($t == 4) {

      $tien = 15000000;
      $tien1 = 20000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->whereBetween('gia', [$tien, $tien1])->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.loaisanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp'));
    } else if ($t == 5) {

      $tien = 20000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->where('gia', '>', $tien)->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.loaisanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp'));
    }
  }
  public function sapxepl($type, $t, $id_nha_sx)
  {
    $type = $type;
    if ($t == 1) {
      $tien = 5000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->where('id_ma_nsx', $id_nha_sx)->where('gia', '<', $tien)->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.sanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp', 'id_nha_sx'));
    } else if ($t == 2) {

      $tien = 5000000;
      $tien1 = 10000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->where('id_ma_nsx', $id_nha_sx)->whereBetween('gia', [$tien, $tien1])->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.sanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp', 'id_nha_sx'));
    } else if ($t == 3) {

      $tien = 10000000;
      $tien1 = 15000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->where('id_ma_nsx', $id_nha_sx)->whereBetween('gia', [$tien, $tien1])->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.sanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp', 'id_nha_sx'));
    } else if ($t == 4) {

      $tien = 15000000;
      $tien1 = 20000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->where('id_ma_nsx', $id_nha_sx)->whereBetween('gia', [$tien, $tien1])->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.sanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp', 'id_nha_sx'));
    } else if ($t == 5) {

      $tien = 20000000;
      $nsx = nhasanxuat::all();
      $ten = loaisanpham::where('id', $type)->get()->first();
      $loai = sanpham::where('id_ma_loai', $type)->where('id_ma_nsx', $id_nha_sx)->where('gia', '>', $tien)->orderby('gia')->get();
      $loai_sp = loaisanpham::all();
      return view('page.sanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp', 'id_nha_sx'));
    }
  }


  public function sanpham($id_nsx, $id_loai)
  {
    $id_nha_sx = $id_nsx;
    $nsx = nhasanxuat::all();
    $ten = loaisanpham::where('id', $id_loai)->get()->first();
    $type = $id_loai;
    $loai_sp = loaisanpham::all();
    $loai = sanpham::where('id_ma_nsx', $id_nsx)->where('id_ma_loai', $id_loai)->orderby('gia')->get();

    return view('page.sanpham', compact('loai', 'ten', 'nsx', 'type', 'loai_sp', 'id_nha_sx'));
  }

  //--loaisp--//
  public function chitietsp($id)
  {
    $loai = sanpham::where('id', $id)->first();
    $chitiet = motachitiet::where('id_ma_sp', $id)->first();

    $comment = binhluan::where('id_ma_sp', $id)->get();
    return view('page.chitietsanpham', compact('chitiet', 'loai', 'comment'));
  }
  //chitietsp-binhluan//

  public function binhluansp(binhluanRequest $request, $id_ma_sp)
  {
    $binhluan = new binhluan;
    $binhluan->id_ma_sp = $id_ma_sp;
    $binhluan->email = $request->email1;
    $binhluan->ten = $request->ten;
    $binhluan->noi_dung = $request->ghichu;
    $binhluan->save();
    return redirect()->back();
  }
  //--chitietsp-binhluan--//

  //giohang//
  public function giohang()
  {
    return view('page.giohang');
  }
  //--giohang--//

  //themsanphamvaogiohang//
  public function getaddtocart(Request $req, $id)
  {
    $product = sanpham::find($id); //tao sp kiem tra cos sp k
    $oldCart = Session('cart') ? Session::get('cart') : null; // kt sesioon co session gihang k
    $cart = new Cart($oldCart); // khoi tap gio hang moi
    $cart->add($product, $id); // them sp
    $req->session()->put('cart', $cart);
    return redirect()->back();
  }

  public function getupdate(Request $req, $id, $sl)
  {
    $product = sanpham::find($id);
    $oldCart = Session('cart') ? Session::get('cart') : null; // kt sesioon co session gihang k
    $cart = new Cart($oldCart);
    $cart->update($product, $id, $sl);
    $req->session()->put('cart', $cart);
  }
  //--themsanphamvaogiohang--//

  //xoagiohang//
  public function deltocart($id)
  {
    $oldCart = Session('cart') ? session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->removeItem($id);
    if (count($cart->items) > 0) {
      session::put('cart', $cart);
    } else {
      session::forget('cart');
    }
    return redirect()->back();
  }

  public function deltocart1($id)
  {
    $oldCart = Session('cart') ? session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->reduceByone($id);
    if (count($cart->items) > 0) {
      session::put('cart', $cart);
    } else {
      session::forget('cart');
    }
    return redirect()->back();
  }
  //--xoagiohang--//

  //hienthigiohang//
  public function showcart()
  {
    if (session::has('cart')) {
      $tontai = Session::get('cart');
      $cart = new Cart($tontai);
      $cart = session::get('cart'); // lấy giohang hang
      return view(
        'page.giohang',
        [
          'cart' => $cart,
          'spgh' => $cart->items,
          'gia_g' => $cart->totalPrice,
          'soluong_sl' => $cart->totalQty
        ]
      );
    } else {
      return redirect()->route('trangchu');
    }
  }
  //--hienthigiohang--//



  //timkiem

  public function posttimkiem(Request $request)
  {
    $data['timkiem'] = $request->tktimkiem;
    $result = $request->tktimkiem;
    $result = str_replace(' ', '%', $result);
    $data['items'] = sanpham::where('ten_sp', 'like', '%' . $result . '%')->orwhere('gia', 'like', '%' . $result . '%')->get();


    return view('page.timkiem', $data);
  }

  public function postdathang(Request $req)
  {

    $this->validate($req,[
          'email'=>'required',
          'hoten'=>'required',
          'sdt'=>'required',
          'diachi'=>'required',
    ],[
          'email.required'=>'Không được để trống',
          'hohen.required'=>'Không được để trống',
          'sdt.required'=>'Không được để trống',
          'diachi.required'=>'Không được để trống',

    ]);



  
    $tontai = Session::get('cart');
    $cart = new Cart($tontai);
    $cart = session::get('cart'); // lấy giohang hang
    $email = $req->email;
    $data['cart'] = $cart;
    $data['spgh'] = $cart->items;
    $data['gia_g'] = $cart->totalPrice;
    $data['soluong_sl'] = $cart->totalQty;
    $data['thongtin'] = $req->all();
    $email = $req->email;
    $thongtin= new thongtinkhachhang;
    $thongtin->email=$req->email;
    $thongtin->hoten=$req->hoten;
    $thongtin->sodienthoai=$req->sdt;
    $thongtin->diachi=$req->diachi;
     
    $thongtin->save();

      $ddh=new dondathang;
      $ddh->id_khach_hang=$thongtin->id;
      $ddh->ngay_dat=date('Y-m-d');
      $ddh->Tong_tien=$cart->totalPrice;
      $ddh->ghi_chu=$req->ghichu;
      $ddh->save();

      foreach($cart->items as $key=>$value){
          $ct=new chitietdonhang;
          $ct->id_don_hang=$ddh->id;
          $ct->id_sp=$key; //$value['item']['id'];
          $ct->soluong=$value['qty'];
          $ct->gia_tien=$value['price']/$value['qty'];
          $ct->save();


      }


    Mail::send('page.email', $data, function ($mss) use ($email) {
      $mss->from('trunghieu.lth1998@gmail.com', 'Ban Hang');
      $mss->to($email, $email);
      $mss->cc('trunghieu.lth1998@gmail.com', 'trung hieu');
      $mss->subject('xac nhan don hang');
    });



    
    session::forget('cart');
    return redirect('dathangxong');
  }

  public function getdathangxong()
  {
    return view('page.hoanthanh');
  }
}
