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
 