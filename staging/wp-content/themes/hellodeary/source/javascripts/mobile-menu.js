$(document).ready(function(){
  var open = false;

  highlightMenuSelection();

  $('.hamburger-container').on('click', function(e){
    $('.hamburger').toggleClass('active');
    $('.nav-links-container').toggleClass('active');
    if( open === false){
      bindScroll();
      $('.projects-nav').hide();
      $('.chevron').hide();
      open = true;
    } else {
      unbindScroll();
      open = false;
      $('.projects-nav').show();
      $('.chevron').show();
      return;
    }
  });

  // toggle menu on link click
  $('.nav-item a').on('click', function(e){
    $('.nav-links-container').toggleClass('active');
    unbindScroll();
    open = false;
  });

});


function bindScroll(){
  $('html, body').on('touchmove', function(e){e.preventDefault();});

  var scrollPosition = [
    self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
    self.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop
  ];
  var html = jQuery('html');
  html.data('scroll-position', scrollPosition);
  html.data('previous-overflow', html.css('overflow'));
  html.css('overflow', 'hidden');
  window.scrollTo(scrollPosition[0], scrollPosition[1]);
}

function unbindScroll(){
  $('html, body').unbind('touchmove').unbind();
  var html = $('html');
  var scrollPosition = html.data('scroll-position');
  html.css('overflow', html.data('previous-overflow'));
  window.scrollTo(scrollPosition[0], scrollPosition[1]);
}

function highlightMenuSelection(){
  $('.nav-item').removeClass('active');
  var windowLocation = '/' + location.pathname.substring(1);
  console.log(windowLocation);
  $('a[href="'+windowLocation+'"]').parent().addClass('active');
}
