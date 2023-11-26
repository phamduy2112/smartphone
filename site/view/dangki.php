<main>
<div class="container-md">
    <div class="sign m-auto" id="dangky">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Đăng kí</li>
        </ol>
      </nav>  
      
      
        <form action="" class="sign-up" method="post"  onsubmit="return dangki();">
        
          <h1>Đăng kí tài khoản</h1>
          <div class="form__group">
            <p>Tên tài khoản</p>
            <div class="form__group_icon">
              <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
              <input type="text" placeholder="Mời bạn nhập tên tài khoản" id="ten" name="taikhoan">
            </div>
            <p for="" id="ten_error"></p>
          </div>
          <div class="form__group">
            <p>Email:</p>
            <div class="form__group_icon">
              <!-- <i class="fa-solid fa-envelope"></i> -->
              <input type="email" placeholder="Mời bạn nhập tài khoản Gmail" id="gmail" name="email">
            </div>
            <p for="" id="gmail_error"></p>
          </div>
          <div class="form__group">
            <p>Mật khẩu</p>
            <div class="form__group_icon">
              <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
              <input type="password" placeholder="Mời bạn nhập mật khẩu" id="passone" name="matkhaumot">
              <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->
            </div>
            <p for="" id="passone_error"></p>
          
          </div>
          <div class="form__group">
            <p>Xác nhận mật khẩu</p>
            <div class="form__group_icon">
              <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
              <input type="password" placeholder="Mời bạn nhập lại mật khẩu" id="passtwo" name="matkhauhai">
              <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->
            </div>
            <p for="" id="passtwo_error"></p>
          
          </div>
          <div class="form__group">
            <p>Mật khẩu cấp 2</p>
            <div class="form__group_icon">
              <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
              <input type="password" placeholder="Mời bạn nhập lại mật khẩu" id="passtwo" name="matkhaucap2">
              <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->
            </div>
            <!-- <p for="" id="passtwo_error"></p> -->
          
          </div>
          <input type="submit" value="Đăng kí" class="btna" name="nut_dangki"><br>
          <span>Bạn đã có tài khoản? <a href="?mod=user&act=dangnhap">Đăng nhập ngay</a></span>
          <p class='text-danger'><?=$tb?></p>
        </form>
      </div>
</div>
  </main>