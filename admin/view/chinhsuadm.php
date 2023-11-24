<style>
  p{
    margin-bottom: 0;
  }
  .admin__box .timkiem {
  height: 40px;
  }
</style>
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
      danh mục
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
        <h3>Chỉnh sửa danh mục</h3>
       <form action="" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Tên</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="ten">
        </div>
        <div class="col-auto">

          <input type="submit" class="btn btn-primary mb-3" name="default" value="Đóng">
          <input type="submit" class="btn btn-primary mb-3" name="chinhsuadanhmuc" value="Chỉnh sửa">
        </div>
       </form>
      </div>
    </div>
   
  </section>