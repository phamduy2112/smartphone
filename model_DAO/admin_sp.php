<?php
include_once('pdo.php');
function load_sp(){
    $sql='SELECT sanpham.hinhanh,sanpham.id_sp,sanpham.conhang,sanpham.ten_sp,sanpham.gia ,
     loai_sp.tenloai FROM sanpham INNER JOIN loai_sp on sanpham.id_loai = loai_sp.id_loai ';
    return pdo_query($sql);
}

?>