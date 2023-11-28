<link rel="stylesheet" href="../content/css_admin/trangchu.css">

<section class="admin_body">
    <div class="row mb-3">


      <div class="col-sm-12 col-lg-3 mb-3 ">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sản phẩm</h5>
            <i class="fa-solid fa-boxes-stacked"></i>
            <span><?=$get_sp['slsanpham']?></span>
          </div>
        </div>
      </div>


      <div class="col-sm-12 col-lg-3 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Khách hàng</h5>
            <i class="fa-solid fa-user"></i>
            <span>
              <?=$get_kh['slkhachhang']?>
            </span>
          </div>
        </div>
      </div>


      <div class="col-sm-12 col-lg-3 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Đơn hàng </h5>
            <i class="fa-solid fa-clipboard"></i>
            <span>
              <?=$get_dh['sldonhang']?>
            </span>
          </div>
        </div>
      </div>


      <div class="col-sm-12 col-lg-3 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Doanh thu trong 1 ngày</h5>
            <i class="fa-solid fa-arrow-up-right-dots"></i>
            <span>50</span>
          </div>
        </div>
      </div>
    </div>





    <div class="row mt-3 admin__row">

      <div class="col-sm-12 col-lg-4">
        <div class="card">




          <div class="card-body">
            <div class="cart__box">
              <h5 class="card-title">Biểu đồ đơn hàng</h5>
              <!-- <p class="card-text">
                các sản phẩm sau đây được mua nhiều nhất
              </p> -->
            </div>

            <div id="piechart"></div>
            <!-- <a href="#">Xem thông tin chi tiết</a> -->
          </div>

        </div>



      </div>
      <div class="col-sm-12 col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Thống kê doanh thu trong ngày</h5>
            <!-- <p class="card-text">Doanh thu các sản phẩm trong 1 ngày</p> -->
            <div id="piechart1"></div>

          </div>
        



        </div>
      </div>
      <div class="col-sm-12 col-lg-4">

        <div class="card">
          <div id="myPlot1" style="width:100%;"></div>
          <div class="card-body">
            <h5 class="card-title">Thống kê sản phẩm đã bán</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <div id="piechart2"></div>
          </div>
        </div>
      </div>

    </div>

    <div class="table--admin mt-3">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
            <table class="table table-bordered">
              <div class="table--title">
                <h3>Khách hàng mới đăng kí</h3>
                <a href="">Xem thêm</a>
              </div>
     
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">SĐT</th>
            <th scope="col">Vai Trò</th>
          </tr>
        </thead>
        <tbody>

<?php 
$stt=1;
foreach($khachhang_moi as $item):
  extract($item);
  $ten= $tenkhachhang==''?'Chưa cập nhật':$tenkhachhang;
  $sdt= $sdt==''?'Chưa cập nhật':$sdt;
  $diaChi= $diaChi==''?'Chưa cập nhật':$diaChi;
 $vaitro=$vaitro===1?'Quản trị viên':'Khách hàng';?>
<tr>
<th scope="row"><?=$id_kh?></th>
    <td><?=$ten?></td>
    <td><?=$email?></td>
    <td>0<?=$sdt?></td>
    <td><?=$vaitro?></td>
</tr>
<?php 
$stt++;
endforeach;?>
</tbody>
      </table>
        </div>
        <div class="col-lg-6 col-sm-12">
          <h3>Đơn hàng cũ đang chờ duyệt</h3>
          <table class="table table-bordered old-dh" style="margin-top: 15px;">
                <thead>
                    <th>Mã ĐH</th>
                    <th>Giá tiền</th>
                    <th>Thời gian</th>
                    <th>Kiểm tra ngay</th>
                </thead>
              <!-- SHOW -->
              <!-- <a href=""></a> -->
              <tbody>
              <?php
                foreach($donhang_cu as $items):
                  extract($items);
                  // echo var_dump($items);
                $ngaythangnam=date('h:i:s | d/m/20y',strtotime($ngaydathang));
                ?>
                <tr>
                  <th scope="row"><?=$id_dh?></th>
                  <td><?=number_format($tongtien,0,',','.')?>đ</td>
                  <td><?=$ngaythangnam?></td>
                  <td><a href="?mod=user&act=donhangchitiet&id_dh=<?=$id_dh?>">Duyệt</a></td>
                </tr>
              <?php 
            endforeach;?>
            </tbody>
              </table>
          </div>
          </div>
        </div>
      </div>
    </div>



    <div class="table--admin mt-3">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
            <table class="table table-bordered">
              <div class="table--title">
                <h3>Khách hàng thân thiết</h3>
                <a href="">Xem thêm</a>
              </div>
     
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">SĐT</th>
            <th scope="col">Số ĐH</th>
          </tr>
        </thead>
        <tbody>

