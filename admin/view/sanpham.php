<section class="admin_body">
    <section class="ql_sp_k">
    <form action="">
      <section class="search_ql_sp">
        <input type="text" placeholder="Mời tìm mã sản phẩm">
        <span><i class="bi bi-search"></i></span>
      </section>
      <section class="search_ql_sp">
        <span>Danh mục</span>
        <i class="fa-solid fa-chevron-down"></i>
      </section>
      <section class="search_ql_sp">
        <span>Giá</span>
        <i class="fa-solid fa-chevron-down"></i>
      </section>
      <section class="search_ql_sp">
        <span>Sản phẩm</span>
        <i class="fa-solid fa-chevron-down"></i>
      </section>
      <section class="search_ql_sp">
        Lọc
      </section>
    </form>
    </section>
    <section class="ql_sp_k">
      <section class="ql_sp_set">
        <section class="ql_sp_set_two">
          <span>Còn hàng</span>
          <span></span>
        </section>
        <section class="ql_sp_set_two">
          <span>Hết hàng</span>
          <span></span>
        </section>
        <section class="ql_sp_set_two">
          <span>Đang nhập</span>
          <span></span>
        </section>
      </section>
      <section class="ql_sp_set">
      <section class="set_ql">3.000 sản phẩm</section>
      <section class="set_ql">
        <span><i class="fa-solid fa-chevron-left"></i></i></span>
      </section>
      <section class="set_ql">
        <span>1</span>
      </section>
      <section class="set_ql">trên 138</section>
      <section class="set_ql">
        <span><i class="fa-solid fa-chevron-right"></i></i></span>
      </section>
      </section>
    </section>
    <section class="ql_sp_k">
      <section class="text_ql_sp">
        <div>
          <section><i class="fa-regular fa-image"></i></section>
        </div>
        <div>
          <section>Tên</section>
        </div>
        <div><section>Mã</section></div>
        <div>   <section>Kho</section></div>
        <div> <section>Giá</section></div>
        <div> <section>Danh Mục</section></div>
        <div> <section>Từ khóa</section></div>
      </section>
      <?php foreach($array_sp as $sp): ?>
        
      <section class="text_ql_sp_sp">
        <div>
          <img src="<?=$sp['hinhanh']?>" alt="">
        </div>
        <div>
          <section><?=$sp['ten_sp']?></section>
        </div>
        <div><section><?=$sp['id_sp']?></section></div>
        <div><?php
           
            if($sp['conhang']==0){
                echo '<section style="background-color:rgb(13, 255, 0); "></section>';
            }else if($sp['conhang']==1){
              echo '<section></section>';
            }else{
                echo '<section style="background-color:orange; "></section>';
            }
        ?></div>
        <div><section><?=$sp['gia']?> vnd</section></div>
        <div><section><?=$sp['tenloai']?></section></div>
        <div><section>Iphone</section>
          <section>
           <a href=""><span><i class="fa-solid fa-trash"></i></span></a>
            <span></span>
            <span><i class="bi bi-pencil"></i></span>
          </section></div>
      </section>
      <?php endforeach; ?>
    </section>
   
 
  </section>


 


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>




</body>

</html>