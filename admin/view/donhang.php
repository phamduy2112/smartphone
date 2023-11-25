
<link rel="stylesheet" href="../content/css_admin/quanlidonhang.css">

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
                    <p>Đơn hàng chưa được mở</p>
                    
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
              <!-- <a href=""></a> -->
              <?php
              $stt=1;
              foreach($tatcaDh as $item):
                extract($item);

                $ngaythangnam=date('d/m/y',strtotime($ngaydathang));
                $trangThai='';
                if($trangthai==0){
                  $trangThai='<span class="circle" style="background-color: #FF0000; "></span>                 ';
                }else if($trangthai==1){
                  $trangThai='<span class="circle" style="background-color: #FF9900; "></span>                 ';

                }else{
                  $trangThai='<span class="circle" style="background-color: #00FF19; "></span>                 ';
                }
                ?>
              <div class="order-check">
                <a href="?mod=user&act=donhangchitiet&id_dh=<?=$id_dh?>">
                <ul>
                
                <li><?=$stt?></li>
                  <li><?=$trangThai?></li>
                  <li><?=number_format($tongtien)?></li>
                  <li><?=$ngaythangnam?></li>
                </ul>
                </a>
             
              </div>
              <?php 
            $stt++;
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
              

              <div class="control">
                  <ul>
                    <li><a href="">Đang chuẩn bị</a></li>
                    <li><a href="">Đang giao hàng</a></li>
                    <li><a href="">Đã giao hàng</a></li>
                  </ul>
              </div>
        </div>




    </section>