$(document).ready(function () {
    // zoom images 
    $("#popup .single-img .slick-current").click(function () {
        $("#popup .single-img .slick-current img").imageZoom({
            zoom: 200
        });
    });

    var checkDisplay = sessionStorage.getItem('checkPopUpHomeDisplay');
    if (checkDisplay === null) {
        setTimeout(function () {
            $(".bg-one-load").css("display", "block");
            $(".home-popup").show("slow");
        },10000);
    }

     //storage popup
    $(".home-popup button").click(function () {
        sessionStorage.setItem('checkPopUpHomeDisplay', 'true');
    });

    $(".bg-one-load").click(function () {
        sessionStorage.setItem('checkPopUpHomeDisplay', 'true');
    });

    // slider banner and fix height banner
    $('.banner-home').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
        slidesToScroll: 1,
    });
    var widthBanner = $(".banner-home").width();
    var heightBanner = widthBanner * 0.08906;
    /*    $(".banner-home .item-banner").css("height", "" + heightBanner + "px");*/
    // slider khách hàng của chúng tôi and fix height image slider item
    $('.customer-talk-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1640,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    var widthSlider = $(".customer-talk-slider .slick-slide").width();
    var heightSlider = widthSlider * 0.8263;
    $(".customer-talk-slider .slick-slide .image").css("height", heightSlider + "px");

    // slider đối tác

    $('.partner-slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1640,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('#product-service-mobile').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000
    });


    $(".open-menu-home").click(function () {
        $(".menu").slideToggle("slow");
        $("#close-main").toggle();
        $("#open-main").toggle();
        $(".nav_overlay").toggle();
        $(".menu-header").css("position", "fixed");
    });
    $(".open-menu-left").click(function () {
        $(".menu-left").slideToggle("slow");
        $("#close-main-left").toggle();
        $("#open-main-left").toggle();
    });
    $(".open-menu").click(function () {
        $(".service-nav ul").toggle("slow");
        $("#close-menu-left").toggle();
        $("#open-menu-left").toggle();
    });
    $(".toggle").click(function () {
        $("#close-main-left").click();
    })
});

$(document).ready(function () {
    var dataID = $(".product-service-item.active").data("id");
    $('.product-service-item-content[data-id*="' + dataID + '"]').css("display", "flex");

    $(".product-service-item").click(function () {
        $(".product-service-item.active").removeClass("active");
        $(this).addClass("active");
        $(".product-service-item-content").hide();
        var dataID = $(this).data("id");
        $('.product-service-item-content[data-id*="' + dataID + '"]').css("display", "flex");
    })

    $(".home-image-item").click(function () {
        var linkVideo = $(this).attr("data-video");
        var newImg = $(".big-img div").html();
        var source = "<video controls autoplay><source src='" + linkVideo + "'></video><div></div>";
        $(this).attr("data-video", $(".big-img source").attr("src"));
        $(".big-img").html(source);
        var oldImg = $(this).html()
        $(".big-img div").html(oldImg);
        $(this).html(newImg);
    });
})

