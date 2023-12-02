<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>

    <link rel="stylesheet" href="css/flaticon.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../content/css_admin/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&family=M+PLUS+Rounded+1c:wght@300&family=Play:wght@400;700
&family=Ruda:wght@400;500;600;800;900&display=swap" rel="stylesheet">
</head>



<body>

    <div>

        <header>
            <div class="d-flex">
                <div class="" style="width: 12%; height: 100vh; position: fixed; z-index: 2;">
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <div class="menu__a navbar-nav w-100">
                                <div class="menu__list">
                                    <div class="protofile">
                                        <div class="temer1">
                                            <img src="../content/img/icon/LOGO.png" alt="" width="150px">
                                        </div>


                                    </div>

                                    <ul class="menu__item menu_width w-100">

                                        <li class="active">
                                            <a href="?mod=user&act=trangchu" class="">
                                                <i class="fa-solid fa-arrow-up-right-dots"></i>
                                                Tổng quan</a>
                                        </li>

                                        <li>
                                            <a href="?mod=user&act=khachhang" class="">
                                                <i class="fa-solid fa-user"></i>
                                                Quản lí khách hàng</a>
                                        </li>
                                        <li>
                                            <a href="?mod=user&act=donhang" class="">
                                                <i class="fa-solid fa-clipboard"></i>
                                                Quản lí đơn hàng</a>
                                        </li>
                                        <li>
                                            <a href="?mod=user&act=sanpham&page=1" class="">
                                                <i class="fa-solid fa-boxes-stacked"></i>
                                                Quản lý sản phẩm</a>
                                        </li>
                                        <li>
                                            <a href="?mod=user&act=binhluan" class="">
                                                <i class="fa-solid fa-comment"></i>
                                                Quản lý bình luận</a>
                                        </li>
                                        <li>
                                            <a href="?mod=user&act=thongke" class="">
                                                <i class="fa-solid fa-arrow-trend-up"></i>
                                                Quản lý Thống kê</a>
                                        </li>
                                        <li>
                                            <a href="?mod=user&act=danhmuc" class="">
                                                <i class="fa-solid fa-list-ul"></i>
                                                Quản lý danh mục</a>
                                        </li>
                                        <li>
                                            <a href="?mod=user&act=blog" class="">
                                                <i class="fa-solid fa-rectangle-list"></i>
                                                Quản lý blog</a>
                                        </li>
                                        <li>
                                            <a href="?mod=user&act=chat" class="">
                                                <i class="fa-solid fa-rectangle-list"></i>
                                                Nhắn tin</a>
                                        </li>
                                        <li>
                                            <a href="../site/index.php?mod=page&act=home" class="">
                                                <i class="fa-solid fa-right-to-bracket"></i>
                                                Thoát</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>

                    </nav>

                </div>

                <div class="bg-danger" style="height: 50px; width: 100%; position: fixed; z-index: 1;">
                    <div class="admin__body__top">

                        <div class="right__admin">
                            <i class="fa-solid fa-arrow-right fa-hidden" id="fa-arrow-right"></i>
                            <i class=" fa-solid fa-bars " id="fa-bars1"></i>
                            <!-- <i class="fa-solid fa-moon"></i> -->
                            <!-- <i class="fa-regular fa-bell"></i> -->
                            <div class="right__admin--box">
                                <div class="img">
                                    <img src="../content/img/service/ra.jpg" alt="">
                                </div>

                                <div class="right__admin_box--text">
                                    <span>Admin</span>
                                <?php
                                    // extract($_SESSION['taikhoan']);
                                    if(isset($_SESSION['taikhoan'])){
                                        echo $_SESSION['taikhoan'];}
                                    ?>
                                    <!-- <i class="fa fa-chevron-down" aria-hidden="true"></i> -->
                                </div>
                                
                            </div>

                            <i class="fa-solid fa-gear"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div>

    </div>



    </header>