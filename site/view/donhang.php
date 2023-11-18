<link rel="stylesheet" href="../content/css/lichsumuahang.css">
<main>

    <section class="container">
        <h3>Thông tin cá nhân</h3>
        <div class="infor-form">
            <!-- USER -->
            <div class="user-form">
                <div class="user">

                        <img src="../../admin/img/duan/us.jpg" alt="">
                    <div>
                        <p>Name</p>
                        <a href="">Sửa hồ sơ</a>
                    </div>
                </div>
                <div class="control">
                    <div class="profile">
                        <i class="fa-regular fa-user"></i>
                        <a href="?mod=user&act=thongtinchitiet">Tài khoản của tôi </a>
                    </div>

                    <div class="order">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <a href="">Đơn hàng của tôi</a>
                    </div>
                </div>
            </div>
            <!-- INFOR -->
            <div class="order-form">
            <h4>Đơn hàng của bạn</h4>
            <p>Có 3 đơn hàng</p>
                <table>
                    <thead>
                        <th>Mã ĐH</th>
                        <th>Tổng giá</th>
                        <th>Thời gian</th>
                        <th>Trạng thái</th>
                    
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach($donhang as $item):
                                extract($item);
                                
                            ?>
                        <tr>
                            <td>1</td>
                            <td><?=$tongtien?></td>
                            <td><?=$ngaydathang?></td>
                            <td style="color: red;"><?=$trangthai?></td>
                           
                            <td><a href="?mod=user&act=donhangct&idDonHang=<?=$id_dh?>">Xem chi tiết</a></td>
                        </tr>

                      <?php endforeach;?>
                    </tbody>

                </table>
            </div>
        </div>
        </section>
  </main>