@foreach($data1 as $row)
                                                    <tr id="an">
                                                        <td style="color: red;"> {{$i++}}</td>
                                                        <td>{{$row->tenKh}}</td>
                                                        <td>{{number_format($row->gia)}}đ</td>
                                                        <td>{{$row->ngayban}}</td>
                                                       @if($row->xacnhan=='Chưa duyệt')
                                                        <td id="chon"> 
                                                        <button  id="xacnhan" class="btn btn-outline-secondary " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="xacnhanda('{{$row->mahoadon}}')"> {{$row->xacnhan}}</button>
                                                        <svg id="xacnhan" onclick="xacnhanda('{{$row->mahoadon}}')" class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/><path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/></svg>       
<!--                                                            <div class="dropdown-menu" id="hoanthanh">
                                                             <a id="daduyet-{{$row->mahoadon}}" class="dropdown-item" onclick="xacnhanda('{{$row->mahoadon}}')">Đã duyệt</a>
                                                           </div> -->
                                                    </td>
                                                    @else
                                                     <td id="chon"> 
                                                        <button style="    color: cornsilk;background: darkred;" id="xacnhan"  class="btn btn-outline-secondary " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > {{$row->xacnhan}}</button>
                                                    @endif 
                                                  </td>
<td id="chon"> 
                                                    @if($row->xacnhan=='Chưa duyệt')                                                          
                                                        <button style="    color: cornsilk;background: black;" id="xacnhan"  class="btn btn-outline-secondary " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > {{$row->trangthai}}</button>
                                                      
                                                      @elseif($row->xacnhan=='Hủy')
                                                     <button style="    color: cornsilk;background: black;" id="xacnhan"  class="btn btn-outline-secondary " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > {{$row->trangthai}}</button>
                                                      </td>
                                                      @elseif($row->trangthai=='Đã thanh toán')
                                                        <button style="    color: #193450;background: #cad617;" id="xacnhan"  class="btn btn-outline-secondary " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > {{$row->trangthai}}</button>
                                                      @else
                                                        <button style="color: cornsilk;
    background: chocolate;" id="xacnhan"  class="btn btn-outline-secondary " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > {{$row->trangthai}}</button>
                                                          <svg onclick="xacnhanthanhtoan('{{$row->mahoadon}}')" class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/><path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/><path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/></svg>
                                                      @endif
                                                      </td>
                                                    <!-- <td style="display: flex;color: red">            
                                                       Xét duyệt <input style="    display: block;margin-right: 12px;margin-left: 7px;" type="radio" name="phai" value="Nam" checked> Chưa duyệt <input  style="    display: block;    margin-left: 7px;" type="radio" name="phai" value="Nữ">  
                                                    
                                                    </td> -->
                                                        <td style="text-align: center;">
                                                          <a style="background: chocolate;" onclick="view('{{$row->mahoadon}}')" class="btn btn-default btn-rounded mb-4"><i style="color: aliceblue;" class="fa fa-eye"></i></a>    
                                                      </td>
                                                        <td style="text-align: center;">
                                                          <a style="background: chocolate;" href="{{route('/product/edit',$row->mahoadon)}}" class="btn btn-default btn-rounded mb-4"><i style="color: aliceblue;" class="fas fa-edit"></i></a>
                                                      </td>
                                 <!--                        <td><a onclick="deletesanpham('{{$row->mahoadon}}')" class="btn btn-default btn-rounded mb-4"><i class="fas fa-trash-alt"></i></a>
                                                        </td> -->
                                                    </tr>
                                                    @endforeach