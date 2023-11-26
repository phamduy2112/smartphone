<?php
include_once('pdo.php');
function load_sp($start,$end){
    $sql='SELECT sanpham.hinhanh,sanpham.id_sp,sanpham.conhang,sanpham.ten_sp,sanpham.gia ,
     loai_sp.tenloai FROM sanpham INNER JOIN loai_sp on sanpham.id_loai = loai_sp.id_loai order by id_sp DESC';
     if($end>0){
        $sql.=" Limit $start,$end";
     }
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
function timKiemSP_admin($key){
    $sql="SELECT sanpham.hinhanh,sanpham.id_sp,sanpham.conhang,sanpham.ten_sp,sanpham.gia , loai_sp.tenloai
    FROM sanpham
    INNER JOIN loai_sp on sanpham.id_loai = loai_sp.id_loai
    WHERE ten_sp LIKE '%$key%'
     or id_sp like '%$key%'";
    return pdo_query($sql);
}
function loaddanhmuc(){
    $sql='SELECT * FROM loai_sp';
    return pdo_query($sql);
}
function load_trangthai(){
    $sql='SELECT * FROM sanpham';
    return pdo_query($sql);
}
function array_loc_sp_show( $loc_id_loai,  $loc_trangthai ,$loc_gia){
    $sql="SELECT sanpham.hinhanh,sanpham.id_sp,sanpham.conhang,sanpham.ten_sp,sanpham.gia , loai_sp.tenloai FROM sanpham INNER JOIN loai_sp on
    sanpham.id_loai = loai_sp.id_loai WHERE";
    if($loc_id_loai!=0 && $loc_trangthai!='ova' && $loc_gia!=0){
        $sql.=" sanpham.id_loai= $loc_id_loai AND conhang = $loc_trangthai AND gia <=$loc_gia ";
    }else if($loc_id_loai==0 || $loc_gia==0 || $loc_trangthai=='ova'){
        if($loc_id_loai==0){
            $sql.=" conhang = $loc_trangthai AND gia <=$loc_gia ";
        }else if($loc_gia==0){
            $sql.=" sanpham.id_loai= $loc_id_loai AND conhang = $loc_trangthai";
        }else if($loc_trangthai=='ova'){
            $sql.=" sanpham.id_loai= $loc_id_loai AND  gia <=$loc_gia";
        }
    }
   
    return pdo_query($sql);
}
?>