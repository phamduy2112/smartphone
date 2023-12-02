<?php
session_start();
ob_start();
extract($_REQUEST);
include_once("../model_DAO/product.php");
include_once("../model_DAO/user.php");
include_once("../model_DAO/cart.php");
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
       
        
        
    }
    $title = "Giỏ hàng";
    include_once('./view/header.php');
    include_once('./view/cart.php');
    include_once('./view/footer.php');
    break;
    case 'xoaMotSP':
        unset($_SESSION['cart'][$id]);
        header('location:?mod=cart&act=list');
    break;
    

    case 'list':
        $title = "Giỏ hàng";
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




    case 'xoaHet':
        unset($_SESSION['cart']);
        header('location:?mod=cart&act=list');
        break;




    case 'trangthanhtoan':

        // if(isset($btn_Thanhtoan)){
        //     $id_user=lay_iduser($_SESSION['taikhoan']);
        //     extract($id_user);
        //     $time = date('Y-m-d H:i:s');  

        //     if($idsp==''){
        //     them_donHang($time,$_SESSION['tongtt'],0,$id_user['id_kh']);
        //     foreach( $_SESSION['cart'] as $item){
        //         extract($item);
        //         // echo $id_user['id_kh'];
        //         $id=them_cuoidonct();
        //         them_donhangCT($id['id_dh'],$MaSanPham,$SL);
        //         update_sl($id['id_dh'],$MaSanPham,$SL);
        //     }
        // }
        // else{
        //     echo 'aaaaaaaaaaaaaaaaaaaaaaaaa';
        // }

        
        if(isset($_SESSION['taikhoan'])){
            $title = "Mua hàng";

            include_once('./view/header.php');
            $laythongtin=laythongtin_MotKhachHang($_SESSION['taikhoan']);

            if(isset($btn_Thanhtoan)){
                $id_user=lay_iduser($_SESSION['taikhoan']);
                extract($id_user);
                $time = date('Y-m-d H:i:s');  
                them_donHang($time,$_SESSION['tongtt'],0,$id_user['id_kh']);
              
                foreach( $_SESSION['cart'] as $item){
                    extract($item);
                    // echo $id_user['id_kh'];
                    $id=them_cuoidonct();
                    them_donhangCT($id['id_dh'],$MaSanPham,$SL);
                    update_sl($id['id_dh'],$MaSanPham,$SL);

                }
                if($check==="chuyenkhoan"){
                 $_SESSION['check']='Chuyển khoản ngân hàng';
                }else{
                 $_SESSION['check']='Trả tiền mặt khi nhận hàng';
                }

                header('location:?mod=cart&act=trangsauthanhtoan');

                // unset($_SESSION['cart']);
   }  

        include_once('./view/trangthanhtoan.php');
        include_once('./view/footer.php');
        }else{
            header('location:?mod=cart&act=trangchuadangnhap');
        }
        break;

        
        case 'huydh':
            huydh($id); 
            re_sl($id);
            header('Location:?mod=user&act=donhang');
            break;

    
    case 'trangchuadangnhap':
        $title = "Đăng nhập";
        include_once('./view/header.php');
        include_once('./view/trangchuadangnhap.php');
        include_once('./view/footer.php');
        break;
    case 'trangsauthanhtoan':
        $title = "Hóa đơn của bạn";
        include_once('./view/header.php');
        include_once('./view/trangsauthanhtoan.php');
        unset($_SESSION['cart']);
        include_once('./view/footer.php');
        break;
    }
    
   
}
?>