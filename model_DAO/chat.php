<?php
include_once('pdo.php');
function themtinnhan($id_kh,$tinhan){
    $sql="INSERT INTO chat(id_user,noidung)
    VALUES (?,?)";
    return pdo_execute($sql,$id_kh,$tinhan);
}
function showtinnhan($id_kh){
    $sql="SELECT * FROM chat where id_user=$id_kh";
    return pdo_query($sql);
}
function showtinnhan_admin($id_kh){
    $sql="SELECT * FROM chatchitiet where id_user=$id_kh";
    return pdo_query($sql);
}
function showtatca(){
    $sql="SELECT * FROM chat JOIN khachhang ON chat.id_user = khachhang.id_kh GROUP BY chat.id_user order by chat.id_user desc";
    return pdo_query($sql);
}
function showtinnhan1($id_kh){
    $sql="SELECT * FROM chat JOIN chatchitiet ON chat.id_chat = chatchitiet.id_chatkh where chat.id_user=$id_kh";
    return pdo_query($sql);
}
function themtinnhan_admin($id_kh,$tinhan){
    $sql="INSERT INTO chat(id_user,noidung_admin)
    VALUES (?,?)";
    return pdo_execute($sql,$id_kh,$tinhan);
}
?>