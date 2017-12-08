jQuery(document).ready(function($){
  $(document).ready(function(){

  function selectActiveSection(index){
    $('.projects-nav-list li a').removeClass('active');
    $($('.projects-nav-list li a')[index]).toggleClass('active');
    $('html, body').animate({scrollTop:$($('section.slide')[index]).offset().top});
  }

  function getActiveSectionIndex(click){
    var activeSectionIndex = $('.nav-list-item a').get().indexOf(event.currentTarget);
    return activeSectionIndex;
  }

  function activateSelectorOnScroll(index){
    $(document).on('scroll', function(){
      for(i = 0; i < $('section.slide').length; i++){
        if (isElementInViewport($('section.slide h2')[i])){
          $('.projects-nav-list li a').removeClass('active');
          $($('.projects-nav-list li a')[i]).toggleClass('active');
        }
        if (isElementInViewport($('.content-section-title'))){
          $('.projects-nav-list li a').removeClass('active');
        }
      }
    });
  }

  function isElementInViewport (el) {
    //special bonus for those using jQuery
    if (typeof jQuery === 'function' && el instanceof jQuery) {
      el = el[0];
    }

    var rect = el.getBoundingClientRect();

    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight ) && /*or $(window).height() */
      rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
  }

  activateSelectorOnScroll();

  $('.nav-list-item a').on('click', function(event){
    event.preventDefault();
    $(document).off('scroll');
    selectActiveSection(getActiveSectionIndex());

    setTimeout(activateSelectorOnScroll, 1200);
  });
});
});
