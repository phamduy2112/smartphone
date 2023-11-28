<?php 
include_once('pdo.php');
function them_donHang($date,$tt,$trangthai,$id_user){
    $sql="INSERT INTO donhang(ngaydathang,tongtien,trangthai,id_kh)
      VALUES (?,?,?,?)";
      return pdo_execute($sql,$date,$tt,$trangthai,$id_user);
    }

   function show_donhang($id_user){
      $sql="SELECT * FROM donhang where id_kh=$id_user order by id_dh desc";
      return pdo_query($sql);
    }

    function demdh($id_user){
      $sql="SELECT COUNT(*) AS soDH
      FROM donhang
      WHERE id_kh = $id_user";
      return pdo_query_one($sql);
    }

    function tatca_donhang($limit, $order, $trangthai){
    $sql = "SELECT * FROM donhang ";
    if ($trangthai == 1) {
        $sql .= "where trangthai=1 ";
    }
    $sql .= "order by NgayDatHang $order";
    if ($limit > 0) {
        $sql .= " limit 2";
    }
    return pdo_query($sql);
}



    function show_donhangCT($id){
      $sql="SELECT * FROM ct_donhang where id_dh=$id";
      return pdo_query($sql);
    }
    function them_cuoidonct(){
      $sql= "SELECT * FROM donhang order by id_dh desc limit 1";
      return pdo_query_one($sql);
      
    }
    function them_donhangCT($id_dh,$id_sp,$soluong){
      $sql="INSERT INTO ct_donhang(id_dh,id_sp,soluong)
      VALUES (?,?,?)";
      return pdo_execute($sql,$id_dh,$id_sp,$soluong);
    }


    function update_sl($id_dh,$id_sp,$soluong){
      $sql="UPDATE sanpham 
      inner join ct_donhang on sanpham.id_sp = ct_donhang.id_sp
      inner join donhang on ct_donhang.id_dh = donhang.id_dh
      set sanpham.soluong = sanpham.soluong - $soluong
      where donhang.id_dh = $id_dh AND sanpham.id_sp = $id_sp";
      return pdo_execute($sql);
  }

  function donhangct_admin($id){
      $sql = "SELECT * FROM donhang 
      INNER JOIN khachhang 
      ON donhang.id_kh = khachhang.id_kh
      WHERE donhang.id_dh=?";
      return pdo_query_one($sql, $id);
  }
  function set_trangthai($id){
    $sql = "SELECT trangthai from donhang where id_dh = $id";
    return pdo_query_one($sql);;
  }

  function chinhsuaTrangThai($trangthai, $id){
    $sql = "UPDATE donhang set trangthai=? where id_dh=?";
    return pdo_query($sql, $trangthai, $id);

  }
  function timTrangThai($trangthai){
    $sql="SELECT * FROM donhang where trangthai=? order by ngaydathang asc";
    return pdo_query($sql,$trangthai);}

    
    function lay_hinhSP($id){
      $sql='SELECT * FROM sanpham JOIN ct_donhang ON sanpham.id_sp = ct_donhang.id_sp
      where id_dh=?';
      return pdo_query($sql,$id);
    }
    function get_dh($idDonHang){
      $sql="SELECT ngaydathang FROM donhang where id_dh=$idDonHang";
      return pdo_query_one($sql);
    }
    function demsp($idDonHang){
      $sql="SELECT COUNT(*) AS soLuongSanPham
      FROM ct_donhang
      WHERE id_dh = $idDonHang";
      return pdo_query_one($sql);
    }
    function huydh($id_dh){
      $sql="UPDATE donhang set trangthai=3 where id_dh = $id_dh";
      return pdo_execute($sql);
      }
      function re_sl($id_dh){
        $sql="UPDATE sanpham 
        inner join ct_donhang on sanpham.id_sp = ct_donhang.id_sp
        inner join donhang on ct_donhang.id_dh = donhang.id_dh
        set sanpham.soluong = sanpham.soluong + ct_donhang.soluong
        where donhang.id_dh = $id_dh";
        return pdo_execute($sql);
      }
      function dem_sanpham(){
        $sql="SELECT COUNT(*) AS slsanpham FROM sanpham; ";
        return pdo_query_one($sql);
      }
      function khachhang(){
        $sql="SELECT COUNT(*) AS slkhachhang FROM khachhang; ";
        return pdo_query_one($sql);
      }
      function donhang(){
        $sql="SELECT COUNT(*) AS sldonhang FROM donhang; ";
        return pdo_query_one($sql);
      }
      function donhang_cu(){
        $sql="SELECT * FROM donhang where trangthai = 0 order by ngaydathang asc limit 3";
        return pdo_query($sql);
      }
      function donhang_moi(){
        $sql="SELECT * FROM donhang where trangthai = 0 order by ngaydathang desc limit 3";
        return pdo_query($sql);
      }

      function donhang_kh(){
        $sql="SELECT khachhang.tenkhachhang,khachhang.email
        ,khachhang.sdt
        , COUNT(donhang.id_dh) AS so_don_hang
        FROM khachhang
        INNER JOIN donhang ON khachhang.id_kh = donhang.id_kh
        WHERE donhang.trangthai = 4
        group by khachhang.id_kh
        ORDER BY so_don_hang DESC
        LIMIT 4;";
        return pdo_query($sql);
      }
?>