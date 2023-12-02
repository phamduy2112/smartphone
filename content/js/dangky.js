function dangki(){
    var ten = document.getElementById('ten');
    var gmail = document.getElementById('gmail');
    var passone = document.getElementById('passone');
    var passtwo = document.getElementById('passtwo');
    // var passlv2 = document.getElementById('passlv2');

    var ten_error = document.getElementById('ten_error');
    var gmail_error = document.getElementById('gmail_error');
    var passone_error = document.getElementById('passone_error');
    var passtwo_error = document.getElementById('passtwo_error');
    var tenthieu=ten.value.trim().length;
    var passtest=passone.value.trim().length;

    if(ten.value==""){
        ten_error.style.opacity="1";
        ten_error.style.visibility="visible";
        ten_error.innerHTML = 'Tên người dùng phải có ít nhất 6 ký tự.';
        return false;
    }else if(ten.value.trim().length < 6){
        ten_error.style.opacity="1";
        ten_error.style.visibility="visible";
        ten_error.innerHTML = `Bạn còn thiếu ${6-tenthieu} kí tự để đủ phù hợp.`;    
        return false;
    }
    else if(ten.value.trim().length >= 20){
        ten_error.style.opacity="1";
        ten_error.style.visibility="visible";
        ten_error.innerHTML = `Tên độ dài quá lớn`;
        return false;
    }else if(!isNaN(ten.value)){
        ten_error.style.opacity="1";
        ten_error.style.visibility="visible";
        ten_error.innerHTML = 'Tên người dùng bao gồm chữ và số';
        return false;
    }
    if(gmail.value==""){
        gmail_error.style.opacity="1";
        gmail_error.style.visibility="visible";
        gmail_error.innerHTML = 'Vui lòng nhập Email!';
        return false;
    }


    if(passone.value==""){
        passone_error.style.opacity="1";
        passone_error.style.visibility="visible";
        passone_error.innerHTML = 'Vui lòng nhập mật khẩu!';
        return false;
    }else if(passone.value.trim().length < 6){
        passone_error.style.opacity="1";
        passone_error.style.visibility="visible";
        passone_error.innerHTML = `Bạn còn thiếu ${6-passtest} kí tự để phù hợp`;    
        return false;
    }else if(!isNaN(passone.value)){
        passone_error.style.opacity="1";
        passone_error.style.visibility="visible";
        passone_error.innerHTML = 'Mật khẩu bao gồm chữ và số!';
        return false;
    }
    if(passtwo.value==""){
        passtwo_error.style.opacity="1";
        passtwo_error.style.visibility="visible";
        passtwo_error.innerHTML = 'Mật khẩu nhập lại bị bỏ trống !';
        return false;
    }else if(passtwo.value!=passone.value){
        passtwo_error.style.opacity="1";
        passtwo_error.style.visibility="visible";
        passtwo_error.innerHTML = 'Mật khẩu không khớp';
        return false;
    }
    return true;
}