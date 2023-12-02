<link rel="stylesheet" href="../content/css_admin/chat.css">

<section class="admin_body">
    <section class="chat_k">
        <section class="chat_admin">
            <!-- <section class="chat_text">
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
                
               
                   
                   <?php foreach($list_tinnhan as $item):
                    extract($item);
                    $text_admin=$noidung_admin==null ? " ":' <section class="admin_text">
              
                    <span>'.$noidung_admin.'</span>
                    <span><img src="./img/404504456_122138654594023032_5537523282760098986_n.jpg" alt=""></span>
                  </section>' ;

                  $text_user=$noidung==null ? " ":
                  '  <section class="user_text">
                  <span><img src="./img/404504456_122138654594023032_5537523282760098986_n.jpg" alt=""></span>
                  <span>'.$noidung.'</span>
              
                   </section> ' ;

                    ?>
             
                 <?=$text_admin?>
              <?=$text_user?>
                 
                   <?php endforeach;?>
                   
           
              </section>
            </section>
            <form class="chat_text" method="post">
            <input type="text" placeholder="Gửi tin nhắn" class="tinhan" name="tinnhan">
            <input type="submit" class="btn btn-primary submit" value="Gửi" name="submit" style="width:10%">
            </form> -->

        </section>
        <section class="chat_admin">
            <section class="user_chat">
                <input type="text" placeholder="Tìm user">
                <i class="bi bi-search"></i>

            </section>
            <section class="user_chat">
              <section class="user_admin_chat">
                <!-- <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section> -->
                   <?php foreach($showTatCa as $item):
                    extract($item)?>
                   <a class="kh_chat" href="index.php?mod=user&act=chatchitiet&id_kh=<?=$id_user?>">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span><?=$user_name?></span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span><?=$ngaychat?></span>
                    </section>
                    
                   </a>
                   <?php endforeach;?>
                   <!-- <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section>
                   <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section>
                   <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section> -->
                   <!-- <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                     
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section>
                   <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section>
                   <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section>
                   <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section>
                   <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section>
                   <section class="kh_chat">
                    <section>
                       <span> <img src="/smartphone/template/admin/img/404504456_122138654594023032_5537523282760098986_n.jpg" alt="">.</span>
                       <span></span>
                    </section>
                    <section>
                        <span>Nguyễn Ngọc Phượng</span>
                        <span>Bạn ơi mình cần tư vấn sản phẩm</span>
                    </section>
                    <section>
                        <span>1</span>
                        <span>9:00 PM</span>
                    </section>
                    
                   </section>
                   -->
                  

              </section>

            </section>
        </section>

    </section> 
  </section>