<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaisanpham;
use App\nhasanxuat;
use App\sanpham;
use App\slides;
use App\motachitiet;
use App\User;
use Hash;
use App\khuyenmai;
use App\hethongcuahang;

class AdminController extends Controller
{

    function getindex()
    {
        return view('admin.layout.index');
    }
    //loaisanpham 
    function getloaisanpham()
    {
        $loai = loaisanpham::paginate(5);
        return view('admin.layout.admin.loaisanpham.them', compact('loai'));
    }

    function postloaisanpham(Request $request)
    {

        $this->validate($request, [
            'ten_loai' => 'required',
            'ten_loai' => 'required|unique:loaisanpham,ten_loai',
        ], [
            'ten_loai.required' => '*Tên loại không được để trống',
            'ten_loai.unique' => '*Tên loại ' . $request->ten_loai . ' đã tồn tại',
        ]);
        $lsanpham = new loaisanpham;
        $lsanpham->ten_loai = $request->ten_loai;
        $lsanpham->save();
        return redirect()->back()->with(['tc' => 'success', 'message' => 'Thêm loại thành công']);
    }
    function sualoaisanpham($id_loai)
    {

        $loai = loaisanpham::where('id', $id_loai)->get()->first();

        return view('admin.layout.admin.loaisanpham.sua', compact('loai'));
    }
    public function postsualoai(Request $request, $id)
    {

        $this->validate($request, [
            'ten' => 'required',
            'ten' => 'required|unique:loaisanpham,ten_loai',
        ], [
            'ten.required' => '*Tên loại không được để trống',
            'ten.unique' => '*Tên loại đã tồn tại',
        ]);

        $loai1 = loaisanpham::all();
        $loai1 = loaisanpham::find($id);
        $loai1->ten_loai = $request->ten;
        $loai1->save();
        $loai2 = loaisanpham::all();
        return redirect()->back()->with(['tc' => 'success', 'message' => 'Sửa thành công thanh công', 'loai' => 'loai2']);
    }

    public function xoaloaisanpham($id)
    {
        $loai = loaisanpham::find($id);
        $loai->delete();
        return redirect()->back()->with(['tc' => 'success', 'message' => 'Xóa thành công']);
    }


    //--loaisanpham

    //nhasanxuat 
    function getnhasanxuat()
    {
        $nsanxuat = nhasanxuat::all();
        return view('admin.layout.admin.nhasanxuat.nhasanxuat', compact('nsanxuat'));
    }
    function postnhasanxuat(Request $request)
    {
        $file_name = $request->file('hinh_sp')->getClientOriginalName();

        $nsanxuat = new nhasanxuat;
        $nsanxuat->ten_nha_sx = $request->ten_nsx;

        $nsanxuat->hinhanh = $file_name;
        $request->file('hinh_sp')->move('local/resources/upload/', $file_name);
        $nsanxuat->save();
        return redirect()->back();
    }
    function suanhasanxuat($id)
    {
        $nsanxuat = nhasanxuat::where('id', $id)->get()->first();
        return view('admin.layout.admin.nhasanxuat.sua', compact('nsanxuat'));
    }
    function postsuanhasanxuat(Request $request, $id)
    {
        $this->validate($request, [
            'ten_nsx' => 'required',
            'ten_nsx' => 'required',
        ], [
            'ten_nsx.required' => 'Tên nhà sản xuất không được bỏ trống',
            'ten_nsx.unique' => 'Tên này đã tồn tại vui lòng nhập tên khác',
        ]);

        if ($request->hinh_sp != "") {
            $file_name =  $request->file('hinh_sp')->getClientOriginalName();
            $nsanxuat = nhasanxuat::find($id);
            $nsanxuat->hinhanh = $file_name;
            $request->file('hinh_sp')->move('local/resources/upload/', $file_name);
            $nsanxuat->ten_nha_sx = $request->ten_nsx;
            $nsanxuat->save();
            return redirect()->back()->with(['tc' => 'success', 'message' => 'Sửa thành công']);
        } else {
            $nsanxuat = nhasanxuat::find($id);
            $nsanxuat->ten_nha_sx = $request->ten_nsx;
            $nsanxuat->save();
            return redirect()->back()->with(['tc' => 'success', 'message' => 'Sửa thành công']);
        }
    }
    function xoanhasanxuat($id)
    {
        $nsanxuat = nhasanxuat::find($id);
        $nsanxuat->delete();
        return redirect()->back()->with(['tc' => 'success', 'message' => 'Xóa thành công']);
    }

