<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use DB;
use Carbon\Carbon;

class hoadonban extends Controller
{
    public function Khachhang()
    {
    	$i=1;
    	$data1=DB::table('khachhang')->paginate(5);
    	 $data = DB::table('codeloai')->select('nameLoai','code','idLoai')->get();
    	return view('hoadonban.Khachhang')->with('data1',$data1)->with('data',$data)->with('i',$i);
    }

    public function hoadonban()
    {
    	$i=1;
    	$data1=DB::table('hoadonban')
        ->join('khachhang', 'khachhang.makh', 'hoadonban.makh')
        ->select('khachhang.*','hoadonban.*')
        ->paginate(5);
    	 $data = DB::table('codeloai')->select('nameLoai','code','idLoai')->get();
    	return view('hoadonban.hoadonban')->with('data1',$data1)->with('data',$data)->with('i',$i);
    }

    public function hoadonban_view($mahoadon)
    {
    	$i=1;
    	 $data = DB::table('codeloai')->select('nameLoai','code','idLoai')->get();
    	  $data1 =DB::table("cthoadonban1")
    	  ->join('hoadonban', 'cthoadonban1.mahoadon', 'hoadonban.mahoadon')
           ->join('khachhang', 'khachhang.makh', 'hoadonban.makh')
        ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
        ->select('cthoadonban1.*','sanpham.name','hoadonban.maKh','sanpham.image','khachhang.*')
        ->where('hoadonban.mahoadon',$mahoadon)
        ->get();

        foreach ($data1 as $key => $value) {
            $tenkh=$value->tenKh;
            $diachi=$value->diachi;
             $sdt=$value->Sdt;
        }
        return view('hoadonban.viewhoadonban')->with('data1',$data1)->with('i',$i)->with('tenkh',$tenkh)->with('diachi',$diachi)->with('sdt',$sdt);
    }

    public function hoadonban_duyet($mahoadon)
    {
     //    $soluonga=[];
    	// $i=1;
    	 $data = DB::table('codeloai')->select('nameLoai','code','idLoai')->get();

      $data1 =DB::table("cthoadonban1")
          ->join('hoadonban', 'cthoadonban1.mahoadon', 'hoadonban.mahoadon')
        ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
        // ->join('cthd','cthd.id','cthoadonban1.masanpham')
        ->select('cthoadonban1.*','sanpham.name','hoadonban.makh','hoadonban.gia','hoadonban.ngayban','hoadonban.xacnhan')
        ->where('hoadonban.mahoadon',$mahoadon)
        ->get();
        // foreach ($data1 as $key => $value) {
        //     $id=$value->masanpham;
        //     $sl=$value->soluong;
        //     $cthd= DB::table('cthd')->where('id',$id)->select('soluong','id')->get();
        //     foreach ($cthd as $key => $value) {
        //        array_push($soluonga, $value->soluong);
        //     }

        //      foreach ($soluonga as $key => $value) {
        //         DB::table('cthd')
        //       ->where('id', $id)
        //       ->update(['soluong' => $value-$sl]);
        //     }
        // }
        //       $data2 =DB::table("cthoadonban1")
        //   ->join('hoadonban', 'cthoadonban1.mahoadon', 'hoadonban.mahoadon')
        // ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
        // ->join('cthd','cthd.id','cthoadonban1.masanpham')
        // ->select('cthoadonban1.*','sanpham.name','hoadonban.makh','hoadonban.gia','hoadonban.ngayban','hoadonban.xacnhan','cthd.soluong')
        // ->where('hoadonban.mahoadon',$mahoadon)
        // ->get();
        // dd($data1);
        DB::table('hoadonban')->where('mahoadon',$mahoadon)->update(['xacnhan'=>'Đã duyệt','trangthai'=>'Đang giao hàng']);
            
         // $cthd= DB::table('cthd')->where('id',$id)->select('soluong','id')->get();
         //    foreach ($cthd as $key => $value) {
         //        array_push($soluonga, $value->soluong);
         //    }
         //    foreach ($soluonga as $key => $value) {
         //        DB::table('cthd')
         //      ->where('id', $id)
         //      ->update(['soluong' => $value-$soluong]);
         //    }
        return Redirect('/product/hoadonban')->with(['flag'=>'success','message'=>'Xác nhận thành công thành ']);;
    }

