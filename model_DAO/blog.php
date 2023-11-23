<?php
include_once('pdo.php');
function load_blog(){
    $sql="SELECT * FROM blog limit 10";
    return pdo_query($sql);
}
function load_blog_moi_nhat(){
  $sql="SELECT * FROM blog order by ngaydang asc limit 5";
  return pdo_query($sql);
}
function load_blog_tatca(){
  $sql="SELECT * FROM blog";
  return pdo_query($sql);
}
function load_blog_cu_nhat(){
  $sql="SELECT * FROM blog order by ngaydang desc limit 5";
  return pdo_query($sql);
}

function chinhsua_blog($ten_blog,$time_blog,$loai_blog,$anh_blog,$mota_blog){
  $sql=" UPDATE blog(ngaydathang,tongtien,trangthai,id_kh)
  VALUES (?,?,?,?)";
  return pdo_execute($sql);
}
?>