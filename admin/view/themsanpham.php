
<link rel="stylesheet" href="..content/css/add_blog.css">
<section class="admin_body">
  <form action="" method="post">
  <div class="add_product">
      <div class="add_product_header">
        <div class="general_information">
          <p class="general_information_title">1</p>
          <p class="thongtinchung">Thông tin chung</p>
        </div>
        <div class="general_information">
          <p class="general_information_title1">2</p>
          <p>Hình ảnh sản phẩm</p>
        </div>
        <div class="status">
          <div class="item_status">
            <p>Còn hàng</p>
            <div class="green"></div>
          </div>
          <div class="item_status">
            <p>Hết hàng</p>
            <div class="red"></div>
          </div>
          <div class="item_status">
            <p>Đang nhập</p>
            <div class="orange"></div>
          </div>
        </div>
      </div>
      <div class="form">
        <div class="from_input">
          <div class="from_item">
            <p class="from_title">Danh mục</p>
            <input placeholder="Nhập danh mục sản phẩm" type="text" name="danhmuc_sp">
          </div>
          <div class="from_item">
            <p class="from_title">Sản phẩm</p>
            <input id="priceInput" placeholder="Nhập tên sản phẩm" type="text" name="ten_sp">
          </div>
        </div>
        <div class="from_input1">
          <div class="from_item1">
            <p class="from_title1">Từ khóa</p>
            <input placeholder="Nhập từ khóa sản phẩm" type="text" name="tukhoa_sp">
          </div>
          <div class="from_item1">
            <p class="from_title1">Kho</p>
            <input id="priceInput1" placeholder="Nhập trạng thái" type="text" name="trangthai_sp">
          </div>
        </div>
        <div class="from_input2">
          <div class="from_item2">
            <p class="from_title2">Hệ điều hành</p>
            <input placeholder="Nhập hệ điều hành" type="text" name="hedieuhanh_sp">
          </div>
          <div class="from_item2">
            <p class="from_title2">Giá sản phẩm</p>
            <input id="priceInput2" placeholder="Nhập giá sản phẩm" type="text" name="gia_sp">
          </div>
        </div>
        <div class="textarea">
          <p class="from_title2">Mô tả sản phẩm</p>
          <textarea placeholder="Nhập mô tả" id="w3review" name="w3review" rows="4" cols="185"></textarea>
        </div>
        <div class="from_bnt">
          <Button class="start"name="sau_sp">Trước</Button>
          <Button class="next" name="tiep_sp">Kế tiếp</Button>
        </div>
      </div>
    </div>
  </form>
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