// hiệu ứng menu js
var bar_nav=document.getElementById('bar_nav');
var menu=document.getElementById('menu');
var dongmenu=document.getElementById('dongmenu');
console.log(menu);
bar_nav.onclick=function () { 
    menu.classList.add('trans');

 }
 dongmenu.onclick=function(){
   menu.classList.remove('trans')
 }

 document.getElementById('timKiem').onclick=function(){
  document.getElementById('mobile__left').classList.remove('transition__product');
 }
 document.getElementById('dong').onclick=function(){
  document.getElementById('mobile__left').classList.add('transition__product');
 }
 
