
var ten = document.getElementById('ten');
var so = document.getElementById('so');
var gmail = document.getElementById('gmail');
var passone = document.getElementById('passone');
var passcap2 = document.getElementById('passcap2');
var chinhsua = document.getElementById('chinhsua');
var btn = document.getElementById("editButton2");
var one_text_error= document.getElementById('one_text_error');
var two_text_error= document.getElementById('two_text_error');
var three_text_error= document.getElementById('three_text_error');


chinhsua.addEventListener('input',function chinhsua(){
// Tên
     if(ten.value==""){
        ten.style.border="0.5px solid red"
        // one_text_error.style.display="flex";
        // one_text_error.style.color="red";
        btn.disabled = true;
        // one_text_error.innerHTML = 'Bạn cần nhập tên không được để trống!';
        return false;
     }else{
        if(ten.value.trim().length<8 || ten.value.trim().length > 28){
            ten.style.border="0.5px solid red";
            // one_text_error.style.opacity="1";
            // one_text_error.style.color="red";
            // one_text_error.innerHTML = 'Tên không hợp lệ! Quá ngắn hoặc quá dài!';
            btn.disabled = true;
            return false;
        }
        // else if(ten.value.trim().length>28){
        //     one_text_error.style.display="flex";
        //     one_text_error.style.color="red";
        //     ten.style.border="0.5px solid red";
        //     one_text_error.innerHTML = `Bạn đã dư ${ten.value.trim().length-20} và nó quá dài`;
        //     return false;
        // }
        else{
            if(!isNaN(ten.value)){
                // one_text_error.style.display="flex";
                // one_text_error.style.color="red";
                ten.style.border="0.5px solid red";
                btn.disabled = true;
                // one_text_error.innerHTML = 'Tên không hợp lệ!';
                return false;
            }else{
                if(/[0-9]/.test(ten.value)){
                    // one_text_error.style.display="flex";
                    // one_text_error.style.color="red";
                    ten.style.border="0.5px solid red";
                    btn.disabled = true;
                    // one_text_error.innerHTML = 'Tên không hợp lệ!';
                    return false;
                }else{ 
                    one_text_error.style.display="none";
                    ten.style.border="0.5px solid #7FFF00";
                    btn.disabled = false;
               
                }
            }
        }
     }







// EMAIL
     if(gmail.value==""){
        gmail.style.border="0.5px solid red";
        // two_text_error.style.display="flex";
        // two_text_error.style.color="red";
        btn.disabled = true;
        // two_text_error.innerHTML = 'Email không được để trống!';
        return false;
    }else{
       if(/^\w+@\w+\.\w+$/i.test(gmail.value)||/^\w+@\w+\.\w+\.\w+$/i.test(gmail.value)){
        two_text_error.style.display="none";
        gmail.style.border="0.5px solid #7FFF00 ";
        btn.disabled = false;

       }else{
        // two_text_error.style.display="flex";
        // two_text_error.style.color="red";
        // two_text_error.innerHTML ='Email không hợp lệ!';
        btn.disabled = true;
        gmail.style.border="0.5px solid red";
        return false;
       }
    }

// SDT
    if(so.value==""){
        // three_text_error.style.display="flex";
        // three_text_error.style.color="red";
        // three_text_error.innerHTML = 'Hãy nhập số điện thoại';
        so.style.border="0.5px solid red";
        btn.disabled = true;
        return false;
    }
    else{
        if(so.value.trim().length<=9 || so.value.trim().length>11 ||isNaN(so.value)){
            // three_text_error.style.display="flex";
            // three_text_error.style.color="red";
            // three_text_error.innerHTML = `Số điện thoại không hợp lệ!`;
            so.style.border="0.5px solid red";
            btn.disabled = true;
            return false;
        }
        
        else{
            three_text_error.style.display="none";
            so.style.border="0.5px solid #7FFF00";
            btn.disabled = false;
        }

    }


    // PASSWORD
    if(passone.value==""){
        // four_text_error.style.display="flex";
    //    four_text_error.style.color="red";
        // four_text_error.innerHTML = 'Mật khẩu không được để trống';
        passone.style.border="0.5px solid red";
        btn.disabled = true;
        return false;
    }else{
      
       if(passone.value.trim().length<8 || passone.value.trim().length>16){
        // four_text_error.style.display="flex";
        // four_text_error.style.color="red";
        //  four_text_error.innerHTML = `Mật khẩu quá ngắn hoặc quá dài!`;
        passone.style.border="0.5px solid red";
        btn.disabled = true;
        return false;
       }else{
        if(/[a-z]+[0-9]/.test(passone.value)||/[0-9]+[a-z]/.test(passone.value)){
            passone.style.border="0.5px solid #7FFF00";
            four_text_error.style.display="none";
            btn.disabled = false;
        }
        else{
            // four_text_error.style.display="flex";
            // four_text_error.style.color="red";
            //  four_text_error.innerHTML = 'Mật khẩu bao gồm số và chữ';
            passone.style.border="0.5px solid red";
            btn.disabled = true;
            return false;
        }
       }
      
    }


    // if(passcap2.value==""){
    //     five_text_error.style.display="flex";
    //     five_text_error.style.color="red";
    //     five_text_error.innerHTML = 'Bạn cần nhập số passcap2 không được để rỗng';
    //     passcap2.style.border="0.5px solid red";
    //     return false;
    // }else{
    //     if(passcap2.value.trim().length<8){
    //         five_text_error.style.display="flex";
    //         five_text_error.style.color="red";
    //         five_text_error.innerHTML = `Bạn cần còn thiếu ${8-passcap2.value.trim().length} nữa mới đủ`;
    //         passcap2.style.border="0.5px solid red";
    //         return false;
    //     }else if(passcap2.value.trim().length>8){
    //         five_text_error.style.display="flex";
    //         five_text_error.style.color="red";
    //         five_text_error.innerHTML = `Bạn đã dư ${passcap2.value.trim().length-8} số`;
            
    //         passcap2.style.border="0.5px solid red";
    //         return false;
    //     }else{
    //         if(isNaN(passcap2.value)){
    //             five_text_error.style.display="flex";
    //             five_text_error.style.color="red";
    //             five_text_error.innerHTML = 'Dữ liệu của bạn có chữ vui lòng nhập lại';
               
    //             passcap2.style.border="0.5px solid red";
    //             return false;

    //         }else{
    //             five_text_error.style.display="none";
    //             passcap2.style.border="0.5px solid #7FFF00";
               
    //         }
    //     }
        
    // }
     return true;
})
