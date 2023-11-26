<link rel="stylesheet" href="../content/css/lichsumuahang.css">
<link rel="stylesheet" href="../content/css/donhangct.css">
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
                      <a href="?mod=user&act=donhang">Đơn hàng của tôi</a>
                  </div>
              </div>
          </div>
            <!-- INFOR -->
          <div class="order-form">
            <h4>Thông tin đơn hàng #1</h4>
            <h4 class="title">Có 3 sản phẩm</h4>
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
                            <img src="../../admin/img/duan/us.jpg" alt="">
                            <span>
                                <a href=""><?=$item['ten_sp']?> </a>  
                            <del><?=$item['gia']?></del><?=$item['gia']?>
                            </span>
                        </td>
                        <td><?=$item['soluong']?></td>
                        <td><?=$item['gia']*$item['soluong']?></td>
                        <td><?=
                        $item['ngaydathang']
                        ?></td>
                
                    </tr>
                    <?php endforeach;?>
     
                 
                  
                </tbody>
            </table>
          </div>
        </div>
      </section>
  </main>