<section class="admin_body">
    <form action="" method="post">
      <section class="add_blog">
        <section class="blog_add_item">
          Chỉnh Sửa Blog
        </section>
        <section class="blog_add_item">
          <section class="khung_add_item">
            <section class="add_item">
              <section class="input_item">
                <label for="" class="ova_blog">Tên blog</label>
                <input type="text" placeholder="Mời nhập tên blog" name="ten_blog">
              </section>
              <section class="input_item">
                <label for="" class="ova_blog">Thời gian</label>
                <section class="ove">
                  <input type="datetime-local" name="time_blog">
                  <section class="icon_blog_lich" id="icon_blog_lich">
                    <i class="bi bi-calendar2-week"></i>
                  </section>
                </section>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>




            </section>
            <section class="add_item">
              <section class="input_item">
                <label for="" class="ova_blog_two">Loại</label>
                <select name="loai_blog" id="" placeholder="Hãy chọn lựa chọn 1 loại blog">
                  <option value="1" >Điện thoại</option>
                  <option value="2" >Máy tính</option>
                  <option value="3" >Tai nghe</option>
                  <option value="4" >Loa</option>
                  <option value="5" ">Tv</option>
                </select>
               
              </section>
              <section class="input_item">
                <label for="" class="ova_blog_two">Hình ảnh</label>
                <section class="ove">
                  <input type="file" class="file_blog" name="anh_blog">
                  
                </section>
            </section>
            




            </section>
            <section class="add_item">
              <section class="input_item">
                <label for="" class="ove_blog">Mô tả</label>
                <input type="text" name="mota_blog">
              </section>
            </section>
          </section>

        </section>

        <section class="blog_add_item">
          <section>
            Hủy
          </section>
          <section >
           <input type="submit" name="capnhat"> Cập nhật
          </section>
        </section>

      </section>
    </form>

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
  



</body>

</html>