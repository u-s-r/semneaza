(function ($) {
  'use strict';

  $('[data-toggle="popover"]').popover();

  $.extend(true, USR.data, remoteData);

  $('.media-section').slick();

  $(".descriere .detalii .slick-slider").slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000
  });

  $('#progres-semnaturi').ionRangeSlider({
    force_edges: true,
    from: USR.data.semnaturiStranse,
    from_fixed: true,
    grid: true,
    hide_min_max: true,
    max: USR.data.targetSemnaturi,
    min: 0,
    postfix: ' semnături strânse',
    prettify_separator: '.'
  });

  $('#map-ro').vectorMap({
    backgroundColor: 'transparent',
    bindTouchEvents: false,
    map: 'ro_merc',
    onRegionTipShow: function (event, element, code) {
      var contacte = '';
      var html = '<strong>' + USR.data.numeJudet[code] + '</strong><br>Semnături strânse: ' +
        USR.data.semnaturi[code].toString();

      for (var i = 0; i < USR.data.contacte[code].length; i++) {
        contacte += '<dt>' + USR.data.contacte[code][i].locatie + '</dt><dd><ul class="list-unstyled">';

        for (var j = 0; j < USR.data.contacte[code][i].intrari.length; j++) {
          contacte += '<li>' + USR.data.contacte[code][i].intrari[j] + '</li>';
        }

        contacte += '</ul></dd>';
      }

      html += '<br>Contact: ';

      if ('' !== contacte) {
        html += '<dl>' + contacte + '</dl>';
      } else {
        html += USR.data.contact;
      }

      element.html(html);
    },
    panOnDrag: false,
    series: {
      regions: [{
        max: USR.data.max,
        min: USR.data.min,
        normalizeFunction: 'polynomial',
        scale: ['#7fc1ff', '#ffffff'],
        values: USR.data.semnaturi
      }]
    },
    zoomButtons: false,
    zoomOnScroll: false
  });

  $('#map-diaspora').vectorMap({
    backgroundColor: 'transparent',
    bindTouchEvents: false,
    map: 'diaspora',
    onRegionTipShow: function (event, element) {
      var contacte = '';
      var html = '<strong>' + USR.data.numeJudet.DIASPORA + '</strong><br>Semnături strânse: ' +
        USR.data.semnaturi.DIASPORA;

      for (var i = 0; i < USR.data.contacte.DIASPORA.length; i++) {
        contacte += '<dl><dt>' + USR.data.contacte.DIASPORA[i].locatie + '</dt><dd><ul class="list-unstyled">';

        for (var j = 0; j < USR.data.contacte.DIASPORA[i].intrari.length; j++) {
          contacte += '<li>' + USR.data.contacte.DIASPORA[i].intrari[j] + '</li>';
        }

        contacte += '</ul></dd></dl>';
      }

      if ('' !== contacte) {
        html += '<div class="dl-two-columns">' + contacte + '</div>';
      }

      element.html(html);
    },
    panOnDrag: false,
    series: {
      regions: [{
        max: USR.data.max,
        min: USR.data.min,
        normalizeFunction: 'polynomial',
        scale: ['#7fc1ff', '#ffffff'],
        values: USR.data.semnaturi.DIASPORA
      }]
    },
    zoomButtons: false,
    zoomOnScroll: false
  });
})(jQuery);
