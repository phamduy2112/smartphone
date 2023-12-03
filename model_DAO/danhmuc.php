<?php 
include_once('pdo.php');
function laytatca_DM(){
  $sql='SELECT * FROM loai_sp';
  return pdo_query($sql);
}
function them_DM($ten){
  $sql="INSERT INTO loai_sp (tenloai) VALUES (?)";
  return pdo_execute($sql,$ten);
}
function chinhsua_DM($name,$id_loai){
$sql="UPDATE loai_sp SET tenloai='$name' where id_loai=$id_loai";
return pdo_execute($sql);
}
function xoa_DM($id_loai){
  $sql="DELETE FROM loai_sp where id_loai=?";
  return pdo_execute($sql,$id_loai);
}
?>