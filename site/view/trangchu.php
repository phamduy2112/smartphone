<main>
<div class="carousel">
  <div class="container-md d-lg-flex">
    <div class="danhmuc">
      <nav>
        <ul>
          <li><a href="">Máy tính</a></li>
          <li><a href="">Laptop & Ipad</a></li>
          <li><a href="">Cameras & Photos</a></li>
          <li><a href="">Smart Phones & Tablets</a></li>
          <li><a href="">TV & Audios</a></li>
          <li><a href="">Top Selling Products</a></li>
          <li><a href="">Top Featured Products</a></li>
          <li><a href="">Mã giảm giá</a></li>
        </ul>
      </nav>
    </div>
    <!-- banner -->
    <div class="banner">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./../content/img/banner/BIG - IMG.png" class=" w-100" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="./../content/img/banner/banner_2_2.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./../content/img/banner/banner_2_3.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>


      </div>
      <div class="banner__bottom">
        <div class="img__banner">
 
          <img src="./../content/img/banner/a4 1.png" alt="">
        </div>

        <div class="img__banner">
        
          <img src="./../content/img/banner/a5 1.png" alt="">
        </div>

        <div class="img__banner">
          
          <img src="./../content/img/banner/a6 1.png" alt="">
        </div>


      </div>
    </div>

  </div>
</div>
<div class="shippy">
  <div class="container-md">
    <div class="shippy__box ">

      <div class="shippy__item">
        <i class="fa fa-truck" aria-hidden="true"></i>
        <div class="shippy_itemd">
          <h3>THANH TOÁN AN TOÀN</h3>
          <p>Thanh toán an toàn 100%</p>
        </div>


      </div>
      <div class="shippy__item">
        <i class="fa fa-credit-card" aria-hidden="true"></i>
        <div class="shippy_itemd">
          <h3>THANH TOÁN TIỆN LỢI</h3>
          <p>Thanh toán với nhiều hình thức</p>
        </div>

      </div>
      <div class="shippy__item">
        <i class="fa fa-credit-card" aria-hidden="true"></i>
        <div class="shippy_itemd">
          <h3>ƯU ĐÃI TRỰC TUYẾN</h3>
          <p>Nhiều ưu đãi cho khách hàng</p>

        </div>


      </div>
      <div class="shippy__item">
        <i class="fas fa-box    "></i>
        <div class="shippy_itemd">
          <h3>HỖ TRỢ HOÀN TRẢ</h3>
          <p>Hỗ trợ hoàn trả hàng khi có sai sót</p>
        </div>


      </div>
    </div>
  </div>
</div>


<!-- sản phẩm product -->
<div class="container-md mt-2">
  <div class="product__banner_hot">
      <h1 class="text-center text-white" style="font-weight:bold;" >Deal sập sàn - Mua ngập tràn</h1>
     
      <div class="product__box">
        <div class="khung_product" id="khung_product">
    <?=sanpham($sanpham_hot)?>

        </div>
        
      
       
      
      </div>
        <div class="nut">
           <div class="next" id="next" onclick="luilai();">
          <i class="fa-solid fa-angle-left"></i>
        
          </div>



          <div class="pre" id="pre" onclick="tientoi();">
            <i class="fa-solid fa-angle-right"></i>
          </div> 
        </div>
        <div class="dots mt-2">
          <div class="dot__item active" id="nut_bam_one" onclick="nutone()"></div>
          <div class="dot__item" id="nut_bam_two" onclick="nuttwo()"></div>
          <div class="dot__item" id="nut_bam_three" onclick="nutthree()"></div>
          
        </div>
  </div>
</div>
<!-- dien thoai -->
<div class="product mt-3">
<div class="container-md">
<div class="product__title">
  <p>Những sản phẩm ưu đãi khác</p>
  <a href="">Xem thêm</a>
</div>
<div class="product__box mt-2 ">
   <!---->
    <div class="khung_product" id="khung_product_three">
<?=sanpham_thuong($sanpham_thuong);?>

    </div>
      <div class="nut_one">
        <div class="next" id="next" onclick="luilai_three();">
       <i class="fa-solid fa-angle-left"></i>
     
     </div>
     <div class="pre nut_two" id="pre">
         <i class="fa-solid fa-angle-right" onclick="nexttoi_three();"></i>
     </div> 
     </div>

  
    </div>


</div>
</div>

<!-- laptop -->

