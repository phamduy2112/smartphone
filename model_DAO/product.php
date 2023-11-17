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
function sanpham($ten_sp){
$get="";

foreach($ten_sp as $item)
{
    extract($item);
 $get.='    
 <div class="product__item product___hot">
 <div class="count">
 -20%
</div>  
<div class="new">
 New
</div>
 <div class="icons">
   <a href="">
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
   Apple Airpod Pro MWP22A M/A Bluetooth

   </h3>
   <div class="stars">
     <i class="fa fa-star" aria-hidden="true"></i>
     <i class="fa fa-star" aria-hidden="true"></i>
     <i class="fa fa-star" aria-hidden="true"></i>
     <i class="fa fa-star" aria-hidden="true"></i>
     <i class="fa fa-star" aria-hidden="true"></i>
     <span>(2 lượt đánh giá)</span>
   </div>
   <div class="price">
     <span>11.000.000d</span>
     '.$gia.'
   </div>
   
   <div class="check">
     <i class="fa-solid fa-check"></i>
     <span>Còn hàng</span>
   </div>
   <a href="?mod=cart&act=giohang&id='.$id_sp.'" class="btn btn-danger w-100 my-2">Mua hàng</a>
 </div>
 </a>
 
</div>';   
}
return $get;
}
function sanpham_thuong($ten_sp){
  $get= '';
  foreach($ten_sp as $item){
    extract($item);
    $get.= '  
    <div class="product__item product__bt mt-2">

    <div class="count">
     -20%
    </div>
    <div class="icons">
      <a href="">
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
      Apple Airpod Pro MWP22A M/A Bluetooth

      </h3>
      <div class="stars">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>(2 lượt đánh giá)</span>
      </div>
      <div class="price">
        12.000.000đ
      </div>
      <div class="check">
        <i class="fa-solid fa-check"></i>
        <span>Còn hàng</span>
      </div>
      <a href="" class="btn btn-danger w-100 my-2">Mua hàng</a>
    </div>
    </a>
  </div>';
  }
  return $get;
}
?>