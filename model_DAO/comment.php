<?php
include_once('pdo.php');
function comment($id_kh,$id_sp,$noidung){
    $sql="INSERT INTO binhluan(id_kh,id_sp,noidung,ngaydang)
      VALUES (?,?,?,date('Y-m-d H:i:s'))";
      return pdo_execute($sql,$id_kh,$id_sp,$noidung);
    }

function load_comment($id){
    $sql="SELECT * FROM binhluan where id_sp=$id";
    return pdo_query($sql);
}
function lay_ten_kh($id_kh){
    $sql='SELECT * FROM binhluan JOIN khachhang ON binhluan.id_kh = khachhang.id_kh';
    return pdo_query($sql);
}

function xoaBinhLuan($id_bl){
$sql='DELETE from binhluan where id_bl=?';
return pdo_query_one($sql,$id_bl);
}


?>