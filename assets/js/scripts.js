// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
}
}());
if (typeof jQuery == 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

$('.super-button').on('click', function(event) {
  var $navMenu = $('.modal-form');

  if ($(this).hasClass('super-button-opened')) {
    $navMenu.removeClass('modal-form-opened');
    $(this).removeClass('super-button-opened')
    $('.close-mobile-menu').removeClass('close-form--show')
  } else {
    $navMenu.addClass('modal-form-opened');
    $(this).addClass('super-button-opened')
    $('.close-form').addClass('close-form--show')
  }
})
$('.close-form').on('click', function(event) {
  $('.modal-form').removeClass('modal-form-opened');
  $('.super-button').removeClass('super-button-opened')
  $(this).removeClass('close-form--show')

})