    //-- nhsanxuat


    //sanpham

    function getsanpham()
    {
        $nhasx = nhasanxuat::all();
        $loai = loaisanpham::all();
        $sanpham = sanpham::paginate(5);
        $mota = motachitiet::all();

        return view('admin.layout.admin.sanpham.sanpham', compact('nhasx', 'loai', 'sanpham', 'mota'));
    }


    function postsanpham(Request $request)
    {

        $file_name = $request->file('hinh_sp')->getClientOriginalName();
        $sanpham = new sanpham;
        $sanpham->id_ma_nsx = $request->nha_sx;
        $sanpham->id_ma_loai = $request->loai_sp;
        $sanpham->ten_sp = $request->ten_sp;
        $sanpham->hinh_sp = $file_name;
        $request->file('hinh_sp')->move('local/resources/upload/', $file_name);
        $sanpham->gia = $request->gia_sp;
        $sanpham->bao_hanh = $request->bh_sp;
        $sanpham->save();
        return redirect()->back();
    }
    function suasanpham($id, $id_ma_loai, $id_ma_nsx)
    {
        $sanpham1 = sanpham::find($id);
        $loaisp = loaisanpham::find($id_ma_loai);

        $nsxsp = nhasanxuat::find($id_ma_nsx);


        $nhasx = nhasanxuat::all();
        $loai = loaisanpham::all();
        $sanpham = sanpham::paginate(5);
        $mota = motachitiet::all();

        return view('admin.layout.admin.sanpham.sua', compact('sanpham1', 'loaisp', 'nsxsp', 'nhasx', 'loai', 'sanpham', 'mota'));
    }
    function postsuasanpham(Request $request, $id)
    {


        $file_name = $request->hinh_sp;
        if ($file_name == null) {
            $sanpham = sanpham::find($id);
            $sanpham->ten_sp = $request->ten_sp;
            $sanpham->gia = $request->gia_sp;
            $sanpham->bao_hanh = $request->bh_sp;
            $sanpham->save();
            return redirect()->back()->with(['tc' => 'success', 'message' => 'Sửa thành công']);
        } else {
            $file_name = $request->file('hinh_sp')->getClientOriginalName();

            $sanpham = sanpham::find($id);
            $sanpham->ten_sp = $request->ten_sp;
            $sanpham->hinh_sp = $file_name;
            $request->file('hinh_sp')->move('local/resources/upload/', $file_name);
            $sanpham->gia = $request->gia_sp;
            $sanpham->bao_hanh = $request->bh_sp;
            $sanpham->save();
            return redirect()->back()->with(['tc' => 'success', 'message' => 'Sửa thành công']);
        }
    }
    function xoasanpham($id)
    {
        $nhasx = nhasanxuat::all();
        $loai = loaisanpham::all();
        $sanpham = sanpham::all();
        return view('admin.layout.admin.sanpham.sanpham', compact('nhasx', 'loai', 'sanpham'));
    }


    function getmotasanpham($id)
    {

        $sanpham = sanpham::where('id', $id)->get()->first();
        return view('admin.layout.admin.sanpham.mota', compact('sanpham'));
    }

