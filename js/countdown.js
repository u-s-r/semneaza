(function ($) {
  'use strict';

  function format(value) {
    if (10 > value) {
      return '0' + value;
    }

    return value;
  }

  function step() {
    var timespan = countdown(null, new Date(USR.data.deadlineSemnaturi * 1000), countdown.MONTHS | countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);

    if (0 >= timespan.value) {
      $('#countdown-months').html('00');
      $('#countdown-days').html('00');
      $('#countdown-hours').html('00');
      $('#countdown-minutes').html('00');
      $('#countdown-seconds').html('00');

      return;
    }

    $('#countdown-months').html(format(timespan.months));
    $('#countdown-days').html(format(timespan.days));
    $('#countdown-hours').html(format(timespan.hours));
    $('#countdown-minutes').html(format(timespan.minutes));
    $('#countdown-seconds').html(format(timespan.seconds));

    window.requestAnimationFrame(step);
  }

  window.requestAnimationFrame(step);
})(jQuery);
