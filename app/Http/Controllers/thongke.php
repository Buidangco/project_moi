<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart;
use App\Charts\bieudo;
use Carbon\Carbon;
use Auth;
use DB;

class thongke extends Controller
{
    public function index(Request $req)
    {
        $tien=[];
        $doanhthu=0;
        $doanhthu1=0;
        $thongtingia=[];
        $t=0;
        $sl=[];
        $tongtientrongct=0;
        $tongtientrongct1=0;
        $layma=[];
        $tonggia=[];
         $tonggia1=[];
        $tongtuantruoc;
        $tongthangtruoc;
        $tongtienhoadon;
                        // Auth::logout();
    	 $query=DB::table("codeloai");
    	$query=$query->select("*");
    	$data=$query->paginate(15);
    	$forngay=DB::table('hoadonban')->get();
    	$so=[];
    	$ngay=[];
    	foreach ($forngay as $key => $value) {
            $day= Carbon::now()->dayOfWeek;
    		$date =\Carbon\Carbon::today()->subDays(7+$day);
    		  $now = Carbon::now();
            $tuan=$now->subDays($day);
    		$layngay=DB::table('hoadonban')
    		->where([
                ['ngayban','<=',$tuan ],
                ['ngayban', '>=', $date],
                ['trangthai', 'Đã thanh toán'],
                   ])
    		->get();
    	}	
        if(count($layngay))
        {
            foreach ($layngay as $key => $value) {
                $ct=DB::table('cthoadonban1')->where('mahoadon',$value->mahoadon)->SUM('soluong');
                $ct1=DB::table('cthoadonban1')->where('mahoadon',$value->mahoadon)->SUM('Gia');
                // foreach ($ct as $key => $value) {
                $tongtuantruoc=DB::table('hoadonban')->where([
                ['ngayban','<=',$tuan ],
                ['ngayban', '>=', $date],
                ['trangthai', 'Đã thanh toán'],
                   ])->SUM('gia');
                    array_push($so,$ct);
                      array_push($tien,$ct1);
                   array_push($ngay,$value->ngayban);
                // }
            }

                $layngay2=DB::table('hoadonban')
                ->join('cthoadonban1','hoadonban.mahoadon','cthoadonban1.mahoadon')
                ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
                ->join('cthd','cthd.id','sanpham.id')
            ->where([
                ['ngayban','<=',$tuan ],
                ['ngayban', '>=', $date],
                ['trangthai', 'Đã thanh toán'],
                   ])
            ->select('cthoadonban1.masanpham','cthoadonban1.soluong','cthoadonban1.gia','cthd.Gia')->get();
             foreach ($layngay2 as $key => $value) {
                   array_push($tonggia, $value->soluong*$value->Gia);
               }
               // dd($tonggia);
               foreach ($tonggia as $key => $value) {
               $tongtientrongct+=$value;
               }

           
               
               // foreach ($thongtingia as $key => $value1) {
               //     foreach ($tonggia as $key => $value) {
               //         $doanhthu=$value1*$value;
               //     }
               // }
               // dd($doanhthu);
               // dd($thongtingia);

            // foreach ($layngay2 as $key => $value) {
            //        $t=$value->soluong*$value->gia;
            //        array_push($tonggia, $t);
            //        array_push($layma, $value->masanpham);
            //    } 
            //    foreach ($layngay2 as $key => $value) {
            //        array_push($layma, $value->soluong);
            //    } 
            //    foreach ($tonggia as $key => $value) {
            //        $tongtientrongct+=$value;
            //    }
            //    foreach ($layma as $key => $value) {
            //        $tongtientuan =DB::table('cthd')->where('id',$value)->select('Gia')->get();
            //        foreach ($tongtientuan as $key => $value) {
            //            array_push($thongtingia, $value);
            //        }
                   
            //    }
            //    dd($thongtingia);
            //    $doanhthu= $tongtuantruoc-$tongtientrongct;
            //    dd($doanhthu);

        }
        else
        {
            $tongtuantruoc=0;
        }
    		
$borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];
    		$chart = new bieudo;
            $chart->title('Tuần trước', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
    	$chart->labels($ngay);
        //         $chart->title('Users by Months', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
        // $chart->barwidth(0.0);
        // $chart->displaylegend(false);
    	$chart->dataset('Số lượng sản phẩm', 'doughnut',$so)  ->color($borderColors)
            ->backgroundcolor($fillColors);

    	$so1=[];
    	$ngay1=[];
    	foreach ($forngay as $key => $value) {
             $day= Carbon::now()->day;
    		$date =\Carbon\Carbon::today()->subDays(30+$day);
    		// $now = Carbon::now()->toDateString();
            $now = Carbon::now();
            
            $thang=$now->subDays($day);  
    		$layngay=DB::table('hoadonban')
    		->where([
                ['ngayban','<=',$thang],
                ['ngayban', '>=', $date],
                 ['trangthai', 'Đã thanh toán'],
                   ])
    		->get();
    	}	

    		foreach ($layngay as $key => $value) {
    			$ct=DB::table('cthoadonban1')->where('mahoadon',$value->mahoadon)->SUM('soluong');
    			// foreach ($ct as $key => $value) {
                $tongthangtruoc=DB::table('hoadonban')->where([
                ['ngayban','<=',$thang],
                ['ngayban', '>=', $date],
                 ['trangthai', 'Đã thanh toán'],
                   ])->SUM('gia');
    				array_push($so1,$ct);
    		       array_push($ngay1,$value->ngayban);
    			// }
    			
    		}


              $layngay3=DB::table('hoadonban')
                ->join('cthoadonban1','hoadonban.mahoadon','cthoadonban1.mahoadon')
                ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
                ->join('cthd','cthd.id','sanpham.id')
            ->where([
                ['ngayban','<=',$thang ],
                ['ngayban', '>=', $date],
                ['trangthai', 'Đã thanh toán'],
                   ])
            ->select('cthoadonban1.masanpham','cthoadonban1.soluong','cthoadonban1.gia','cthd.Gia')->get();
             foreach ($layngay3 as $key => $value) {
                   array_push($tonggia1, $value->soluong*$value->Gia);
               }
               // dd($tonggia);
               foreach ($tonggia1 as $key => $value) {
               $tongtientrongct1+=$value;
               }

    		$chart1 = new bieudo;
            $chart1->title('Tháng trước', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
    	$chart1->labels($ngay1);
    	$chart1->dataset('Số lượng sản phẩm', 'bar', $so1) ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)");
        $datahd=DB::table('hoadonban')->where('xacnhan','=','chưa duyệt');


            // foreach ($layngay as $key => $value) {
            //     array_push($layma, $value->masanpham);
            // }
            // foreach ($layma as $key => $value) {
            //   $tongtienhoadon =DB::table('cthd')->where('id',$value)->SUM('Gia');
            //   array_push($tonggia, $tongtienhoadon);   
            // }

            // foreach ($tonggia as $key => $value) {
            //     $t+=$value;
            // }
            
            $doanhthu= $tongtuantruoc-$tongtientrongct;
            $doanhthu1= $tongthangtruoc-$tongtientrongct1;


            $soluongtrongkho=[];
            $soluongtrongkho1=0;

            $soluong=DB::table('cthd')->get();
            foreach ($soluong as $key => $value) {
                array_push($soluongtrongkho, $value->soluong);
            }
            foreach ($soluongtrongkho as $key => $value) {
                $soluongtrongkho1+=$value;
            }


            $tonggialaihientai=[];
            $tonggialaihientai1=[];
            $tienlaidenhientai=0;
            $tienlaidenhientai1=0;
            $month= Carbon::now()->day;
            $monthlast =\Carbon\Carbon::today()->subDays($month);
            // $now = Carbon::now()->toDateString();
            // dd($monthlast);
            $now = Carbon::now();
            
            // $thang=$now->subDays($day);  
             $layngay4=DB::table('hoadonban')
                ->join('cthoadonban1','hoadonban.mahoadon','cthoadonban1.mahoadon')
                ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
                ->join('cthd','cthd.id','sanpham.id')
            ->where([
                ['ngayban','<=',$now ],
                ['ngayban', '>=', $monthlast],
                ['trangthai', 'Đã thanh toán'],
                   ])
            ->select('cthoadonban1.masanpham','cthoadonban1.soluong','cthoadonban1.gia','cthd.Gia')->get();
              foreach ($layngay4 as $key => $value) {
                   array_push($tonggialaihientai, $value->soluong*$value->Gia);
                   array_push($tonggialaihientai1, $value->soluong*$value->gia);
               }
               // dd($tonggia);
               foreach ($tonggialaihientai as $key => $value) {
               $tienlaidenhientai+=$value;
               }
                  foreach ($tonggialaihientai1 as $key => $value) {
               $tienlaidenhientai1+=$value;
               }
            $tiendengio=$tienlaidenhientai1-$tienlaidenhientai;

            $layngay5=DB::table('hoadonban') ->where([
                ['ngayban','<=',$now ],
                ['ngayban', '>=', $monthlast],
                ['xacnhan', 'Hủy'],
                   ])->get();
            $soluongdonhuy=0;
            foreach ($layngay5 as $key => $value) {
                $soluongdonhuy+=1;
            }

            $sliphone=[];
            $soluongip=0;
             $SLiphone=DB::table('cthd') ->where('Mancc','iphone')->select('soluong')->get();

             foreach ($SLiphone as $key => $value) {
                 array_push($sliphone, $value->soluong);
             }
             foreach ($sliphone as $key => $value) {
                 $soluongip+=$value;
             }
             $slsamsung=[];
            $soluongss=0;
             $Slsamsung=DB::table('cthd') ->where('Mancc','samsung')->select('soluong')->get();

             foreach ($Slsamsung as $key => $value) {
                 array_push($slsamsung, $value->soluong);
             }
             foreach ($slsamsung as $key => $value) {
                 $soluongss+=$value;
             }
                    $sloppo=[];
            $soluongop=0;
             $Sloppo=DB::table('cthd') ->where('Mancc','oppo')->select('soluong')->get();

             foreach ($Sloppo as $key => $value) {
                 array_push($sloppo, $value->soluong);
             }
             foreach ($sloppo as $key => $value) {
                 $soluongop+=$value;
             }
                    $slxiaomi=[];
            $soluongxiaomi=0;
             $Slxiaomi=DB::table('cthd') ->where('Mancc','xiaomi')->select('soluong')->get();

             foreach ($Slxiaomi as $key => $value) {
                 array_push($slxiaomi, $value->soluong);
             }
             foreach ($slxiaomi as $key => $value) {
                 $soluongxiaomi+=$value;
             }
                    $slvivo=[];
            $soluongvivo=0;
             $Slvivo=DB::table('cthd') ->where('Mancc','vivo')->select('soluong')->get();

             foreach ($Slvivo as $key => $value) {
                 array_push($slvivo, $value->soluong);
             }
             foreach ($slvivo as $key => $value) {
                 $soluongvivo+=$value;
             }
                    $slnokia=[];
            $soluongnokia=0;
             $Slnokia=DB::table('cthd') ->where('Mancc','nokia')->select('soluong')->get();

             foreach ($Slnokia as $key => $value) {
                 array_push($slnokia, $value->soluong);
             }
             foreach ($slnokia as $key => $value) {
                 $soluongnokia+=$value;
             }
//Lãi ngày
             $tonggialaihientai4=[];
             $tonggialaihientai5=[];
              $tonggialai4=0;
               $tonggialai5=0;
             $ngay=Carbon::now('Asia/Ho_Chi_Minh')->hour;
             $homqua=Carbon::yesterday();

             $homnay=$homqua->addHours($ngay);
             $ngaymai=Carbon::tomorrow();
               $layngay7=DB::table('hoadonban')
                ->join('cthoadonban1','hoadonban.mahoadon','cthoadonban1.mahoadon')
                ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
                ->join('cthd','cthd.id','sanpham.id')
            ->where([
                ['ngayban','>',$homqua],
                ['ngayban','<',$ngaymai],
                ['trangthai', 'Đã thanh toán'],
                   ])
            ->select('cthoadonban1.masanpham','cthoadonban1.soluong','cthoadonban1.gia','cthd.Gia')->get();
              foreach ($layngay7 as $key => $value) {
                   array_push($tonggialaihientai4, $value->soluong*$value->Gia);
                   array_push($tonggialaihientai5, $value->soluong*$value->gia);
               }
               // dd($tonggia);
               foreach ($tonggialaihientai4 as $key => $value) {
               $tonggialai4+=$value;
               }
                  foreach ($tonggialaihientai5 as $key => $value) {
               $tonggialai5+=$value;
               }
            $tiendenhomnay=$tonggialai5-$tonggialai4;


       ///Tiền từ đầu tháng đến giờ
       
            $soluongdo=[];
        $ngaydo=[];
        $tongthangnay=[];
        $tongthangnay1=0;
        foreach ($forngay as $key => $value) {
             $day= Carbon::now()->day;
              $hientai= Carbon::now();
            $dauthang=Carbon::now()->subDays($day);
            // $now = Carbon::now()->toDateString();
            
            $thang=$now->subDays($day);  
            $layngay=DB::table('hoadonban')
            ->where([
                ['ngayban','<=',$hientai],
                ['ngayban', '>=', $dauthang],
                 ['trangthai', 'Đã thanh toán'],
                   ])
            ->get();
        }   
            foreach ($layngay as $key => $value) {
                $ct=DB::table('cthoadonban1')->where('mahoadon',$value->mahoadon)->SUM('soluong');
                $ct1=DB::table('cthoadonban1')->where('mahoadon',$value->mahoadon)->SUM('Gia');
                // foreach ($ct as $key => $value) {
                $tongthangtruoc=DB::table('hoadonban')->where([
                ['ngayban','<=',$hientai],
                ['ngayban', '>=', $dauthang],
                 ['trangthai', 'Đã thanh toán'],
                   ])->SUM('gia');
                    array_push($soluongdo,$ct);
                   array_push($ngaydo,$value->ngayban);
                // }
                // dd($soluongdo);
            }
              $layngay9=DB::table('hoadonban')
                ->join('cthoadonban1','hoadonban.mahoadon','cthoadonban1.mahoadon')
                ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
                ->join('cthd','cthd.id','sanpham.id')
            ->where([
                ['ngayban','<=',$hientai ],
                ['ngayban', '>=', $dauthang],
                ['trangthai', 'Đã thanh toán'],
                   ])
            ->select('cthoadonban1.masanpham','cthoadonban1.soluong','cthoadonban1.gia','cthd.Gia')->get();
             foreach ($layngay9 as $key => $value) {
                   array_push($tongthangnay, $value->soluong*$value->Gia);
               }
               // dd($tonggia);
               foreach ($tongthangnay as $key => $value) {
               $tongthangnay1+=$value;
               }
            $chart2 = new bieudo;
            $chart2->title('Số lượng trong tháng', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
        $chart2->labels($ngaydo);
        $chart2->dataset('Số lượng sản phẩm', 'line', $soluongdo) 
        ->color("rgb(255, 99, 132)");

        //tiền đầu tháng đến giờ

          $tiendo=[];
        $ngaydo1=[];
        $tongthangnay111=[];
        $tongthangnay11=0;
        foreach ($forngay as $key => $value) {
             $day= Carbon::now()->day;
              $hientai= Carbon::now();
            $dauthang=Carbon::now()->subDays($day);
            // $now = Carbon::now()->toDateString();
            
            $thang=$now->subDays($day);  
            $layngay=DB::table('hoadonban')
            ->where([
                ['ngayban','<=',$hientai],
                ['ngayban', '>=', $dauthang],
                 ['trangthai', 'Đã thanh toán'],
                   ])
            ->get();
        }   
            foreach ($layngay as $key => $value) {
                // $ct=DB::table('cthoadonban1')->where('mahoadon',$value->mahoadon)->SUM('soluong');
                // $ct1=DB::table('cthoadonban1')->where('mahoadon',$value->mahoadon)->SUM('Gia');
                // // foreach ($ct as $key => $value) {
                // $tongthangtruoc=DB::table('hoadonban')->where([
                // ['ngayban','<=',$hientai],
                // ['ngayban', '>=', $dauthang],
                //  ['trangthai', 'Đã thanh toán'],
                //    ])->SUM('gia');
                    array_push($tiendo,$value->gia);
                   array_push($ngaydo1,$value->ngayban);
                // }
                
            }
            // dd($soluongdo);
              $layngay10=DB::table('hoadonban')
                ->join('cthoadonban1','hoadonban.mahoadon','cthoadonban1.mahoadon')
                ->join('sanpham','sanpham.id','cthoadonban1.masanpham')
                ->join('cthd','cthd.id','sanpham.id')
            ->where([
                ['ngayban','<=',$hientai ],
                ['ngayban', '>=', $dauthang],
                ['trangthai', 'Đã thanh toán'],
                   ])
            ->select('cthoadonban1.masanpham','cthoadonban1.soluong','cthoadonban1.gia','cthd.Gia')->get();
             foreach ($layngay10 as $key => $value) {
                   array_push($tongthangnay111, $value->soluong*$value->Gia);
               }
               // dd($tonggia);
               foreach ($tongthangnay111 as $key => $value) {
               $tongthangnay11+=$value;
               }
            $chart3 = new bieudo;
            $chart3->title('tiền trong tháng', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
        $chart3->labels($ngaydo1);
        $chart3->dataset('Số lượng sản phẩm', 'doughnut',$tiendo)  ->color($borderColors)
            ->backgroundcolor($fillColors);
            // $soluongconlai = 
    	return view('home.home',['chart'=>$chart,'chart2'=>$chart2,'chart3'=>$chart3,'data'=>$data,'chart1'=>$chart1,'tongtuantruoc'=>$tongtuantruoc,'tongthangtruoc'=>$tongthangtruoc,'doanhthu'=>$doanhthu,'doanhthu1'=>$doanhthu1,'soluongtrongkho1'=>$soluongtrongkho1,'tiendengio'=>$tiendengio,'soluongdonhuy'=>$soluongdonhuy,'soluongip'=>$soluongip,'soluongss'=>$soluongss,'soluongop'=>$soluongop,'soluongxiaomi'=>$soluongxiaomi,'soluongvivo'=>$soluongvivo,'soluongnokia'=>$soluongnokia,'tiendenhomnay'=>$tiendenhomnay,'tongthangnay1'=>$tongthangnay1,'tongthangnay11'=>$tongthangnay11]);
    }
}
