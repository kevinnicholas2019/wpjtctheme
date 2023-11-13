(function () {
	window.$ = jQuery;
	window.Splide = require("@splidejs/splide").Splide;
	require("@fortawesome/fontawesome-free");
	require('@popperjs/core');
	window.bootstrap = require('bootstrap');

	window.customOnScroll = function () {
		var raf = window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			window.oRequestAnimationFrame;
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

			return offset >= offsetKena ? kena() : tidakKena();
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
	var splide = new Splide('.splide-content-header-attach-fade-vr', {
		type: 'fade',
		autoplay: true,
		rewind: true,
		perPage: 1,
		// cover: true,
		// autoWidth: true,
		// lazyLoad: 'nearby',
		classes: {
			pagination: 'splide__pagination splide__pagination--ttb splide__pagination_content_header',
			arrow: 'd-none splide__arrow',
		},
	});
	splide.mount();

	window.customOnScrollSingleton = new window.customOnScroll();
})();