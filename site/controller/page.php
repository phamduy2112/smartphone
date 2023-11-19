<?php 
session_start();
ob_start();
   extract($_REQUEST);


   // include_once '../model_DAO/category.php';
   include_once '../model_DAO/product.php';
//    include_once '../model_DAO/user.php'; 
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
          }
          $sanpham_sau=soluong_SanPham(10,6);
         //  $get_hinh=get_hinh($id);
            include_once './view/sanphamct.php';
            include_once './view/footer.php';
       }
       
   }else{

  
   }
?>