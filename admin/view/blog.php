<link rel="stylesheet" href="../content/css_admin/blog_ovs.css">
<section class="admin_body">
  <section class="content_con">

    <section class="content_item">
      <form action="">
        <input type="text" placeholder="Tìm kiếm tên bài viết blog">
        <section class="icon_search">
          <i class="bi bi-search"></i>
        </section>
      </form>
      <form action="" method="post">
        <button name="add_blog">
          <section class="icon_add">

            <i class="bi bi-plus-circle"></i>

          </section>
        </button>
      </form>
    </section>
    <section class="content_item">


      <form action="">
        <span>3000 blog</span>
        <section><i class="bi bi-chevron-left"></i></section>
        <label for="">1</label><span> trên 138</span>
        <section><i class="bi bi-chevron-right"></i></section>
      </form>


    </section>



  </section>

  <section class="content_con">
    <section class="content_blog">
      <section class="mix_background"></section>
      <section class="mix_background"></section>
      <section class="khung_blog">
        <section class="top_blog_lable">
          Blog gần đây
        </section>
        <section class="top_blog" id="top_blog">
          <?php foreach ($array_blog as $blog) : ?>
            <section class="top_blog_content">
              <section class="blog_top_content_tw">
                <img src="../content/img/productachnen/<?= $blog['hinhanh'] ?>" alt="">

              </section>
              <section class="blog_top_content_tw">
                <section class="blog_top_content_xr">
                  <section class="blog_top_content_xs"">
                    <label for=""><?= $blog['tieude'] ?></label>
                    <label for=""><?= $blog['ngaydang'] ?></label>
                  </section>
                  <section class=" blog_top_content_xs">
                    <section class="blog_top_content_xs_top">
                      <?= $blog['id_blog'] ?>
                    </section>

                  </section>

                </section>

              </section>
              <section>

              </section>
            </section>
          <?php endforeach; ?>



        </section>
        <section class="top_xem_them">Xem Thêm</section>
      </section>
    </section>
    <section class="content_blog">
      <section class="max_background"></section>
      <section class="max_background"></section>
      <section class="blog_time">
        <section class="blog_tin_moi_hienthi">
        <?php foreach ($array_blog_tatca as $blog_time) : ?>
              <section class="top_blog_content" id="blog">
                <section class="blog_xr">
                  <section class="blog_content_xrl">
                    <img src="img/blog/<?= $blog_time['hinhanh'] ?>" alt="">
                  </section>
                  <section class="blog_content_xrl">
                    <label for=""><?= $blog_time['tieude'] ?></label>
                    <label for=""><?= $blog_time['ngaydang'] ?></label>
                  </section>
                  <section class="blog_content_xrl">
                    <section>
                      <a href="?mod=user&act=xoa_blog&id=<?= $blog_time['id_blog'] ?>"><i class="fa-solid fa-trash"></i> </a>
                    </section>
                    <section>
                      <i class="bi bi-pencil"></i>
                    </section>
                    <section>

                    </section>
                  </section>
                </section>
                <section class="blog_xr">
                  <section class="blog_text" id="text_bllog">
                    Nội dung
                  </section>
                  <section class="blog_text">
                   <section  class="text_blog" id="text_blog">
                   <?= $blog_time['noidung'] ?>
                   </section>
                  </section>
                </section>


              </section>
              <?php endforeach;?>





          <section class="blog_tin_moi_time">
            <form action="" method="post">
              <section class="blog_tin" id="blog_tin_one" onclick="bamluachon_one()">
                <input type="submit" name="tatca">
                <span>Tất cả</span>

              </section>
              <section class="blog_tin" id="blog_tin_two" onclick="bamluachon_two()">
                <span class="vongtron"></span>
                <span>Mới nhất</span>
                <input type="submit" name="moinhat">

              </section>
              <section class="blog_tin" id="blog_tin_three" onclick="bamluachon_three()">
                <span class="vongtron"></span>
                <span>Cũ nhất</span>
                <input type="submit" name="cunhat">
              </section>
            </form>

          </section>
        </section>
      </section>

    </section>

  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
  <script src="../content/js/blogk.js"></script>





  </body>

  </html>