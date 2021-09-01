<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" type="image/x-icon" href="/images/icon-logo-cfep.png">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
<style>
    .cookieConsentContainer {
        z-index: 999;
        width: 350px;
        min-height: 20px;
        box-sizing: border-box;
        padding: 30px 30px 30px 30px;
        background: rgb(3, 92, 148);
        overflow: hidden;
        position: fixed;
        bottom: 30px;
        right: 30px;
        display: none
    }

    .cookieConsentContainer .cookieTitle h3 {
        font-family: OpenSans, arial, sans-serif;
        color: #fff;
        font-size: 22px;
        line-height: 20px;
        display: block
    }

    .cookieConsentContainer .cookieDesc p {
        margin: 0;
        padding: 0;
        font-family: OpenSans, arial, sans-serif;
        color: #fff;
        font-size: 13px;
        line-height: 20px;
        display: block;
        margin-top: 10px
    }

    .cookieConsentContainer .cookieDesc a {
        font-family: OpenSans, arial, sans-serif;
        color: #fff;
        text-decoration: underline
    }

    .cookieConsentContainer .cookieDesc a:hover {
        color: #aaa;
    }

    .cookieConsentContainer .cookieButton a {
        display: inline-block;
        font-family: OpenSans, arial, sans-serif;
        color: #fff;
        font-size: 14px;
        font-weight: 700;
        margin-top: 14px;
        background: rgb(3, 79, 126);
        box-sizing: border-box;
        padding: 15px 24px;
        text-align: center;
        transition: background .3s;
        border: 1px solid rgb(3, 79, 126)
    }

    .cookieConsentContainer .cookieButton a:hover {
        cursor: pointer;
        background: rgb(3, 79, 126);
        color: #fff;
        border-color: #fff;
    }

    @media (max-width:980px) {
        .cookieConsentContainer {
            bottom: 0 !important;
            left: 0 !important;
            width: 100% !important
        }
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>

<script>
    $(document).ready(function($) {
        $('input[data-mask="date"]').mask('00/00/0000');
        $('input[data-mask="cep"]').mask('00000-000');
        $('input[data-mask="rg"]').mask('000.000.000');
        $('input[data-mask="phone_cel"]').mask('(00) 00000-0000');
        $('input[data-mask="phone"]').mask('(00) 0000-0000');
        $('input[data-mask="email"]').mask("A", {
            translation: {
                "A": {
                    pattern: /[\w@\-.+]/,
                    recursive: true
                }
            }
        });
        $('.mixed').mask('AAA 000-S0S');
        $('input[data-mask="cpf"]').mask('000.000.000-00', {
            reverse: true
        });
        $('input[data-mask="cnpj"]').mask('00.000.000/0000-00', {
            reverse: true
        });
        $('.money').mask('000.000.000.000.000,00', {
            reverse: true
        });
    });
</script>

<script>
    var purecookieTitle = "Cookies",
        purecookieDesc = "Ao acessar este site, você aceita automaticamente o uso de cookies.",
        purecookieLink =
        '<a href="#" target="_blank">Política de Privacidade</a>.',
        purecookieButton = "Concordo";

    function pureFadeIn(e, o) {
        var i = document.getElementById(e);
        i.style.opacity = 0, i.style.display = o || "block",
            function e() {
                var o = parseFloat(i.style.opacity);
                (o += .02) > 1 || (i.style.opacity = o, requestAnimationFrame(e))
            }()
    }

    function pureFadeOut(e) {
        var o = document.getElementById(e);
        o.style.opacity = 1,
            function e() {
                (o.style.opacity -= .02) < 0 ? o.style.display = "none" : requestAnimationFrame(e)
            }()
    }

    function setCookie(e, o, i) {
        var t = "";
        if (i) {
            var n = new Date;
            n.setTime(n.getTime() + 24 * i * 60 * 60 * 1e3), t = "; expires=" + n.toUTCString()
        }
        document.cookie = e + "=" + (o || "") + t + "; path=/"
    }

    function getCookie(e) {
        for (var o = e + "=", i = document.cookie.split(";"), t = 0; t < i.length; t++) {
            for (var n = i[t];
                " " == n.charAt(0);) n = n.substring(1, n.length);
            if (0 == n.indexOf(o)) return n.substring(o.length, n.length)
        }
        return null
    }

    function eraseCookie(e) {
        document.cookie = e + "=; Max-Age=-99999999;"
    }

    function cookieConsent() {
        getCookie("purecookieDismiss") || (document.body.innerHTML +=
            '<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><h3>' +
            purecookieTitle + '</h3></div><div class="cookieDesc"><p>' + purecookieDesc + " " + purecookieLink +
            '</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">' + purecookieButton +
            "</a></div></div>", pureFadeIn("cookieConsentContainer"))
    }

    function purecookieDismiss() {
        setCookie("purecookieDismiss", "1", 7), pureFadeOut("cookieConsentContainer")
    }

    window.onload = function() {
        cookieConsent()
    };
</script>

<script src="{{ asset('js/qrcode.min.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>

<title>CFEP - Conselho Federal de Educadores e Pedagogos</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