    function postthemmotasanpham(Request $request, $id_ma_loai)
    {

        if ($id_ma_loai == 1) {
            $this->validate($request, [
                'he_dieu_hanh' => 'required',
                'cpu' => 'required',
                'man_hinh' => 'required',
                'ram' => 'required',
                'bo_nho' => 'required',
                'pin' => 'required',
                'kich_thuoc' => 'required',
                'ban_phim' => 'required',
                'do_hoa' => 'required',
                'hinh_sp1' => 'required',
                'hinh_sp2' => 'required',
                'hinh_sp3' => 'required',


            ], [
                'he_dieu_hanh.required' => 'Không được bỏ trống',
                'ram.required' => 'Không được bỏ trống',
                'bo_nho.required' => 'Không được bỏ trống',
                'do_hoa.required' => 'Không được bỏ trống',
                'man_hinh.required' => 'Không được bỏ trống',
                'cpu.required' => 'Không được bỏ trống',
                'ban_phim.required' => 'Không được bỏ trống',
                'pin.required' => 'Không đượcn bỏ trống',
                'kich_thuoc.required' => 'Không được bỏ trống',
                'hinh_sp1.required' => 'Hình ảnh không được bỏ trống',
                'hinh_sp2.required' => 'Hình ảnh không được bỏ trống',
                'hinh_sp3.required' => 'Hình ảnh không được bỏ trống',
            ]);
            $file1 = $request->file('hinh_sp1')->getClientOriginalname();

            $file2 = $request->file('hinh_sp2')->getClientOriginalname();
            $file3 = $request->file('hinh_sp3')->getClientOriginalName();

            $chitiet = new motachitiet;
            $chitiet->ten_sp = $request->ten_sp;
            $chitiet->ram = $request->ram;
            $chitiet->bo_nho = $request->bo_nho;
            $chitiet->do_hoa = $request->do_hoa;
            $chitiet->man_hinh = $request->man_hinh;
            $chitiet->he_dieu_hanh = $request->he_dieu_hanh;
            $chitiet->pin = $request->pin;
            $chitiet->cpu = $request->cpu;
            $chitiet->kich_thuoc = $request->kich_thuoc;
            $chitiet->ban_phim = $request->ban_phim;
            $chitiet->id_ma_sp = $request->id;
            $chitiet->hinh_sp1 = $file1;
            $chitiet->hinh_sp2 = $file2;
            $chitiet->hinh_sp3 = $file3;
            $request->file('hinh_sp1')->move('local/resources/upload/', $file1);
            $request->file('hinh_sp2')->move('local/resources/upload/', $file2);
            $request->file('hinh_sp3')->move('local/resources/upload/', $file3);
            $chitiet->save();
            $sanpham = sanpham::find($request->id);
            $sanpham->mota = 1;
            $sanpham->save();
            return redirect()->back()->with(['tc' => 'success', 'message' => 'Thêm thành công']);
        } else if ($id_ma_loai == 2) {
            $this->validate($request, [
                'he_dieu_hanh' => 'required',
                'cpu' => 'required',
                'man_hinh' => 'required',
                'ram' => 'required',
                'bo_nho' => 'required',
                'pin' => 'required',
                'kich_thuoc' => 'required',
                'cam_truoc' => 'required',
                'cam_sau' => 'required',
                'hinh_sp1' => 'required',
                'hinh_sp2' => 'required',
                'hinh_sp3' => 'required',


            ], [
                'he_dieu_hanh.required' => 'Không được bỏ trống',
                'ram.required' => 'Không được bỏ trống',
                'bo_nho.required' => 'Không được bỏ trống',
                'kich_thuoc.required' => 'Không được bỏ trống',
                'man_hinh.required' => 'Không được bỏ trống',
                'cpu.required' => 'Không được bỏ trống',
                'cam_truoc.required' => 'Không được bỏ trống',
                'pin.required' => 'Không đượcn bỏ trống',
                'cam_sau.required' => 'Không được bỏ trống',
                'hinh_sp1.required' => 'Hình ảnh không được bỏ trống',
                'hinh_sp2.required' => 'Hình ảnh không được bỏ trống',
                'hinh_sp3.required' => 'Hình ảnh không được bỏ trống',
            ]);
            $file1 = $request->file('hinh_sp1')->getClientOriginalname();

            $file2 = $request->file('hinh_sp2')->getClientOriginalname();
            $file3 = $request->file('hinh_sp3')->getClientOriginalName();

            $chitiet = new motachitiet;
            $chitiet->ten_sp = $request->ten_sp;
            $chitiet->ram = $request->ram;
            $chitiet->bo_nho = $request->bo_nho;
            $chitiet->cam_sau = $request->cam_sau;
            $chitiet->man_hinh = $request->man_hinh;
            $chitiet->he_dieu_hanh = $request->he_dieu_hanh;
            $chitiet->pin = $request->pin;
            $chitiet->cpu = $request->cpu;
            $chitiet->kich_thuoc = $request->kich_thuoc;
            $chitiet->cam_truoc = $request->cam_truoc;
            $chitiet->id_ma_sp = $request->id;
            $chitiet->hinh_sp1 = $file1;
            $chitiet->hinh_sp2 = $file2;
            $chitiet->hinh_sp3 = $file3;
            $request->file('hinh_sp1')->move('local/resources/upload/', $file1);
            $request->file('hinh_sp2')->move('local/resources/upload/', $file2);
            $request->file('hinh_sp3')->move('local/resources/upload/', $file3);
            $chitiet->save();
            $sanpham = sanpham::find($request->id);
            $sanpham->mota = 1;
            $sanpham->save();
            return redirect()->back()->with(['tc' => 'success', 'message' => 'Thêm thành công']);
        }
    }

