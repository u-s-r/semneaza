$(document).on('click', 'a[href^="#"]', function (event) {

  var $el = $(this);

  if (!$el.hasClass('no-scroll')) {
    event.preventDefault();

      $('html, body').animate({
        scrollTop: $('[name="' + $el.attr('href').substr(1) + '"]').offset().top
      }, {
        duration: 500,
        complete: function () {
            window.location.hash = $el.attr('href').substr(1);
          }
      });
  }
});
