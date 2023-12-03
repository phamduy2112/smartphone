<section class="admin_body">
    <section class="k_bl_ct">

        <section class="bl_ct_kh_c"><?= $id_sp ?></section>

        <section class="bl_ct_kh_c">
            <form action="" method="post">
                <section class="bl_search">
                    <input type="text" placeholder="Mời nhập mã bình luận" name="ma_bl">
                </section>
                <input class="bl_search" type="submit" name="search_bl" value="">
                <i class="bi bi-search"></i>
                </input>
            </form>
        </section>
        <section class="bl_ct_kh_c">
            <section class="bl_tinhtrang">
                <section class="tinhtrang"><span>
                        Tất cả
                    </span></section>
                <section class="tinhtrang">
                    <span>
                        Mới nhất
                    </span>
                    <span></span>
                </section>
                <section class="tinhtrang">
                    <span>Cũ nhất</span><span></span>
                </section>
            </section>
            <section class="bl_tinhtrang">
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
        <section class="bl_ct_kh_c">
            <section class="bl_ct">
                <section>Mã bình luận</section>
                <section>Tên</section>
                <section>Mã sản phẩm</section>
                <section>Thời gian</section>
                <section>Nôi dung</section>
                <section>Phản hồi</section>
            </section>
            <?php foreach ($array_binhluanct as $binhluan) : ?>
            
            <section class="bl_ct_ove">
                
                <div class="ova_o">
                    <section><?= $binhluan['id_bl'] ?></section>
                    <section><?= $binhluan['tenkhachhang'] ?></section>
                    <section><?= $binhluan['id_sp'] ?></section>
                    <section>
                        <span></span>
                        <?= $binhluan['ngaydang'] ?>
                    </section>
                    <section><?= $binhluan['noidung'] ?></section>
                    <section>
                    <a href="?mod=user&act=detele_bl&id=<?=$binhluan['id_bl']?>">
                        <span><i class="fa-solid fa-trash"></i></span>
                    </a>
                        <span></span>
                        <span><i class="bi bi-pencil"></i></span>
                    </section>
                </div>
                <form action="" class="form_bl" method="post">
                    <section class="k_check">
                        <textarea name="sow" id="" cols="30" rows="10"></textarea>
                    </section>
                    <section class="nut_ph">
                        <input type="submit" name="nut_sow" value="Phản hồi">
                    </section>
                </form>
            </section>
       
            <?php endforeach?>
        </section>


    </section>


</section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/jquery.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="js/hien_an.js"></script>
<script src="js/add_time.js"></script>
<script src="../content/js/bl.js"></script>




</body>

</html>