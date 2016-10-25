(function ($) {
  'use strict';

  $('[data-toggle="popover"]').popover();

  $.get('semnaturi.php', function (data) {
    $.extend(true, USR.data, data);

    $('#progres-semnaturi').ionRangeSlider({
      force_edges: true,
      from: data.semnaturiStranse,
      from_fixed: true,
      grid: true,
      hide_min_max: true,
      max: USR.data.intervalSemnaturi[1],
      min: USR.data.intervalSemnaturi[0],
      postfix: ' semnături strânse',
      prettify_separator: '.'
    });

    $('#map-ro').vectorMap({
      backgroundColor: 'transparent',
      bindTouchEvents: false,
      map: 'ro_merc',
      onRegionTipShow: function (event, element, code) {
        var contacte = '';
        var html = '<strong>' + element.html() + '</strong><br>Semnături strânse: ' +
          USR.data.semnaturi[code];

        for (var i = 0; i < USR.data.contacte[code].length; i++) {
          contacte += '<dt>' + USR.data.contacte[code][i].locatie + '</dt><dd><ul class="list-unstyled">';

          for (var j = 0; j < USR.data.contacte[code][i].persoane.length; j++) {
            contacte += '<li>' + USR.data.contacte[code][i].persoane[j].join(', ') + '</li>';
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
      onRegionTipShow: function (event, element, code) {
        var contacte = '';
        var html = '<strong>' + element.html() + '</strong><br>Semnături strânse: ' +
          USR.data.diaspora.semnaturi[code];

        for (var i = 0; i < USR.data.diaspora.contacte.length; i++) {
          contacte += '<dl><dt>' + USR.data.diaspora.contacte[i].locatie + '</dt><dd><ul class="list-unstyled">';

          for (var j = 0; j < USR.data.diaspora.contacte[i].persoane.length; j++) {
            contacte += '<li>' + USR.data.diaspora.contacte[i].persoane[j].join(', ') + '</li>';
          }

          contacte += '</ul></dd></dl>';
        }

        html += '<br>Contact: ' + USR.data.diaspora.contact + '<p>' + USR.data.diaspora.info + '</p>';

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
          values: USR.data.diaspora.semnaturi
        }]
      },
      zoomButtons: false,
      zoomOnScroll: false
    });
  });
})(jQuery);
