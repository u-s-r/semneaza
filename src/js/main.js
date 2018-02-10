(function ($) {
  'use strict';

  $('[data-toggle="popover"]').popover();

  var USR = {
    'data': window.remoteData
  };

  $('.page-grupul-de-initiativa .membri ul').mCustomScrollbar({
    theme: 'light'
  });

  // This is a hacky workaround because bootstrap tabs seem to not play very nice with mCustomScrollbar
  $('.page-grupul-de-initiativa .membri ul a').on('show.bs.tab', function( ) {
    $('.page-grupul-de-initiativa .membri ul .active').removeClass('active');
  });

  $('.descriere .detalii .slick-slider').slick({
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

  var tooltip = $('<div class="tooltip-harta"></div>').appendTo(document.body);

  var tooltipHandler = function (event, code) {
    var mouseX;
    var mouseY;

    $('path.jvectormap-region.jvectormap-element').mousemove($.debounce(5, function(e) {
        //var offset = $('#map-ro').offset();
        mouseX = e.pageX - tooltip.width() - 60;
        mouseY = e.pageY - tooltip.height() - 60;
        tooltip.css({'top': mouseY, 'left': mouseX});
      }));

    tooltip.hide();
    tooltip.css({'top': mouseY, 'left': mouseX}).show();

    var contacte = '';
    var html = '';
    if (USR.data.campanieSemnaturi) {
      html += '<strong>' + USR.data.numeJudet[code] + '</strong><br>Semnături strânse: ' +
        USR.data.semnaturi[code].toString() + '<br>';
    }

    for (var i = 0; i < USR.data.contacte[code].length; i++) {
      contacte += '<dt>' + USR.data.contacte[code][i].locatie + '</dt><dd><ul class="list-unstyled">';

      for (var j = 0; j < USR.data.contacte[code][i].intrari.length; j++) {
        contacte += '<li>' + USR.data.contacte[code][i].intrari[j] + '</li>';
      }

      contacte += '</ul></dd>';
    }

    html += 'Contact: ';

    if ('' !== contacte) {
      html += '<dl>' + contacte + '</dl>';
    } else {
      html += USR.data.contact;
    }

    tooltip.html(html);
  };

  $('#map-ro').hover(function () {}, function () {
    tooltip.hide();
  });
  $('#map-ro').vectorMap({
    backgroundColor: 'transparent',
    bindTouchEvents: false,
    map: 'ro_merc',
    onRegionOver: tooltipHandler,
    onRegionTipShow: function (e) {
      e.preventDefault();
    },
    panOnDrag: false,
    series: {
      regions: [{
        max: USR.data.max,
        min: USR.data.min,
        normalizeFunction: 'polynomial',
        scale: ['#9fd0ff', '#d1e9ff'],
        values: USR.data.semnaturi
      }]
    },
    zoomButtons: false,
    zoomOnScroll: false
  });
})(jQuery);
