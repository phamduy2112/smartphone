<section class="admin_body">

    <div class="row">
        <div class="col-6">
        <div class="table--admin mt-3">
        <h3>Khách hàng đã đăng kí 7 ngày trước</h3>
        
          <table class="table table-bordered w-100">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Ngày</th>
              
              </tr>
            </thead>
            <tbody>
              <?php 

              $stt=1;
              foreach($thongke_dangki as $item):
            
            extract($item);
                 $ngay='';
    if($NgayHienTai===0){
      $ngay='Ngày hôm nay';
    }else if($NgayHienTai===1){
      $ngay='Một ngày trước';
    }
    else if($NgayHienTai===2){
      $ngay='Hai ngày trước';
    }
    else if($NgayHienTai===3){
      $ngay='Ba ngày trước';
    }
    else if($NgayHienTai===4){
      $ngay='Bốn ngày trước';
    }
    else if($NgayHienTai===5){
      $ngay='Năm ngày trước';
    }
    else if($NgayHienTai===6){
      $ngay='Sáu ngày trước';
    }
    else if($NgayHienTai===7){
      $ngay='Bảy ngày trước';
    }
            
                ?>
              <tr>
                <th scope="row"><?=$stt?></th>
                <td><?=$Soluong?></td>
                <td><?=$ngay?></td>
              
              </tr>
            <?php 
          $stt++;
          endforeach;?>
            </tbody>
          </table> 
  <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Xem thông tin chi tiết</a>
        </div>
      
        </div>
        <div class="col-6">
        <div class="table--admin mt-3">
        <h3>Đơn hàng</h3>
        
          <table class="table table-bordered w-100">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">
                    Trạng thái
                </th>
                <th scope="col">
                    Số lượng
                </th>
             
            
              </tr>
            </thead>
            <tbody>
              <?php 
              $stt=1;
              foreach($trangThaiDH as $item):
                extract($item);
                if($trangthai==0){
                    $trangThai='Đang chờ duyệt            ';
                  }else if($trangthai==1){
                    $trangThai='Đang giao';
  
                  }else{
                    $trangThai='Đã hoàn thành';
                  }
                
           
                ?>
              <tr>
                <th scope="row"><?=$stt?></th>
              
                <td><?=$trangThai?></td>
                <td><?=$Soluong?></td>
              </tr>
            <?php 
          $stt++;
          endforeach;?>
            </tbody>
          </table> 
        </div>
        </div>
       
        
         
    </div>
    <div class="row">
    <div class="col-8">
        <div class="table--admin mt-3">
        <h3>Top 5 sản phẩm được mua nhiều nhất</h3>
        
          <table class="table table-bordered w-100">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
              
              </tr>
            </thead>
            <tbody>
              <?php 

              $stt=1;
              foreach($thongke_slsp as $item):
            
            extract($item);
    
            
                ?>
              <tr>
                <th scope="row"><?=$stt?></th>
                <td><?=$ten_sp?></td>
                <td><?=number_format($gia)?></td>
                <td><?=$Soluong?></td>
              
              
              </tr>
            <?php 
          $stt++;
          endforeach;?>
            </tbody>
          </table> 
  <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Xem thông tin chi tiết</a>
        </div>
      
        </div>
        <div class="col-4">
        <div class="table--admin mt-3">
        <h3>Thống kê doanh thu 7 ngày</h3>
        
          <table class="table table-bordered w-100">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Ngày</th>
                <th scope="col">Giá</th>
             
              
              </tr>
            </thead>
            <tbody>
              <?php 

              $stt=1;
              foreach($thongke_bayngay as $item):
            
            extract($item);
    
            
                ?>
              <tr>
                <th scope="row"><?=$stt?></th>
                <td><?=$ngay?></td>
                <td><?=number_format($tong)?></td>
                
              
              
              </tr>
            <?php 
          $stt++;
          endforeach;?>
            </tbody>
          </table> 
  <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Xem thông tin chi tiết</a>
        </div>
      
        </div>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="mx-3 mt-3">
        <h3>Thông tin chi tiết</h3>
        
          <table class="table table-bordered w-100">
            <thead>
              <tr>
                <th scope="col">STT</th>
             
                <th scope="col">Email</th>
             
             
                <th scope="col">Chức vị</th>
                <th scope="col">Ngày</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $stt=1;
              foreach($thongke_dangki_chitiet as $item):
                extract($item);
                $ten= $tenkhachhang==''?'chưa cập nhận':$tenkhachhang;
                $sdt= $sdt==''?'chưa cập nhận':$sdt;
                $diaChi= $diaChi==''?'chưa cập nhận':$diaChi;
               $vaitro=$vaitro===1?'admin':'khách hàng';
                
      
                ?>
              <tr>
                <th scope="row"><?=$stt?></th>
        
                <td><?=$email?></td>
            
                <td><?=$vaitro?></td>
                <td><?=$ngay?></td>
              
              </tr>
            <?php 
          $stt++;
          endforeach;?>
            </tbody>
          </table> 
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
     
      </section>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>