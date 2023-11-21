<?php 
extract($sl_mot);
?>
<main>
    <!-- product left -->
    <div class="productct">
       
        <div class="container-md"> 
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Cửa hàng</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?=$ten_sp?></li>
            </ol>
          </nav>  
        <div class="productct__flex row mt-3">
                 <div class="productct__left col-lg-6 col-sm-12">
                    <div class="img_big">
                        <img class="img-thumbnail w-100" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">

                    </div>
                    <div class="pro_img mt-2">
                         <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">

                         </div> 
                         <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">

                         </div> 
                         <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">

                         </div> 
                         <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">

                         </div> 
                         <div class="img_small">
                            <img class="img-thumbnail" src="../content/img/product_tachnen/<?=$hinhanh?>" alt="">

                         </div> 
                    </div>
        
                  
                 </div>
<div class="productct__right col-lg-6 col-sm-12 mt-sm-4">
<div class="productct__text">
    <h2><?=$ten_sp?></h2>
    <div class="stars">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        / <span>1 người nhận xét</span>
      
    </div>
    <hr>
    <div class="loai mt-1">
       <p><span>Danh mục:</span> Điện thoại</p> 
    </div>
    <div class="theloai">
    <p class="mt-1"><span>Kích thước:</span> màn hình 10,9 inch</p>
       <p  class="mt-1" ><span>Hệ điều hành:</span> iOS 14.0</p>
       <p  class="mt-1" ><span>Chiều dài:</span> sản phẩm 9,74 inch</p>

    </div>
    <div class="price mt-1">
        <p><span>Giá: </span> <span class="price1"><?=$gia?></span></p>
    </div>
    <hr>
    <hr>
    <div class="number__count">
        <div class="number__count_pr">
             <i class="fa-solid fa-plus solid"></i>
        <div class="number">
            1
        </div>
        <i class="fa-solid fa-minus solid"></i>  
        </div>
      
        <a href="" class="addtoCart w-100">Thêm vào giỏ hàng</a>
    </div>

    <a href="" class="btn w-100 mt-2 mua">Mua ngay</a>
    <div class="productct__bottom">
        <div class="icon__productct">
            <a href="">
                <i class="fa fa-heart " aria-hidden="true"></i>
                Thêm vào yêu thích
            </a>
            <a href=""><i class="fa fa-share" aria-hidden="true"></i>
            Chia sẽ ngay
            </a>
       
        </div>
        <hr>
      <div class="productct__tt">
        

<p> <span>Khả dụng:</span>In Stock</p>
<p> <span>Mã hàng:</span>N/A-01</p>
<p> <span>Hãng:</span>Samsung</p>
<p> <span>Loại:</span>Điện thoại</p>
<div class="productct_thanhtoan mt-2">
   <p>Bạn có thể thanh toán qua :
</p>
    <img src="../img/banner/payment2.avif" alt="">
</div>
      </div>
        
    
    </div>
</div>
    
</div>  
        </div>
     
        </div>

    </div>
    <div class="productchitiet__bottom mt-4">
        <div class="container-md">
          <div class="prochitiet">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link1 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Thông tin</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link1" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Vật chuyển</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link1" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Đánh giá</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p><?=$text1?></p>
              
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">..</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <h4>Bình luận</h4>
              <?php foreach($load_binhluan as $id_bl):?>
              <div class="binhluan">
                <div class="bl d-flex w-75">
                  <div class="image">
                  <img src="../img/service/hinhtoi5.jpg" alt="">

                </div>
                <div class="binhluan__d">
                  <div class="name"><?=$id_bl['id_kh']?></div>
                  <div class="ngaythang"><?=$id_bl['ngaydang']?></div>
                  <div class="title"><?=$id_bl['noidung']?></div>
                  <div>
                  <span>Phản hồi</span>
                </div>
                </div>
                
                </div>
                <div class="chinhsua ">
                   <i class="fa-solid fa-gear" id="fa-gear"></i>
                   <ul class="activeE" id="chinh">
                    <li><a href="">Chỉnh sửa</a></li>
                    <li><a href="">Xoá</a></li>
                   </ul>
                </div>
               
               
              </div>
              <?php endforeach;?>
              <div class="d-flex mt-5">
                <div class="image">
                  <img src="../img/service/hinhtoi5.jpg" alt="">

                </div>
          <form action="" class="BinhLuan" method="post">
             <input type="text" placeholder="Bình luận" class="binhluan1" name="noidung">
                <input type="submit" value="gửi" class="gui" name="gui">
          </form>

                </div>
               
              </form>
            </div>
          </div>    
          </div>
          <div class="productCT__Bottom mt-3">
             <h2>Sản phẩm tương tự</h2> 
             <div class="product mt-2 w-100">
       
           
              <div class="product__box mt-2">
             
                    <div class="product__item product__bt" style=>
                      <div class="count">
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
                      <div class="product__img">
                        <img src="../img/sanpham/tainghe1.webp" alt="">
                      </div>
                      <div class="product__text">
                        <h3>
                          Apple Airpod Pro MWP22A M/A Bluetooth 7.1
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
                    </div>
                 
                    <div class="product__item product__bt" style="">
                      <div class="count">
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
                      <div class="product__img">
                        <img src="../img/sanpham/tainghe1.webp" alt="">
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
                    </div>
                 
                    <div class="product__item product__bt" style="">
                      <div class="count">
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
                      <div class="product__img">
                        <img src="../img/sanpham/tainghe1.webp" alt="">
                      </div>
                      <div class="product__text">
                        <h3>
                          Apple Airpod Pro MWP22A M/A Bluetooth 7.1
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
                    </div>
                 
                    <div class="product__item product__bt" style="">
                      <div class="count">
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
                      <div class="product__img">
                        <img src="../img/sanpham/tainghe1.webp" alt="">
                      </div>
                      <div class="product__text">
                        <h3>
                          Apple Airpod Pro MWP22A M/A Bluetooth 7.1
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
                    </div>
                 
                    <div class="product__item product__bt" style="">
                      <div class="count">
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
                      <div class="product__img">
                        <img src="../img/sanpham/tainghe1.webp" alt="">
                      </div>
                      <div class="product__text">
                        <h3>
                          Apple Airpod Pro MWP22A M/A Bluetooth 7.1
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
                    </div>
                    <div class="product__item product__bt" style="">
                      <div class="count">
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
                      <div class="product__img">
                        <img src="../img/sanpham/tainghe1.webp" alt="">
                      </div>
                      <div class="product__text">
                        <h3>
                          Apple Airpod Pro MWP22A M/A Bluetooth 7.1
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
                    </div>
                 
                
                   
          
          
                  </div>
              
         
          </div>
          </div>
     
    </div> 
  
    </div>

</main>