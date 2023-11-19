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

<div class="ctn-notify">
    <div class="new">
      New
    </div>
   <div class="count">
   '.$khuyenmai.'%
  </div>  
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
// function get_hinh($id_sp){
//   $spl="SELECT * FROM anh_sp where id_sp = $id";
//   return pdo_query($sql);
// }

?>
