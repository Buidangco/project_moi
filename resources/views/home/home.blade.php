       @extends('layouts.dash1')
       @section('section')
        <h2 style="    font-size: 60px;color: cornsilk;font-family: -webkit-body;text-align: center;">Bảng thống kê</h2>
       <div class="row" style="    margin-left: 2%;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b> Lãi trong tuần trước</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         @if($doanhthu!=null)
                                        <h2 class="text-right no-margin">{{number_format($doanhthu)}}đ</h2>
                                        @else
                                        <h2 class="text-right no-margin">0đ</h2>
                                        @endif
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Lãi trong tháng trước</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         @if($doanhthu1!=null)
                                        <h2 class="text-right no-margin">{{number_format($doanhthu1)}}đ</h2>
                                        @else
                                        <h2 class="text-right no-margin">0đ</h2>
                                        @endif
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Số lượng còn trong kho</b></h4>
                              
                                <div class="row vertical-center-box vertical-center-box-tablet" id="chon1" >
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$soluongtrongkho1}}</h2>
                                    </div>
                                    <svg onclick="X()" class="bi bi-arrow-up-circle-fill" style="float: right;    color: aliceblue;font-size: 25px;" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-10.646.354a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 6.207V11a.5.5 0 0 1-1 0V6.207L5.354 8.354z"/>
</svg>
                                     <svg class="bi bi-arrow-down-circle-fill"  onclick="chon1()"    style="float: right;    color: aliceblue;font-size: 25px;" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 5a.5.5 0 0 0-1 0v4.793L5.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 9.793V5z"/>
</svg>
                                </div>
                                <div style="display: none;" id="tat">
                                <h4 class="text-left text-uppercase"><b>Số lượng Iphone trong kho</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$soluongip}}</h2>
                                    </div>
                                </div>
                                <h4 class="text-left text-uppercase"><b>Số lượng Samssung trong kho</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$soluongss}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                                <h4 class="text-left text-uppercase"><b>Số lượng oppo trong kho</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$soluongop}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                                <h4 class="text-left text-uppercase"><b>Số lượng Xiaomi trong kho</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$soluongxiaomi}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                                <h4 class="text-left text-uppercase"><b>Số lượng Vivo trong kho</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$soluongvivo}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                                <h4 class="text-left text-uppercase"><b>Số lượng Nokia trong kho</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$soluongnokia}}</h2>
                                    </div>
                                </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Tiền lãi đầu tháng => hôm nay</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{number_format($tiendengio)}}đ</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>

                    </div>
      <div class="row" style="    margin-left: 2%;
    margin-top: 15px;
">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b> Số lượng hóa đơn hủy đầu tháng đến giờ</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         @if($soluongdonhuy!=null)
                                        <h2 class="text-right no-margin">{{$soluongdonhuy}}</h2>
                                        @else
                                        <h2 class="text-right no-margin">0đ</h2>
                                        @endif
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Lãi trong ngày hôm nay</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                         @if($doanhthu1!=null)
                                        <h2 class="text-right no-margin">{{number_format($tiendenhomnay)}}đ</h2>
                                        @else
                                        <h2 class="text-right no-margin">0đ</h2>
                                        @endif
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Số lượng còn trong kho</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$soluongtrongkho1}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Tiền lãi đến ngày hôm nay</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{number_format($tiendengio)}}đ</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>

                    </div>
       <div class="row" style="    margin-right: 16px;
    margin-left: 48px;display: flex;margin-bottom: 8%;">
        <div class="dashboard-wrapper col-4" style="    width: 50%;border-right: 1px solid;">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget" style="background: azure;">

                        <div class="text-center">
                         {!!$chart->container()!!}
                         <h4>Bản đồ thống kê số lượng được bán trong 1 tuần</h4>
                        </div>
                    </div>
                </div>
                <div >
                <div>
                    <span style="color: white">Doanh thu trong tuần :</span>
                    @if($tongtuantruoc!=null)
                    <span style="color: white">{{number_format($tongtuantruoc)}}đ</span>
                    @else
                    <span style="color: white">0đ</span>
                    @endif
                </div>
            </div>
            </div>
             <div class="dashboard-wrapper col-4" style="    width: 50%;">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget" style="background: azure;">

                        <div class="text-center">
                         {!!$chart1->container()!!}
                         <h4>Bản đồ thống kê số lượng được bán trong 1 tháng </h4>
                        </div>
                    </div>
                </div>
                 <div >
                <div>
                    <span style="color: white">Doanh thu trong tháng :</span>
                     @if($tongthangtruoc!=null)
                    <span style="color: white">{{number_format($tongthangtruoc)}}đ</span>
                    @else
                    <span style="color: white">0đ</span>
                    @endif
                </div>
            </div>
            </div>

            
        </div>
        <div class="row" style="    margin-right: 16px;
    margin-left: 48px;display: flex;margin-bottom: 8%;">
        <div class="dashboard-wrapper col-4" style="    width: 50%;border-right: 1px solid;">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget" style="background: azure;">

                        <div class="text-center">
                         {!!$chart2->container()!!}
                         <h4>Bản đồ thống kê số lượng được bán trong tháng này</h4>
                        </div>
                    </div>
                </div>
                <div >
                <div>
                    <span style="color: white">Doanh thu trong tháng này:</span>
                    @if($tongthangnay1!=null)
                    <span style="color: white">{{number_format($tongthangnay1)}}đ</span>
                    @else
                    <span style="color: white">0đ</span>
                    @endif
                </div>
            </div>
            </div>
             <div class="dashboard-wrapper col-4" style="    width: 50%;border-right: 1px solid;">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget" style="background: azure;">

                        <div class="text-center">
                         {!!$chart3->container()!!}
                         <h4>Bản đồ thống kê số lượng được bán trong tháng này</h4>
                        </div>
                    </div>
                </div>
                <div >
                <div>
                    <span style="color: white">Doanh thu trong tháng này:</span>
                    @if($tongthangnay11!=null)
                    <span style="color: white">{{number_format($tongthangnay11)}}đ</span>
                    @else
                    <span style="color: white">0đ</span>
                    @endif
                </div>
            </div>
            </div>
            
        </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
         {!! $chart->script() !!}
{!! $chart1->script() !!}
{!! $chart2->script() !!}
{!! $chart3->script() !!}
<script type="text/javascript">
    
    function chon1(){
$('#tat').css('display','block');
    }

    function X()
    {
       $('#tat').css('display','none'); 
    }
</script>
        @stop()