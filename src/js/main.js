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
  $('.page-grupul-de-initiativa .membri ul a').on('show.bs.tab', function() {
    $('.page-grupul-de-initiativa .membri ul .active').removeClass('active');
  });

  $('.descriere .detalii .slick-slider').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000
  });

  // This is a hacky fix, because bootstrap tabs don't get along well with slick either (god darn bootstrap!)
  $('.media-tab-nav-list a').click(function (e) {
    e.preventDefault();
    var $tabLink = $(this);
    $(this).tab('show');
    setTimeout(function() {
      if ($tabLink.attr('href').indexOf('photo') > 0) {
        $('.media-video-carousel-wrapper').slick('unslick');

        $('.media-images-carousel-wrapper').slick({
          arrows: true,
          autoplay: false,
          autoplaySpeed: 5000,
          fade: true,
          cssEase: 'linear',
          lazyLoad: 'ondemand'
        });
      } else {
        $('.media-images-carousel-wrapper').slick('unslick');

        $('.media-video-carousel-wrapper').slick({
          arrows: true,
          autoplay: false,
          fade: true,
          cssEase: 'linear'
        });
      }
    }, 150);
  });

  $('.media-video-carousel-wrapper').slick({
    arrows: true,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: true,
    cssEase: 'linear'
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
        var tooltipWidth = tooltip.outerWidth();
        var tooltipHeight = tooltip.outerHeight();
        var outerBodyWidth = $(document.body).outerWidth();

        mouseX = e.pageX - tooltipWidth / 2;
        mouseY = e.pageY - tooltipHeight - 80;
        if (mouseX < 0) {
          mouseX = 0;
        }

        if (mouseX + tooltipWidth > outerBodyWidth) {
          mouseX = outerBodyWidth - tooltipWidth;
        }

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
