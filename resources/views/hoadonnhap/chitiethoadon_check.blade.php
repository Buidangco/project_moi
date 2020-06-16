<div style="border-bottom: 1px solid black" class="row">
                          <h2 style="color: white;font-size: 46px;">Quản lý hóa đơn nhập</h2>
                        </div>
                        @foreach($laydata as $da)
                        <form style="margin-top: 40px;margin-bottom: 40px;display: flex;">
                          @csrf
                          <label style="    font-size: 29px;color: white;width: 19%;">Mã sery</label>
                            <input type="" value="{{$tenncc}}" id="tenncc" style="display: none;" name="tenncc">
                          <input type="text" value="{{$da->id}}" id="id" style="display: none;" name="id">
                           <input value="{{$da->Mancc}}" id="mancc" type="text" style="display: none;" name="ncc">
                          <input type="text" id="sery" value="{{$da->masery}}" name="sery" style="border: 1px solid ghostwhite;width: 5%;background: white;
    color: black;margin-left: 33px;">
                           <input type="button" class="btn btn-primary " onclick="check()" value="check" style="color: white;background-color:#24315f ">
                        <label style="    font-size: 29px;color: white;    margin-left: 29px;
    width: 29%;">Tên sản phẩm</label>
                          <input value="{{$da->name}}" id="name" type="text" name="name" style="border: 1px solid ghostwhite;width: 30%;background: white;
    color: black;margin-left: 23px;">
                          <label style="    font-size: 29px;color: white;    margin-left: 29px;
    width: 29%;">Số lượng</label>
                          <input  type="text" id="soluong" name="soluong" style="border: 1px solid ghostwhite;width: 30%;background: white;
    color: black;margin-left: 13px;">
                          <label style="    font-size: 29px;color: white;    margin-left: 29px;
    width: 29%;">Đơn giá</label>
                          <input value="{{$da->price}}" id="gia" type="text" name="price" style="border: 1px solid ghostwhite;width: 30%;background: white;
    color: black;margin-left: 13px;">
                     
                           <input type="button" class="btn btn-primary " onclick="Them()" value="Thêm" style="color: white;background-color:#24315f ">
                        </form>
                          @endforeach