/*
Name: 			View - Home
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	5.7.2
*/

(function($) {

	'use strict';

	/*
	Circle Slider
	*/
	if ($.isFunction($.fn.flipshow)) {
		var circleContainer = $('#fcSlideshow');

		if (circleContainer.get(0)) {
			circleContainer.flipshow();

			setTimeout(function circleFlip() {
				circleContainer.data().flipshow._navigate(circleContainer.find('div.fc-right span:first'), 'right');
				setTimeout(circleFlip, 3000);
			}, 3000);
		}
	}

	/*
	Move Cloud
	*/
	if ($('.cloud').get(0)) {
		var moveCloud = function() {
			$('.cloud').animate({
				'top': '+=20px'
			}, 3000, 'linear', function() {
				$('.cloud').animate({
					'top': '-=20px'
				}, 3000, 'linear', function() {
					moveCloud();
				});
			});
		};

		moveCloud();
	}

	/*
	Nivo Slider
	*/
	if ($.isFunction($.fn.nivoSlider)) {
		$('#nivoSlider').nivoSlider({
			effect: 'random',
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			animSpeed: 500,
			pauseTime: 3000,
			startSlide: 0,
			directionNav: true,
			controlNav: true,
			controlNavThumbs: false,
			pauseOnHover: true,
			manualAdvance: false,
			prevText: 'Prev',
			nextText: 'Next',
			randomStart: false,
			beforeChange: function(){},
			afterChange: function(){},
			slideshowEnd: function(){},
			lastSlide: function(){},
			afterLoad: function(){}
		});
	}

	// Add Object Line
  var lineEffect = document.createElement('span');
  lineEffect.className = 'line';

  $('.tp-tabs-inner-wrapper').append(lineEffect);

  // Animation Line
  var line = $('.line');
  var activeItem = $('div.tp-tab.selected');
  // var activeX = $('.tp-tab.selected').position().left;
  line.width(activeItem.width()).css('left', 0);
  console.log(activeItem.width());
}).apply(this, [jQuery]);
