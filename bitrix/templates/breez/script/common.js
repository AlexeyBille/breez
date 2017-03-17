$(function() {

    $('.slider').slick({
        dots: true,
        prevArrow:'<i class="slick-prev fa fa-angle-left"></i>',
        nextArrow:'<i class="slick-next fa fa-angle-right"></i>'
    });
    $('.best-price').children('.row').slick({
        prevArrow: '#best-price-arrow-left',
        nextArrow: '#best-price-arrow-right',

        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,

                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    })
    $('.featured-product').children('.row').slick({
        prevArrow: '#featured-product-arrow-left',
        nextArrow: '#featured-product-arrow-right',

        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,

                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    })

});
