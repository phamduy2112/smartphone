<?php 
include_once('pdo.php');
function laytatcathongtin($limit){
  $sql="SELECT * FROM khachhang ";
  if($limit==1){
    $sql.="ORDER BY id_kh DESC LIMIT 3";
  }
  return pdo_query($sql);
}


function themTaiKhoan($name,$taikhoan,$sdt,$email,$matkhau,$matkhaucap2){
  $sql="INSERT INTO khachhang(tenkhachhang,user_name,sdt,email,matkhau,matkhaucap2)
  VALUES (?,?,?,?,?,?)";
  return pdo_execute($sql,$name,$taikhoan,$sdt,$email,$matkhau,$matkhaucap2);
}

function chinhsuatk($id_kh, $tenkhachhang,$email,$sdt,$matkhau){
  $sql="UPDATE khachhang
  set tenkhachhang = '$tenkhachhang', email = '$email',
  sdt = '$sdt', matkhau = '$matkhau'
  where id_kh = '$id_kh'
  ";
  return pdo_execute($sql);
}

function ktTaiKhoan($taikhoan,$pass){
  $sql= "SELECT * FROM khachhang where user_name=? and matkhau=?";
  return pdo_query_one($sql,$taikhoan,$pass);
}

function ktTaiKhoan2($taikhoan,$pass){
  $sql= "SELECT * FROM khachhang where user_name=?  and matkhaucap2=?";
  return pdo_query_one($sql,$taikhoan,$pass);
}

function doi_mk($pass,$taikhoan){
  $sql="UPDATE khachhang
  SET matkhau = '$pass' where user_name = '$taikhoan'";
  return pdo_execute($sql);
}

function laythongtin_MotKhachHang($name){
  $sql='SELECT * FROM khachhang where user_name=?';
  return pdo_query_one($sql,$name);
}

function lay_iduser($name){
  $sql='SELECT id_kh FROM khachhang where user_name=?';
  return pdo_query_one($sql,$name);
}

function kt_TaiKhoanTonTai($taikhoan){
  $sql= "SELECT * FROM khachhang where user_name=?";
  return pdo_query_one($sql,$taikhoan);
}
function kt_EmailTonTai($email){
  $sql= "SELECT * FROM khachhang where email=?";
  return pdo_query_one($sql,$email);
}
function check_buy($name, $id){
  $sql="SELECT  kh.user_name 
  from khachhang kh
  inner join donhang dh on kh.id_kh = dh.id_kh
  inner join ct_donhang ct on dh.id_dh = ct.id_dh
  where kh.user_name = '$name' and ct.id_sp = '$id'
  and dh.trangthai =4
  ";
  return pdo_query_one($sql);
}

?>