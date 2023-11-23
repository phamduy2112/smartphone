<?php

function thongke_ngaydangki()
{
    $sql = "
    SELECT user_name,count(ngay) as Soluong, DATEDIFF(now(), ngay) as NgayHienTai from khachhang GROUP BY ngay HAVING NgayHienTai<7;

    ";
    return pdo_query($sql);
}
function thongke_donhang()
{
    $sql = "SELECT trangthai,count(id_dh) as Soluong
    from donhang GROUP BY trangthai";
    return pdo_query($sql);
}
function thongke_motngay()
{
    $sql = "SELECT sum(tongtien) as tongtien, DATEDIFF(now(), ngaydathang) as NgayHienTai from donhang GROUP BY NgayHienTai HAVING NgayHienTai=0; ";
    return pdo_query($sql);

}
function thongke_soluotmua_sp()
{
    $sql = "SELECT ct_donhang.id_sp, sanpham.ten_sp, count(ct_donhang.soluong) as Soluong FROM ct_donhang JOIN sanpham ON ct_donhang.id_sp = sanpham.id_sp GROUP BY ct_donhang.id_sp;
        ;";
    return pdo_query($sql);
}
