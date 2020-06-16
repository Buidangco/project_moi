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
    text-align: center;">Thêm mới sản phẩm</h5>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" method="post" action="/product/adddata">
                                      @csrf
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">
                                                <label for="validationCustom01" style="font-family: cursive;">Tên sản phẩm</label>
                                                <input style="border: 1px solid ghostwhite;width: 50%;    margin-left: 11%;background: white;
    color: black;" type="text" class="form-control" id="validationCustom01" name="name" placeholder="NAME......." required="">

                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">
                                                <label for="validationCustom02" style="font-family: cursive;">Mã sery sản phẩm</label>
                                                <input style="border: 1px solid ghostwhite;width: 50%;    margin-left: 110px;background: white;
    color: black;" type="text" class="form-control" id="validationCustom02" name="sery" placeholder="Sery" required="">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02" style="font-family: cursive;">Tên hãng sản xuất</label>
                                                 <select style="color: black;margin-left: 99px;" class="custom-select custom-select-lg mb-3" name="mahangsx">
                                                    @foreach($data1 as $d1)
                                               <option value="{{$d1->Mancc}}"  selected>{{$d1->Ten}}</option>
                                               @endforeach
                                             </select>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02" style="font-family: cursive;">Loại sản phẩm</label>
                                                 <select style="color: black;    margin-left: 164px;width: 252px;" name="maloai"  class="custom-select custom-select-lg mb-3">
                                                    @foreach($data as $dloai)
                                               <option value="{{$dloai->code}}" selected>{{$dloai->nameLoai}}</option>
                                               @endforeach
                                             </select>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">
                                                <label for="validationCustom02" style="font-family: cursive;">Chọn File</label>
                                 <div class="input-group">
                                        <span class="input-group-btn">
                                      <p style="    background-color: lightgray;color: black;    margin-left: 234px; width: 115px;background: white;
    color: black;" id="btl_aaaa" data-input="thumbnail" data-preview="holder1" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> CHỌN
                                      </p>
                                    </span>
                                    <input id="thumbnail" style="width: 50%;" class="form-control" type="text" name="image">
                                  </div>
                                  <img id="holder1" style="margin-top:15px;max-height:100px;width: 100px;height: 100px"/>                                
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                 <div class="form-group">
                                                <label for="comment" style="font-family: cursive;">Nội dung</label>
                                                <textarea  class="form-control" rows="5" id="comment" name="noidung"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                 <div class="form-group">
                                                <label for="comment" style="font-family: cursive;">Thông số</label>
                                                <textarea style="border: 1px solid;background: aliceblue;    color: black;"  class="form-control" rows="5" id="comment" name="thongso"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">
                                                <label for="validationCustom01" style="font-family: cursive;">Cập nhật bảng giá</label>
                                                      <input type="text" style="border: 1px solid ghostwhite;width: 50%;    margin-left: 7%;background: white;
    color: black;" class="form-control" id="validationCustom01" name="price" placeholder="Giá" required="">
                                                    </div>
                                                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">

                                                <label for="example-datetime-local-input" class="col-2 col-form-label" style="font-family: cursive;">Ngày áp dụng</label>
                                                
                                                  <input style="border: 1px solid ghostwhite;width: 50%;    margin-left: 166px;background: white;
    color: black;" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" name="datebatdau">
                                                </div>    
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">                                        
                                                <label for="example-datetime-local-input" class="col-2 col-form-label" style="font-family: cursive;">Ngày kết thúc</label>
                                              
                                                  <input style="border: 1px solid ghostwhite;width: 50%;    margin-left: 159px;background: white;
    color: black;" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" name="dateketthuc">
                                                </div>  
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="display: flex;">
                                                <label for="example-datetime-local-input" class="col-2 col-form-label" style="font-family: cursive;">Chiết khấu</label>
                                                <input  style="border: 1px solid ghostwhite;width: 50%;    margin-left: 214px;background: white;
    color: black;"type="text" class="form-control" id="validationCustom01" name="chietkhau" placeholder="Chiết khấu" required="">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="margin-left: 62%;
    font-size: 25px;">
                                                <button class="btn btn-primary" type="submit" style="width: 100px;height: 56px;">ADD</button>
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
            <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
        <script>

             $('#btl_aaaa').filemanager('image');
  $(document).ready(function(){
    // Define function to open filemanager window
    var lfm = function(options, cb) {

      var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
      window.open(
        route_prefix + 
        '?type=' + options.type ||
         'file', 'FileManager', 'width=900,height=600');
      window.SetUrl = cb;
    };

    // Define LFM summernote button
    var LFMButton = function(context) {
      var ui = $.summernote.ui;
      var button = ui.button({
        contents: '<i class="note-icon-picture"></i> ',
        tooltip: 'Insert image with filemanager',
        click: function() {

          lfm({type: 'image', prefix: '/laravel-filemanager'}, function(lfmItems, path) {
            lfmItems.forEach(function (lfmItem) {
              context.invoke('insertImage', lfmItem.url);
            });
          });

        }
      });
      return button.render();
    };

    // Initialize summernote with LFM button in the popover button group
    // Please note that you can add this button to any other button group you'd like
    $('#comment').summernote({
      toolbar: [
        ['popovers', ['lfm']],
         ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
      ],
      buttons: {  
        lfm: LFMButton
      }
    })
  });

</script>
@stop()