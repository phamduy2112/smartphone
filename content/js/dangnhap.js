var username = document.getElementById('username');
var khung_nhaptk = document.getElementById('khung_nhaptk');
var password = document.getElementById('password');
var khung_passtk= document.getElementById('khung_passtk');
var error_user = document.getElementById('error_user');
var error_pass = document.getElementById('error_pass');
var dangnhap = document.getElementById('dangnhap');



dangnhap.addEventListener('',function dangnhap(){
    if(username.value==""){
        error_user.style.opacity="1";
        error_user.style.visibility="visible";
        error_user.innerHTML = 'Bạn cần nhập tên tài khoản không được để rỗng';
        khung_nhaptk.style.border="0.5px solid red";
        return false;
    }else{
        error_user.style.opacity="0";
        error_user.style.visibility="hidden";
        khung_nhaptk.style.border="0.5px solid #7FFF00";
    }
    if(password.value==""){
        error_pass.style.opacity="1";
        error_pass.style.visibility="visible";
        error_pass.innerHTML = 'Bạn cần nhập pass không được để rỗng';
        khung_passtk.style.border="0.5px solid red";
        return false;
    }else{
        error_pass.style.opacity="0";
        error_pass.style.visibility="hidden";
        khung_passtk.style.border="0.5px solid #7FFF00";
    }
    return true;
})