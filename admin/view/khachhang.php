

<section class="admin_body">
      <div class="table--admin mt-3">
        <div class="row">
          <div class="col-lg-8 col-sm-12">
              <table class="table table-bordered">
                <div class="table--title">
                  <h3>khách hàng mới đăng kí</h3>
                  <a href="">Xem thêm</a>
                </div>
       
          <thead>
            <tr>
            <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">SDT</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Chức vị</th>
            </tr>
          </thead>
          <tbody>

            <?php 
            $stt=1;
            foreach($khachhang_moi as $item):
              extract($item);
            
                
              $ten= $tenkhachhang==''?'chưa cập nhận':$tenkhachhang;
              $sdt= $sdt==''?'chưa cập nhận':$sdt;
              $diaChi= $diaChi==''?'chưa cập nhận':$diaChi;
             $vaitro=$vaitro===1?'admin':'khách hàng';?>
            <tr>
            <th scope="row"><?=$stt?></th>
                <td><?=$ten?></td>
                <td><?=$email?></td>
                <td><?=$sdt?></td>
                <td><?=$diaChi?></td>
                <td><?=$vaitro?></td>
            </tr>
         <?php 
        $stt++;
        endforeach;?>
          
          </tbody>
        </table>
          </div>
          <div id="myPlot2" style="width:100%;"></div>

           
            </div>
          </div>
      <div class="table--admin mt-3">
        <h3>Khách hàng</h3>
        
          <table class="table table-bordered w-100">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">SDT</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Chức vị</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $stt=1;
              foreach($khachhang as $item):
                extract($item);
            
                
               $ten= $tenkhachhang==''?'chưa cập nhận':$tenkhachhang;
               $sdt= $sdt==''?'chưa cập nhận':$sdt;
               $diaChi= $diaChi==''?'chưa cập nhận':$diaChi;
              $vaitro=$vaitro===1?'admin':'khách hàng';
                ?>
              <tr>
                <th scope="row"><?=$stt?></th>
                <td><?=$ten?></td>
                <td><?=$email?></td>
                <td><?=$sdt?></td>
                <td><?=$diaChi?></td>
                <td><?=$vaitro?></td>
              </tr>
            <?php 
          $stt++;
          endforeach;?>
            </tbody>
          </table> 
        </div>
       
     
      </section>