(function ($) {
  'use strict';

  function format(value) {
    if (10 > value) {
      return '0' + value;
    }

    return value;
  }

  function step() {
    var timespan = countdown(null, new Date(2016, 10, 16));

    $('#countdown-days').html(format(timespan.days));
    $('#countdown-hours').html(format(timespan.hours));
    $('#countdown-minutes').html(format(timespan.minutes));
    $('#countdown-seconds').html(format(timespan.seconds));

    window.requestAnimationFrame(step);
  }

  window.requestAnimationFrame(step);
})(jQuery);
