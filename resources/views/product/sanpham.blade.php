       @extends('layouts.dash1')
       @section('section')
  
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
               
                      
                            <div style="display: flex;">
                                      <a style="    width: 175px;    padding: 10px;margin-left: 73px;    height: 44px;" href="/product/add" class="btn btn-default btn-rounded mb-4"  >Thêm sản phẩm</a>
                                 <input style="    width: 18%;height: 44px;    border: 1px solid currentColor;" class="form-control" type="text" placeholder="Search" aria-label="Search" id="nameprice">
<!-- <input id="nameprice" type="text" placeholder="Search here...">
 -->                    <button style="    width: 5%;" onclick="timkiemsanpham()"><i style="font-size: 28px;" class="fa fa-search"></i></button>
                            </div>             
                        <div style="opacity:0;" id="nho"></div>
                          <div id="id01" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sản phẩm</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true" onclick="tatmodal()">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <table class="table table-bordered">
                                         <thead>
                                            <tr>
                                                <th>Bình luận</th>
                                            </tr>
                                        </thead>
                                      <tr class="active">
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>

                        <div class="row" style="    margin-right: 16px;margin-left: 48px;">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div style="margin-left: 10px;" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table sparkle-table  " style="height: 600px;color: azure;font-size: 22px;">
                                                <thead class="bg-light">
                                                    <tr style="    font-size: 27px;background-color: #2a4d69;">
                                                        <th style="padding: 23px;font-family: cursive;font-weight: 800;color: aliceblue;">STT</th>
                                                        <th style="padding: 23px;font-family: cursive;font-weight: 800;color: aliceblue;">Hình Ảnh</th>
                                                        <th style="padding: 23px;font-family: cursive;font-weight: 800;color: aliceblue;">Tên SP</th>
                                                        <th style="padding: 23px;font-family: cursive;font-weight: 800;color: aliceblue;">Giá</th>     
                                                        <th style="padding: 23px;font-family: cursive;font-weight: 800;text-align: center;color: aliceblue;">ViewBL</th> 
                                                        <th style="padding: 23px;font-family: cursive;font-weight: 800;text-align: center;color: aliceblue;">Sửa </th>
                                                        <th style="padding: 23px;font-family: cursive;font-weight: 800;text-align: center;color: aliceblue;">Xóa</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="themvao" style="font-family: 'nalika' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;">
                                                    
                                                	@foreach($data1 as $row)
                                                    <tr>
                                                        <td>{{$i++}}</td>
                                                        <td>
                                                            <div class="m-r-10"><img style="width: 58px;" src="{{url('storage/photos/1')}}/{{$row->image}}" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td style="opacity: 0;display: none;"><input type="text"  id="code" value="{{$row->code}}" name=""></td>
                                                        <td>{{$row->name}}</td> 
                                                        <td><span>{{number_format($row->price)}}&nbsp;₫ </span></td>
                                                        <td style="text-align: center;"><svg onclick="view('{{$row->id}}')" class="bi bi-chat-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
</svg></td>
                                                        <td style="text-align: center;">
                                                          <a style="background: chocolate;" href="{{route('/product/edit',$row->id)}}" class="btn btn-default btn-rounded mb-4"><i style="color: aliceblue;" class="fas fa-edit"></i></a>
                                                      </td>
                                                        <td style="text-align: center;"><a style="background: chocolate;" onclick="deletesanpham('{{$row->id}}','{{$row->code}}')" class="btn btn-default btn-rounded mb-4"><i style="color: aliceblue;" class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            Tổng số trang{!!$data1->lastPage()!!}
                                        <nav style="    text-align: right;" aria-label="Page navigation example">
                                            <ul class="pagination">
                                            @if($data1->currentPage()!=1)
                                             <li class="page-item"><a class="page-link" href="{!!$data1->url($data1->currentPage()-1)!!}">Previous</a></li>
                                             @endif
                                             @for($i=1;$i<=$data1->lastPage();$i=$i+1)
                                            <li class="page-item {!!($data1->currentPage()==$i) ? 'active':''!!}"><a class="page-link" href="{!!str_replace('/?','/?',$data1->url($i))!!}">{!!$i!!}</a></li>
                                            @endfor
                                            @if($data1->currentPage()!=$data1->lastPage())
                                            <li class="page-item"><a class="page-link" href="{!!$data1->url($data1->currentPage()+1)!!}">Next</a></li>
                                            @endif
                                            </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- <div class="footer">
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
            </div> -->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
       <script type="text/javascript">
           function deletesanpham(id,code)
           {
            if(confirm("Bạn có muốn xóa sản phẩm này không?")){
                $.ajax({
                    type:'GET',
                    url:'/product1/delete/'+id+'/'+code,
                    // data:{
                    //     'id':id,
                    //     '_token':'{{csrf_token()}}',
                    // },
                    // type:"post",
                    // error:function(xhr,status,errorThrow){
                    //     alert(errorThrow);
                    // },
                    // success:function(data){
                    //     alert("Xóa thành công");
                    //    location.reload();
                    // }
                }).done(function(response){
           $("#themvao").empty();
            $("#themvao").html(response);
                alertify.success('Tìm thành công');
         })
            }
           }

           function timkiemsanpham()
           {
            let nameprice= $('#nameprice').val();
          let code=$("#code").val();
           let code1 =$('#nho').html(code);
           let code2=$('#nho').text();
         $.ajax({
          type:'GET',
          url:'/danhsachtimkiem1/'+nameprice+'/'+code2,
         }).done(function(response){
           $("#themvao").empty();
            $("#themvao").html(response);
                alertify.success('Tìm thành công');
         })
           }
       </script>
       <script type="text/javascript">
            function view(id)
        {
            document.getElementById('id01').style.display='block';
            document.getElementById('id01').style.opacity='1';
          
          let route='/product/sanpham/layma/'+id;
          console.log(route);

               $.ajax({
                 type:'GET',
                url:route,
            }).done(function(response){
               $("#id01").empty();
                $("#id01").html(response);
                alertify.success('show thành công');
            });
        }
         function tatmodal()
        {
            document.getElementById('id01').style.display='none';
            document.getElementById('id01').style.opacity='0';

        }
       </script>
        @stop()