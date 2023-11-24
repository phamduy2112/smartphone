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
// if(empty($_SESSION['cart'])){
//   echo 2;
// }else{
//   echo 1;
// }
?>
<div class="cart">
    <div class="container-md">
        <div class="cart__title">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?mod=page&act=home">Trang chu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                </ol>
            </nav>
            <p class="title__text my-2">Giỏ hàng của bạn</p>
        </div>
        <div class="giohang row">
            <div class="col-lg-8 col-sm-12">

                <?php 
                $check='';
            if(empty($_SESSION['cart']))
            $check="style='display:none;'";
            ?>
                <div class="cart__header" <?=$check?>>
                    <div class=""></div>
                    <div class="sp">Sản phẩm</div>
                    <div>Số lượng</div>
                    <div>Thành tiền</div>
                    <div></div>
                </div>
                <?php 
            if(empty($_SESSION['cart'])){
            echo '    <p class="notify">Giỏ hàng của bạn trống</p> ';
            $check="style='display:none;'";

          }else{
            $tongsp=0;
            foreach($_SESSION['cart'] as $item):
              $i=0;
             extract($item);
             $TT=$GiaSanPham*((100-$PhanTramGiamGia)/100);
            $check="";
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
                                <p> <span class="gia_def"><?=number_format($GiaSanPham,0,',','.')?>đ</span><span><?=
                                number_format($TT,0,',','.')
                                ?>đ</span></p>
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

               number_format($ThanhTien=$SL*$TT,0,',','.');
               ?>đ
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
                    <a href="?mod=page&act=home">Tiếp tục mua hàng</a>
                    <a href="?mod=cart&act=xoaHet">Xóa tất cả</a>
                </div>

            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="giohang__right">
                    <h3>Đơn hàng của bạn</h3>
                    <div class="infor-check">
                        <p>Số lượng: <span><?=$tongsl?></span></p>
                        <p>Thành tiền: <span>
                                <?=
                                 number_format($tongtt,0,',','.')             
                                ?>đ
                            </span></p>
                    </div>
                    <hr>
                    <div class="infor-check">
                        <p>Mã giảm giá:</p>
                        <form action="" class="form__Cart">
                            <input type="text" class="text" placeholder="Mời bạn nhập mã">
                            <input type="submit" value="Gửi" class="submit">
                        </form>
                        <p>Khuyến mãi: <span>0</span></p>
                        <p>Giao hàng: <span>0đ</span></p>
                    </div>
                    <div class="infor-check">
                        <p class="price-end">Tổng thanh toán: <span><?=                  
                            number_format($tongtt,0,',','.')             
                        ?>đ</span></p>

                    </div>
                    <div class="right__carts_buton my-2">
                        <a href="?mod=cart&act=trangthanhtoan">Mua ngay</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>