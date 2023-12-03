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
                    $trangThai='Đang chờ duyệt';
                  }else if($trangthai==1){
                    $trangThai='Đang chuẩn bị hàng';
  
                  }
                  else if($trangthai==2){
                    $trangThai='Đang giao hàng';
  
                  }
                  else if($trangthai==3){
                    $trangThai='Đã huỷ';
  
                  }
                  else if($trangthai==4){
                    $trangThai='Thành công';
  
                  }
                  else{
                    $trangThai='Không nhận hàng';
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
      <div class="col-6">
      <div class="table--admin mt-3">
        <h3>Top 5 khách hàng thân thiết</h3>
        
          <table class="table table-bordered w-100">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">SDT</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Đơn hàng</th>
              
              </tr>
            </thead>
            <tbody>
              <?php 

              $stt=1;
              foreach($donhang_kh as $item):
            
            extract($item);
    
            
                ?>
              <tr>
                <th scope="row"><?=$stt?></th>
                <td><?=$tenkhachhang?></td>
                <td><?=$email?></td>
                <td><?=$sdt?></td>
                <td><?=$vaitro?></td>
                <td><?=$so_don_hang?></td>
              
              
              </tr>
            <?php 
          $stt++;
          endforeach;?>
            </tbody>
          </table> 
        </div>
      </div>
      <div class="col-6">
      <div class="table--admin mt-3">
        <h3>Top 3 khách hàng không nhận hàng</h3>
        
          <table class="table table-bordered w-100">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">SDT</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Đơn hàng</th>
              
              </tr>
            </thead>
            <tbody>
              <?php 

              $stt=1;
              foreach($donhang_khongnhan as $item):
            
            extract($item);
    
            
                ?>
              <tr>
                <th scope="row"><?=$stt?></th>
                <td><?=$tenkhachhang?></td>
                <td><?=$email?></td>
                <td><?=$sdt?></td>
                <td><?=$vaitro?></td>
                <td><?=$so_don_hang?></td>
              
              
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
          <a href="" data-bs-toggle="modal" data-bs-target="#bieudo5sanpham">Xem biểu đồ</a>
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
  <a href="" data-bs-toggle="modal" data-bs-target="#bieuDoDoanhThu">Xem biểu đồ</a>
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
    <div class="modal fade" id="bieudo5sanpham" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="mx-3 mt-3">
        <h3>Thông tin chi tiết</h3>
        
           <div id="bieudosanpham"></div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <!-- <button type="button" class="btn btn-primary"></button> -->
      </div>
    </div>
  </div>

</div>
    <div class="modal fade" id="bieuDoDoanhThu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="mx-3 mt-3">
        <h3>Thông tin chi tiết</h3>
        
        <div id="bieudodoanhthu"></div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <!-- <button type="button" class="btn btn-primary"></button> -->
      </div>
    </div>
  </div>

</div>


      </section>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <script type="text/javascript">
// Load google charts
google.charts.load('current',{'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    
  ['ngay', 'tien'],
  <?php foreach($thongke_slsp as $item){
    extract($item);
    // echo var_dump($item);
    // $tongtien = number_format($tongtien,0,',','.');
    echo "['$ten_sp', $Soluong],";
  }
  
   
    ?>
 
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Top 5 sản phẩm mua nhiều', 'width':460, 'height':250};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('bieudosanpham'));
  chart.draw(data, options);
}
</script>
      <script type="text/javascript">
// Load google charts
google.charts.load('current',{'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    
  ['ngay', 'tong'],
  <?php foreach($thongke_bayngay as $item){
    extract($item);
    // echo var_dump($item);
    // $tongtien = number_format($tongtien,0,',','.');
    echo "['$ngay', $tong],";
  }
  
   
    ?>
 
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Doanh thu 7 ngày', 'width':460, 'height':250};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('bieudodoanhthu'));
  chart.draw(data, options);
}
</script>


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>