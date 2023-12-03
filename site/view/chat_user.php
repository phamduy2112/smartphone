<link rel="stylesheet" href="../content/css/chat_user1.css">
<div class="container-md">
  <section class="chat_admin">
      <section class="chat_text">
          <section class="user_trangthai">
            <section class=user_trangthai_content>
                  <img src="./img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">
            </section>
            <section class=user_trangthai_content>
                <span>Nguyễn Ngọc Phượng</span>
                <span>Đang hoạt động</span>
            </section>
          </section>
          <section class="user_trangthai">
            <section class="search_tin">
              <input type="text" placeholder="Tìm kiếm tin nhắn cũ">
              <span><i class="bi bi-search"></i></span>
            </section>
          </section>
         
        </section>
        <section class="chat_text">
          <section class="khung_nhan">
            
             
             <section class="nhantin">
     
                   
              <section class="user_text">
                  <span><img src="./img/404504456_122138654594023032_5537523282760098986_n.jpg" alt=""></span>
                  <span>Mình có thể giúp gì cho bạn?</span>
                </section>
                
             
                   
    
           
           
                  <?php foreach($list_tinnhan as $item):
                    extract($item);
                    $text_admin=$noidung_admin==null ? " ":' <section class="user_text">
                    <span><img src="./img/404504456_122138654594023032_5537523282760098986_n.jpg" alt=""></span>
                    <span>'.$noidung_admin.'</span>
                  </section>' ;

                  $text_user=$noidung==null ? " ":
                  '  <section class="admin_text">
                  
                  <span>'.$noidung.'</span>
                  <span><img src="./img/404504456_122138654594023032_5537523282760098986_n.jpg" alt=""></span>

              
                   </section> ' ;
                    ?>
             
               
                <?=$text_user?>


                   <?=$text_admin?>
                   <?php endforeach;?>
             </section>
               
       
          </section>
        </section>
        <form action="" method="post" class="chat_text" autocomplete="off" id="chat_form">
            <input type="text" placeholder="Gửi tin nhắn" class="tinhan" name="tinnhan" autocomplete="off">
            <input type="submit" class="btn btn-primary submit" value="Gửi" name="submit">

        </form>
  </section>  
</div>
