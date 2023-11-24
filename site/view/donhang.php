<?php
    include_once('../model_DAO/pdo.php');
    extract($get_kh);
    // echo $_SESSION['taikhoan'];
    ?>
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
                                $text_stt='';
                                if($trangthai==0){
                                $text_stt='<td style="color: #FF0303;">Đang chuẩn bị hàng</td>';
                                }
                                elseif($trangthai==1){
                                $text_stt='<td style="color: #FF9900;">Đang giao hàng</td>';
                                }
                                else{
                                $text_stt='<td style="color: #57E923;">Đã giao hàng</td>';

                                }
                                
                            ?>
                        <tr>
                            <td><?=$id_dh?></td>
                            <td><?=number_format($tongtien,0,',','.')?>đ</td>
                            <td><?=$ngaydathang?></td>

                            
                           <?=$text_stt?>
                            <td><a href="?mod=user&act=donhangct&idDonHang=<?=$id_dh?>">Xem chi tiết</a></td>
                        </tr>

                      <?php endforeach;?>
                    </tbody>

                </table>
            </div>
        </div>
        </section>
  </main>