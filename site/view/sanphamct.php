<?php 
extract($sl_mot);
function get_loai($id_loai){
  if($id_loai == 1){
    $loai="Điện thoại";
    echo $loai;
  }
  elseif($id_loai == 2){
    $loai="Laptop";
    echo $loai;

  }
  elseif($id_loai == 3){
    $loai="TV";
    echo $loai;
  }
  elseif($id_loai == 4){
    $loai="Tai nghe";
    echo $loai;
  }
  elseif($id_loai == 5){
    $loai="Ipad";
    echo $loai;
  }else{
    $loai="Chuột máy tính";
    echo $loai;
  }
}

function get_price($gia, $khuyenmai){
  if($khuyenmai <=1){
    $f_price = number_format($gia,0,',','.');
    echo "<p><span>Giá: </span> <span class='price1'>".$f_price."đ</span></p>";
  }
  else{
    $f_price = number_format($gia*((100-$khuyenmai)/100),0,',','.');
    echo "<p><span>Giá: <del>".number_format($gia,0,',','.')."đ</del></span> <span class='price1'>".$f_price."đ</span></p>";
  }
}



?>
<main>
    <!-- product left -->
    <div class="productct">

        <div class="container-md">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Cửa hàng</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$ten_sp?></li>
                </ol>
            </nav>

            <div class="productct__flex row mt-3">
                <div class="productct__left col-lg-6 col-sm-12">

                    <div class="img_big">
                        <img class="img-thumbnail w-100" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">
                    </div>

                    <div class="pro_img mt-2">

                        <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">
                        </div>
                        <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">
                        </div>
                        <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">
                        </div>
                        <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">
                        </div>
                        <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">
                        </div>

                    </div>

                </div>
                <div class="productct__right col-lg-6 col-sm-12 mt-sm-4">
                    <div class="productct__text">

                        <h2><?=$ten_sp?></h2>
                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span>(<?=$danhgia?> lượt đánh giá)</span>
                        </div>
                        <hr>
                        <div class="loai mt-1">
                            <p><span>Danh mục:</span>
                                <?php get_loai($id_loai);?>
                            </p>
                        </div>
                        <!-- Thông tin 1 -->
                        <div class="theloai">
                            <p class="mt-1"><span>Kích thước:</span> Màn hình 10,9 inch</p>
                            <p class="mt-1"><span>Hệ điều hành:</span> iOS 14.0</p>
                            <p class="mt-1"><span>Chiều dài:</span> Sản phẩm 9,74 inch</p>
                        </div>
                        <div class="price mt-1">
                            <?php 
        get_price($gia,$khuyenmai);?>
                        </div>
                        <hr>
                        <!-- Button Count - ADD CART - BUY NOW -->
                        <!-- COUNT -->
                        <div class="number__count">
                            <div class="number__count_pr">
                                <i class="fa-solid fa-minus solid"></i>
                                <div class="number">
                                    1
                                </div>
                                <i class="fa-solid fa-plus solid"></i>
                            </div>

                            <!-- ADD CART -->
                            <a href="?mod=cart&act=giohang&id=<?=$id_sp?>" class="addtoCart w-100">THÊM VÀO GIỎ HÀNG</a>
                        </div>
                        <!-- BUY NOW -->
                        <a href="?mod=cart&act=trangthanhtoan" class="btn w-100 mt-2 mua">MUA NGAY</a>

                        <div class="productct__bottom">
                            <!-- ADD LIKE -->
                            <div class="icon__productct">
                                <a href="">
                                    <i class="fa fa-heart " aria-hidden="true"></i>
                                    Thêm vào yêu thích
                                </a>
                                <!-- <a href="">
                <i class="fa fa-share" aria-hidden="true"></i>
                Chia sẽ ngay
            </a> -->
                            </div>
                            <hr style="margin: 0px;">
                            <!-- Thông tin 2 -->
                            <div class="productct__tt">
                                <p> <span>Khả dụng:</span>In Stock</p>
                                <p> <span>Mã hàng:</span>N/A-01</p>
                                <p> <span>Hãng:</span>Samsung</p>
                                <p> <span>Loại:</span>Điện thoại</p>
                            </div>

                            <!-- Can PAY -->
                            <div class="productct_thanhtoan mt-2">
                                <p>Bạn có thể thanh toán qua :</p>
                                <img src="../img/banner/payment2.avif" alt="">
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>

    </div>






    <!-- Bình luận -->
    <div class="productchitiet__bottom mt-4">
        <div class="container-md">
            <div class="prochitiet">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link1 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Thông tin</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link1" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Vật chuyển</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link1" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Đánh giá</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active tab-infor" id="home" role="tabpanel"
                        aria-labelledby="home-tab">
                        <?php
                          $lines = explode("\n", $text1);
                          foreach ($lines as $line) {
                            $pos = strpos($line, ':');
                            if ($pos !== false) {
                                $tag = substr($line, 0, $pos);
                                $value = substr($line, $pos + 1);
                                echo '<div><span class="tag">' . $tag . ':</span><span class="value">' . $value . '</span></div>';
                            }
                        }
                        ?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">..</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h4>Đánh giá của khách hàng</h4>
                        <?php foreach($load_binhluan as $id_bl):?>
                        <div class="binhluan">
                            <div class="bl d-flex w-75">
                                <div class="image">
                                    <img src="../content/img/service/hinhtoi5.jpg" alt="">

                                </div>

                                <div class="binhluan__d">
                                    <form action="">
                                        <div class="name"><?=$id_bl['id_kh']?></div>
                                        <div class="ngaythang"><?=$id_bl['ngaydang']?></div>
                                        <div class="title"><?=$id_bl['noidung']?></div>
                                        <div>
                                            <span>Phản hồi</span>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="chinhsua">

                                <i class="fa-solid fa-gear" id="fa-gear"></i>
                                <ul class="activeE" id="chinh">
                                    <li><a href="?mod=page&act=xoabl&id=<?=$id_bl['id_bl']?>">Xoá</a></li>
                                </ul>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <div class="d-flex mt-5">
                            <div class="image">
                                <img src="../content/img/service/hinhtoi5.jpg" alt="">

                            </div>
                            <form action="" class="BinhLuan" method="post">
                                <input type="text" placeholder="Bình luận" class="binhluan1" name="noidung">
                                <input type="submit" value="gửi" class="gui" name="gui">
                            </form>

                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="productCT__Bottom mt-3">
                <h2>Sản phẩm tương tự</h2>
                <div class="product mt-2 w-100">


                    <div class="product__box mt-2">




                        <?=sanpham_thuong($sanpham_sau);?>




                    </div>


                </div>
            </div>

        </div>

    </div>

</main>

<script>
document.getElementById('fa-gear').onclick = function() {
    document.getElementById('chinh').classList.toggle('activeE');

}
</script>