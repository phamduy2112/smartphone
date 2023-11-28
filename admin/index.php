<?php 
   extract($_REQUEST);
   if(isset($mod)){
       switch($mod){
           case 'user':
               include_once 'controller/user.php';
               break;
       }
   }
?>