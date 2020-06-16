<div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-pills mb-3" style="text-align: center;background: #2a4d69;">
    <li class="active" style="    width: 180px;"><a style="color: aliceblue;font-size: 18px;" href="#tab1" data-toggle="tab">Tất cả</a></li>
    <li style="    width: 180px;"><a style="color: aliceblue;font-size: 18px;" href="#tab2" data-toggle="tab">Chờ thanh toán</a></li>
     <li style="    width: 180px;" class="active"><a style="color: aliceblue;font-size: 18px;" href="#tab3" data-toggle="tab">Chờ lấy hàng</a></li>
    <li style="    width: 180px;"><a style="color: aliceblue;font-size: 18px;" href="#tab4" data-toggle="tab">Đang giao</a></li>
         <li style="    width: 180px;" class="active"><a style="color: aliceblue;font-size: 18px;" href="#tab5" data-toggle="tab">Đã giao</a></li>
    <li style="    width: 180px;"><a style="color: aliceblue;font-size: 18px;" href="#tab6" data-toggle="tab">Đã hủy</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab2" style="width: 100%">
<!--       <table class="table table-bordered" style="width: 1142px;    color: brown;">
  <thead>
    <tr style="    font-size: 25px;background: #2a4d69;">
      <th style="color: aliceblue;font-size: 21px;text-align: center;">STT</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Tên</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">SDT</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">email</th>
       <th style="color: aliceblue;font-size: 21px;text-align: center;">Ngày mua</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Số lượng</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Giá</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">hủy</th>
    </tr>
  </thead>
  <tbody>
    @foreach($choxacnhan as $value)
    <tr style="    font-size: 20px;">
      <th scope="row">{{$stt++}}</th>
      <td id="tenKH">{{$value->tenKH}}</td>
      <td id="sdt">{{$value->sdt}}</td>
      <td id="email">{{$value->email}}</td>
      <td id="email">{{$value->ngayban}}</td>
      <td id="mahoadon" style="opacity: 0;display: none;">{{$value->mahoadon}}</td>
      <td id="makhachhang" style="opacity: 0;display: none;">{{$value->makh}}</td>
            <td id="id" style="opacity: 0;display: none;">{{$value->id}}</td>
      <td>{{$value->tongsl}}</td>
            <td id="gia" >{{number_format($value->gia)}}đ</td>
      <td onclick="Huydonhang('{{$value->id}}','{{$value->mahoadon}}')"><BUTTON style='    border: 1px solid;
    padding: 6px;
    background-color: blue;
    color: powderblue;
    border-radius: 20%;'>hủy</BUTTON></td>
    </tr>
     @endforeach
  </tbody>
</table>
 -->

<div class="row" style="margin-left: 12px;">
  @foreach($choxacnhan as $value)
  <div class="col-2">
    <div style="display: flex;">
      <p>Họ tên</p>
      <span id="tenKH" style="margin-left: 19px;color: red;">{{$value->tenKH}}</span>
    </div>
     <div style="display: flex;">
      <p >Số điện thoại</p>
      <span id="sdt" style="margin-left: 19px;color: red;">{{$value->sdt}}</span>
    </div>
     <div style="display: flex;">
      <p>Email</p>
      <span id="email" style="margin-left: 19px;color: red;">{{$value->email}}</span>
    </div>
     <div style="display: flex;">
      <p>Ngày mua</p>
      <span style="margin-left: 19px;color: red;">{{$value->ngayban}}</span>
    </div>
     <div style="opacity: 0;display: none;">
      <p>{{$value->mahoadon}}</p>
       <p>{{$value->id}}</p>
      <span style="margin-left: 19px;color: red;">{{$value->makh}}</span>
    </div>
     <div style="display: flex;">
      <p>Số lượng</p>
      <span style="margin-left: 19px;color: red;">{{$value->tongsl}}</span>
    </div>
     <div style="display: flex;">
      <p>Giá</p>
      <span style="margin-left: 19px;color: red;">{{number_format($value->gia)}}đ</span>
    </div>
    <button onclick="Huydonhang('{{$value->id}}','{{$value->mahoadon}}')" type="button" class="btn btn-warning"><svg class="bi bi-x-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zm-4.146-3.146a.5.5 0 00-.708-.708L8 7.293 4.854 4.146a.5.5 0 10-.708.708L7.293 8l-3.147 3.146a.5.5 0 00.708.708L8 8.707l3.146 3.147a.5.5 0 00.708-.708L8.707 8l3.147-3.146z" clip-rule="evenodd"/>
</svg></button>
  </div>
  @endforeach
</div>
    </div>
    
    <div class="tab-pane" id="tab1" style="width: 100%">
<!--       <table class="table table-bordered" style="width: 1142px;    color: brown;">
  <thead>
    <tr style="    font-size: 25px;background: #2a4d69;">
      <th style="color: aliceblue;font-size: 21px;text-align: center;">STT</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Tên</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">SDT</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">email</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Số lượng</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Giá</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tatca as $value)
    <tr style="    font-size: 20px;" > 
      <th scope="row">{{$stt++}}</th>
      <td>{{$value->tenKH}}</td>
      <td>{{$value->sdt}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->tongsl}}</td>
      <td>{{number_format($value->gia)}}đ</td>
    </tr>
     @endforeach
  </tbody>
