<?php 
include_once('pdo.php');
function them_donHang($date,$tt,$trangthai,$id_user){
    $sql="INSERT INTO donhang(ngaydathang,tongtien,trangthai,id_kh)
      VALUES (?,?,?,?)";
      return pdo_execute($sql,$date,$tt,$trangthai,$id_user);
    }

   function show_donhang($id_user){
      $sql="SELECT * FROM donhang where id_kh=$id_user";
      return pdo_query($sql);
    }
    function tatca_donhang($limit,$order,$trangthai){
      $sql="SELECT * FROM donhang ";
      if($trangthai==1){
        $sql.="where trangthai=1 ";
      }
      $sql.="order by NgayDatHang $order";
      if($limit>0){
        $sql.=" limit 2";
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
    function lay_hinhSP($id){
      $sql='SELECT * FROM sanpham JOIN ct_donhang ON sanpham.id_sp = ct_donhang.id_sp
      where id_dh=?';
      return pdo_query($sql,$id);
    }
   
    function chinhsuaTrangThai($trangthai,$id){
      $sql="UPDATE donhang set trangthai=? where id_dh=?";
      return pdo_query($sql,$trangthai,$id);
    }
?>