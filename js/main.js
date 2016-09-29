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
      max: USR.data.targetSemnaturi,
      min: 0,
      postfix: ' semnături strânse'
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
          contacte += '<dt>' + USR.data.contacte[code][i].oras + '</dt><dd><ul class="list-unstyled">';

          for (var j = 0; j < USR.data.contacte[code][i].persoane.length; j++) {
            contacte += '<li>' + USR.data.contacte[code][i].persoane[j].nume + ', ' + USR.data.contacte[code][i].persoane[j].telefon + '</li>';
          }

          contacte += '</ul></dd>';
        }

        html += '<br>Contact: ';

        if ('' !== contacte) {
          html += '<dl>' + contacte + '</dl>';
        } else {
          html += '0726701994';
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
        var html = '<strong>' + element.html() + '</strong><br>Semnături strânse: ' +
          USR.data.diaspora.semnaturi[code];

        html += '<br>Contact: diaspora@usb.ro<dl><dt>Italia</dt><dd><ul class="list-unstyled"><li>Cerasella Ponta, +393280947327</li></ul></dd><p>Ghidul de completare corectă al formularelor pentru diaspora îl găsiți la secțiunea <em>Trimite</em> mai jos!</p>';

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
