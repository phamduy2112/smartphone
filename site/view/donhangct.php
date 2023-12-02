<link rel="stylesheet" href="../content/css/lichsumuahang1.css">
<link rel="stylesheet" href="../content/css/donhangct3.css">
<link rel="stylesheet" href="../content/css/thongtinkhachhang1.css">

<?php
    extract($get_kh);
    extract($get_ngay);
    extract($dem);
    $ngayThangDinhDang = date('d/m/Y', strtotime($ngaydathang));
?>
<main>
    <section class="container">
        <h3>Thông tin cá nhân</h3>
        <div class="infor-form">
            <!-- USER -->
          <div class="user-form">
              <div class="user">
                      <img src="../content/img/service/ra.jpg" alt="">
                  <div>
                      <p><?= $user_name ?></p>
                      <a href="?mod=user&act=dangxuat">Đăng xuất</a>
                  </div>
              </div>
              <div class="control">
                  <div class="profile">
                      <i class="fa-regular fa-user"></i>
                      <a href="?mod=user&act=thongtinchitiet">Tài khoản của tôi </a>
                  </div>
                  <div class="order">
                      <i class="fa-solid fa-bag-shopping"></i>
                      <a href="?mod=user&act=donhang">Đơn hàng của tôi</a>
                  </div>
              </div>
          </div>
            <!-- INFOR -->
          <div class="order-form">
          <div class="d-flex justify-content-between align-items-center">
          <h4>Thông tin đơn hàng #<?=$idDonHang?></h4>
          <h4 class="title">Có <?=$soLuongSanPham?> sản phẩm</h4>
                </div>
            <table>
              <!-- TITLE -->
                <thead>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thời gian đặt hàng</th>
                </thead>
                <!-- BODY -->
                <tbody>

                     <?php foreach($lay_SP as $item):?>
                        <tr>
                        <td>
                            <img src="../content/img/product_tachnen/<?=$item['hinhanh']?>" alt="">
                            <span>
                                <a href=""><?=$item['ten_sp']?> </a>  
                                <?php
                                    $get_gia = number_format($item['gia'],0,',','.');
                                    $get_giaKM = number_format($item['gia']*((100-$item['khuyenmai'])/100),0,',','.');
                                ?>
                            <del><?=$get_gia?>đ</del><?=$get_giaKM?>đ
                            </span>
                        </td>
                        <td><?=$item['soluong']?></td>
                        <td><?=number_format($item['gia']*$item['soluong'],0,',','.')?>đ</td>
                        <td><?=$ngayThangDinhDang?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
          </div>
        </div>
      </section>
  </main>