var top_blog_content_one = document.getElementById('top_blog_content_one');
var top_blog_content_two = document.getElementById('top_blog_content_two');
var top_blog_content_three = document.getElementById('top_blog_content_three');
var top_blog_content_four = document.getElementById('top_blog_content_four');
var top_blog_content_five = document.getElementById('top_blog_content_five');
var top_blog_content_six = document.getElementById('top_blog_content_six');
var top_blog_content_seven = document.getElementById('top_blog_content_seven');
var top_xem_them_bs = document.getElementById('top_xem_them_bs');
var top_blog = document.getElementById('top_blog');
var number=0;

function my_click(){
    if(number==0){
        top_blog.style.height = "2000px";
        top_blog_content_one.style.display="flex";
        top_blog_content_two.style.display="flex";
        top_blog_content_three.style.display="flex";
        top_blog_content_four.style.display="flex";
        top_blog_content_five.style.display="flex";
        top_blog_content_six.style.display="flex";
        top_blog_content_seven.style.display="flex";
        top_xem_them_bs.innerHTML="Thu hồi";
        number++;
    }else{

        top_blog.style.height = "550px";
        top_blog_content_one.style.display="none";
        top_blog_content_two.style.display="none";
        top_blog_content_three.style.display="none";
        top_blog_content_four.style.display="none";
        top_blog_content_five.style.display="none";
        top_blog_content_six.style.display="none";
        top_blog_content_seven.style.display="none";
        top_xem_them_bs.innerHTML="Xem thêm";

        number--;
    }
}

var blog_content_one = document.getElementById('blog_content_one');
var blog_xr_one = document.getElementById('blog_xr_one');
var so_one=0;
function bam_one(){
    if(so_one==0){
        blog_content_one.style.height="277px";
        blog_xr_one.style.opacity="1";
        blog_xr_one.style.visibility="visible";
        so_one++;
    }else{
        blog_content_one.style.height="153px";
        blog_xr_one.style.opacity="0";
        blog_xr_one.style.visibility="hidden";
        so_one--;
    }
}

