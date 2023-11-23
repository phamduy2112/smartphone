<?php 
include_once("../model_DAO/blog.php");
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
        $array_blog = load_blog();
        if(isset($moinhat)){
          $array_blog_moinhat =load_blog_moi_nhat();
        }else if(isset($tatca)){
            $array_blog_tatca =load_blog_tatca();
        }else if(isset($cunhat)){
            $array_blog_cunhat =load_blog_cu_nhat();
        }
        include_once "./view/header.php";
        include_once "./view/blog.php";
            
        break;
    case 'themblog':
    
        include_once "./view/header.php";
        include_once "./view/themblog.php";
        break;
    case 'chinhsuablog':
        if(isset($capnhat)){
            var_dump($ten_blog);
            var_dump($time_blog);
            var_dump($loai_blog);
            var_dump($anh_blog);
            var_dump($mota_blog);
            $add_blog=chinhsua_blog($ten_blog,$time_blog,$loai_blog,$anh_blog,$mota_blog);
        }
        include_once "./view/header.php";
        include_once "./view/chinhsuablog.php";
    case 'xoablog':
   
        break;
    
    }





       
}else{
    header('location: ?mod=user&act=thongke');
}



?>