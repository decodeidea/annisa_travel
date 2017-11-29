
(function($) {
  'use strict';

  var width = ($('div.container').width() + 30) / 4;

  var sliderOptions = {
		sliderLayout: 'fullscreen',
		spinner: "off",
		responsiveLevels: [4096,1200,992,420],
		gridwidth:[1170,970,750],
		delay: 10000,
		disableProgressBar: 'on',
		lazyType: "none",
		shadow: 0,
		spinner: "off",
		shuffle: "off",
		autoHeight: "off",
		fullScreenAlignForce: "off",
		fullScreenOffset: "",
		hideThumbsOnMobile: "off",
		hideSliderAtLimit: 0,
		hideCaptionAtLimit: 0,
		hideAllCaptionAtLilmit: 0,
		debugMode: false,
		fallbacks: {
			simplifyAll: "off",
			nextSlideOnWindowFocus: "off",
			disableFocusListener: false,
		},
		navigation: {
			keyboardNavigation: "on",
			keyboard_direction: "horizontal",
			mouseScrollNavigation: "off",
			onHoverStop: "off",
			arrows: {
				enable: false,
			},
			bullets: {
				enable: false,
			},
      tabs: {
        enable: true,
        tmp: '<div class="tp-tab-description">{{description}}</div><div class="tp-tab-title">{{title}}</div>',

        width: width,
        height: 'auto',
        min_width: 150,
        direction: 'horizontal',

        position: 'inner',
        h_align: 'center',
        v_align: 'bottom',
        h_offset: 0,
        v_offset: 0,

        span: true,
        wrapper_padding: 0,
        wrapper_color: 'transparent',
        wrapper_opacity: '0',

        hide_onleave: false,
        hide_onmobile: true,
        hide_under: 640,
        hide_over: 9999,
      }
		},
	}

  $('#revolutionSlider').revolution(sliderOptions);
  
  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 60,
		preloader: true,

		fixedContentPos: false
	});



}).apply( this, [ jQuery ]);

$('#myCarousel').carousel({
  interval: 40000
});

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});



// $(function() {
//   // Add Object Line
//   var lineEffect = document.createElement('span');
//   lineEffect.className = 'line';
//
//   $('.tp-tabs-inner-wrapper').append(lineEffect);
//
//   // Animation Line
//   var line = $('.line');
//   var activeItem = $('div.tp-tab.selected');
//   // var activeX = $('.tp-tab.selected').position().left;
//   line.width(activeItem.width()).css('left', 0);
//   console.log(activeItem.width());
// });
