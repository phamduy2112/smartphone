<?php

include_once("../model_DAO/blog.php");
include_once "../model_DAO/user.php";
include_once "../model_DAO/cart.php";
include_once "../model_DAO/danhmuc.php";
include_once "../model_DAO/product.php";

include_once "../model_DAO/admin_sp.php";
include_once "../model_DAO/binhluan.php";

include_once "../model_DAO/thongke.php";
ob_start();
session_start();


extract($_REQUEST);




if(isset($act)){
    switch($act){
     // trang chủ
     case 'trangchu':
        $khachhang_moi=laytatcathongtin(1);
        $trangThaiDH=thongke_donhang();
        $thongke_motngay=thongke_motngay();
        $thongke_slsp=thongke_soluotmua_sp();
        $donhang_moinhat=tatca_donhang(2,'desc');
        include_once "./view/header.php";
        include_once "./view/trangchu.php";
            
        break;
    // danh muc
    case 'danhmuc':
        $danhmuc=laytatca_DM();
        // if($ten)
        
       
        include_once "./view/header.php";
        include_once "./view/danhmuc.php";
            
        break;
    case 'xoadanhmuc':
        if(isset($id_danhmuc)){
            $xoa_dm=xoa_DM($id_danhmuc);
            header('Location:?mod=user&act=danhmuc');

        }
        break;

    case 'chinhsuadm':
       
            if(isset($chinhsuadanhmuc)){
            //    echo $id_danhmuc;
            //    echo $ten; 
            $chinhsua=chinhsua_DM($ten,$id_danhmuc);
            $thongke_slsp=thongke_soluotmua_sp();
            header('Location:?mod=user&act=danhmuc');
    
        }
        include_once "./view/header.php";
        include_once "./view/chinhsuadm.php";
        break;

    // Trang thống kê
    case 'thongke':
        
        include_once "./view/header.php";
        $trangThaiDH=thongke_donhang();
        $thongke_dangki=thongke_ngaydangki();
        $thongke_dangki_chitiet=thongke_ngaydangkichitiet();
        $thongke_slsp=thongke_soluotmua_sp();
        $thongke_bayngay=thongke_bayngay();
        include_once "./view/thongke.php";

        break;
    // sản phẩm
    case 'themdanhmuc':
        if(isset($themDanhMuc)){
            if(isset($ten)){
             $themdanhmuc=them_DM($ten);
                
                header('Location:?mod=user&act=danhmuc');
            
            }
           
        }
       
        break;

    case 'timkiem':
        $ten_sp=$_SESSION['ten_sp'];
        $array_danhmuc=loaddanhmuc();
        
                
        if (isset($add_sp)) {
            header('location: ?mod=user&act=add_sp');
        }else if(isset($tim_kiem)){
           
           $array_sp=timKiemSP_admin($ten_sp_trang_search);
           include_once "./view/header.php";
           include_once "./view/timkiemsp.php";
        }else if(isset($search_loc)){
            $_SESSION['id_loai']=$id_loai;
            $_SESSION['gia']=$gia_sp;
            $_SESSION['conhang']=$trang_thai;
            header('location: ?mod=user&act=loc_sp');
        }else {
          
         
        $array_sp=timKiemSP_admin($ten_sp);
        include_once "./view/header.php";
        include_once "./view/timkiemsp.php";
        }
       
        break;
    case 'loc_sp':
        $array_danhmuc=loaddanhmuc();
        if(isset($tim_kiem)){
            $_SESSION['ten_sp']=$ten_sp_trang_search;
            header('location: ?mod=user&act=timkiem');
            
        }else if (isset($search_loc)){
            $array_sp = array_loc_sp_show($id_loai, $trang_thai,$gia_sp);
            include_once "./view/header.php";
            include_once "./view/timkiemsp.php";
        }else{
        $loc_gia=$_SESSION['gia'];
        $loc_trangthai=$_SESSION['conhang'];
        $loc_id_loai=$_SESSION['id_loai'];
        $array_sp = array_loc_sp_show($loc_id_loai, $loc_trangthai,$loc_gia);
        include_once "./view/header.php";
        include_once "./view/timkiemsp.php";
        }
       
        break;
    case 'sanpham':
      
        $array_sp = load_sp();
        $array_danhmuc=loaddanhmuc();
        $array_trangthai=load_trangthai();
            if (isset($add_sp)) {
                
                header('location: ?mod=user&act=add_sp');
            }else if(isset($search_loc)){
                $_SESSION['id_loai']=$id_loai;
                $_SESSION['gia']=$gia_sp;
                $_SESSION['conhang']=$trang_thai;
                header('location: ?mod=user&act=loc_sp');
              
            }else if(isset($timkiem)){
                $_SESSION['ten_sp']=$sanpham_timkiem;
                
                header('location: ?mod=user&act=timkiem');
            }else {
                include_once "./view/header.php";
                include_once "./view/sanpham.php";
             }
        include_once "./view/header.php";
        include_once "./view/sanpham.php";
        break;
   
    
  

 
    // khach hang
    case 'khachhang':
        $khachhang_moi=laytatcathongtin(1);
        $khachhang=laytatcathongtin(0);
        $thongke_dangki=thongke_ngaydangki();
        include_once "./view/header.php";
        include_once "./view/khachhang.php";
            
        break;
    // don hang
    case 'donhang':
        include_once "./view/header.php";
        $tatcaDh=tatca_donhang(0,'asc');
        include_once "./view/donhang.php";
       
        break;
    case 'donhangchitiet':
      
        include_once "./view/header.php";
        $tatcaDh=tatca_donhang(0,'asc');
        if(isset($id_dh)){
         
           $sp=lay_hinhSP($id_dh); 
           if(isset($chuanbi)){
            chinhsuaTrangThai(0,$id_dh);
            header('Location:?mod=user&act=donhang');
           }
            else if(isset($danggiao)){
                chinhsuaTrangThai(1,$id_dh);
                header('Location:?mod=user&act=donhang');
           }else if(isset($hoantat)){
            chinhsuaTrangThai(2,$id_dh);
            header('Location:?mod=user&act=donhang');
           }
          
        }
        include_once "./view/donhangchitiet.php";
        
        break;
    // bình luận
    case 'binhluan':
        $array_binhluan=binhluan();
        include_once "./view/header.php";
        include_once "./view/binhluan.php"; 
        break;
    case 'binhluanchitiet':
        $array_binhluanct=binhluanchitiet($id_sp);
        if(isset($nut_sow)){
         
        }else if(isset($search_bl)){
            $search_bl=search_bl($ma_bl);
           
           
        }
        include_once "./view/header.php";
        include_once "./view/binhluanchitiet.php"; 
        break;
    case 'detele_bl':
        $detele_bl=xoabl($id);
        header('location: ?mod=user&act=binhluan');
        break;
    // blog
    case 'blog':
        $array_blog = load_blog();
        $array_blog_tatca =load_blog_tatca();
        if(isset($moinhat)){
          $array_blog_moinhat =load_blog_moi_nhat();
        }else if(isset($tatca)){
            $array_blog_tatca =load_blog_tatca();
        }else if(isset($cunhat)){
            $array_blog_cunhat =load_blog_cu_nhat();
        }else if(isset($add_blog)){
            header('location: ?mod=user&act=themblog');
        }
        
            include_once "./view/header.php";
            include_once "./view/blog.php";
        
        
       
            
        break;
    case 'themblog':
        if(isset($add_blog)){
             $array_add_blog = add_blog($loai_blog,$ten_blog,$anh_blog,$mota_blog,$time_blog);
            header('location: ?mod=user&act=blog');
        }else{
            include_once "./view/header.php";
            include_once "./view/themblog.php";
        }
       
        break;
    case 'chinhsuablog':
        if(isset($sua_blog)){
            $array_add_blog = chinhsua_blog($loai_blog,$ten_blog,$anh_blog,$mota_blog,$time_blog,$id);
            header('location: ?mod=user&act=blog');
        }
        include_once "./view/header.php";
        include_once "./view/chinhsuablog.php";
        break;
    case 'xoa_blog':
       $array_xoa_blog=xoa_blog($id);
        header('location: ?mod=user&act=blog');
    break;
    case 'timkiem_blog':
        
    break;


          

        case 'chinhsuasp':
           
            if(isset($sua_sp)){
                $_SESSION['id_sp'] = $id;
                $_SESSION['id_loai'] = $danhmuc_sp;
                $_SESSION['ten_sp'] = $ten_sp;
                $_SESSION['tukhoa'] = $tukhoa_sp;
                $_SESSION['conhang'] = $trangthai_sp;
                $_SESSION['hedieuhanh'] = $hedieuhanh_sp;
                $_SESSION['gia'] = $gia_sp;
                $_SESSION['text1'] = $w3review;
               
                header('location: ?mod=user&act=sua_anh_sp');
            }else{
                include_once "./view/header.php";
                include_once "./view/chinhsuasp.php";
            }
            break;
        case 'sua_anh_sp':
            if (isset($hoantat)) {
                $_SESSION['hinhanh'] = $hinhanh;
                $id_sp=  $_SESSION['id_sp'];
                $id_loai_sp = $_SESSION['id_loai'];
                $ten_sp  =    $_SESSION['ten_sp'];
                $tukhoa  =     $_SESSION['tukhoa'];
                $trangthai =       $_SESSION['conhang'];
                $hedieuhanh =      $_SESSION['hedieuhanh'];
                $gia_sp =      $_SESSION['gia'];
                $hinh_anh =      $_SESSION['hinhanh'];
                $text1 =     $_SESSION['text1'];
               $array_chinhsua_sp=chinhsuasp($id_loai_sp,$ten_sp,$gia_sp,$hinh_anh,$hedieuhanh,$trangthai,$text1,$tukhoa,$id_sp);
                header('location: ?mod=user&act=sanpham');
            } else {
                include_once "./view/header.php";
                include_once "./view/chinhsua_anhsp.php";
            }
            break;

        case 'add_sp':
            if (isset($tiep_sp)) {
                $_SESSION['id_loai'] = $danhmuc_sp;
                $_SESSION['ten_sp'] = $ten_sp;
                $_SESSION['tukhoa'] = $tukhoa_sp;
                $_SESSION['conhang'] = $trangthai_sp;
                $_SESSION['hedieuhanh'] = $hedieuhanh_sp;
                $_SESSION['gia'] = $gia_sp;
                $_SESSION['text1'] = $w3review;
                header('location: ?mod=user&act=add_img_sp');
            } else {
                include_once "./view/header.php";
                include_once "./view/themsanpham.php";
            }




            break;
        case 'add_img_sp':
            if (isset($hoantat)) {
                $_SESSION['hinhanh'] = $hinhanh;
                $id_loai_sp = $_SESSION['id_loai'];
                $ten_sp  =    $_SESSION['ten_sp'];
                $tukhoa  =     $_SESSION['tukhoa'];
                $trangthai =       $_SESSION['conhang'];
                $hedieuhanh =      $_SESSION['hedieuhanh'];
                $gia_sp =      $_SESSION['gia'];
                $hinh_anh =      $_SESSION['hinhanh'];
                $text1 =     $_SESSION['text1'];
                $array_add_sp = add_sp($id_loai_sp,$ten_sp,$gia_sp,$hinh_anh,$hedieuhanh,$trangthai,$text1,$tukhoa);
                header('location: ?mod=user&act=sanpham');
            } else {
                include_once "./view/header.php";
                include_once "./view/themspanh.php";
            }

        break;

       

            // khach hang
        case 'khachhang':
            $khachhang_moi = laytatcathongtin(1);
            $khachhang = laytatcathongtin(0);
            $thongke_dangki = thongke_ngaydangki();
            include_once "./view/header.php";
            include_once "./view/khachhang.php";

            break;
            // don hang
        case 'donhang':
            include_once "./view/header.php";
            $tatcaDh = tatca_donhang();
            include_once "./view/donhang.php";

            break;
        case 'donhangchitiet':

            include_once "./view/header.php";
            $tatcaDh = tatca_donhang();
            if (isset($id_dh)) {

                $sp = lay_hinhSP($id_dh);
                if (isset($chuanbi)) {
                    chinhsuaTrangThai(0, $id_dh);
                    header('Location:?mod=user&act=donhang');
                } else if (isset($danggiao)) {
                    chinhsuaTrangThai(1, $id_dh);
                    header('Location:?mod=user&act=donhang');
                } else if (isset($hoantat)) {
                    chinhsuaTrangThai(2, $id_dh);
                    header('Location:?mod=user&act=donhang');
                }
            }
            include_once "./view/donhangchitiet.php";

            break;
            // bình luận
        case 'binhluan':
            $array_binhluan = binhluan();
            include_once "./view/header.php";
            include_once "./view/binhluan.php";
            break;
        case 'binhluanchitiet':
            $array_binhluanct = binhluanchitiet($id_sp);
            if (isset($nut_sow)) {
            }
             else if (isset($search_bl)) {
                $search_bl = search_bl($ma_bl);
            }
            include_once "./view/header.php";
            include_once "./view/binhluanchitiet.php";
            break;
        case 'detele_bl':
            $detele_bl = xoabl($id);
            header('location: ?mod=user&act=binhluan');
            break;

    }
} else {
    header('location: ?mod=user&act=thongke');
}
