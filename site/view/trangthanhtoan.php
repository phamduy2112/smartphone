<?php 
extract($laythongtin);
?>
<main>
    <div class="thanhtoan">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Giỏ hàng</a></li>
              <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
            </ol>
          </nav>  
           <div class="row mt-2">
            <div class="col-lg-6 col-sm-12 thanhtoan_left">
          <h3>Thông tin thanh toán</h3>
                <form action="" method="post" class="form__thanhtoan">
                    <div class="fullname d-lg-flex w-100 justify-content-between">
                        <div class="fullname_name ">
                        <p>Tên*</p>
                        <input type="text" name="ten" class="ten " value=<?=$tenkhachhang?>> 
                        </div>
                        <div class="fullname_ho">
                            <p>Họ*</p>
                            <input type="text" name="ho" class="ho ">
                        </div>
                        
                    </div>
            
                    <div class="form_group mt-2">
                        <p>Địa Chỉ*</p>
                        <input type="text" value=<?=$diaChi?>>
                    </div>
      
                    <div class="fullname d-lg-flex w-100 justify-content-between">
                    <div class="form_group fullname_name ">
                        <p>Số điện thoại</p>
                        <input type="text" value=<?=$sdt?>>
                    </div>
                    <div class="form_group fullname_ho">
                        <p>Email</p>
                        <input type="text" value=<?=$email?>>
                    </div>
                    </div>
                    <div class="form_group mt-2">
                        <p>Thông tin Bổ sung</p>
                       
                        <textarea name="" id="" cols="62" rows="10" placeholder="Ghi chú đơn hàng(tuỳ chọn)"></textarea>
                    </div>

                    
                
                  </form>

            </div>
            <div class="col-lg-4 col-sm-12 thanhtoan_right">
              <h3 class="text-center">Đơn hàng thanh toán</h3>
              <div>
                <p><span>Số lượng</span><?=$_SESSION['tongsl']?></p>
                <p><span>Tiền:</span><?=$_SESSION['tongtt']?></p>

              </div>
              <hr>
              <div>
                <p><span>Khuyến mãi:</span>0</p>
                <p><span>Giao Hàng:</span>0</p>
                <p><span>Tổng thanh toán:</span><?=$_SESSION['tongtt']?></p>

              </div>
              <hr>
              <form action="">
                <div class="group__form1 d-flex">
                  <input type="radio" id="check" name="check" checked>
                  <span>Chuyển khoản ngân hàng</span>
                </div>
                <div class="maQR">
                  <img src="../content/img/banner/QR.png" alt="" width="200px">
                </div>
                <div class="group__form1 d-flex">
                  <input type="radio" id="check" name="check">
                  <span>Trả tiền mặt khi nhận hàng</span>
                </div>
                <hr>
                <div class="group__form">
                    <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <p class="check">Tôi đã đọc và <span>đồng ý</span> với <span>điều khoản và điều kiện</span> của cửa hàng </p>
              
                  </div>  
                  <input type="submit" value="Thanh toán" class="btn mua">
                </div>
              
              </form>
            </div>
        </div> 
        </div>
        
    </div>
  </main>