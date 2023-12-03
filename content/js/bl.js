var array_bl_ct = document.querySelectorAll('.bl_ct_ove');
var form_bl = document.querySelectorAll('.form_bl');
var number=0;

array_bl_ct.forEach(element => {

    element.addEventListener('click',() =>{
       
        if(number==0){
            element.style.height="22rem";
            number++;
            form_bl.forEach(item=>{
                item.addEventListener('click',()=>{
                    if(number==1){
                        
                        element.style.height="6.3rem";
                        number--;
                    }
                })
            })

        }
       

    })
});

