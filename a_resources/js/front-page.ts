// --breakpoint-sm: 576px;
// 	--breakpoint-md: 768px;
// 	--breakpoint-lg: 992px;
// 	--breakpoint-xl: 1200px;

(function () {
    //SPLIDE
    var splideBanner = new Splide('.splide-banner', {
        perPage: 1,
        type: 'loop',
        autoplay: true,
        cover: true,
        height: '302px',
        lazyLoad: 'nearby',
    });

    var splideBrand = new Splide('.splide-brand', {
        perPage: 6,
        type: 'loop',
        autoplay: true,
        cover: true,
        height: '8rem',
        gap: '1rem',
        lazyLoad: 'nearby',
        breakpoints: {
            768: {
                perPage: 1,

            },
            992: {
                perPage: 3,
            },
        },
    });

    var splideShopChooseCategory = new Splide('.content-shop-choose-category', {
        perPage: 6,
        cover: true,
        autoWidth: false,
        gap: '1rem',
        classes: {
            pagination: 'd-none',
            arrow: 'd-lg-none splide__arrow',
        },
        breakpoints: {
            992: {
                perPage: 3,
                focus: 'center',
                type: 'loop',
            },
        },
    });

    splideBanner.mount();
    splideBrand.mount();
    splideShopChooseCategory.mount();
    splideShopChooseCategory.isOnAjax = false;
    splideShopChooseCategory.isOnAjaxWhenScroll = false;

    splideShopChooseCategory.onAjax = function (s) {
        var listItem = $(".content-shop-list-item");
        var listItemLoading = $(".content-shop-list-item-loading");
        var onInit = function () {
            listItem.addClass('d-none');
            listItemLoading.addClass('d-none');
            splideShopChooseCategory.isOnAjax = true;
        };
        var onLoad = function () {
            listItem.addClass('d-none');
            listItemLoading.removeClass('d-none');
        };
        var onDone = function () {
            listItem.removeClass('d-none');
            listItemLoading.addClass('d-none');
            splideShopChooseCategory.isOnAjax = false;
        };
        var thisEl = s ? s.slide : splideShopChooseCategory.Components.Slides.getAt(0);
        thisEl = $(thisEl);
        var data = {
            'action': 'get_products_by_cat',
            'cats': [thisEl.attr('data-slug')],
            'security': wp.security,
        };

        onInit();
        onLoad();
        $.post(wp.ajaxurl, data, function (response) {
            listItem.html(response);
        }).error(function () {
            onDone();
            alert("ERR");
        }).success(function () {
            onDone();
        });
    };
    splideShopChooseCategory.on('active', splideShopChooseCategory.onAjax);
    splideShopChooseCategory.on('click', function (s) {
        if (!splideShopChooseCategory.isOnAjax) {
            var Slides = splideShopChooseCategory.Components.Slides;
            var Controller = splideShopChooseCategory.Components.Controller;
            var clickedSlide = Slides.getAt(s.index);
            $(splideShopChooseCategory.root).find("a").removeClass('is-active');
            $(clickedSlide.slide).addClass('is-active');
            Controller.go(s.index, false);
            splideShopChooseCategory.onAjax(clickedSlide);
        }
    });

    window.customOnScrollSingleton.scrollAbles.push(function (offset: number) {
        var hT = $('#content-shop-start-pos').offset().top,
            hH = $('#content-shop-start-pos').outerHeight(),
            wH = $(window).height();
        const offsetKena = (hT + hH - wH) + 95;

        var kena = function () {
            // console.log("KENA");
            if (!splideShopChooseCategory.isOnAjaxWhenScroll && !splideShopChooseCategory.isOnAjax) {
                splideShopChooseCategory.onAjax();
                splideShopChooseCategory.isOnAjaxWhenScroll = true;
            }
        };

        var tidakKena = function () {
            // console.log("TIDAK KENA");
        };
        // console.log(offset, offsetKena);
        return offset >= offsetKena ? kena() : tidakKena();
    });
})();