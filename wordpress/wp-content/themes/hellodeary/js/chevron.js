jQuery(document).ready(function($){

  $(document).ready(function(){

  function chevronScroll(){
    $('.chevron').on('click',function(e){
      event.preventDefault();
      $('html, body').animate({scrollTop:$($('section.slide')[0]).offset().top});
    });
  }

  chevronScroll();

});
});

