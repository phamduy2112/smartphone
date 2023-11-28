var top_blog_content = document.querySelectorAll('.top_blog_content');
var top_xem_them = document.querySelector('.top_xem_them');
var top_blog = document.querySelector('.top_blog');

var number=0;
top_xem_them.addEventListener('click' , ()=>{
    
    if(number==0){
        top_blog_content.forEach(element => {
            top_blog.style.height = "2000px";
            top_xem_them .innerHTML="Thu hồi";
            top_xem_them.style.color="red";
            top_blog.style.overflowY = "scroll";
            
           
        });
       
        number++;
       
    }else{
        top_blog_content.forEach(element => {
            top_blog.style.height = "550px";
            top_xem_them .innerHTML="Xem thêm";
            top_xem_them.style.color="black";
            top_blog.style.overflowY = "hidden";
            
           
        });
        number--;
       
    }

   
});

