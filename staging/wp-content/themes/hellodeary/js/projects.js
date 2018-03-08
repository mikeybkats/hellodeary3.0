jQuery(document).ready(function($){
  $(document).ready(function(){

  function getMatchingSlide(selectedIndex){
    var matchedSlide;
    $('section.slide').each(function(){
      if( !$(this).hasClass('hide')){
        if( parseInt($(this).attr('value')) === selectedIndex ){
          matchedSlide = this;
        }
      }
    });
    return matchedSlide;
  }

  function selectActiveSection(selectedIndex){
    $('.projects-nav-list li a').removeClass('active');
    $(".projects-nav-list li a[value="+selectedIndex+"]").toggleClass('active');
    var matchedSlide = getMatchingSlide(parseInt(selectedIndex));
    $('html, body').animate({scrollTop:$(matchedSlide).offset().top});
    console.log(matchedSlide);
  }

  function getActiveSectionIndex(index){
    var activeSectionIndex;
    if( index ){ 
      activeSectionIndex = $(index).attr('value');
    }
    else{ 
      activeSectionIndex = 0;
    }
    return activeSectionIndex;
  }

  function activateSelectorOnScroll(valueIndex){
    $(document).on('scroll', function(){
       $('section.slide h2').each(function(){
        if( isElementInViewport($(this)) ){
          $('.projects-nav-list li a').removeClass('active');
          var activeSection = $(this).attr('value');
          $($('.projects-nav-list li a[value='+activeSection+']')).toggleClass('active');
        }
      });

      if( isElementInViewport($('.content-section-title')) ){
        $('.projects-nav-list li a').removeClass('active');
      }
    });
  }

  function isElementInViewport (el) {
    //special bonus for those using jQuery
    if (typeof jQuery === 'function' && el instanceof jQuery) {
      el = el[0];
    }
    //console.log(el);
    var rect = el.getBoundingClientRect();

    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight ) && /*or $(window).height() */
      rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
  }

  function hideShowDesignSection(){
    $('.design-tab').on( 'click', function(e){
      e.preventDefault();
      $('.projects').removeClass('paleColor');
      $('.project-row').removeClass('paleColor');
      $('.projects').addClass('lightBlueColor');
      $('.project-row').addClass('lightBlueColor');
      $('html').removeClass('paleColor');
      $('html').addClass('lightBlueColor');
      $('.design-tab p').addClass('active');
      $('.development-tab p').removeClass('active');
      $('.development-indicator').addClass('hide');
      $('.design-indicator').removeClass('hide');
      $('.design-section').removeClass('hide');
      $('.development-section').addClass('hide');
    });
  }

  function hideShowDevSection(){
    $('.development-tab').on( 'click', function(e){
      e.preventDefault();
      $('.projects').removeClass('lightBlueColor');
      $('.project-row').removeClass('lightBlueColor');
      $('.projects').addClass('paleColor');
      $('.project-row').addClass('paleColor');
      $('html').removeClass('lightBlueColor');
      $('html').addClass('paleColor');
      $('.design-indicator').addClass('hide');
      $('.development-section').addClass('active');
      $('.design-section').addClass('hide');
      $('.development-tab p').addClass('active');
      $('.design-tab p').removeClass('active');
      $('.development-section').removeClass('hide');
      $('.development-indicator').removeClass('hide');
    });
  }

  function preventDefaultOnVideoButtons(){
    $('.video-button').on('click', function(event){
      event.preventDefault();
    });
  }

  $('html').addClass('paleColor');
  $('.nav-list-item a').on('click', function(event){
    event.preventDefault();
    $(document).off('scroll');
    selectActiveSection(getActiveSectionIndex(event.currentTarget));
    setTimeout(activateSelectorOnScroll, 1200);
  });
  
  activateSelectorOnScroll();
  hideShowDesignSection();
  hideShowDevSection();
  preventDefaultOnVideoButtons();

  });
});