$(window).resize(function () {
    var widthScreen = $(window).width();
    if (widthScreen < 576) {
        $("#table-contact .item-SDT").removeClass("col-2").addClass("col-4");
        $("#table-contact .item-ADD").removeClass("col-7").addClass("col-4");
        $("#table-contact .item-CNKT").removeClass("col-2").addClass("col-3");
    }
    if (widthScreen > 576) {
        $("#table-contact .item-SDT").removeClass("col-4").addClass("col-2");
        $("#table-contact .item-ADD").removeClass("col-4").addClass("col-7");
        $("#table-contact .item-CNKT").removeClass("col-3").addClass("col-2");
    }
    //  set height img
    //var serviceImgWidth = $(".service-design-item img").width();
    //$(".service-design-item img").css("height", "" + serviceImgWidth * 256 / 310 + "px");
    //var designImgWidth = $(".single-img img").width();
    //$(".single-img img").css("height", "" + designImgWidth * 637 / 1040 + "px");
});
$(document).ready(function () {
    var widthScreen = $(window).width();
    if (widthScreen < 576) {
        $("#table-contact .item-SDT").removeClass("col-2").addClass("col-4");
        $("#table-contact .item-ADD").removeClass("col-7").addClass("col-4");
        $("#table-contact .item-CNKT").removeClass("col-2").addClass("col-3");
    }
    if (widthScreen > 576) {
        $("#table-contact .item-SDT").removeClass("col-4").addClass("col-2");
        $("#table-contact .item-ADD").removeClass("col-4").addClass("col-7");
        $("#table-contact .item-CNKT").removeClass("col-3").addClass("col-2");
    }    

    //$(".search-nav li").click(function () {
    //    setTimeout(function () {
    //        var width = $(".view-list-search a").width();
    //        console.log(width);
    //        $(".view-list-search a .item-image").css("height", "" + width * 0.5 + "px");
    //    }, 300)
    //})
});

// Active link
$(document).ready(function () {
    var element = $(".banner a").length * 2 - 1;
    var listhref = [];
    for (var i = 1; i < element + 1; i++) {
        if (i % 2 == 1) {
            var href = $('.banner a:nth-child(' + i + ')').attr("href");
            listhref.push(href);
        }
    }
    var menuElement = $(".menu_parent li.parent-li");
    for (var i = 0; i < menuElement.length; i++) {
        var current = $(menuElement)[i];
        if (window.location.pathname == $(current).find("a").attr("href")) {
            $(current).addClass("active")
        }
        if ($(current).find("ul").length > 0) {
            $(current).find("a[href='" + listhref[0] + "']").parent().addClass("active");
        }
    }
    
    $('.service-nav').find("a[href='" + listhref[listhref.length - 1] + "']").parent().addClass("active");

    $('.menu ul.menu-lv1 li').removeClass("active");
    if (listhref.length > 1) {
        $('.menu-lv1').find("a[href='" + listhref[1] + "']").parent().addClass("active");
    }
    $(".timeline ol>li:nth-child(3)").addClass("active");
    $(".timeline ol>li").click(function () {
        $(".timeline .active").removeClass("active");
        $(this).addClass("active");
    });
})

// Resize menu

$(window).resize(function () {
    var windowWidth = $(window).width();
   /* $(".item-banner").css("height", "" + windowWidth * 9 / 100 + "px");*/
    if (windowWidth > 1200) {
        $(".open-menu-home").hide();
        $(".open-menu-left").hide();
        $(".open-menu").hide();
        $(".menu").css("display", "inline-block");
        $(".menu-left").css("display", "inline-block");
        $(".service-nav ul").css("display", "flex");

    }
    else {
        $("#open-main").show();
        $("#open-main-left").show();
        $("#open-menu-left").show();
        $("#close-main").hide();
        $("#close-main-left").hide();
        $("#close-menu-left").hide();
        $(".menu").css("display", "none");
        $(".menu-left").css("display", "none");
        $(".service-nav ul").css("display", "none");
    }
})

// fix đè menu

$(document).ready(function () {
    $("#open-main").click(function () {
        $("#close-main-left").hide();
        $("#open-main-left").show();
        $(".menu-left").hide();
        $("#close-menu-left").hide();
        $("#open-menu-left").show();
        $(".service-nav ul").hide();
    });
    $("#open-main-left").click(function () {
        $("#close-main").hide();
        $("#open-main").show();
        $(".menu").hide();
        $("#close-menu-left").hide();
        $("#open-menu-left").show();
        $(".service-nav ul").hide();
    })
    var textIcon = $(".detail-body p img").closest("p");
    textIcon.each(function (index, e) {
        if ($(e).text() == "") {
            $(e).css("text-align", "center")
        }  
    });

    var textIcondiv = $(".detail-body div img").closest("div");
    textIcondiv.each(function (index, e) {
        if ($(e).text() == "") {
            $(e).css("text-align", "center")
        }
    });
})
