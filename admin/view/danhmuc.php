
     <!-- lên chữ -->

  <section class="admin_body">
    <div class="admin__box">
       <div class="timkiem">
        <form action="" class="tim_kiem">
            <input type="text" class="lookfor" placeholder="tim kiem">
            <input type="button" value=' tìm kiếm ' class="xacnhan">
        </form>
    </div>
    </div>
   <div class="admin__boxes mt-2">
    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="fa-solid fa-plus"></i>
    </a>
    <p class="mx-2">
      3.000 danh mục
    </p>
    <div class="number__list">
      <i class="fa-solid fa-chevron-left"></i>
      <div class="number">
        <p>1</p>
        <span>Trên 138</span>
      </div>
      <i class="fa-solid fa-chevron-right"></i>
    </div>
  </div>
    <div class="admin__box mt-3">
      <div class="admin__tablle">
        <div class="header__table">
          <p>STT</p>
          <p>Tên</p>
          <p>Mã</p>
          <p></p>
        </div>
        <div class="header__body mt-2">
          <p>1</p>
          <p>Điện thoại</p>
          <p>#D001</p>
          <p>
            <a href="">
              <i class="fa-solid fa-trash"></i>
            </a>|
            <a href="" data-bs-toggle="modal" data-bs-target="#chinhSuaDM">
              <i class="fa-solid fa-pen"></i>
            </a>
          </p>
        </div>
        <div class="header__body mt-2">
          <p>1</p>
          <p>Điện thoại</p>
          <p>#D001</p>
          <p>
            <a href="">
              <i class="fa-solid fa-trash"></i>
            </a>|
            <a href="">
              <i class="fa-solid fa-pen"></i>
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Mã:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Tên:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-primary">Thêm</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="chinhSuaDM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sửa danh mục</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
          
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Tên:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-primary">Thêm</button>
          </div>
        </div>
      </div>
    </div>
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