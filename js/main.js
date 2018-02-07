(function ($) {
  'use strict';

  $('[data-toggle="popover"]').popover();

  $.extend(true, USR.data, remoteData);

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

  var tooltipHandler = function (event, code, mouseFollower) {
    var mouseX;
    var mouseY;

    mouseFollower.mousemove($.debounce(5, function(e) {
        //var offset = $('#map-ro').offset();
        mouseX = e.pageX - tooltip.width() - 60;
        mouseY = e.pageY - tooltip.height() - 60;
        if (mouseX < 0) {
          mouseX = 0;
        }
        tooltip.css({'top': mouseY, 'left': mouseX});
      }));

    tooltip.hide();
    tooltip.css({'top': mouseY, 'left': mouseX}).show();

    var contacte = '';
    var html = '<strong>' + USR.data.numeJudet[code] + '</strong><br>Semnături strânse: ' +
      USR.data.semnaturi[code].toString();

    if (USR.data.contacte[code] != null) {
      for (var i = 0; i < USR.data.contacte[code].length; i++) {
        if (USR.data.contacte[code][i] != null) {
          contacte += '<dt>' + USR.data.contacte[code][i].locatie + '</dt><dd><ul class="list-unstyled">';
          for (var j = 0; j < USR.data.contacte[code][i].intrari.length; j++) {
            contacte += '<li>' + USR.data.contacte[code][i].intrari[j] + '</li>';
          }
          contacte += '</ul></dd>';
        }
      }
    }
    html += '<br>Contact: ';

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
    onRegionOver: function (event, code) {
      tooltipHandler(event, code, $('path.jvectormap-region.jvectormap-element'));
    },
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
  $('#map-diaspora').hover(function (event) {
    tooltipHandler(event, 'DIASPORA', $('#map-diaspora'));
  }, function () {
    tooltip.hide();
  });

  $('#map-diaspora').vectorMap({
    backgroundColor: 'transparent',
    bindTouchEvents: false,
    map: 'diaspora',
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
        values: USR.data.semnaturi.DIASPORA
      }]
    },
    zoomButtons: false,
    zoomOnScroll: false
  });
})(jQuery);