<div class="banner__hai mt-3">
<div class="container-md">
<div class="row">
<div class="col-lg-4 col-sm-12 banner__item">
<img src="../content/img/banner/SMP.jpg" alt="" width="100%">
<div class="banner__hai__text left">
  <h3>Smart Phone</h3>
  <p>Ưu đãi lớn hàng tháng!!!</p>
</div>

</div> 
<div class="col-lg-4 col-sm-12 banner__item">
<img src="../content/img/banner/BR LAPTOP.jpg" alt="" width="100%">
<div class="banner__hai__text right">
  <h3>Smart Phone</h3>
  <p>Ưu đãi lớn hàng tháng!!!</p>
</div>
</div> 
<div class="col-lg-4 col-sm-12 banner__item">
<img src="../content/img/banner/CTL.jpg" alt="" width="100%">
<div class="banner__hai__text left">
  <h3>Smart Phone</h3>
  <p>Ưu đãi lớn hàng tháng!!!</p>
</div>
</div> 
</div>
</div>


</div>
<!-- nhung san phyam danh cho ban -->
<div class="product mt-3" id="product">
<div class="container-md">
<div class="product__title">
  <p>Những sản phẩm dành cho bạn</p>
  <a href="">Xem thêm</a>
</div>

<div class="product__box ">

     <?=sanpham_thuong($sanpham_thuong_muoihai)?>
    
    </div> 



</div>
</div>
<div class="blog mt-3">
  <div class="container-md">
    <!-- TITLE -->
    <div class="product__title">
      <p>Bài Viết</p>
      <a href="">Xem thêm</a>
    </div>
  <!-- Content -->

    <div class="blog__box mt-2">
      <div class="blog__item">
        <div class="blog__header">
          <img src="https://demo-uminex.myshopify.com/cdn/shop/articles/5_f75a4b19-2ba7-4f01-aa01-dd535a40219c_1920x.png?v=1677830028" alt="">
        </div>
        <div class="blog__body">
          <p>TECHNOLOGY</p>
          <h3>The Smartphone Has Just Launched in Sep 2022</h3>
          <h4>Đăng bài bởi<strong> Admin</strong></h4>
          <p>iPad Pro is the fastest device of its kind. It’s designed to take full advantage of next‑level....</p>
        </div>
        <div class="blog__footer">
          <a href="">Read more</a>
          <p>Mar 2023</p>
        </div>
      </div>
    
      <div class="blog__item">
        <div class="blog__header">
          <img src="https://demo-uminex.myshopify.com/cdn/shop/articles/5_f75a4b19-2ba7-4f01-aa01-dd535a40219c_1920x.png?v=1677830028" alt="">
        </div>
        <div class="blog__body">
          <p>TECHNOLOGY</p>
          <h3>The Smartphone Has Just Launched in Sep 2022</h3>
          <h4>Đăng bài bởi<strong> Admin</strong></h4>
          <p>iPad Pro is the fastest device of its kind. It’s designed to take full advantage of next‑level....</p>
        </div>
        <div class="blog__footer">
          <a href="">Read more</a>
          <p>Mar 2023</p>
        </div>
      </div>
      
      <div class="blog__item">
        <div class="blog__header">
          <img src="https://demo-uminex.myshopify.com/cdn/shop/articles/5_f75a4b19-2ba7-4f01-aa01-dd535a40219c_1920x.png?v=1677830028" alt="">
        </div>
        <div class="blog__body">
          <p>TECHNOLOGY</p>
          <h3>The Smartphone Has Just Launched in Sep 2022</h3>
          <h4>Đăng bài bởi<strong> Admin</strong></h4>
          <p>iPad Pro is the fastest device of its kind. It’s designed to take full advantage of next‑level....</p>
        </div>
        <div class="blog__footer">
          <a href="">Read more</a>
          <p>Mar 2023</p>
        </div>
      </div>
    
      <div class="blog__item">
        <div class="blog__header">
          <img src="https://demo-uminex.myshopify.com/cdn/shop/articles/5_f75a4b19-2ba7-4f01-aa01-dd535a40219c_1920x.png?v=1677830028" alt="">
        </div>
        <div class="blog__body">
          <p>TECHNOLOGY</p>
          <h3>The Smartphone Has Just Launched in Sep 2022</h3>
          <h4>Đăng bài bởi<strong> Admin</strong></h4>
          <p>iPad Pro is the fastest device of its kind. It’s designed to take full advantage of next‑level....</p>
        </div>
        <div class="blog__footer">
          <a href="">Read more</a>
          <p>Mar 2023</p>
        </div>
      </div>
      
    </div>
  </div>
</div>
</main>