var blog_content_two = document.getElementById('blog_content_two');
var blog_xr_two = document.getElementById('blog_xr_two');
var so_two=0;
function bam_two(){
    if(so_two==0){
        blog_content_two.style.height="277px";
        blog_xr_two.style.opacity="1";
        blog_xr_two.style.visibility="visible";
        so_two++;
    }else{
        blog_content_two.style.height="153px";
        blog_xr_two.style.opacity="0";
        blog_xr_two.style.visibility="hidden";
        so_two--;
    }
}
var blog_content_three = document.getElementById('blog_content_three');
var blog_xr_three = document.getElementById('blog_xr_three');
var so_three=0;
function bam_three(){
    if(so_three==0){
        blog_content_three.style.height="277px";
        blog_xr_three.style.opacity="1";
        blog_xr_three.style.visibility="visible";
        so_two++;
    }else{
        blog_content_three.style.height="153px";
        blog_xr_three.style.opacity="0";
        blog_xr_three.style.visibility="hidden";
        so_three--;
    }
}
var blog_content_four = document.getElementById('blog_content_four');
var blog_xr_four = document.getElementById('blog_xr_four');
var so_four=0;
function bam_four(){
    if(so_four==0){
        blog_content_four.style.height="277px";
        blog_xr_four.style.opacity="1";
        blog_xr_four.style.visibility="visible";
        so_four++;
    }else{
        blog_content_four.style.height="153px";
        blog_xr_four.style.opacity="0";
        blog_xr_four.style.visibility="hidden";
        so_four--;
    }
}
var blog_content_five = document.getElementById('blog_content_five');
var blog_xr_five = document.getElementById('blog_xr_five');
var so_five=0;
function bam_five(){
    if(so_five==0){
        blog_content_five.style.height="277px";
        blog_xr_five.style.opacity="1";
        blog_xr_five.style.visibility="visible";
        so_five++;
    }else{
        blog_content_five.style.height="153px";
        blog_xr_five.style.opacity="0";
        blog_xr_five.style.visibility="hidden";
        so_five--;
    }
}
var blog_content_six = document.getElementById('blog_content_six');
var blog_xr_six = document.getElementById('blog_xr_six');
var so_six=0;
function bam_six(){
    if(so_six==0){
        blog_content_six.style.height="277px";
        blog_xr_six.style.opacity="1";
        blog_xr_six.style.visibility="visible";
        so_six++;
    }else{
        blog_content_six.style.height="153px";
        blog_xr_six.style.opacity="0";
        blog_xr_six.style.visibility="hidden";
        so_six--;
    }
}
var blog_content_seven = document.getElementById('blog_content_seven');
var blog_xr_seven = document.getElementById('blog_xr_seven');
var so_seven=0;
function bam_seven(){
    if(so_seven==0){
        blog_content_seven.style.height="277px";
        blog_xr_seven.style.opacity="1";
        blog_xr_seven.style.visibility="visible";
        so_seven++;
    }else{
        blog_content_seven.style.height="153px";
        blog_xr_seven.style.opacity="0";
        blog_xr_seven.style.visibility="hidden";
        so_seven--;
    }
}
var blog_content_eye = document.getElementById('blog_content_eye');
var blog_xr_eye = document.getElementById('blog_xr_eye');
var so_eye=0;
function bam_eye(){
    if(so_eye==0){
        blog_content_eye.style.height="277px";
        blog_xr_eye.style.opacity="1";
        blog_xr_eye.style.visibility="visible";
        so_eye++;
    }else{
        blog_content_eye.style.height="153px";
        blog_xr_eye.style.opacity="0";
        blog_xr_eye.style.visibility="hidden";
        so_eye--;
    }
}
var blog_content_night = document.getElementById('blog_content_night');
var blog_xr_one_night = document.getElementById('blog_xr_night');
var so_night=0;
function bam_night(){
    if(so_night==0){
        blog_content_night.style.height="277px";
        blog_xr_night.style.opacity="1";
        blog_xr_night.style.visibility="visible";
        so_night++;
    }else{
        blog_content_night.style.height="153px";
        blog_xr_night.style.opacity="0";
        blog_xr_night.style.visibility="hidden";
        so_night--;
    }
}
var blog_content_ten = document.getElementById('blog_content_ten');
var blog_xr_ten = document.getElementById('blog_xr_ten');
var so_ten=0;
function bam_ten(){
    if(so_ten==0){
        blog_content_ten.style.height="277px";
        blog_xr_ten.style.opacity="1";
        blog_xr_ten.style.visibility="visible";
        so_ten++;
    }else{
        blog_content_ten.style.height="153px";
        blog_xr_ten.style.opacity="0";
        blog_xr_ten.style.visibility="hidden";
        so_ten--;
    }
}

var blog_tin_one = document.getElementById('blog_tin_one'); 

var blog_tin_two = document.getElementById('blog_tin_two'); 
var blog_tin_three = document.getElementById('blog_tin_three');

function bamluachon_one(){
   blog_tin_one.style.background="#EEE";
   blog_tin_one.style.fontSize="18px";
   blog_tin_two.style.background="white";
   blog_tin_two.style.fontSize="14px";
   blog_tin_three.style.background="white";
   blog_tin_three.style.fontSize="14px";
}
function bamluachon_two(){
    blog_tin_one.style.background="white";
    blog_tin_one.style.fontSize="14px";
    blog_tin_two.style.background="#EEE";
    blog_tin_two.style.fontSize="18px";
    blog_tin_three.style.background="white";
    blog_tin_three.style.fontSize="14px";
 }
 function bamluachon_three(){
    blog_tin_one.style.background="white";
    blog_tin_one.style.fontSize="14px";
    blog_tin_two.style.background="white";
    blog_tin_two.style.fontSize="14px";
    blog_tin_three.style.background="#EEE";
    blog_tin_three.style.fontSize="18px";
 }