<section class="admin_body">
    <section class="k_bl_ct">
      <section class="bl_kh_c">
        <form action="">
          <section class="bl_search">
            <input type="text" placeholder="Mời nhập mã bình luận">
          </section>
          <section class="bl_search">
            <i class="bi bi-search"></i>
          </section>
        </form>
      </section>
      <section class="bl_kh_c">
        <section class="bl_tinhtrang_sp">
          <section>3.000bình luận</section>
          <section>
            <i class="bi bi-chevron-left"></i>
          </section>
          <section>1</section>
          <section>trên 138</section>
          <section>
            <i class="bi bi-chevron-right"></i>
          </section>

        </section>
      </section>
      
      <section class="bl_kh_c">
        <section class="bl_ct">
          <section>Mã sản phẩm</section>
          <section>Tên</section>
          <section><i class="fa-regular fa-image"></i></section>
          <section>Số lượt bình luận</section>

        </section>
        <?php foreach($array_binhluan as $binhluan): ?>
          <a href="?mod=user&act=binhluanchitiet&id_sp=<?=$binhluan['id_sp']?>">
          <section class="bl_ct">
          <section><?=$binhluan['id_sp']?></section>
          <section><?=$binhluan['ten_sp']?></section>
          <section><img src="img/blog/<?=$binhluan['hinhanh']?>" alt=""></section>
          <section><?=$binhluan['so_luot_binh_luan']?></section>
        </section>
        </a>
        <?php endforeach; ?>
      





       
      </section>
      

    </section>


  </section>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
  <script src="js/hien_an.js"></script>
  <script src="js/add_time.js"></script>
  <script src="js/bl_ct.js"></script>




</body>

</html>