<?php 

      // echo var_dump($donhang_kh);
      $stt=0;
foreach($donhang_kh as $item):
      extract($item);
      $stt++;
      
      ?>
<tr>
<th scope="row"><?=$stt?></th>
    <td><?=$tenkhachhang?></td>
    <td><?=$email?></td>
    <td>0<?=$sdt?></td>
    <td><?=$so_don_hang?></td>
</tr>
<?php 
endforeach;?>
</tbody>
</table>
</div>
        <div class="col-lg-6 col-sm-12">
          <h3>Đơn hàng mới đang chờ duyệt</h3>
          <table class="table table-bordered old-dh" style="margin-top: 15px;">
                <thead>
                    <th>Mã ĐH</th>
                    <th>Giá tiền</th>
                    <th>Thời gian</th>
                    <th>Kiểm tra ngay</th>
                </thead>
              <!-- SHOW -->
              <!-- <a href=""></a> -->
              <tbody>
              <?php
                foreach($donhang_moi as $items):
                  extract($items);
                  // echo var_dump($items);
                $ngaythangnam=date('h:i:s | d/m/20y',strtotime($ngaydathang));
                ?>
                <tr>
                  <th scope="row"><?=$id_dh?></th>
                  <td><?=number_format($tongtien,0,',','.')?>đ</td>
                  <td><?=$ngaythangnam?></td>
                  <td><a href="?mod=user&act=donhangchitiet&id_dh=<?=$id_dh?>">Duyệt</a></td>
                </tr>
              <?php 
            endforeach;?>
            </tbody>
              </table>
          </div>
         
          </div>
        </div>
 
  </section>
  </div>

 


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="../content/js/jquery-3.7.1.min.js"></script>
  <script src="../content/js/jquery.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>


  <script type="text/javascript">

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Simple Line Chart"
  },
  data: [{        
    type: "line",
        indexLabelFontSize: 16,
    dataPoints: [
      { y: 250 },
      { y: 414},
      { y: 520, indexLabel: "\u2191 highest",markerColor: "red", markerType: "triangle" },
      { y: 460 },
      { y: 450 },
      { y: 500 },
      { y: 600 },
      { y: 480 },
      { y: 410 , indexLabel: "\u2193 lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
      { y: 500 },
      { y: 480 },
      { y: 510 }
    ]
  }]
});
chart.render();

}
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Trạng thái', 'Số lượng'],
  
  <?php 
foreach ($trangThaiDH as $item){
    extract($item);
    $trangThai='';
    if($trangthai==0){
      $trangThai='Đang chuẩn bị';
    }else if($trangthai==1){
      $trangThai='Đang giao';
    }
    else if($trangthai==2){
      $trangThai='Đã giao hoàn thành';
    }
  
   
    echo "['$trangThai',$Soluong],";
}
?>
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Trạng thái đơn hàng', 'width':460, 'height':250};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}


</script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    
  ['Tổng tiền', 'một ngày'],
  <?php foreach($thongke_motngay as $item){
    extract($item);

     echo "['$tongtien', '$tongtien'],";
  }
  
   
    ?>
 
 
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Doanh thu 1 ngày', 'width':460, 'height':250};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
  chart.draw(data, options);
}
</script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  <?php 
  foreach($thongke_slsp as $item){
    extract($item);
    echo "['$ten_sp', $Soluong],";
  }
  
  ?>


]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Số sản phẩm mua nhiều', 'width':460, 'height':250};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}
</script>
</body>

</html>