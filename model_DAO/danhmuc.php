<?php 
include_once('pdo.php');
function laytatca_DM(){
  $sql='SELECT * FROM loai_sp';
  return pdo_query($sql);
}

?>