    //--sanpham

    function getquangcao()
    {
        return view('admin.layout.admin.quangcao.quangcao');
    }
    function gettaikhoan()
    {
        $taikhoan = User::paginate(5);
        return view('admin.layout.admin.taikhoan.taikhoan', compact('taikhoan'));
    }





    function postmotasanpham(Request $request)
    {
        return redirect()->back();
    }
    function postquangcao(Request $request)
    {
        $file_name = $request->file('images')->getClientOriginalName();
        $slides = new slides;
        $slides->images = $file_name;
        $request->file('images')->move('local/resources/slides/', $file_name);
        $slides->save();
        return redirect()->back();
    }
    function posttaikhoan(Request $request)
    {


        $this->validate($request, [
            'tk' => 'required|unique:users,tendangnhap',
            'passw' => 'required',
            'passw1' => 'required',
            'email' => 'required|email',
            'hten' => 'required',
            'sdt' => 'required',
            'dc' => 'required',
            'level' => 'required',
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
            'level.required' => 'Vui lòng nhập level'


        ]);


        $user = new User;
        $user->tendangnhap = $request->tk;
        $user->email = $request->email;
        $user->password = Hash::make($request->passw);
        $user->hoten = $request->hten;
        $user->sodienthoai = $request->sdt;
        $user->diachi = $request->dc;
        $user->level = $request->level;
        $user->save();
        return redirect()->back()->with(['tc' => 'success', 'tb' => 'Thêm tài khoản thành công']);
    }
    function xoataikhoan($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with(['tc' => 'success', 'tb' => 'Xóa tài khoản thành công']);
    }
  // cua hang
    function getcuahang()
    {
        $chinhanh = hethongcuahang::all();
        return view('admin.layout.admin.cuahang.cuahang', compact('chinhanh'));
    }
    function postcuahang(Request $req)
    {
        $this->validate($req, [
            'ten_chi_nhanh' => 'required',
            'sdt' => 'required',
            'dia_chi' => 'required',
            'ten_chi_nhanh' => 'required|unique:hethongcuahang,ten_chi_nhanh',

        ], [
            'ten_chi_nhanh.required' => 'Không được bỏ trống',
            'sdt.required' => 'Không được bỏ trống',
            'dia_chi.required' => 'Không được bỏ trống',
            'ten_chi_nhanh.unique' => 'Tên dã tồn tại',

        ]);
        $ch = new hethongcuahang;
        $ch->ten_chi_nhanh = $req->ten_chi_nhanh;
        $ch->sdt = $req->sdt;
        $ch->dia_chi = $req->dia_chi;
        $ch->save();
        return redirect()->back()->with(['tc' => 'success', 'message' => 'Thêm thành công']);
    }
    function getxoacuahang($id)
    {
        $ch = hethongcuahang::find($id);
        $ch->delete();
        return redirect()->back()->with(['tc' => 'success', 'message' => 'Xóa thành công']);
    }
    function getsuacuahang($id)
    {

        $chinhanh = hethongcuahang::all();
        $ch = hethongcuahang::find($id);
        return view('admin.layout.admin.cuahang.suacuahang', compact('chinhanh', 'ch'));
    }
    function postsuacuahang(Request $req, $id)
    {
        $this->validate($req, [
            'ten_chi_nhanh' => 'required',
            'sdt' => 'required',
            'dia_chi' => 'required',
            'ten_chi_nhanh' => 'required|unique:hethongcuahang,ten_chi_nhanh',

        ], [
            'ten_chi_nhanh.required' => 'Không được bỏ trống',
            'sdt.required' => 'Không được bỏ trống',
            'dia_chi.required' => 'Không được bỏ trống',
            'ten_chi_nhanh.unique' => 'Tên dã tồn tại',

        ]);
        $ch = hethongcuahang::find($id);
        $ch->ten_chi_nhanh = $req->ten_chi_nhanh;
        $ch->sdt = $req->sdt;
        $ch->dia_chi = $req->dia_chi;
        $ch->save();
        return redirect()->back()->with(['tc' => 'success', 'message' => 'Sửa thành công']);
    }

