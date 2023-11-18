<?php 

$tongTien=0;
$tongsl=0;
$tongtt=0;
if(isset($_SESSION['cart'])){


foreach(  $_SESSION['cart']as $item){
  extract($item);

  // $ThanhTien=$SL*$TT;
  $tongsl+=$SL;
  $_SESSION['tongsl']=$tongsl;
  $TT=$GiaSanPham*((100-$PhanTramGiamGia)/100)*$SL;
  $tongtt+=$TT;
$_SESSION['tongtt']=$tongtt;
  // $tongTien+=$ThanhTien;

}
}
?>
<div class="cart">
        <div class="container-md">
            <div class="cart__title">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Trang chu</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Gio hang</li>
                    </ol>
                  </nav>
                    <p class="title__text my-2">Gio hang cua ban</p>
            </div>
          <div class="giohang row">
            <div class="col-lg-8 col-sm-12">
              <div class="cart__header">
                <div class=""></div>
                <div class="sp">Sản phẩm</div>
                <div>Số lượng</div>
                <div>Thành tiền</div>
                <div></div>
              </div>
              <?php 
           if(isset($_SESSION['cart'])){
              foreach($_SESSION['cart'] as $item):
                $i=0;
               extract($item);
               
                ?>
              <div class="cart__body">
                <div class="checkbox">
                  <input type="checkbox" name="" id="" class="">

                </div>
                <div class="sanpham__giohang">
                  <img src="../content/img/productachnen/<?=$HinhSanPham?>" alt="" width="80px">
                  <div class="title__sp">
                    <?=$TenSanPham?>
                    <div class="price__sp">
                      <p> <span class="gia_def"><?=$GiaSanPham?></span><span><?=
                    $TT=$GiaSanPham*((100-$PhanTramGiamGia)/100)
                      
                      ?></span></p>
                    </div>
                  </div>
                </div>
                <div class="number__count">
                  <a href="?mod=cart&act=giam&id=<?=$MaSanPham?>" class="d-flex">
                    <i class="fa-solid fa-minus"></i>
                </a>
                  
                  <div><?=$SL?></div>
                  <a href="?mod=cart&act=tang&id=<?=$MaSanPham?>" class="d-flex">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  </a>
                
                </div>
                <div class="price_all">
                 <?=
                 $ThanhTien=$SL*$TT;
                 ?>
             
                </div>
                <div>
                  <a href="?mod=cart&act=xoaMotSP&id=<?=$MaSanPham?>">
                  <i class="fa fa-trash" aria-hidden="true"></i>

                  </a>
                </div>
              </div>
            
              <?php 
           
  $i++;

            endforeach;
          }
            ?>
              <div class="cart__buttons mt-3">
                 <a href="">Tiếp tục mua hàng</a>
                 <a href="?mod=cart&act=xoaHet">Xóa tất cả</a>
              </div>
          
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="giohang__right">
                <h3>Đơn hàng của bạn</h3>
                <div>
                  <p>Số lượng: <span><?=$tongsl?></span></p>
                  <p>Thành tiền: <span>
                  <?=
                    $tongtt
             
                 ?>
                  </span></p>
                </div>
                <hr>
                <div>
                  <p>Mã giảm giá:</p>
                <form action="" class="form__Cart">
                  <input type="text" class="text" placeholder="Mời bạn nhập mã">
                  <input type="submit" value="Gửi" class="submit">
                </form>
                <p>Khuyến mãi: <span>0</span></p>
                <p>Giao hàng: <span>0đ</span></p>
                </div>
               <div>
                <p>Tổng thanh toán: <span><?=$tongtt?></span></p>
            
              </div>
              <div class="right__carts_buton my-2">
                <a href="?mod=cart&act=trangthanhtoan">Mua ngay</a>
              </div>

              </div>
            </div>
          </div>
            
           
        </div>
    </div>