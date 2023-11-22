<?php 

extract($_REQUEST);

if(isset($act)){
    switch($act){
     // trang chủ
     case 'trangchu':
        include_once "./view/header.php";
        include_once "./view/trangchu.php";
            
        break;
    // danh muc
    case 'danhmuc':
        include_once "./view/header.php";
        include_once "./view/danhmuc.php";
            
        break;
    // sản phẩm
    case 'sanpham':
        include_once "./view/header.php";
        include_once "./view/sanpham.php";
        break;
    case 'themsanpham':
        include_once "./view/header.php";
        include_once "./view/themsanpham.php";
        break;
    case 'chinhsuasp':
        include_once "./view/header.php";
        include_once "./view/chinhsuasp.php";
        break;
    case 'xoasp':
        
        break;
    // khach hang
    case 'khachhang':
        include_once "./view/header.php";
        include_once "./view/khachhang.php";
            
        break;
    // don hang
    case 'donhang':
        include_once "./view/header.php";
        include_once "./view/donhang.php";
            
        break;
    case 'donhangchitiet':
        include_once "./view/header.php";
        include_once "./view/donhangchitiet.php";
            
        break;
    // bình luận
    case 'binhluan':
        include_once "./view/header.php";
        include_once "./view/binhluan.php";
            
        break;
    case 'binhluanchitiet':
        include_once "./view/header.php";
        include_once "./view/binhluanchitiet.php";
            
        break;

    // blog
    case 'blog':
        include_once "./view/header.php";
        include_once "./view/blog.php";
            
        break;
    case 'themblog':
        include_once "./view/header.php";
        include_once "./view/themblog.php";
        break;
    case 'chinhsuablog':
        include_once "./view/header.php";
        include_once "./view/chinhsuablog.php";
    case 'xoablog':
   
        break;
    
    }





       
}else{
    header('location: ?mod=user&act=thongke');
}



?>