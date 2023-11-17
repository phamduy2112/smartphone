<?php 
include_once('pdo.php');
function themTaiKhoan($taikhoan,$email,$matkhau,$matkhaucap2){
  $sql="INSERT INTO khachhang(user_name,email,matkhau,matkhaucap2)
  VALUES (?,?,?,?)";
  return pdo_execute($sql,$taikhoan,$email,$matkhau,$matkhaucap2);
}
function ktTaiKhoan($taikhoan,$pass){
  $sql= "SELECT * FROM khachhang where user_name=? and matkhau=?";
  return pdo_query_one($sql,$taikhoan,$pass);
}
function ktTaiKhoan2($taikhoan,$pass){
  $sql= "SELECT * FROM khachhang where user_name=? and matkhaucap2=?";
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
?>