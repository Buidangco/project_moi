       @extends('layouts.dash1')
       @section('section')
<div class="dashboard-wrapper" style="color: aliceblue;
    font-size: 29px;">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row" style="    margin-right: 16px;
    margin-left: 48px;">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header" style="    font-size: 84px;
    text-align: center;">Sửa mới sản phẩm</h5>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" method="post" action="/product/update">
                                      @csrf
                                        <div class="row">
                                            @foreach($dataedit as $row)
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">
                                                <label for="validationCustom01" style="font-family: cursive;">code</label>
                                                <input style="border: 1px solid ghostwhite;width: 50%;    margin-left: 19%;background: white;
    color: black;" type="text" value="{{$row->code}}" class="form-control" id="validationCustom01" name="code" placeholder="Name" required="">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">
                                                <label for="validationCustom01" style="font-family: cursive;">id</label>
                                                <input style="border: 1px solid ghostwhite;width: 50%;    margin-left: 340px;background: white;
    color: black;" type="text" value="{{$row->id}}" class="form-control" id="validationCustom01" name="ma" placeholder="Name" required="">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">
                                                <label for="validationCustom01" style="font-family: cursive;">Tên sản phẩm</label>
                                                <input style="border: 1px solid ghostwhite;width: 50%;    margin-left: 11%;background: white;
    color: black;" type="text" value="{{$row->name}}" class="form-control" id="validationCustom01" name="name" placeholder="Name" required="">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">
                                                <label for="validationCustom02" style="font-family: cursive;">Giá sản phẩm</label>
                                                <input style="border: 1px solid ghostwhite;width: 50%;    margin-left: 183px;background: white;
    color: black;" type="text" value="{{$row->price}}" class="form-control" id="validationCustom02" name="Price" placeholder="price" required="">
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="    margin-left: 22%;">
                                                <button class="btn btn-primary" type="submit" style="width: 100px;height: 56px;">Sửa</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>
                  
           
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        @stop()