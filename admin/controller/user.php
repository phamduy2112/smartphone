<?php 

include_once("../model_DAO/blog.php");
include_once "../model_DAO/user.php";
include_once "../model_DAO/cart.php";
include_once "../model_DAO/danhmuc.php";

include_once "../model_DAO/admin_sp.php";
include_once "../model_DAO/binhluan.php";

include_once "../model_DAO/thongke.php";


extract($_REQUEST);

if(isset($act)){
    switch($act){
     // trang chủ
     case 'trangchu':
        $khachhang_moi=laytatcathongtin(1);
        $trangThaiDH=thongke_donhang();
        $thongke_motngay=thongke_motngay();
        $thongke_slsp=thongke_soluotmua_sp();
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
            header('Location:?mod=user&act=danhmuc');
    
        }
        include_once "./view/header.php";
        include_once "./view/chinhsuadm.php";
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
    case 'sanpham':
        $array_sp = load_sp();
          
        include_once "./view/header.php";
        include_once "./view/sanpham.php";
        break;
        break;
    
    case 'themsanpham':
        if(isset($tiep_sp)){
            var_dump($danhmuc_sp);
            var_dump($ten_sp);
            var_dump($tukhoa_sp);
            var_dump($trangthai_sp);
            var_dump($gia_sp);
            var_dump($w3review);
            
          
           
        }
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
        $khachhang_moi=laytatcathongtin(1);
        $khachhang=laytatcathongtin(0);
        $thongke_dangki=thongke_ngaydangki();
        include_once "./view/header.php";
        include_once "./view/khachhang.php";
            
        break;
    // don hang
    case 'donhang':
        include_once "./view/header.php";
        $tatcaDh=tatca_donhang();
        include_once "./view/donhang.php";
       
        break;
    case 'donhangchitiet':
      
        include_once "./view/header.php";
        $tatcaDh=tatca_donhang();
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
        break;
    case 'xoablog':
   
        break;

        

    
    }
    





       
}else{
    header('location: ?mod=user&act=thongke');
}



?>