<?php
session_start();
ob_start();
extract($_REQUEST);
include_once("../model_DAO/product.php");
include_once("../model_DAO/user.php");
if (isset($act)) {

  switch ($act) {
   case 'giohang':
    if(isset($id)){
        $sp=laymot_sp($id);
        $_SESSION['cart'][$id]=array(
            'MaSanPham'=> $sp['id_sp'],
            'TenSanPham'=> $sp['ten_sp'],
            'GiaSanPham'=> $sp['gia'],
            'HinhSanPham'=> $sp['hinhanh'],
            'PhanTramGiamGia'=> $sp['khuyenmai'],
            'SL'=>1
        );
        print_r($_SESSION['cart']);
    
        
        
    }
    
    include_once('./view/header.php');
    include_once('./view/cart.php');
    include_once('./view/footer.php');
    break;
    case 'xoaMotSP':
        unset($_SESSION['cart'][$id]);
        header('location:?mod=cart&act=list');
    break;
    
    case 'list':
        include_once('./view/header.php');
        include_once('./view/cart.php');
        include_once('./view/footer.php');
        break;
    case 'tang':
        $_SESSION['cart'][$id]['SL']+=1;
        header('location:?mod=cart&act=list');
        break;
    case 'giam':
        if( $_SESSION['cart'][$id]['SL']>1){
          $_SESSION['cart'][$id]['SL']-=1;  
        }else{
            unset($_SESSION['cart'][$id]);
            header('location:?mod=cart&act=list');
        }

        
        
        header('location:?mod=cart&act=list');
        break;
    case 'trangthanhtoan':
        if(isset($_SESSION['taikhoan'])){
            include_once('./view/header.php');
            $laythongtin=laythongtin_MotKhachHang($_SESSION['taikhoan']);
           
            include_once('./view/trangthanhtoan.php');
            include_once('./view/footer.php');
        }else{
            header('location:?mod=cart&act=trangchuadangnhap');
        }
        break;
    case 'trangchuadangnhap':
        include_once('./view/header.php');
        include_once('./view/trangchuadangnhap.php');
        include_once('./view/footer.php');
        break;
    }
   
}
?>