<?php 
session_start();
ob_start();
   extract($_REQUEST);


   // include_once '../model_DAO/category.php';
   include_once '../model_DAO/user.php';
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

         case 'yeuthich':
            
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
            if(isset($_SESSION['taikhoan'])){
               if(isset($id)){
                    $id_user=lay_iduser($_SESSION['taikhoan']);
               themVaoYeuThich($id_user['id_kh'],$id); 
               header('location:?mod=page&act=yeuthich'); 
               }
           
             
            

              
            }else{
               include_once './view/trangchuadangnhap.php';            }
            
            include_once './view/footer.php';
            break;
         case 'xoayeuthich':
            xoaSanPhamYeuThich($id);
            header('location:?mod=page&act=yeuthich');
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
          }
          $sanpham_sau=soluong_SanPham(10,6);
         //  $get_hinh=get_hinh($id);
            include_once './view/sanphamct.php';
            include_once './view/footer.php';
       }
       
   }else{

  
   }
?>