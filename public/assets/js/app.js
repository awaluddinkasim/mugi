!function (a) {
    "use strict";
    var e, t, n, r = localStorage.getItem("minia-language"), o = "en";
    function i(t) {
        document.getElementById("header-lang-img") && ("en" == t ? document.getElementById("header-lang-img").src = "assets/images/flags/us.jpg" : "sp" == t ? document.getElementById("header-lang-img").src = "assets/images/flags/spain.jpg" : "gr" == t ? document.getElementById("header-lang-img").src = "assets/images/flags/germany.jpg" : "it" == t ? document.getElementById("header-lang-img").src = "assets/images/flags/italy.jpg" : "ru" == t && (document.getElementById("header-lang-img").src = "assets/images/flags/russia.jpg"), localStorage.setItem("minia-language", t), null == (r = localStorage.getItem("minia-language")) && i(o), a.getJSON("assets/lang/" + r + ".json", function (t) {
            a("html").attr("lang", r), a.each(t, function (t, e) {
                "head" === t && a(document).attr("title", e.title), a("[data-key='" + t + "']").text(e);
            });
        }));
    }
    function s() {
        var t = document.querySelectorAll(".counter-value");
        t.forEach(function (r) {
            !function t() {
                var e = +r.getAttribute("data-target"), a = +r.innerText, n = e / 250;
                n < 1 && (n = 1), a < e ? (r.innerText = (a + n).toFixed(0), setTimeout(t, 1)) : r.innerText = e;
            }();
        });
    }
    function d() {
        for (var t = document.getElementById("topnav-menu-content").getElementsByTagName("a"), e = 0, a = t.length; e < a; e++) t[e] && t[e].parentElement && "nav-item dropdown active" === t[e].parentElement.getAttribute("class") && (t[e].parentElement.classList.remove("active"), t[e].nextElementSibling && t[e].nextElementSibling.classList.remove("show"));
    }
    function c() {
        document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || a("body").removeClass("fullscreen-enable");
    }
    a("#side-menu").metisMenu(), s(), e = document.body.getAttribute("data-sidebar-size"), a(window).on("load", function () {
        a(".switch").on("switch-change", function () {
            toggleWeather();
        }), 1024 <= window.innerWidth && window.innerWidth <= 1366 && (document.body.setAttribute("data-sidebar-size", "sm"));
    }), a("#vertical-menu-btn").on("click", function (t) {
        t.preventDefault(), a("body").toggleClass("sidebar-enable"), 992 <= a(window).width() && (null == e ? null == document.body.getAttribute("data-sidebar-size") || "lg" == document.body.getAttribute("data-sidebar-size") ? document.body.setAttribute("data-sidebar-size", "sm") : document.body.setAttribute("data-sidebar-size", "lg") : "md" == e ? "md" == document.body.getAttribute("data-sidebar-size") ? document.body.setAttribute("data-sidebar-size", "sm") : document.body.setAttribute("data-sidebar-size", "md") : "sm" == document.body.getAttribute("data-sidebar-size") ? document.body.setAttribute("data-sidebar-size", "lg") : document.body.setAttribute("data-sidebar-size", "sm"));
    }), a("#sidebar-menu a").each(function () {
        var t = window.location.href;
        this.href == t && (a(this).addClass("active"), a(this).parent().addClass("mm-active"), a(this).parent().parent().addClass("mm-show"), a(this).parent().parent().prev().addClass("mm-active"), a(this).parent().parent().parent().addClass("mm-active"), a(this).parent().parent().parent().parent().addClass("mm-show"), a(this).parent().parent().parent().parent().parent().addClass("mm-active"));
    }), a(document).ready(function () {
        var t;
        0 < a("#sidebar-menu").length && 0 < a("#sidebar-menu .mm-active .active").length && (300 < (t = a("#sidebar-menu .mm-active .active").offset().top) && (t -= 300, a(".vertical-menu .simplebar-content-wrapper").animate({ scrollTop: t }, "slow")));
    }), a(".navbar-nav a").each(function () {
        var t = window.location.href.split(/[?#]/)[0];
        this.href == t && (a(this).addClass("active"), a(this).parent().addClass("active"), a(this).parent().parent().addClass("active"), a(this).parent().parent().parent().addClass("active"), a(this).parent().parent().parent().parent().addClass("active"), a(this).parent().parent().parent().parent().parent().addClass("active"), a(this).parent().parent().parent().parent().parent().parent().addClass("active"));
    }), a('[data-toggle="fullscreen"]').on("click", function (t) {
        t.preventDefault(), a("body").toggleClass("fullscreen-enable"), document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }),  Waves.init(), a("#checkAll").on("change", function () {
        a(".table-check .form-check-input").prop("checked", a(this).prop("checked"));
    }), a(".table-check .form-check-input").change(function () {
        a(".table-check .form-check-input:checked").length == a(".table-check .form-check-input").length ? a("#checkAll").prop("checked", true) : a("#checkAll").prop("checked", false);
    });
}(jQuery), feather.replace();
