<?php
                  extract($user);
                  extract($get_id);
?>
<link rel="stylesheet" href="../content/css_admin/donhangchitiet.css">
<section class="m-container" style="">
        <!-- Show thông tin -->
        <div class=" infor-order">
        <div class="box1">
                <ul>
                    <li><span class="circle" style="background-color: #FF0000; "></span>
                    <a href="?mod=user&act=donhang&trangthai=0">Đang chờ duyệt</a></li>

                    <li><span class="circle" style="background-color: #FF9900; "></span>
                    <a href="?mod=user&act=donhang&trangthai=1">Đang chuẩn bị hàng</a></li>

                    <li><span class="circle" style="background-color: #2B20A1; "></span>
                    <a href="?mod=user&act=donhang&trangthai=2">Đang giao hàng</a></li>

                    <li><span class="circle" style="background-color: gray; "></span>
                    <a href="?mod=user&act=donhang&trangthai=3">Đã huỷ</a></li>

                    <li><span class="circle" style="background-color: #00FF19; "></span>
                    <a href="?mod=user&act=donhang&trangthai=4">Thành công</a></li>
                    <li><span class="circle" style="background-color: black; "></span>
                    <a href="?mod=user&act=donhang&trangthai=5">Không nhận hàng</a></li>
                </ul>
            </div>

            <div class="box2">
                <div>
                    <p>Thông tin đơn hàng <span style="color: #2B20A1;">#<?=$user['id_dh']?></span></p>
                    <!-- <p>Đơn hàng chưa được mở</p> -->


                    <div class="kh-infor">
                        <div>
                            <p>Thời gian</p>
                            <span>: <?=$user['ngaydathang']?></span>
                        </div>
                        <div>
                            <p>Địa chỉ</p>
                            <span>: <?=$user['diaChi']?></span>

                        </div>
                        <div>
                            <p>Họ tên</p>
                            <span>:<?=$user['tenkhachhang']?></span>

                        </div>
                        <div>
                            <p>Số điện thoại</p>
                            <span>:<?=$user['sdt']?></span>

                        </div>
                        <div>
                            <p>Tổng tiền</p>
                            <span><?=$user['tongtien']?></span>
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
                    <?php 
                  $trang_Thai='';

                  // echo var_dump($get_id);
                    if($get_id["trangthai"]==3){
                      $trang_Thai='Khách hàng đã hủy đơn hàng này!!!';
                      
                    }elseif($get_id["trangthai"]==4){
                      $trang_Thai='Đơn hàng đã được giao thành công!';
                    }
                    elseif($get_id["trangthai"]==5){
                      $trang_Thai='Khách hàng không nhận hàng!';
                    }
                    elseif($get_id["trangthai"]==2){
                      $trang_Thai='
                      <form action="" method="post">
                      <div class="btn-control">
                          <p>Tùy chỉnh:</p>
                          <input style="background-color: #00FF19;" type="submit" name="hoantat" value="Thành công">
                          <input style="background-color: black;" type="submit" name="khongnhan" value="Không nhận hàng">
                      </div>
                      </form>
                      ';
                    }
                    elseif($get_id["trangthai"]==1){
                      $trang_Thai='
                      <form action="" method="post">
                      <div class="btn-control">
                          <p>Tùy chỉnh:</p>
                          <input style="background-color: #2B20A1;" type="submit" name="danggiao" value="Đang giao hàng">
                          <input style="background-color: #00FF19;" type="submit" name="hoantat" value="Thành công">
                      </div>
                      </form>
                      ';
                    }
                    else{
                      $trang_Thai= '
                      <form action="" method="post">
                      <div class="btn-control">
                          <p>Tùy chỉnh:</p>
                          <input style="background-color: #FF9900;" type="submit" name="chuanbi" value="Đang chuẩn bị hàng">
                          <input style="background-color: #2B20A1;" type="submit" name="danggiao" value="Đang giao hàng">
                          </div>
                          </form>
                          ';
                        }
                        ?>
                        <!-- <input style="background-color: #00FF19;" type="submit" name="hoantat" value="Thành công"> -->
                <?=$trang_Thai?>
                   
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
              <?php 
              foreach($tatcaDh as $item):
                extract($item);
             
                $ngaythangnam=date('d/m/y',strtotime($ngaydathang));
                $trangThai='';
                if($trangthai==0){
                  $trangThai='<span class="circle" style="background-color: #FF0000; "></span>';
                }else if($trangthai==1){
                  $trangThai='<span class="circle" style="background-color: #FF9900; "></span>';

                }else if($trangthai==2){
                  $trangThai='<span class="circle" style="background-color: #2B20A1; "></span>';
                }else if($trangthai==3){
                  $trangThai='<span class="circle" style="background-color: gray; "></span>';
                }
                else if($trangthai==5){
                  $trangThai='<span class="circle" style="background-color: black; "></span>';
                }
                else{
                  $trangThai='<span class="circle" style="background-color: #57E923; "></span>';
                }
                ?>
              <div class="order-check">
                <a href="?mod=user&act=donhangchitiet&id_dh=<?=$id_dh?>">
                <ul>
                
                <li>#<?=$id_dh?></li>
                  <li><?=$trangThai?></li>
                  <li class="price"><?=number_format($tongtien)?>đ</li>
                  <li><?=$ngaythangnam?></li>
                </ul>
                </a>
             
              </div>
              <?php
            endforeach;?>
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
              
        </div>




    </section>