$(document).ready(function(){

  chevronScroll();

});

function chevronScroll(){
  $('.chevron').on('click',function(e){
    event.preventDefault();
    $('html, body').animate({scrollTop:$($('section.slide')[0]).offset().top});
  });
}
