<?php 
include_once('pdo.php');

function soluong_SanPham($limit,$number){
    $sql="SELECT * FROM sanpham order by id_sp ASC Limit $limit,$number";
    return pdo_query($sql);
}
function laymot_sp($id){
  $sql="SELECT * FROM sanpham where id_sp=$id";
  return pdo_query_one($sql);
}
function laytatca_SP(){
  $sql="SELECT * FROM sanpham";
  return pdo_query($sql);

}
function timKiemSP($key){
$sql="SELECT * FROM sanpham WHERE ten_sp LIKE '%$key%' or gia like '%$key%'";
return pdo_query($sql);
}
function themVaoYeuThich($id_kh,$id_sp){
  $sql="INSERT INTO yeuthich(id_kh,id_sp)
  VALUES (?,?)";
  return pdo_execute($sql,$id_kh,$id_sp);
}
function layRaSanPhamYT($id_kh){
  $sql='SELECT * FROM sanpham JOIN yeuthich ON sanpham.id_sp = yeuthich.id_sp
  where id_kh=?';
return pdo_query($sql,$id_kh);

}
function xoaSanPhamYeuThich($id_sp){
  $sql="DELETE FROM yeuthich where id_sp=?";
  return pdo_query_one($sql,$id_sp);
}
function loc_sanpham($min_price,$max_price,$order,$order_ten,$id_loai,$limit,$number){
$sql="SELECT * FROM sanpham where gia > ? and gia < ? ";
if($id_loai>0){
$sql.="and id_loai=$id_loai";
}  
$sql.=" ORDER BY gia $order,ten_sp $order_ten Limit $limit,$number";
return pdo_query($sql,$min_price,$max_price);
}
function dem_SP(){
  $sql='SELECT COUNT(*) FROM sanpham';
  return pdo_query_value($sql);
}
function sanpham($ten_sp){
$get="";

foreach($ten_sp as $item)
{
    extract($item);
 $get.='    
 <div class="product__item product___hot">

<div class="ctn-notify">
    <div class="new">
      New
    </div>
   <div class="count">
   '.$khuyenmai.'%
  </div>  
</div>

 <div class="icons">

   <a href="?mod=page&act=themYeuThich&id='.$id_sp.'">
     <i class="fa-regular fa-heart"></i>
   </a>

   <a href="">
     <i class="fas fa-layer-group"></i>
   </a>

   <a href="">
     <i class="fa fa-eye" aria-hidden="true"></i>
   </a>

 </div>

 <a href="?mod=page&act=sanphamchitiet&id='.$id_sp.'">
 <div class="product__img">
 
   <img src="../content/img/productachnen/'.$hinhanh.'" alt="">
 </div>
 <div class="product__text">
   <h3>
   '.$ten_sp.'
   </h3>
   <div class="stars">
     <i class="fa fa-star" aria-hidden="true"></i>
     <i class="fa fa-star" aria-hidden="true"></i>
     <i class="fa fa-star" aria-hidden="true"></i>
     <i class="fa fa-star" aria-hidden="true"></i>
     <i class="fa fa-star" aria-hidden="true"></i>
     <span>('.$danhgia.' lượt đánh giá)</span>
   </div>
   <div class="price">
     <span>
     '.number_format($gia,0,',','.').'đ
     </span>
     '.number_format($gia*((100-$khuyenmai)/100),0,',','.').'đ
   </div>
   
   <div class="check">
     <i class="fa-solid fa-check"></i>
     <span>Còn hàng</span>
   </div>
   <div class="container-btn">
    <a href="?mod=cart&act=giohang&id='.$id_sp.'" class="btn btn-danger my-2">Mua hàng</a>
   </div>
 </div>
 </a>
 
</div>';   
}
return $get;
}


// GET SP
function sanpham_thuong($ten_sp){
  $get= '';
  foreach($ten_sp as $item){
    $sale="";
    extract($item);
    if($khuyenmai <=1){
      $sale='style="display:none;"';
    }else{
      $sale='';
    }
    $get.= '  
    <div class="product__item product__bt mt-2">
    <div class="ctn-notify">

    <div class="count" '.$sale.'>
     -'.$khuyenmai.'%
    </div>

    </div>

    <div class="icons">
      <a href="?mod=page&act=themYeuThich&id='.$id_sp.'">
        <i class="fa-regular fa-heart"></i>

      </a>
      <a href="">

        <i class="fas fa-layer-group"></i>
      </a>
      <a href="">
        <i class="fa fa-eye" aria-hidden="true"></i>
      </a>

    </div>
    <a href="?mod=page&act=sanphamchitiet&id='.$id_sp.'">
    <div class="product__img">
      <img src="../content/img/productachnen/'.$hinhanh.'" alt="">
    </div>
    <div class="product__text">
      <h3>
      '.$ten_sp.'
      </h3>
      <div class="stars">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>('.$danhgia.' lượt đánh giá)</span>
      </div>
      <div class="price">
      <span>
      '.number_format($gia,0,',','.').'đ
      </span>
      '.number_format($gia*((100-$khuyenmai)/100),0,',','.').'đ
    </div>
      <div class="check">
        <i class="fa-solid fa-check"></i>
        <span>Còn hàng</span>
      </div>
      <div class="container-btn">
      <a href="?mod=cart&act=giohang&id='.$id_sp.'" class="btn btn-danger w-100 my-2">Mua hàng</a>
      </div>
    </div>
    </a>
  </div>';
  }
  return $get;
}
// function get_hinh($id_sp){
//   $spl="SELECT * FROM anh_sp where id_sp = $id";
//   return pdo_query($sql);
// }

?>