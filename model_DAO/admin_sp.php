<?php
include_once('pdo.php');
function load_sp(){
    $sql='SELECT sanpham.hinhanh,sanpham.id_sp,sanpham.conhang,sanpham.ten_sp,sanpham.gia ,
     loai_sp.tenloai FROM sanpham INNER JOIN loai_sp on sanpham.id_loai = loai_sp.id_loai ';
    return pdo_query($sql);
}
function add_sp($id_loai_sp,$ten_sp,$gia_sp,$hinh_anh,$hedieuhanh,$trangthai,$text1,$tukhoa){
    $sql="INSERT INTO sanpham(id_loai,ten_sp,gia,hinhanh,hedieuhanh,conhang,text1,tukhoa)
    VALUES (?,?,?,?,?,?,?,?)";
    return pdo_execute($sql,$id_loai_sp,$ten_sp,$gia_sp,$hinh_anh,$hedieuhanh,$trangthai,$text1,$tukhoa);

}

function chinhsuasp($id_loai_sp,$ten_sp,$gia_sp,$hinh_anh,$hedieuhanh,$trangthai,$text1,$tukhoa,$id_sp){
    $sql="UPDATE sanpham SET id_loai=? , ten_sp = ? , gia = ?,
    hinhanh = ? , hedieuhanh = ? , conhang = ? ,
    text1 = ?,tukhoa= ?
     WHERE id_sp= ? ";
    return pdo_execute($sql,$id_loai_sp,$ten_sp,$gia_sp,$hinh_anh,$hedieuhanh,$trangthai,$text1,$tukhoa,$id_sp);
}


?>