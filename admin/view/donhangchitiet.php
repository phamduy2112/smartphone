<link rel="stylesheet" href="../content/css_admin/donhangchitiet.css">

<section class="m-container" style="">


        <!-- Show thông tin -->
        <div class=" infor-order">
            <div class="box1">
                <ul>
                    <li><span class="circle" style="background-color: #FF0000; "></span>Đang chuẩn bị</li>
                    <li><span class="circle" style="background-color: #FF9900; "></span>Đang giao</li>
                    <li><span class="circle" style="background-color: #00FF19; "></span>Đã giao hoàn thành</li>
                </ul>
            </div>

            <div class="box2">
                <div>
                    <p>Thông tin</p>
                    <!-- <p>Đơn hàng chưa được mở</p> -->


                    <div class="kh-infor">
                        <div>
                            <p>Thời gian</p>
                            <span>: 08:01AM -  21/10/2023</span>
                        </div>
                        <div>
                            <p>Địa chỉ</p>
                            <span>: Công Viên Phần Mềm Quang Trung, Tân Chánh Hiệp, District 12, Ho Chi Minh City</span>

                        </div>
                        <div>
                            <p>Họ tên</p>
                            <span>: Nguyễn Văn Tèo</span>

                        </div>
                        <div>
                            <p>Số điện thoại</p>
                            <span>: 08xx.xxx.172</span>

                        </div>
                        <div>
                            <p>Tổng tiền</p>
                            <span>: 20.000.000đ</span>
                        </div>
                    </div>

                    <table>
                        <thead>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                        </thead>
                        <tbody>
                          <?php foreach($sp as $item):
                           extract($item); 
                           
                            ?>
                            <tr>
                                <td><img src="../content/img/productachnen/<?=$hinhanh?>" alt=""></td>
                                <td><?=$ten_sp?></td>
                                <td><?=$soluong?></td>
                                <td><?=number_format($gia*((100-$khuyenmai)/100),0,',','.')?></td>
                            </tr>
                          <?php endforeach;?>
                        </tbody>
                    </table>
                    <form action="" method="post">
                    <div class="btn-control">
                        <p>Tùy chỉnh:</p>
                        <input style="background-color: #FF0000;" type="submit" name="chuanbi" value="Đang chuẩn bị">
                        <input style="background-color: #FF9900;" type="submit" name="danggiao" value="Đang giao">
                        <input style="background-color: #00FF19;" type="submit" name="hoantat" value="Hoàn tất">
                    </div>
                    </form>
                   
                </div>
            </div>
        </div>



        <!-- Đơn hàng -->
        <div class="order">
            <table>
                <thead>
                    <th>Mã ĐH</th>
                    <th>Trạng thái</th>
                    <th>Giá tiền</th>
                    <th>Thời gian</th>
                </thead>
                <!-- <tbody >
                    <tr>
                        <td>1</td>
                        <td><span class="circle" style="background-color: #00FF19; "></span></td>
                        <td>5.000.000đ</td>
                        <td>21/10/2023</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><span class="circle" style="background-color: #FF9900; "></span></td>
                        <td>5.000.000đ</td>
                        <td>21/10/2023</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><span class="circle" style="background-color: #FF0000; "></span></td>
                        <td>5.000.000đ</td>
                        <td>21/10/2023</td>
                    </tr>

                </tbody> -->
              </table>
              <!-- SHOW -->
              <?php foreach($tatcaDh as $item):
                extract($item);
                $ngaythangnam=date('d/m/y',strtotime($ngaydathang));
                $trangThai='';
                if($trangthai===0){
                  $trangThai='<span class="circle" style="background-color: #FF0000; "></span>                 ';
                }else if($trangthai===1){
                  $trangThai='<span class="circle" style="background-color: #FF9900; "></span>                 ';

                }else{
                  $trangThai='<span class="circle" style="background-color: #00FF19; "></span>                 ';
                }
                ?>
              <div class="order-check">
                <a href="?mod=user&act=donhangchitiet&id_dh=<?=$id_dh?>">
                <ul>
                
                <li>1</li>
                  <li><?=$trangThai?></li>
                  <li><?=number_format($tongtien)?></li>
                  <li><?=$ngaythangnam?></li>
                </ul>
                </a>
             
              </div>
              <?php endforeach;?>
              <!-- <div class="order-check">
                <ul>
                  <li>1</li>
                  <li><span class="circle" style="background-color: #FF9900; "></span></li>
                  <li>10.000.00đ</li>
                  <li>23/10/2023</li>
                </ul>
              </div>
              <div class="order-check">
                <ul>
                  <li>1</li>
                  <li><span class="circle" style="background-color: #00FF19; "></span></li>
                  <li>10.000.00đ</li>
                  <li>23/10/2023</li>
                </ul>
              </div>
              <div class="order-check">
                <ul>
                  <li>1</li>
                  <li><span class="circle" style="background-color: #FF0000; "></span></li>
                  <li>10.000.00đ</li>
                  <li>23/10/2023</li>
                </ul>
              </div> -->
              

              <div class="control">
                  <ul>
                    <li><a href="">Đang chuẩn bị</a></li>
                    <li><a href="">Đang giao hàng</a></li>
                    <li><a href="">Đã giao hàng</a></li>
                  </ul>
              </div>
        </div>




    </section>