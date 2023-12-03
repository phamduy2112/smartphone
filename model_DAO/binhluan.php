<?php
include_once('pdo.php');
function binhluan(){
    $sql='SELECT
    sanpham.ten_sp,
    sanpham.hinhanh,
    sanpham.id_sp,
    COUNT(*) AS so_luot_binh_luan
  FROM
    sanpham
  INNER JOIN
    binhluan
  ON
    sanpham.id_sp = binhluan.id_sp
  GROUP BY
    sanpham.id_sp
  ';
    return pdo_query($sql);
}

function binhluanchitiet_one($id_sp){
  $sql='SELECT
  binhluan.id_bl,
  khachhang.tenkhachhang,
  binhluan.noidung,
  binhluan.ngaydang,
  binhluan.id_sp
FROM
  binhluan
INNER JOIN
  sanpham
INNER JOIN
  khachhang
ON
  sanpham.id_sp = binhluan.id_sp
AND
  khachhang.id_kh = binhluan.id_kh
WHERE
  binhluan.id_sp = ?
ORDER BY
  binhluan.id_bl';
  return pdo_query_one($sql,$id_sp);
}
function binhluanchitiet($id_sp){
  $sql='SELECT
  binhluan.id_bl,
  khachhang.tenkhachhang,
  binhluan.noidung,
  binhluan.ngaydang,
  binhluan.id_sp
FROM
  binhluan
INNER JOIN
  sanpham
INNER JOIN
  khachhang
ON
  sanpham.id_sp = binhluan.id_sp
AND
  khachhang.id_kh = binhluan.id_kh
WHERE
  binhluan.id_sp = ?
ORDER BY
  binhluan.id_bl ASC';
  return pdo_query($sql,$id_sp);
}
function xoabl($id_bl){
  $sql='DELETE FROM binhluan WHERE id_bl = ?';
  return pdo_execute($sql,$id_bl);
}
function search_bl($ma_bl){
  $sql='SELECT
  binhluan.id_bl,
  khachhang.tenkhachhang,
  binhluan.noidung,
  binhluan.ngaydang,
  binhluan.id_sp
FROM
  binhluan
INNER JOIN
  sanpham
INNER JOIN
  khachhang
ON
  sanpham.id_sp = binhluan.id_sp
AND
  khachhang.id_kh = binhluan.id_kh
WHERE
  binhluan.id_bl = ?
ORDER BY
  binhluan.id_bl ASC
';
  return pdo_query_one($sql,$ma_bl);
}


?>