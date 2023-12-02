<?php 
session_start();
ob_start();
extract($_REQUEST);
   // include_once '../model_DAO/category.php';
   include_once '../model_DAO/user.php';
   include_once '../model_DAO/product.php';
   include_once '../model_DAO/chat.php'; 
   include_once '../model_DAO/danhmuc.php'; 
   include_once '../model_DAO/user.php';
   include_once '../model_DAO/comment.php';
//    include_once '../model_DAO/giohang.php'; 
   if(isset($act)){
       switch($act){
         case 'home':
            $title = "Trang chủ";
            include_once './view/header.php'; 
            $sanpham_hot=soluong_SanPham(0,11);
            $sanpham_thuong=soluong_SanPham(8,13);
            $sanpham_thuong_muoihai=soluong_SanPham(13,12);
            include_once './view/trangchu.php';
            include_once './view/footer.php';
            break;

         case 'cacloaisp':
            $title = "Cửa hàng";
            include_once './view/header.php'; 
            $danhmuc=laytatca_DM();
            $tong_SP=dem_SP();
            $number_page=ceil($tong_SP/15);
            if(isset($page)){
               $start=($page-1)*15;
            // $sp=soluong_SanPham($start,15);
            if(!isset($min_price)) $min_price=0;
            if(!isset($max_price)) $max_price=99999999999999999;
            if(!isset($order)) $order='';
            if(!isset($order_ten)) $order_ten='';
            // if(!isset($khuyenmai)) $khuyenmai=0;
            if(!isset($id_loai)) $id_loai=0;
            // asdsad
           $sp=loc_sanpham($min_price,$max_price,$order,$order_ten,$id_loai,$start,15);
            
         }
         //  }else{
         //    $sp=soluong_SanPham(0,16);
         //  }
            include_once './view/cacloaisp.php';
            include_once './view/footer.php';
            break;
            //
         case 'yeuthich':
            $title = "Sản phẩm yêu thích";
               include_once './view/header.php';
               if(isset($_SESSION['taikhoan'])){
               $id_user=lay_iduser($_SESSION['taikhoan']);
              $sp=layRaSanPhamYT($id_user['id_kh']);
               include_once './view/yeuthich.php';
            }else{
               include_once './view/trangchuadangnhap.php';            }
               include_once './view/footer.php';
               break;


         case 'themYeuThich':
            include_once './view/header.php';
            if(isset($_SESSION['taikhoan'])){
               if(isset($id)){
               $id_user=lay_iduser($_SESSION['taikhoan']);
               themVaoYeuThich($id_user['id_kh'],$id); 
               header('location:?mod=page&act=yeuthich'); 
               }
            }else{
            include_once './view/trangchuadangnhap.php';          }
            include_once './view/footer.php';
            break;

         case 'xoayeuthich':
            xoaSanPhamYeuThich($id);
            header('location:?mod=page&act=yeuthich');
            break;
         
         case 'timkiemsp':
            $title = "Tìm kiếm";
            include_once './view/header.php'; 
            if(isset($key)&&$key!=null){
                     $sp=timKiemSP($key);
            }
            include_once './view/timkiem.php';
            include_once './view/footer.php';
            break;

            // SP chi tiết
         case 'sanphamchitiet':
            if(isset($id)){
               $lay_anh=get_anh($id);
               $sl_mot=laymot_sp($id);

               $textx='style="display:none;"';
               $texty='';


               if(isset($_SESSION['taikhoan'])){
                  $damua = check_buy($_SESSION['taikhoan'],$id);
               if($damua!=''){
               $texty='style="display:none;"';
                  $textx = '
                  class="d-flex mt-5" "
                  ';
                  if(isset($gui)){
                     if(isset($_SESSION['taikhoan'])){
                        if($sl_mot){
                           $id_kh = lay_iduser($_SESSION['taikhoan']);
                           extract($id_kh);
                           $binhluan=comment($id_kh,$id,$noidung);
                           $ten_kh = lay_ten_kh($id_kh);
                        }   
                     }
                     header('Location:?mod=page&act=sanphamchitiet&idsp='.$id.'');
                  }
               }
               else{
                  $text = 'style="display: none;"';
               }
            }
               // lay_iduser($_SESSION['taikhoan']);
            }
            $sanpham_sau=soluong_SanPham(10,6);
            //  $get_hinh=get_hinh($id);
            $sanpham_sau=soluong_SanPham(10,6);
            $load_binhluan=load_comment($id);
            $show_cmt='';
            if($load_binhluan==null){
               $show_cmt = 'Chưa có đánh giá nào!';
            }else{
               $show_cmt = 'Đánh giá của khách hàng';
            }
            $title = $sl_mot['ten_sp'];
            include_once './view/header.php'; 
            include_once './view/sanphamct.php';
            include_once './view/footer.php';
            break;
          

         case 'xoabl':
            // print_r($sl_mot);
            xoaBinhLuan($id); 
            $sl_mot=laymot_sp($idsp);
            header('Location:?mod=page&act=sanphamchitiet&id='.$sl_mot['id_sp'].'');
            // if(isset($id)){
            // }
            break;



            case 'about':
               $title = "Giới thiệu";
               include_once './view/header.php'; 
               include_once './view/gioithieu.php';
               include_once './view/footer.php';
               break;
            case 'blog':
               $title = "Blogs";
               include_once './view/header.php'; 
               include_once './view/blog.php';
               include_once './view/footer.php';
               break;
            case 'lienhe':
               $title = "Liên hệ";
               include_once './view/header.php'; 
               include_once './view/lienhe.php';
               include_once './view/footer.php';
               break;
            case 'chat':
            
               case 'chat':
                  $title = "Chat";
                  include_once './view/header.php'; 
                     if(isset($_SESSION['taikhoan'])){   
                        $id_user=lay_iduser($_SESSION['taikhoan']);
                       if(isset($submit)){
                     
                        themtinnhan($id_user['id_kh'],$tinnhan);
                     header('Location:?mod=page&act=chat');
                        
                       
                     }
                     // $showtinnhan1=showtinnhan1($id_user['id_kh']);
                     // $tinnhan_admin=showtinnhan_admin($id_user['id_kh']);
                     $list_tinnhan=showtinnhan($id_user['id_kh']);
                  include_once './view/chat_user.php';
                  }else{
                     // header('Location:?mod=page&act=trangchuadangnhap');
                     include_once './view/trangchuadangnhap.php';
                     include_once './view/footer.php';
                  }
                     break;

         }
   }else{
   }
?>