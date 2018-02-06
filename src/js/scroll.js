$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();

  var $el = $(this);

  $('html, body').animate({
    scrollTop: $('[name="' + $el.attr('href').substr(1) + '"]').offset().top
  }, {
    duration: 500,
    complete: function () {
        window.location.hash = $el.attr('href').substr(1);
      }
  });
});