</table> -->
       <div class="row" style="height: 500px;
    overflow: auto;margin-left: 12px;">
  @foreach($tatca as $value)
  <div class="col-3" style="  margin-top: 13px;
    border: 1px solid black;    padding: 10px;
    margin-left: 5px;background: darkgray;">
    <div style="display: flex;">
      <p>Họ tên</p>
      <span id="tenKH" style="margin-left: 19px;color: red;">{{$value->tenKH}}</span>
    </div>
     <div style="display: flex;">
      <p >Số điện thoại</p>
      <span id="sdt" style="margin-left: 19px;color: red;">{{$value->sdt}}</span>
    </div>
     <div style="display: flex;">
      <p>Email</p>
      <span id="email" style="margin-left: 19px;color: red;">{{$value->email}}</span>
    </div>
     <div style="display: flex;">
      <p>Số lượng</p>
      <span style="margin-left: 19px;color: red;">{{$value->tongsl}}</span>
    </div>
     <div style="display: flex;">
      <p>Giá</p>
      <span style="margin-left: 19px;color: red;">{{number_format($value->gia)}}đ</span>
    </div>
  </div>
  @endforeach
</div>
    </div>
   
    <div class="tab-pane active" id="tab3">
      <p>I'm in Section 1.</p>
    </div>
    <div class="tab-pane" id="tab4" style="width: 100%">
<!--        <table class="table table-bordered" style="width: 1142px;    color: brown;">
  <thead>
    <tr style="    font-size: 25px;background: #2a4d69;">
      <th style="color: aliceblue;font-size: 21px;text-align: center;">STT</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Tên</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">SDT</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">email</th>
       <th style="color: aliceblue;font-size: 21px;text-align: center;">Ngày mua</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Số lượng</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Giá</th>
    </tr>
  </thead>
  <tbody>
    @foreach($danggiao as $value)
    <tr style="    font-size: 20px;">
      <th scope="row">{{$stt++}}</th>
      <td>{{$value->tenKH}}</td>
      <td>{{$value->sdt}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->ngayban}}</td>
      <td>{{$value->tongsl}}</td>
      <td>{{number_format($value->gia)}}đ</td>
    </tr>
     @endforeach
  </tbody>
</table> -->
<div class="row" style="height: 500px;
    overflow: auto;margin-left: 12px;">
  @foreach($danggiao as $value)
  <div class="col-3" style="  margin-top: 13px;
    border: 1px solid black;    padding: 10px;
    margin-left: 5px;background: darkgray;">
    <div style="display: flex;">
      <p>Họ tên</p>
      <span id="tenKH" style="margin-left: 19px;color: red;">{{$value->tenKH}}</span>
    </div>
     <div style="display: flex;">
      <p >Số điện thoại</p>
      <span id="sdt" style="margin-left: 19px;color: red;">{{$value->sdt}}</span>
    </div>
     <div style="display: flex;">
      <p>Email</p>
      <span id="email" style="margin-left: 19px;color: red;">{{$value->email}}</span>
    </div>
     <div style="display: flex;">
      <p>Số lượng</p>
      <span style="margin-left: 19px;color: red;">{{$value->tongsl}}</span>
    </div>
     <div style="display: flex;">
      <p>Giá</p>
      <span style="margin-left: 19px;color: red;">{{number_format($value->gia)}}đ</span>
    </div>
  </div>
  @endforeach
</div>
    </div>
        <div class="tab-pane active" id="tab5">
      <p>I'm in Section 1.</p>
    </div>
    
    <div class="tab-pane" id="tab6" style="width: 100%">
<!--       <table class="table table-bordered" style="width: 1142px;    color: brown;">
  <thead>
    <tr style="    font-size: 25px;background: #2a4d69;">
      <th style="color: aliceblue;font-size: 21px;text-align: center;">STT</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Tên</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">SDT</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">email</th>
       <th style="color: aliceblue;font-size: 21px;text-align: center;">Ngày mua</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Số lượng</th>
      <th style="color: aliceblue;font-size: 21px;text-align: center;">Giá</th>
    </tr>
  </thead>
  <tbody>
    @foreach($huydon as $value)
    <tr style="    font-size: 20px;">
      <th scope="row">{{$stt++}}</th>
      <td>{{$value->tenKH}}</td>
      <td>{{$value->sdt}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->ngayban}}</td>
      <td>{{$value->tongsl}}</td>
      <td>{{number_format($value->gia)}}đ</td>
    </tr>
     @endforeach
  </tbody>
</table> -->
<div class="row" style="height: 500px;
    overflow: auto;margin-left: 12px;">
  @foreach($huydon as $value)
  <div class="col-3" style="  margin-top: 13px;
    border: 1px solid black;    padding: 10px;
    margin-left: 5px;background: darkgray;">
    <div style="display: flex;">
      <p>Họ tên</p>
      <span id="tenKH" style="margin-left: 19px;color: red;">{{$value->tenKH}}</span>
    </div>
     <div style="display: flex;">
      <p >Số điện thoại</p>
      <span id="sdt" style="margin-left: 19px;color: red;">{{$value->sdt}}</span>
    </div>
     <div style="display: flex;">
      <p>Email</p>
      <span id="email" style="margin-left: 19px;color: red;">{{$value->email}}</span>
    </div>
     <div style="display: flex;">
      <p>Số lượng</p>
      <span style="margin-left: 19px;color: red;">{{$value->tongsl}}</span>
    </div>
     <div style="display: flex;">
      <p>Giá</p>
      <span style="margin-left: 19px;color: red;">{{number_format($value->gia)}}đ</span>
    </div>
  </div>
  @endforeach
</div>
    </div>
  </div>
</div>