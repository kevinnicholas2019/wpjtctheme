(function () {
	window.$ = jQuery;
	window.Splide = require("@splidejs/splide").Splide;
	require("@fortawesome/fontawesome-free");
	require('@popperjs/core');
	window.PerfectScrollbar = require('perfect-scrollbar');
	window.bootstrap = require('bootstrap');

	window.customOnScroll = function () {
		var raf = window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			window.oRequestAnimationFrame;
		var isScrollingUp = false;
		var lastScrollTop = $(window).scrollTop();

		var scroll = function (target, reinitTable = false) {
			var appHeader = $("#headernav");
			var offset = lastScrollTop;
			var offsetKena = appHeader.height();

			var kena = function () {
				appHeader.addClass("fixed-top");
				appHeader.removeClass("position-absolute");
				appHeader.find('> .header-secondary').addClass("d-lg-none");
				appHeader.find('.header-primary').addClass("bg-dark");
				appHeader.find('.header-primary').removeClass("bg-dark-custom");
				appHeader.find('.header-search').addClass("bg-dark");
				appHeader.find('.header-search').removeClass("bg-dark-custom");
			};

			var tidakKena = function () {
				appHeader.addClass("position-absolute");
				appHeader.removeClass("fixed-top");
				appHeader.find('> .header-secondary').removeClass("d-lg-none");
				appHeader.find('.header-primary').removeClass("bg-dark");
				appHeader.find('.header-primary').addClass("bg-dark-custom");
				appHeader.find('.header-search').removeClass("bg-dark");
				appHeader.find('.header-search').addClass("bg-dark-custom");
			};

			return !isScrollingUp && offset >= offsetKena ? kena() : tidakKena();
		};

		var thisFunc = this;
		this.scrollAbles = [];

		var onscroll = function (reinitTable = false) {
			$("#headernav").each(function () {
				scroll($(this), reinitTable);
			});
			thisFunc.scrollAbles.forEach(function (func) {
				func(lastScrollTop);
			});
		}

		// $(document).ajaxComplete(function () {
		// 	onscroll(true);
		// });

		function loop() {
			// console.log("llop");
			var scrollTop = $(window).scrollTop();
			if (lastScrollTop === scrollTop) {
				$(window).off("scroll");
				$(window).on("scroll", function () {
					$(window).off("scroll");
					raf(loop);
				});
				return;
			} else {
				isScrollingUp = lastScrollTop > scrollTop;
				lastScrollTop = scrollTop;

				// fire scroll function if scrolls vertically
				onscroll();
				raf(loop);
			}
		}

		if (raf) {
			loop();
		}
	}

	// a href=# prevenDefault
	$("a[href=#]").on("click", (e) => e.preventDefault());

	// SPLIDER FADE
	var splidesLength = $('.splide-content-header-attach-fade-vr').length;
	if (splidesLength > 0) {
		var splide = new Splide('.splide-content-header-attach-fade-vr', {
			type: 'fade',
			autoplay: true,
			rewind: true,
			perPage: 1,
			interval: 5000,
			classes: {
				pagination: 'splide__pagination splide__pagination--ttb splide__pagination_content_header',
				arrow: 'd-none splide__arrow',
			},
		});
		splide.mount();
	}

	if ($('.ps').length > 0) {
		const ps = new
			PerfectScrollbar('.ps', {
				wheelSpeed: 0.75,
				wheelPropagation: true,
			});
	}

	$('.btn-minuse').on('click', function () {
		var target = $(this).parent().parent().find('input[type=number]');
		var curr = parseInt(target.val()) - 1;
		var min = parseInt($(this).attr("data-min"));
		target.val(curr < min ? min : curr);
	});

	$('.btn-pluss').on('click', function () {
		var target = $(this).parent().parent().find('input[type=number]');
		var curr = parseInt(target.val()) + 1;
		var max = parseInt($(this).attr("data-max"));
		target.val(curr > max ? max : curr);
	});

	$('.woocommerce .quantity .qty').on('keydown', function (e) {
		var val = parseInt($(this).val());
		if (val <= 0 || val >= 1000) {
			e.preventDefault();
		}
	});

	window.customOnScrollSingleton = new window.customOnScroll();
})();