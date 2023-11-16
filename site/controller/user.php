<?php
session_start();
ob_start();
extract($_REQUEST);
include_once("../model_DAO/user.php");
if (isset($act)) {

  switch ($act) {
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
    case "dangki":
      $tb="";
      if (isset($nut_dangki)) {
        if (isset($taikhoan)&&($taikhoan!='')
        && isset($email) &&($email!='')
      && isset($matkhaumot)&&($matkhaumot!='') 
      && isset($matkhauhai)&&($matkhauhai!='') 
      && isset($matkhaucap2)&&($matkhaucap2!='')
      ) {
          if($matkhaumot===$matkhauhai){
            $matkhau=$matkhaumot;
           $_SESSION['taikhoan'] = $taikhoan;
           $result=themTaiKhoan($taikhoan,$email,$matkhau,$matkhaucap2);
           if($result){
            
             header('Location: ?mod=page&act=home');
           } 
          
          }else{
            $tb.= "that bai";
          }
          echo $tb;
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
      case 'timtaikhoan':
        if(isset($nutTimTK)){
          if (isset($taikhoan)&&($taikhoan!='')
          && isset($matkhaucap2)&&($matkhaucap2!='')
          
          ){
            echo $taikhoan;
            echo $matkhaucap2;
          $result=ktTaiKhoan2($taikhoan,$matkhaucap2);
          if($result){
            $_SESSION['taikhoan'] = $taikhoan;
            header("Location:?mod=user&act=doimk");   
          }else{
            echo "Thất bại";
          }
            }else{
              echo "Lỗi rồi";
            }
        }

        include_once("view/header.php");
        include_once("view/timtaikhoan.php");
        include_once("view/footer.php");
        break;
      case 'doimk':
        $taikhoan= $_SESSION['taikhoan'];
        if(isset($nutDoiMK)){
          if (isset($matkhau)&&($matkhau!='')){
            $result=doi_mk($matkhau,$taikhoan);
            echo "Đổi mật khẩu thành công";
          }else{
            
          }
        }
        include_once("view/header.php");
        include_once("view/doimk.php");
        include_once("view/footer.php");
        break;

  }

}
?>