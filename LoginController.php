<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

  public function dangnhap()
  {
    return view('page.dangnhap');
  }
  public function dangnhaptv(Request $request)
  {

    $this->validate($request, [
      'tendangnhap' => 'required',
      'matkhau' => 'required',
    ], [
      'tendangnhap.required' => 'vui long nhap tai khoan',
      'matkhau.required' => 'vui long nhap mat khau',

    ]);
    $credentials = array('tendangnhap' => $request->tendangnhap, 'password' => $request->matkhau, 'level' => '1');
    $credentials1 = array('tendangnhap' => $request->tendangnhap, 'password' => $request->matkhau, 'level' => '0');

    if (Auth::attempt($credentials)) {
      return redirect()->route('trangchuAdmin')->with(['tc' => 'success', 'message' => 'Đăng nhập thanh công']);
    } else if (Auth::attempt($credentials1)) {
      return redirect()->route('trangchu');
    } else {
      return redirect()->back()->with(['tc' => 'danger', 'message' => 'Đăng nhập không thanh công']);
    }
  }
  public function logout1()
  {
    Auth::logout();
    return redirect()->route('trangchu');
  }
}
