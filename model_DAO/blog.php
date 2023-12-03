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

function add_blog($loai_blog,$ten_blog,$anh_blog,$mota_blog,$time_blog){
  $sql="INSERT INTO blog(id_loai,tieude,hinhanh,noidung,ngaydang)
  VALUES (?,?,?,?,?)";
  return pdo_execute($sql,$loai_blog,$ten_blog,$anh_blog,$mota_blog,$time_blog);
}

function chinhsua_blog($loai_blog,$ten_blog,$anh_blog,$mota_blog,$time_blog,$id){
  $sql=" UPDATE blog SET id_loai = ? ,tieude= ? ,hinhanh=?,noidung=?,ngaydang=? WHERE id_blog=?";
  return pdo_execute($sql,$loai_blog,$ten_blog,$anh_blog,$mota_blog,$time_blog,$id);
}
function xoa_blog($id){
  $sql="DELETE FROM blog where id_blog=?";
  return pdo_execute($sql,$id);
}
function timblog(){
  $sql="SELECT * FROM blog  where ten_blog LIKE '%$%";
  return pdo_query($sql);

}


?>