<?php 
$taikhoan='';
if(isset($_SESSION['taikhoan'])){
  $taikhoan.='
  Xin chào bạn, 
  <a href="?mod=user&act=thongtinchitiet" style="font-weight: bold; margin-left:3px;">'.$_SESSION['taikhoan'].
  
  '</a>';
}else{
  $taikhoan.='<a href="?mod=user&act=dangnhap">Đăng nhập ngay để mua hàng</a>';

}
$dangnhap='';
if(isset($_SESSION['taikhoan'])){
  $dangnhap.=
  '               
  <a href="?mod=user&act=thongtinchitiet">
 <i class="fa fa-user" aria-hidden="true"></i>
 <div class="icon_item_text">

 </div>
</a>'
;
}else{
  $dangnhap.='               
   <a href="?mod=user&act=dangnhap">
  <i class="fa fa-user" aria-hidden="true"></i>
  <div class="icon_item_text">

  </div>
</a>'
;

}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- GET FONT RUDA + PLAY -->
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&family=M+PLUS+Rounded+1c:wght@300&family=Play:wght@400;700
&family=Ruda:wght@400;500;600;800;900&display=swap" rel="stylesheet">


  <!-- link slider -->

  <link rel="stylesheet" href="../content/css/product.css">
  <link rel="stylesheet" href="../content/css/dangnhap1.css">
  <link rel="stylesheet" href="../content/css/cart1.css">
  <link rel="stylesheet" href="../content/css/style.css">
<style>
  .breadcrumb{
--bs-breadcrumb-margin-bottom:0px;
  }
</style>
  
  
</head>

<body>
<header>
    <div class="header__top">
      <div class="container header__top_item text-center">
        <p>Khai trương giảm giá 50%</p>
        <div class="header__top_icon d-flex">

          
        <?=$taikhoan?>
          <a href="" style="margin-left: 30px;">Định vị cửa hàng</a>
          <a href="">Câu hỏi thường gặp</a>

            <!-- <a href="">Định vị cửa hàng</a> -->
            <!-- <a href="">Câu hỏi thường gặp</a> -->
        </div>
      </div>

    </div>
    <!--  -->
    <div class="header__desktop">
      <div class="header__main">
        <div class="container">
          <div class="header__main_top d-lg-flex">

            <div class="logo">
              <img src="../content/img/icon/LOGO.png" alt="" width="150px">
            </div>
            <form action="?mod=page&act=timkiemsp" class="form__search" method='post'>
              <input type="text" placeholder="Tìm kiếm sản phẩm" class="search" name='key'>
              <input type="submit" value="Tìm kiếm" class="submit" name='nut_timkiem'>
            </form>
            <div class="icons d-flex">
              <div class="icon_item">
                <?=$dangnhap?>


              </div>
                <a href="?mod=page&act=yeuthich">
 <div class="icon_item">
                <i class="fa fa-heart" aria-hidden="true"></i>
              </div>
              </a>
             
            
              <a href="?mod=cart&act=list" class="icon_item">

                <i class="fa fa-cart-shopping"></i>

              </a>

            </div>
          </div>

        </div>


      </div>
      <div class="header__menu" style="">
        <div class="container d-lg-flex justify-content-between">

          <!-- <div class="header__menu__item">
            <i class="fa-solid fa-bars"></i>
            <p>Tất cả danh mục</p>
          </div> -->

          <nav class="menu__item">
            <ul>
              <li><a href="?mod=page&act=home">Trang chủ</a></li>
              <li><a href="">Giới thiệu</a></li>
              <li><a href="">Sản phẩm</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Liên hệ</a></li>
            </ul>
          </nav>
          <div class="header__menu__end" style="font-weight: bold;">
            Giảm giá 20% khi bạn mua lần đầu
          </div>
        </div>

      </div>
    </div>

    <!-- mobile -->
    <div class="header__mobile">
      <div class="header__main">
        <div class="container-fluid">
          <div class="header__main_top d-lg-flex">
            <div class="header__main__top">
              <div class="bar__menu" id="bar_nav">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
              <img src="./img/icon/LOGO.png" alt="" width="150px">


              <div class="icons d-flex">


                <a href="" class="icon_item">

                  <i class="fa fa-cart-shopping"></i>

                 


                </a>

              </div>
            </div>

            <form action="" class="form__search">
              <input type="text" placeholder="Tìm kiếm sản phẩm" class="search">
              <input type="submit" value="Tìm kiếm" class="submit">
            </form>
          </div>

        </div>


      </div>
      <div class="bg__header_menu" id="menu">
        <div class="header__menu">
          <div class="header_menu">
            <div class="header__mobie_icon">
              <p class="default" id="dongmenu">
                <i class="fa-solid fa-xmark"></i>
              </p>
              <p> Bạn đang tìm kiếm ?</p>
              <form action="">
                <div class="header_form">
                  <input type="text" placeholder="Tìm sản phẩm">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </div>

              </form>
            </div>

            <nav class="menu__item">
              <ul>
                <li><a href="?mod=user&act=dangnhap">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Đăng nhập
                  </a>
                </li>
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Liên hệ</a></li>
              </ul>
            </nav>
            <div class="header__menu__end">

            </div>
          </div>

        </div>
      </div>

    </div>
  </header>