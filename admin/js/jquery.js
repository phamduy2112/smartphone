$(function() {
    // This will change the text of the "demo" element to "Hello, world!"
   
  $('#fa-hidden1').click(function(){
    $('.fa-chevron-right').addClass("fa-hidden");
    $('.fa_chevron').removeClass("fa-hidden");
    $('.hidden').toggle();
  })
  $('#fa-hidden').click(function(){
    $('.fa-chevron-right').removeClass("fa-hidden");
    $('.fa_chevron').addClass("fa-hidden");
    $('.hidden').toggle();
  })
 
  });