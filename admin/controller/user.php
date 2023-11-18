<?php 
include_once '../model_DAO/category.php';
include_once '../model_DAO/product.php';
include_once '../model_DAO/user.php';
include_once '../model_DAO/giohang.php';
include_once '../model_DAO/thongke.php';
extract($_REQUEST);

if(isset($act)){
    switch($act){
        // danhmuc
        case 'danhmuc':
            $dm=category_dm();
      include_once 'view/User__header.php';
            include_once 'view/User__Main.php';
            include_once 'view/User__footer.php';
            break;
        case 'themdanhmuc':
           
  
           
            if(isset($addCategory_submit)){
                add_danhmuc($name);
            header('location:index.php?mod=user&act=danhmuc');
          
                
                
            }else{
            } 
            include_once 'view/User__header.php';
            include_once 'view/User_danhmuc_add.php'; 
            break;
       case 'del':
        category_delete($id);
     header('location: ?mod=user&act=danhmuc');

        break;  
        
        case 'edit':
            $dm=get_one_dm($id);
            if(isset($editCategory_submit)){
                edit_dm($name,$id);
                header('location:index.php?mod=user&act=danhmuc');
            }
            include_once 'view/User__header.php';
            include_once 'view/User_danhmuc_edit.php'; 
            break;

        //  Sản phẩm

    case 'sanpham':
      
        if($trang){
            
            $sp_tungtrang=10;
            $tung_trang=($trang-1)*$sp_tungtrang;
         
          $product= get_limit($tung_trang,$sp_tungtrang);

        }else{
          
            $product=get_limit(0,10);
              
        }
     
        include_once 'view/User__header.php';
        include_once 'view/User__sanpham.php'; 
        break;  
     case 'addsp':
        $dm=category_dm();
     
        
        if(isset($addproduct_submit)){
            $get_list='';
            $trang_thai='';
            if(isset($list)){
                if($list=='Nike'){
                $get_list.='Nike';
            }  
            }

            if(isset($chon)){
                   if($chon=='Hot'){
                    $trang_thai.= 'Hot';
            } 

            }
          product_add($name,$price1,$price2,$_FILES['image']['name'],$trang_thai,$get_list);
                    move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/shoes/'.$_FILES['image']['name']);
                    header('location: ?mod=user&act=sanpham');

          

        }
        include_once 'view/User__header.php';
        include_once 'view/User_sp_add.php'; 
        break;
    case 'delsp':
        delsp($id);
        header('location: ?mod=user&act=sanpham');
        break;
    case 'editsp':  
        if(isset($id)){ 
         $dm=category_dm();
     
     
        $get_one_sp=get_one_product($id);
            if(isset($editproduct_submit)){
                product_edit($name,$price1,$price2,$_FILES['image']['name'],$trang_thai,$get_list,$id);
                move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/shoes/'.$_FILES['image']['name']);
                header('location: ?mod=user&act=sanpham');

            }
      
      
       
    
        }
        
     
        include_once 'view/User__header.php';
        include_once 'view/User_sp_edit.php'; 
        break;
    // đơn hàng
     case 'donhang':
       $donhang=tatca_donHang();
        
        include_once 'view/User__header.php';
        include_once 'view/User__donhang.php'; 
        break;  
        case 'xemchitiet':
            if(isset($id)){
              $tatcadhct=show_donhangCT($id);  
              
            }
            
            include_once 'view/User__header.php';
            include_once 'view/User__donhangct.php'; 
            break;  
    case 'editdonhang':
        include_once 'view/User__header.php';
        include_once 'view/User_dh_edit.php';
        break;
        // khách hàng
    case 'khachhang':
        $user=user__All();
        include_once 'view/User__header.php';
        include_once 'view/User__khachhang.php'; 
        
    
  
       
        break;  

    case 'addngquantri':
        user__Quantri($id);
        header('location: ?mod=user&act=khachhang');
        break;
    
    
       case 'thongke':
        $tk_dh=thongke_donhang();
        $tk_sp=thongke_sanpham_danhmuc();
        $tk_muasp=thongke_soluotmua_sp();

    include_once 'view/User__header.php';
    include_once 'view/user_Thongke.php'; 
    break;
    
    
    }

//    Bình luận


       
}else{
    header('location: ?mod=user&act=thongke');
}



?>