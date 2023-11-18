<link rel="stylesheet" href="../content/css/thongtinkhachhang.css">
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
                    <div class="order">
                        <i class="fa-regular fa-user"></i>
                        <a href="?mod=user&act=thongtinchitiet">Tài khoản của tôi </a>
                    </div>

                    <div class="profile">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <a href="?mod=user&act=donhang">Đơn hàng của tôi</a>
                    </div>
                </div>
            </div>
            <!-- INFOR -->
            <form class="main-form">
              <!-- Avatar -->
              <div class="container-avt">
                <div class="avt">
                    <img src="../../admin/img/duan/us.jpg" alt="">
                    <input type="file" placeholder="Chọn ảnh" id="imgfile">
                    <label for="imgfile" class="btn-update">Tải ảnh lên</label>
                </div>
              </div>

              <!-- INFOR SHOW -->
              <div class="container-infor">

                <div class="infor-show">
                  <p>Tên của bạn:</p>
                  <input type="text" placeholder="Nguyễn Văn A" disabled>
                </div>

                <div class="infor-show">
                  <p>Email:</p>
                  <input type="text" placeholder="vana123@gmail.com" disabled>
                </div>

                <div class="infor-show">
                  <p>Số điện thoại:</p>
                  <input type="text" placeholder="0832182xxx" disabled>
                </div>

                <div class="infor-show">
                  <p>Mật khẩu:</p>
                  <input type="text" placeholder="**********" disabled>
                </div>

                <div class="infor-show">
                  <p>Mật khẩu cấp 2:</p>
                  <input type="text" placeholder="******" disabled>
                </div>
              </div>

              <!-- BUTTON -->
              <div class="container-btn">
                <input type="button" value="Chỉnh sửa">
                <input type="button" value="Cập nhật">
              </div>
            </form>
        </div>
        </section>
  </main>