<main>
        <div class="container-md">
        
            <div class="sign m-auto" id="dangnhap">
              
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
  </ol>
</nav>  
           
              <div class="notify">
                  <div>

                  </div>
              </div>

                <form action="" method="post" name="myform" id="form-dangnhap">
                  <h1>Đăng nhập tài khoản</h1>
                  <div class="form__group">
                    <p>Tên tài khoản</p>
                    <div class="form__group_icon">
                      <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                      <input type="text" placeholder="Mời bạn nhập tài khoản" name="user" id="username" required title="Vui lòng nhập thông tin">
                    </div>
                    <p id="error-user"></p>
                  </div>
                 
                  <div class="form__group">
                    <p>Mật khẩu</p>
                    <div class="form__group_icon">
                      <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
                      <input type="password" placeholder="Mời bạn nhập mật khẩu" name="pass" id="password" required title="Vui lòng nhập thông tin">
                      <!-- <i class="fa fa-eye eyes" aria-hidden="true"></i> -->
          
                    </div>
                  
                  </div>
                  <a href="?mod=user&act=timtaikhoan" class="quenmk">Bạn quên mật khẩu?</a><br>
                  <input type="submit" value="Đăng nhập" class="btna" name="btnDangNhap"> 
                  
                  <span>Bạn chưa có tài khoản? <a href="?mod=user&act=dangki">Đăng ký ngay</a> </span>
                </form>
              </div> 
        </div>
     
      </main>