
<div class="container-md">
<div class="productCT__Bottom mt-3 ">
        
             <!-- <h2>Sản phẩm tương tự:<?=$key?></h2>  -->
             <?php 
                if(empty($sp)){
                echo ' <h2 class="text-center"> Không tìm thấy sản phẩm</h2> ';
                 }else {
                 echo '<h2 style="font-size:24px">Sản phẩm tương tự:'.$key.'</h2>';
                 }
  
?>
          
        
          <div class="product mt-2 w-100">
       
           
              <div class="d-flex flex-wrap mt-2">
             
                   
              <?php 
                    foreach($sp as $item){
                
                        $sale="";
                        extract($item);
                        if($khuyenmai <=1){
                          $sale='style="display:none;"';
                        }else{
                          $sale='';
                        }
                      echo '  
                        <div class="product__item product__bt mt-2 mx-1">
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
                   ?>
                
                   
          
          
                  </div>
              
         
          </div>
          </div>
</div>
