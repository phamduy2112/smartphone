            <?php
            include_once('../model_DAO/pdo.php');
            extract($get_kh);
            // echo $_SESSION['taikhoan'];
            ?>
            
            
            <link rel="stylesheet" href="../content/css/thongtinkhachhang1.css">
           <style>
    
           </style>
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
                  <form class="main-form" method="post" >
                    <!-- Avatar -->
                    <div class="container-avt">
                      <div class="avt">
                      <img src="../content/img/service/ra.jpg" alt="">

                        <?php
                        if($vaitro==1)

                        echo '<a href="../admin/index.php?mod=user&act=trangchu" >Quản trị</a>';
                        
                        ?>

                      </div>
                    </div>

                    <!-- INFOR SHOW -->

                    <div class="container-infor">

                    <input type="hidden" name="idkhachhang" value="<?=$id_kh?>">

                      <div class="infor-show">
                        <p>Tên của bạn:</p>
                        <input type="text" value="<?= $tenkhachhang ?>" class="nameInput" name="tenkhachhang">
                      </div>

                      <div class="infor-show">
                        <p>Email:</p>
                        <input type="text" value="<?=$email ?>" class="nameInput" name="email">
                      </div>

                      <div class="infor-show">
                        <p>Số điện thoại:</p>
                        <input type="text" value="0<?= $sdt ?>" class="nameInput" name="sdt">
                      </div>

                      <div class="infor-show">
                        <p>Mật khẩu:</p>
                        <input type="password" value="<?= $matkhau ?>" class="nameInput" name="matkhau">
                      </div>

                      <div class="infor-show">
                        <p>Mật khẩu cấp 2:</p>
                        <input type="password" value="<?= $matkhaucap2?>"  class="nameInput">
                      </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="container-btn">

                      <input type="button" value="Sửa " id="editButton1"name="nut_chinhsua">
                      <input type="submit" value="Lưu" id="editButton2"name="nut_chinhsua" style="display: none;">


                    </div>
                    <script>
                      document.querySelectorAll(".nameInput")[0].disabled = true;
                      document.querySelectorAll(".nameInput")[1].disabled = true;
                      document.querySelectorAll(".nameInput")[2].disabled = true;
                      document.querySelectorAll(".nameInput")[3].disabled = true;
                      document.querySelectorAll(".nameInput")[4].disabled = true;

                      const editButton = document.getElementById("editButton1");
                      const saveButton = document.getElementById("editButton2");
                        const nameInput = document.querySelectorAll(".nameInput");

                        editButton1.addEventListener("click", function() {
                            saveButton.style.display ="inline-block";
                            editButton.style.display ="none";
                            nameInput[0].disabled = false;
                            nameInput[1].disabled = false;
                            nameInput[2].disabled = false;
                            nameInput[3].disabled = false;
                            // nameInput[4].disabled = true;
                          
                        });
                      
                    </script>
                  </form>
                </div>
              </section>
            </main>