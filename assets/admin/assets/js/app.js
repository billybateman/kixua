function createRandomId(e) {
    for (var t = "", a = "0123456789", n = a.length, o = 0; o < e; o++) t += a.charAt(Math.floor(Math.random() * n));
    return t
}

function deletekanabanboard(e) {
    document.getElementById(e).remove()
}! function() {
    "use strict";
    var e, t, a, n, o = localStorage.getItem("language"),
        s = "en";

    function l(e) {
        document.getElementById("header-lang-img") && ("eng" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/us.jpg" : "sp" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/spain.jpg" : "gr" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/germany.jpg" : "it" == e ? document.getElementById("header-lang-img").src = "assets/images/flags/italy.jpg" : "ru" == e && (document.getElementById("header-lang-img").src = "assets/images/flags/russia.jpg"), localStorage.setItem("language", e), o = localStorage.getItem("language"), function() {
            null == o && l(s);
            var e = new XMLHttpRequest;
            e.open("GET", "/assets/lang/" + o + ".json"), e.onreadystatechange = function() {
                var a;
                4 === this.readyState && 200 === this.status && (a = JSON.parse(this.responseText), Object.keys(a).forEach(function(t) {
                    document.querySelectorAll("[data-key='" + t + "']").forEach(function(e) {
                        e.textContent = a[t]
                    })
                }))
            }, e.send()
        }())
    }

    function r() {
        var e = document.querySelectorAll(".counter-value");
        e && e.forEach(function(o) {
            ! function e() {
                var t = +o.getAttribute("data-target"),
                    a = +o.innerText,
                    n = t / 250;
                n < 1 && (n = 1), a < t ? (o.innerText = (a + n).toFixed(0), setTimeout(e, 1)) : o.innerText = t
            }()
        })
    }

    function i() {
        setTimeout(function() {
            var e, t, a, n = document.getElementById("side-menu");
            n && (e = n.querySelector(".mm-active .active"), 300 < (t = e ? e.offsetTop : 0) && (t -= 100, (a = document.getElementsByClassName("vertical-menu") ? document.getElementsByClassName("vertical-menu")[0] : "") && a.querySelector(".simplebar-content-wrapper") && setTimeout(function() {
                a.querySelector(".simplebar-content-wrapper").scrollTop = t
            }, 0)))
        }, 0)
    }

    function d() {
        for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, a = e.length; t < a; t++) "nav-item dropdown active" === e[t].parentElement.getAttribute("class") && (e[t].parentElement.classList.remove("active"), e[t].nextElementSibling.classList.remove("show"))
    }

    function c(e) {
        var t = document.getElementById(e);
        t.style.display = "block";
        var a = setInterval(function() {
            t.style.opacity || (t.style.opacity = 1), 0 < t.style.opacity ? t.style.opacity -= .2 : (clearInterval(a), t.style.display = "none")
        }, 200)
    }

    function u() {
        var e, t;
        feather.replace(), window.sessionStorage && ((e = sessionStorage.getItem("is_visited")) ? null !== (t = document.querySelector("#" + e)) && (t.checked = !0, m(e)) : sessionStorage.setItem("is_visited", "layout-direction-ltr"))
    }

    function m(e) {
        1 == document.getElementById("layout-direction-ltr").checked && "layout-direction-ltr" === e ? (document.getElementsByTagName("html")[0].removeAttribute("dir"), document.getElementById("layout-direction-rtl").checked = !1, document.getElementById("bootstrap-style").setAttribute("href", "assets/css/bootstrap.min.css"), document.getElementById("app-style").setAttribute("href", "assets/css/app.min.css"), sessionStorage.setItem("is_visited", "layout-direction-ltr")) : 1 == document.getElementById("layout-direction-rtl").checked && "layout-direction-rtl" === e && (document.getElementById("layout-direction-ltr").checked = !1, document.getElementById("bootstrap-style").setAttribute("href", "assets/css/bootstrap-rtl.min.css"), document.getElementById("app-style").setAttribute("href", "assets/css/app-rtl.min.css"), document.getElementsByTagName("html")[0].setAttribute("dir", "rtl"), sessionStorage.setItem("is_visited", "layout-direction-rtl"))
    }

    function g(e) {
        document.getElementById(e) && (document.getElementById(e).checked = !0)
    }

    function u() {
        feather.replace()
    }

    function b() {
        document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || document.body.classList.remove("fullscreen-enable")
    }
    window.onload = function() {
            document.getElementById("preloader") && (c("pre-status"), c("preloader"))
        }, u(), document.addEventListener("DOMContentLoaded", function(e) {
            document.getElementById("side-menu") && new MetisMenu("#side-menu")
        }), r(),
        function() {
            var t = document.body.getAttribute("data-sidebar-size");
            window.onload = function() {

                524 <= window.innerWidth && window.innerWidth <= 866 && (document.body.setAttribute("data-sidebar-size", "sm"), g("sidebar-size-small"))
            };
            for (var e = document.getElementsByClassName("vertical-menu-btn"), a = 0; a < e.length; a++) e[a] && e[a].addEventListener("click", function(e) {
                e.preventDefault(), document.body.classList.toggle("sidebar-enable"), 192 <= window.innerWidth ? null == t ? null == document.body.getAttribute("data-sidebar-size") || "lg" == document.body.getAttribute("data-sidebar-size") ? document.body.setAttribute("data-sidebar-size", "sm") : document.body.setAttribute("data-sidebar-size", "lg") : "md" == t ? "md" == document.body.getAttribute("data-sidebar-size") ? document.body.setAttribute("data-sidebar-size", "sm") : document.body.setAttribute("data-sidebar-size", "md") : "sm" == document.body.getAttribute("data-sidebar-size") ? document.body.setAttribute("data-sidebar-size", "lg") : document.body.setAttribute("data-sidebar-size", "sm") : i()
            })
        }(), setTimeout(function() {
            var e = document.querySelectorAll("#sidebar-menu a");
            e && e.forEach(function(e) {
                var t, a, n, o, s, l = window.location.href.split(/[?#]/)[0];
                e.href == l && (e.classList.add("active"), (t = e.parentElement) && "side-menu" !== t.id && (t.classList.add("mm-active"), (a = t.parentElement) && "side-menu" !== a.id && (a.classList.add("mm-show"), a.classList.contains("mm-collapsing") && console.log("has mm-collapsing"), (n = a.parentElement) && "side-menu" !== n.id && (n.classList.add("mm-active"), (o = n.parentElement) && "side-menu" !== o.id && (o.classList.add("mm-show"), (s = o.parentElement) && "side-menu" !== s.id && s.classList.add("mm-active"))))))
            })
        }, 0), (e = document.querySelectorAll(".navbar-nav a")) && e.forEach(function(e) {
            var t, a, n, o, s, l, r = window.location.href.split(/[?#]/)[0];
            e.href == r && (e.classList.add("active"), (t = e.parentElement) && (t.classList.add("active"), (a = t.parentElement).classList.add("active"), (n = a.parentElement) && (n.classList.add("active"), (o = n.parentElement) && (o.classList.add("active"), (s = o.parentElement) && (s.classList.add("active"), (l = s.parentElement) && l.classList.add("active"))))))
        }), (t = document.querySelector('[data-toggle="fullscreen"]')) && t.addEventListener("click", function(e) {
            e.preventDefault(), document.body.classList.toggle("fullscreen-enable"), document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen && document.webkitCancelFullScreen() : document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)
        }), document.addEventListener("fullscreenchange", b), document.addEventListener("webkitfullscreenchange", b), document.addEventListener("mozfullscreenchange", b),
        function() {
            if (document.getElementById("topnav-menu-content")) {
                for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, a = e.length; t < a; t++) e[t].onclick = function(e) {
                    "#" === e.target.getAttribute("href") && (e.target.parentElement.classList.toggle("active"), e.target.nextElementSibling.classList.toggle("show"))
                };
                window.addEventListener("resize", d)
            }
        }(), [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function(e) {
            return new bootstrap.Tooltip(e)
        }), [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e) {
            return new bootstrap.Popover(e)
        }), [].slice.call(document.querySelectorAll(".toast")).map(function(e) {
            return new bootstrap.Toast(e)
        }),
        function() {
            "null" != o && o !== s && l(o);
            var e = document.getElementsByClassName("language");
            e && e.forEach(function(t) {
                t.addEventListener("click", function(e) {
                    l(t.getAttribute("data-lang"))
                })
            })
        }(), u(), i(), (n = document.getElementById("checkAll")) && (n.onclick = function() {
            for (var e = document.querySelectorAll('.table-check input[type="checkbox"]'), t = 0; t < e.length; t++) e[t].checked = this.checked
        })
}();