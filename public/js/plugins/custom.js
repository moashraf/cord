$(document).ready(function() {
    $(".countarup_area").length && $(".counter").counterUp({
            delay: 20,
            time: 400
        }),
        function() {
            if ($("#parallax").length) {
                var e = document.getElementById("parallax");
                new Parallax(e)
            }
        }(), $("ul.navi-level-1 li").on("mouseenter", function() {
            $(this).children("ul.navi-level-2").addClass("open-navi-2 animated fadeInUp")
        }), $("ul.navi-level-1 li").on("mouseleave", function() {
            $(this).children("ul.navi-level-2").removeClass("open-navi-2 animated fadeInUp")
        }), $("#mobile-menu").mobileMenu({
            MenuWidth: 250,
            SlideSpeed: 400,
            WindowsMaxWidth: 991,
            PagePush: !1,
            FromLeft: !1,
            Overlay: !0,
            CollapseMenu: !0,
            ClassName: "mobile-menu"
        });
    $(window).on("scroll", function() {
        $(this).scrollTop() > 450 ? $("#to-the-top").fadeIn(500) : $("#to-the-top").fadeOut(500)
    }), $("#to-the-top").on("click", function(e) {
        return e.preventDefault(), $("html, body").animate({
            scrollTop: 0
        }, 500), !1
    }), $(window).load(function() {
        $(".mCustomScrollbar").mCustomScrollbar({
            scrollInertia: 400
        })
    }), (new WOW).init();
    skrollr.init({
        forceHeight: !1,
        mobileCheck: function() {
            return !1
        }
    })
}), $(document).ready(function() {
    $(".myImg").click(function() {
        var e = $(this).attr("src");
        $(".popupsrc").attr("src", e), $(".popup-overlay").toggleClass("none")
    }), $(".popup-overlay").click(function() {
        $(".popup-overlay").toggleClass("none")
    })
});

    $(".sub").hover(function () {
        $(".dropdown").toggleClass("none");
    })