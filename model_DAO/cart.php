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

    function update_sl($id_dh){
      $sql="UPDATE sanpham set soluong = soluong - ct_donhang.soluong
      inner join ct_donhang on sanpham.id_sp = ct_donhang.id_sp
      inner join donhang on ct_donhang.id_dh = donhang.id_dh
      where trangthai = 2 and donhang.id_dh = $id_dh";
          $pdo_statement = pdo_execute($sql, array(':id_dh' => $id_dh));
          return $pdo_statement; // Trả về kết quả của việc thực thi truy vấn
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
?>