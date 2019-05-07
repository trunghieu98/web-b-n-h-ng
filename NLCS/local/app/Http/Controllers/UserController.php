<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    public function formdangky()
    {
        return view('form.dangky');
    }

    public function dangkytv(Request $request)
    {
          

        $this->validate($request, [
            'tk' => 'required|unique:users,tendangnhap',
            'passw' => 'required',
            'passw1' => 'required',
            'email' => 'required|email',
            'hten' => 'required',
            'sdt' => 'required',
            'dc' => 'required',
        ], [
            'tk.required' => 'vui lòng nhập tai khoan',
            'passw.required' => 'vui lòng nhập mật khẩu',
            'passw1.required' => 'vui lòng nhập lại mật khẩu',
            'email.required' => 'vui lòng nhập email',
            'hten.required' => 'vui lòng nhập họ tên',
            // 'ns.required'=>'vui lòng nhập ngày sinh',
            // 'cmnd.required'=>'vui lòng nhập cmnd',
            'sdt.required' => 'vui lòng nhập số điện thoại',
            'dc.required' => 'vui lòng nhập địc chỉ',


        ]);
      

        $user = new User;
        $user->tendangnhap = $request->tk;
        $user->email = $request->email;
        $user->password = Hash::make($request->passw);
        $user->hoten = $request->hten;
        $user->sodienthoai = $request->sdt;
        $user->diachi = $request->dc;
        $user->level = 0;
        $user->save();
        return redirect()->route('trangchu');
    }
}
