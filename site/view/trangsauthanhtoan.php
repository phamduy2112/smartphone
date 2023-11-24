<link rel="stylesheet" href="../content/css/trangsauthanhtoan.css">
<style>
    ul li{
        list-style: none;
    }
    
</style>
<main>
    <div class="container-md">
      <div class="thanhtoan-dau">Đặt hàng thành công! Kiểm tra thông tin của bạn.</div>

      <div class="sauthanhtoan row justify-content-between">
        <div class="col-lg-7 col-sm-12 left-sauthanhtoan mt-2">
          <div class="bg-white thanhtoan-box">
            <h3>Chi tiết đơn hàng</h3>

            
            <div class="d-flex justify-content-between ">
             <h4 class="title">Sản phẩm</h4> 
             <h4 class="title">Thanh toán</h4> 
            </div>
            <hr>

            <div class="d-flex justify-content-between">
              <h4>Sản phẩm 1</h4> 
              <h4 class="price">200000000</h4> 
            </div>
            <hr>

            <div class="d-flex justify-content-between">
              <h4>Sản phẩm 1</h4> 
              <h4 class="price">200000000</h4> 
            </div>
            <hr>

            <div class="d-flex justify-content-between">
              <h4>Phương thức thanh toán</h4> 
              <h4 class="thanhtoan"><?=$_SESSION['check']?></h4> 
            </div>
            <hr>

            <div class="d-flex justify-content-between">
              <h4>Tổng cộng</h4> 
              <h4 class="price"><?=$_SESSION['tongtt']?></h4> 
            </div>
            <hr>
          </div>
        </div>
        
        <div class="col-lg-4 col-sm-12 right-sauthanhtoan mt-2">
          <div class="bg-white">
            <h4>Cảm ơn bạn đơn hàng đang được chờ duyệt</h4>
            <ul>
          
              <li>Mã đơn hàng :185</li>
              <li>Ngày tháng:</li>
              <li>Địa chỉ:</li>
              <li>Tổng cộng:<?=$_SESSION['tongtt']?></li>
              <li>Phương thước thanh toán:<?=$_SESSION['check']?></li>
            </ul>
          </div>

        </div>
    </div>

   </div>
  </main>