    // khuyenmai
    function getkm()
    {
        $sanpham = sanpham::paginate(5);
        $km = khuyenmai::all();
        return view('admin.layout.admin.khuyenmai.khuyenmai', compact('km', 'sanpham'));
    }
    function postthemkm(Request $req)
    {
        $this->validate($req, [
            'ten_km' => 'required',
            'tien_km' => 'required',
        ], [
            'ten_km.required' => 'không được bỏ trống',
            'tien_km.required' => 'Không được bỏ trống',

        ]);
        $km = new khuyenmai;
        $km->ten_km = $req->ten_km;
        $km->phantram = $req->tien_km;
        $km->save();
        return redirect()->back()->with(['tc' => 'success', 'message' => 'Thêm thành công']);
    }
    function getsuakm($id){
        $sanpham = sanpham::paginate(5);
        $km = khuyenmai::all();
        $khuyenmai=khuyenmai::find($id);
        return view('admin.layout.admin.khuyenmai.suakhuyenmai', compact('km', 'sanpham','khuyenmai'));
    }
    function postsuakm(Request $req, $id){
        $this->validate($req, [
            'ten_km' => 'required',
            'tien_km' => 'required',
           
        ], [
            'ten_km.required' => 'không được bỏ trống',
            'tien_km.required' => 'Không được bỏ trống',
        ]);
        $km = khuyenmai::find($id);
        $km->ten_km = $req->ten_km;
        $km->phantram = $req->tien_km;
        $km->save();
        return redirect()->back()->with(['tc' => 'success', 'message' => 'Thêm thành công']);
    }

    function getxoakm($id){
        $km=khuyenmai::find($id);
        $km->delete();
        return redirect()->back()->with(['tc'=>'success','message'=>'Xóa thành công']);
    }


    function getthemspkm($id){
            $sanpham=sanpham::find($id);
            $khuyenmai=khuyenmai::all();
            return view('admin.layout.admin.khuyenmai.sanphamkhuyenmai',compact('sanpham','khuyenmai'));
    }
    function postthemspkm(Request $req,$id){
                $sp=sanpham::find($id);
                $sp->khuyen_mai=$req->sp_km;
                $sp->save();
                return redirect()->back()->with(['tc'=>'success','message'=>'Sửa thành công']);
    }
    function getxoaspkm($id){

    }
}
