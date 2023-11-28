<?php
session_start();
ob_start();
extract($_REQUEST);
include_once("../model_DAO/user.php");
include_once("../model_DAO/cart.php");
if (isset($act)) {

  switch ($act) {

// Đăng nhập
    case "dangnhap":
      if(isset($btnDangNhap)){
         if(isset($user)&& $user!=''
         &&isset($pass)&& $pass!=''){
         $result=ktTaiKhoan($user,$pass);
          if($result){
            header('Location: ?mod=page&act=home');
            $_SESSION['taikhoan'] = $user;
            // echo $_SESSION['taikhoan'];
          }else{
            echo "K thành công";
          }
         }   else{
          echo "Lỗi rồi";
         }
        }
      include_once("view/header.php");
      include_once("view/dangnhap.php");
      include_once("view/footer.php");
      break;


// Đăng kí
    case "dangki":
      $tb="";
      if (isset($nut_dangki)) {
      if (isset($taikhoan)&&($taikhoan!='')
      && isset($email) &&($email!='')
      && isset($matkhaumot)&&($matkhaumot!='') 
      && isset($matkhauhai)&&($matkhauhai!='') 
      && isset($matkhaucap2)&&($matkhaucap2!='')
      ) {
        $kt_TK=kt_TaiKhoanTonTai($taikhoan);
        $kt_email=kt_EmailTonTai($email);
        $tb='';
        if($kt_TK){
          $tb.= 'tên tài khoản đã tồn tại';
        }else if($kt_email){
          $tb.= 'email đã tồn tại';
        } 
        else{
          if($matkhaumot===$matkhauhai){
            $matkhau=$matkhaumot;
           $_SESSION['taikhoan'] = $taikhoan;
           $result=themTaiKhoan($taikhoan,$email,$matkhau,$matkhaucap2);
             header('Location: ?mod=page&act=home');
          }else{
          }
        
        }
          // echo $taikhoan . "-" . $email .''.$matkhaumot.''.$matkhauhai.''.$matkhaucap2;
        } else {
          echo "lỗi rồi";
        }
        ;
      }
      include_once("view/header.php");
      include_once("view/dangki.php");
      include_once("view/footer.php");
      break;


// Tìm tài khoản
      case 'timtaikhoan':
        $kq=" ";
        if(isset($nutTimTK)){
          if (isset($taikhoan)&&($taikhoan!='')
          && isset($matkhaucap2)&&($matkhaucap2!='')
          ){
          $result=ktTaiKhoan2($taikhoan,$matkhaucap2);
          if($result){
            $_SESSION['taikhoan1'] = $taikhoan;
            header("Location:?mod=user&act=doimk");   
          }else{
            $kq.="Bạn vừa nhập tài khoản và mật khẩu cấp 2 không đúng";
          }
            }else{
              $kq.= "Không được bỏ trống tài khoản hoặc mật khẩu cấp 2";
            }
        }
        include_once("view/header.php");
        include_once("view/timtaikhoan.php");
        include_once("view/footer.php");
        break;

// Đổi mật khẩu
      case 'doimk':
        $taikhoan= $_SESSION['taikhoan1'];
        if(isset($nutDoiMK)){
          if (isset($matkhau)&&($matkhau!='')){
            $result=doi_mk($matkhau,$taikhoan);
            $_SESSION['taikhoan']=$taikhoan;
            header("Location:?mod=page&act=home"); 
          }else{
          }
        }
        include_once("view/header.php");
        include_once("view/doimk.php");
        include_once("view/footer.php");
        break;

// Thông tin chi tiết
      case 'thongtinchitiet':
        
        $get_kh=laythongtin_MotKhachHang($_SESSION['taikhoan']);
        $id_user=lay_iduser($_SESSION['taikhoan']);
        if (isset($nut_chinhsua)) {
          if (isset($tenkhachhang)&&($tenkhachhang!='')
          && isset($email) &&($email!='')
          && isset($sdt)&&($sdt!='') 
          && isset($matkhau)&&($matkhau!='') 
      ) {
          chinhsuatk($idkhachhang,$tenkhachhang,$email,$sdt,$matkhau);
          
          header("Location:?mod=user&act=thongtinchitiet"); 
        }
      }
        
        include_once("view/header.php");
        include_once("view/thongtinchitiet.php");
        include_once("view/footer.php");
        break;


// Đăng xuất
      case 'dangxuat':
        unset($_SESSION['taikhoan']);
        header('Location:?mod=page&act=home');
      break;


// ĐƠn hàng
      case 'donhang':
        include_once("view/header.php");
        $id_user=lay_iduser($_SESSION['taikhoan']);
        $donhang=show_donhang($id_user['id_kh']);
        $demdh =  demdh($id_user['id_kh']);
        $get_kh=laythongtin_MotKhachHang($_SESSION['taikhoan']);
        include_once("view/donhang.php");
        include_once("view/footer.php");
        break;
        
        // Đơn hàng chi tiết
        case 'donhangct':
        $get_kh=laythongtin_MotKhachHang($_SESSION['taikhoan']);
        $lay_SP=lay_hinhSP($idDonHang);
        $get_ngay=get_dh($idDonHang);
        $dem =demsp($idDonHang);
        include_once("view/header.php");
        include_once("view/donhangct.php");
        include_once("view/footer.php");
        break;

  }
}
?>