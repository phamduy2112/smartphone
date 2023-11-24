

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
          <div class="col-4">
             <div id="piechart"></div>
          </div>
         


           
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
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['ngay', 'soluong'],
  <?php 
foreach ($thongke_dangki as $item){
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
    echo "['$ngay',$Soluong],";
}
?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Khách hàng đăng kí 1 tuần', 'width':450, 'height':200};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>