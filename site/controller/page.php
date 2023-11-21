<?php 
session_start();
ob_start();
   extract($_REQUEST);


   // include_once '../model_DAO/category.php';
   include_once '../model_DAO/user.php';
   include_once '../model_DAO/product.php';
//    include_once '../model_DAO/user.php'; 
   include_once '../model_DAO/product.php'; 
   include_once '../model_DAO/user.php';
   include_once '../model_DAO/comment.php';
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
         case 'timkiemsp':
            
            include_once './view/header.php'; 
            if(isset($key)&&$key!=null){
                     $sp=timKiemSP($key);
            }
       
      
          
            include_once './view/timkiem.php';
            include_once './view/footer.php';
            
            break;
         case 'sanphamchitiet':
            include_once './view/header.php'; 
          if(isset($id)){
               $sl_mot=laymot_sp($id);
              
               if(isset($gui)){
                 if(isset($_SESSION['taikhoan'])){
                         if($sl_mot){
            
                     $id_kh = lay_iduser($_SESSION['taikhoan']);
                     extract($id_kh);
                     $binhluan=comment($id_kh,$id,$noidung);
                     $ten_kh = lay_ten_kh($id_kh);
                  
                  }
                 }else{
                  // echo '<p class="text-center">Bạn muốn Bình luận? </p> ';
                  include_once './view/.php';  
                  
               }
           
                 
               }
               
          }
          $sanpham_sau=soluong_SanPham(10,6);
         //  $get_hinh=get_hinh($id);
            $sanpham_sau=soluong_SanPham(10,16);
            $load_binhluan=load_comment($id);
           
           
            include_once './view/sanphamct.php';
            include_once './view/footer.php';
            break;
         case 'xoabl':
            $sl_mot=laymot_sp($id);
            print_r($sl_mot);
            if(isset($id)){
              
               xoaBinhLuan($id); 
               header('Location:?mod=page&act=sanphamchitiet&id='.$sl_mot['id_sp'].'');
            }
         
         
            break;
         }

       
   }else{

  
   }
?>