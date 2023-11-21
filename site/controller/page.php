<?php 
session_start();
ob_start();
   extract($_REQUEST);


   // include_once '../model_DAO/category.php';
<<<<<<< HEAD
   include_once '../model_DAO/product.php';
//    include_once '../model_DAO/user.php'; 
=======
   include_once '../model_DAO/product.php'; 
   include_once '../model_DAO/user.php';
   include_once '../model_DAO/comment.php';
>>>>>>> 8146f052da5538020f6363259d7677b9c91da0b3
//    include_once '../model_DAO/giohang.php'; 
   if(isset($act)){
       switch($act){
         case 'home':
           
            include_once './view/header.php'; 
            $sanpham_hot=soluong_SanPham(0,11);
            $sanpham_thuong=soluong_SanPham(8,13);
            $sanpham_thuong_muoihai=soluong_SanPham(13,12);
            include_once './view/trangchu.php';
            include_once './view/footer.php';
            break;
         case 'sanphamchitiet':
            include_once './view/header.php'; 
          if(isset($id)){
               $sl_mot=laymot_sp($id);
<<<<<<< HEAD
          }
          $sanpham_sau=soluong_SanPham(10,16);
            include_once './view/sanphamct.php';
            include_once './view/footer.php';
       }
=======
               if(isset($gui)){
                  if($sl_mot){
                     $id_kh = lay_iduser($_SESSION['taikhoan']);
                     extract($id_kh);
                     $binhluan=comment($id_kh,$id,$noidung);
                     $ten_kh = lay_ten_kh($id_kh);
                     
                  }
                 
               }

               
          }
            $sanpham_sau=soluong_SanPham(10,16);
            $load_binhluan=load_comment($id);
           
           
            include_once './view/sanphamct.php';
            include_once './view/footer.php';
            break;
         
         }
>>>>>>> 8146f052da5538020f6363259d7677b9c91da0b3
       
   }else{

  
   }
?>