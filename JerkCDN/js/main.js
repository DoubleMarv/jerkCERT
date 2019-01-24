function heightFixxer(){
	         $('.heightfixxer').each(function() {
                var currentHeightElement = $(this);
                var hotHeight = currentHeightElement.outerHeight();
                currentHeightElement.css({ height: (hotHeight) });
            });
	     }


function smootherScrollo(){
	$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
     }, 500);
});
}


function showBottomMenuAfterScroll(){
var $document = $(document),
    $element = $('#bottommen'),
    className = 'hasScrolled';

$document.scroll(function() {
  if ($document.scrollTop() >= 100) {
    // user scrolled 50 pixels or more;
    // do stuff
    $element.addClass(className);
  } else {
    $element.removeClass(className);
  }
});
}


function sideVerLay(){
  var sider = $('.sideverlay');
  sider.addClass('sideverlaycomein');
}
// A $( document ).ready() block.
$( document ).ready(function() {
heightFixxer();
smootherScrollo();
showBottomMenuAfterScroll();
sideVerLay();
});

