<link rel="stylesheet" href="../content/css/trangsauthanhtoan.css">
<style>
    ul li{
        list-style: none;
    }
    
</style>
<main>
    <div class="container-md">
      <div class="thanhtoan-dau">Đặt hàng thành công!
        <a href="?mod=user&act=donhang" style="text-align: right;">Theo dõi đơn hàng</a>
      </div>

      <div class="sauthanhtoan row justify-content-between">
        <div class=" col-sm-12 left-sauthanhtoan mt-2">
          <div class="bg-white thanhtoan-box">
            <h3>Chi tiết đơn hàng</h3>

            
            <div class="d-flex justify-content-between ">
             <h4 class="title">Sản phẩm</h4> 
             <h4 class="title">Thanh toán</h4> 
            </div>

            <hr>
            <?php
              foreach( $_SESSION['cart'] as $item){
                echo '            <div class="d-flex justify-content-between infor">
                <h4 class="name">'.$item['TenSanPham'].'</h4> 
                <h4 class="price">'.number_format($item['GiaSanPham'],0,',','.').'đ</h4> 
              </div>';
              }
            ?>



            <div class="d-flex justify-content-between infor">
              <h4>Phương thức thanh toán</h4> 
              <h4 class="thanhtoan"><?=$_SESSION['check']?></h4> 
            </div>

            <div class="d-flex justify-content-between infor">
              <h4>Tổng cộng</h4> 
              <h4 class="price">
              <?=number_format($_SESSION["tongtt"],0,',','.')?>đ
               
              </h4> 
            </div>
          </div>
        </div>
        
        <!-- <div class="col-lg-4 col-sm-12 right-sauthanhtoan mt-2">
          <div class="bg-white">
            <h4>Cảm ơn bạn đơn hàng đang được chờ duyệt</h4>
            <ul>
          
              <li>Mã đơn hàng :185</li>
              <li>Ngày tháng:</li>
              <li>Địa chỉ:</li>
              <li>Tổng cộng: <?=number_format($_SESSION["tongtt"],0,',','.')?>đ</li>
              <li>Phương thước thanh toán:<?=$_SESSION['check']?></li>
              
            </ul>
          </div>

        </div> -->
    </div>

   </div>
  </main>