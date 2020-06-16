 <div class="modal-dialog" role="document">
                                <div class="modal-content" style="margin-top: 64%;margin-left:36%;opacity: 1;width: 101%;height: 500px;overflow: scroll;">
                                  <div class="modal-header" style="    background: tomato;">
                                    <h5 class="modal-title" id="exampleModalLabel" style="    color: floralwhite;font-size: 36px;margin-left: 41%;">Bình luận</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true" onclick="tatmodal()">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body" style="    margin-top: -16px;">
                                    <table class="table table-bordered">
                                       <thead>
                                            <tr style="background: #BDB76B">
                                               <th style="padding: 16px;    font-size: 15px;color: black;">Stt</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Bình luận</th>
                                             <!--    <th style="padding: 16px;    font-size: 15px;color: black;">Hình ảnh</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Tên khách hàng</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Tên sản phẩm</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Số lượng</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Tổng giá</th> -->
                                            </tr>
                                        </thead>
                                      @foreach($data1 as $row)
                                      <tr class="active">
                                          <td>{{$i++}}</td>
                                           <td>{{$row->binhluan}}</td>
                                      </tr>
                                      @endforeach
                                    </table>
                                  </div>
                                </div>
                              </div>