<?php 
   extract($_REQUEST);
   if(isset($mod)){
       switch($mod){
           case 'page':
               include_once 'controller/page.php';
               break;
            case 'user':
                include_once 'controller/user.php';
                break;
            case 'cart':
                include_once 'controller/cart.php';
                break;
            default:
            header('loctaion: ?mod=page&act=home');
            break;
            }

   }else{
    include_once 'controller/page.php';
   }
?>