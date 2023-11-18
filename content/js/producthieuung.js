let khung_product = document.getElementById('khung_product');
let nut_bam_one = document.getElementById('nut_bam_one');
let nut_bam_two = document.getElementById('nut_bam_two');
let nut_bam_three = document.getElementById('nut_bam_three');
let number = 0;

function tientoi() {
 
  switch (number) {
    case 0:
      khung_product.style.transform="translateX(-27%)";
      nut_bam_one.style.background="white";
      nut_bam_two.style.background="red";
      nut_bam_three.style.background="white";
      number++;
      break;
    case 1:
        khung_product.style.transform="translateX(-55%)";
        nut_bam_one.style.background="white";
        nut_bam_two.style.background="white";
        nut_bam_three.style.background="red";
        
        number++;
        break;

    case 2:
        khung_product.style.transform="translateX(0%)";
        nut_bam_one.style.background="red";
        nut_bam_two.style.background="white";
        nut_bam_three.style.background="white";
        number=0;
      break;
    
  }


  
  
  
}
function luilai() {
 
  if(number==2){
    khung_product.style.transform="translateX(-27%)";
    nut_bam_one.style.background="white";
    nut_bam_two.style.background="red";
    nut_bam_three.style.background="white";
    number--;
   


  }else if(number==1){
    khung_product.style.transform="translateX(0%)";
    nut_bam_one.style.background="red";
    nut_bam_two.style.background="white";
    nut_bam_three.style.background="white";
    
    number--;
   

  }else{
    khung_product.style.transform="translateX(-55%)";
    nut_bam_one.style.background="white";
    nut_bam_two.style.background="white";
    nut_bam_three.style.background="red";
    number=2;
   
  }

}
function nutone(){
  khung_product.style.transform="translateX(0%)";
  nut_bam_one.style.background="red";
  nut_bam_two.style.background="white";
  nut_bam_three.style.background="white";
 

}
function nuttwo(){
  khung_product.style.transform="translateX(-27%)";
      nut_bam_one.style.background="white";
      nut_bam_two.style.background="red";
    nut_bam_three.style.background="white";
 
      

}
function nutthree(){
  khung_product.style.transform="translateX(-55%)";
  nut_bam_one.style.background="white";
  nut_bam_two.style.background="white";
  nut_bam_three.style.background="red";
 

}
let interval = setInterval(tientoi,5000);





let khung_product_two = document.getElementById('khung_product_two');
let number_two = 0;

function nexttoi() {
  switch (number_two) {
    case 0:
      khung_product_two.style.transform="translateX(-22.1%)";
      
      number_two++;
      break;
    case 1:
      khung_product_two.style.transform="translateX(-50%)";
      
      number_two++;
      break;

    case 2:
      khung_product_two.style.transform="translateX(0%)";
      number_two=0;
      break;
    
  }

  
}
function luilai_two() {
 
  if(number_two==2){
    khung_product_two.style.transform="translateX(-22.1%)";
      
      number_two--;
  
   


  }else if(number_two==1){
    khung_product_two.style.transform="translateX(0%)";
      
    number_two--;

  }else{
    khung_product_two.style.transform="translateX(-50%)";
      
    number_two=2;
  }

}
let interval_two = setInterval(nexttoi,4000);





let khung_product_three = document.getElementById('khung_product_three');
let number_three = 0;

function nexttoi_three() {
  switch (number_three) {
    case 0:
      khung_product_three.style.transform="translateX(-22.1%)";
      
      number_three++;
      break;
    case 1:
      khung_product_three.style.transform="translateX(-50%)";
      
      number_three++;
      break;

    case 2:
      khung_product_three.style.transform="translateX(0%)";
      number_three=0;
      break;
    
  }

  
}
function luilai_three() {
 
  if(number_three==2){
    khung_product_three.style.transform="translateX(-22.1%)";
      
      number_three--;
  
   


  }else if(number_three==1){
    khung_product_three.style.transform="translateX(0%)";
      
    number_three--;

  }else{
    khung_product_three.style.transform="translateX(-50%)";
      
    number_three=2;
  }

}
let interval_three = setInterval(nexttoi_three,4500);