    public function hoadonban_thanhtoan($id)
    {
        $ngayhientai=Carbon::now();
        DB::table('hoadonban')->where('mahoadon',$id)->update(['trangthai'=>'Đã thanh toán','ngayban'=>$ngayhientai]);
        $soluonga=[];
        $i=1;
         $data = DB::table('codeloai')->select('nameLoai','code','idLoai')->get();

      $data1 =DB::table("cthoadonban1")
          ->join('hoadonban', 'cthoadonban1.mahoadon', 'hoadonban.mahoadon')
        ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
        // ->join('cthd','cthd.id','cthoadonban1.masanpham')
        ->select('cthoadonban1.*','sanpham.name','hoadonban.makh','hoadonban.gia','hoadonban.ngayban','hoadonban.xacnhan')
        ->where('hoadonban.mahoadon',$id)
        ->get();
        foreach ($data1 as $key => $value) {
            $id=$value->masanpham;
            $sl=$value->soluong;
            $cthd= DB::table('cthd')->where('id',$id)->select('soluong','id')->get();
            foreach ($cthd as $key => $value) {
               array_push($soluonga, $value->soluong);
            }

             foreach ($soluonga as $key => $value) {
                DB::table('cthd')
              ->where('id', $id)
              ->update(['soluong' => $value-$sl]);
            }
        }
        
        //       $data2 =DB::table("cthoadonban1")
        //   ->join('hoadonban', 'cthoadonban1.mahoadon', 'hoadonban.mahoadon')
        // ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
        // ->join('cthd','cthd.id','cthoadonban1.masanpham')
        // ->select('cthoadonban1.*','sanpham.name','hoadonban.makh','hoadonban.gia','hoadonban.ngayban','hoadonban.xacnhan','cthd.soluong')
        // ->where('hoadonban.mahoadon',$mahoadon)
        // ->get();
        // dd($data1);
        
            
         // $cthd= DB::table('cthd')->where('id',$id)->select('soluong','id')->get();
         //    foreach ($cthd as $key => $value) {
         //        array_push($soluonga, $value->soluong);
         //    }
         //    foreach ($soluonga as $key => $value) {
         //        DB::table('cthd')
         //      ->where('id', $id)
         //      ->update(['soluong' => $value-$soluong]);
         //    }
        return Redirect()->back();
    }
    function viewdonhangchuaduyet()
    {
        $i=1;
         $data = DB::table('codeloai')->select('nameLoai','code','idLoai')->get();
        $data1= DB::table('hoadonban')
        ->join('khachhang', 'khachhang.makh', 'hoadonban.makh')
        ->select('khachhang.*','hoadonban.*')
        ->where('xacnhan','=','chưa duyệt')->get();
        return view('hoadonban.viewdonhang_huy_duyet',compact('data1','data','i'));
    }
        function viewdonhangxacnhan()
    {
        $i=1;
         $data = DB::table('codeloai')->select('nameLoai','code','idLoai')->get();
        $data1= DB::table('hoadonban')
        ->join('khachhang', 'khachhang.makh', 'hoadonban.makh')
        ->select('khachhang.*','hoadonban.*')
        ->where([['xacnhan','=','Đã duyệt'],['trangthai','=','Đang giao hàng']])->get();
        return view('hoadonban.viewdonhang_huy_duyet',compact('data1','data','i'));
    }
            function viewdonhanghuy()
    {
        $i=1;
         $data = DB::table('codeloai')->select('nameLoai','code','idLoai')->get();
        $data1= DB::table('hoadonban')
        ->join('khachhang', 'khachhang.makh', 'hoadonban.makh')
        ->select('khachhang.*','hoadonban.*')
        ->where('xacnhan','=','hủy')->get();
        return view('hoadonban.viewdonhang_huy_duyet',compact('data1','data','i'));
    }
    function refresh()
    {
                $i=1;
        $data1=DB::table('hoadonban')
        ->join('khachhang', 'khachhang.makh', 'hoadonban.makh')
        ->select('khachhang.*','hoadonban.*')
        ->paginate(5);
        
         $data = DB::table('codeloai')->select('nameLoai','code','idLoai')->get();
        return view('hoadonban.viewdonhang_huy_duyet')->with('data1',$data1)->with('data',$data)->with('i',$i);
    }
    public function export1()
    {
        // $table1 = DB::table('khachhang')->join('hoadonban','hoadonban.makh','khachhang.makh')->select('khachhang.*','hoadonban.*')->where('xacnhan','=','Chưa duyệt')->get();
        // $table1=DB::table('khachhang')->get();
        return Excel::download(new UsersExport, 'khachhang_chuaduyet.xlsx');
    }
}
