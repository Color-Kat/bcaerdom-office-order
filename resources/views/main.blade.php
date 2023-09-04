<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>@yield('title')</title>

    <meta name="description" content="Башня Федерация, Москва Сити, БЦ Федерация Восток, БЦ Федерация Запад, Небоскрёб Федерация">
    <meta name="keywords" content="Башня Федерация, Москва Сити, БЦ Федерация Восток, БЦ Федерация Запад, Небоскрёб Федерация">

    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/imask"></script>

    <!--<link href="public/css/custom.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>-->

    <!-- Roistat Counter Start -->
    <script>
        (function (w, d, s, h, id) {
            w.roistatProjectId = id;
            w.roistatHost = h;
            var p = d.location.protocol == "https:" ? "https://" : "http://";
            var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/" + id + "/init?referrer=" + encodeURIComponent(d.location.href);
            var js = d.createElement(s);
            js.charset = "UTF-8";
            js.async = 1;
            js.src = p + h + u;
            var js2 = d.getElementsByTagName(s)[0];
            js2.parentNode.insertBefore(js, js2);
        })(window, document, 'script', 'cloud.roistat.com', '{{env('ROISTAT_SCRIPT_KEY')}}');
    </script>
    <!-- Roistat Counter End -->

</head>
<body>

{{--<div id="g-recaptcha-response">{{env('INVISIBLE_RECAPTCHA_SITEKEY')}}</div>--}}

<!-- HEADER -->
<header class="header block">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 open-hidden-nav">
                <a href="#" class="open-hidden-nav_JS">
                    <i class="icon icon-menu open-hidden-nav__icon"></i>
                    <span class="open-hidden-nav__text">Меню</span>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <a href="/" class="logo">
                    <div class="logo__left">
                        <img src="{{asset('images/logo.png')}}" alt="БЦ Башня Федерация">
                        <br>
                        <span>Башня Федерация</span>
                    </div>
{{--                    <span class="logo__text">Современный<br>комплекс класса А</span>--}}
                </a>
            </div>
            <div class="col-md-7 col-sm-1">
                <nav class="navigation navigation_JS">
                    <ul class="header-menu">
                        <li class="header-menu__link @if ($_SERVER['REQUEST_URI'] == '/') header-menu__link_active @endif">
                            <a href="/" itemprop="url">Главная</a>
                        </li>

                        @if (isset($sign) && $sign->flag_header != 1)
                            <li class="header-menu__link @if ($_SERVER['REQUEST_URI'] == '/rent') header-menu__link_active @endif">
                                <a href="/rent" itemprop="url">Аренда офисов</a>
                            </li>
                        @endif

                        @if (isset($sign_1) && $sign_1->flag_header != 1)
                            <li class="header-menu__link @if ($_SERVER['REQUEST_URI'] == '/sale') header-menu__link_active @endif">
                                <a href="/sale" itemprop="url">Продажа офисов</a>
                            </li>
                        @endif

{{--                        <li class="header-menu__link @if ($_SERVER['REQUEST_URI'] == '/about') header-menu__link_active @endif">--}}
{{--                            <a href="/about" itemprop="url">О бизнес-центре</a>--}}
{{--                        </li>--}}

                        <li class="header-menu__link @if ($_SERVER['REQUEST_URI'] == '/contacts') header-menu__link_active @endif">
                            <a href="/contacts" itemprop="url">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-md-2 col-sm-3 header__contacts">
                <div class="small-contacts-block">
                    <a href="tel:{{env('SETTINGS_PHONE')}}" class="default-contact-phone">{{env('SETTINGS_PHONE')}}</a>
                    <a href="#" class="default-contact-call JS-get-call-popup-open">Обратный звонок</a>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<!-- FOOTER -->
<footer class="footer block">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-5">
                <a href="#" class="logo logo_white">
                    <div class="logo__left">
                        <img src="{{asset('images/logo-white.png')}}" alt="Бизнес-центр Башня Федерация">
                        <br>
                        <span>Башня Федерация</span>
                    </div>
{{--                    <span class="logo__text">Современный<br>комплекс класса А</span>--}}
                </a>
            </div>
            <div class="col-md-7 col-sm-2">
                <nav class="navigation navigation_footer">
                    <ul class="header-menu">
                        <li class="header-menu__link header-menu__link_active">
                            <a href="/">Главная</a>
                        </li>
                        @if (isset($sign) && $sign->flag_footer != 1)
                            <li class="header-menu__link">
                                <a href="/rent">Аренда офисов</a>
                            </li>
                        @endif

                        @if (isset($sign_1) && $sign_1->flag_footer != 1)
                            <li class="header-menu__link">
                                <a href="/sale">Продажа офисов</a>
                            </li>
                        @endif

{{--                        <li class="header-menu__link">--}}
{{--                            <a href="/about">О бизнес-центре</a>--}}
{{--                        </li>--}}
                        <li class="header-menu__link">
                            <a href="/contacts">Контакты</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="col-md-2 col-sm-5 footer__contacts">
                <div class="small-contacts-block">
                    <a href="tel:{{env('SETTINGS_PHONE')}}" class="default-contact-phone">{{env('SETTINGS_PHONE')}}</a>
                    <a href="#" class="default-contact-call JS-get-call-popup-open">Обратный звонок</a>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-12" style="color: #aaaaaa; padding: 16px 15px">
                Обращаем ваше внимание на то, что данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 (2) Гражданского кодекса РФ.
            </div>

            <div class="col-md-12">
                <nav class="navigation_footer" style="padding-top: 24px">
                    <ul class="header-menu" style="gap: 8px; display: flex; flex-wrap: wrap">
                        <li class="header-menu__link text-center">
                            <a href="/politica">Согласие на обработку персональных данных</a>
                        </li>

                        <li class="header-menu__link text-center">
                            <a href="/usersogl">Пользовательское соглашение</a>
                        </li>

                        <li class="header-menu__link text-center">
                            <a href="/privacy-policy">Политика конфиденциальности</a>
                        </li>
                    </ul>
                </nav>

                <p class="footer__copy">© 2023 БЦ Алкон. Все права защищены</p>

                <div id="counter">
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- POPUP -->
<div class="rent-object-popup rent-object-popup_JS default-popup">

</div>

<!-- POPUP -->
<div class="messages-popup_JS default-popup">
    <div class="default-popup__aligner default-popup__aligner_flex">
        <div class="popup-window popup-window_narrow">
            <a href="#" class="popup-window__close popup-window__close_JS">
                <i class="icon icon-close"></i>
            </a>
            <div class="modalcontent"></div>
        </div>
    </div>
</div>

<!-- GET CALL POPUP -->
<div class="get-call-popup get-call_JS default-popup">
    <div class="default-popup__aligner default-popup__aligner_flex">
        <div class="popup-window popup-window_narrow">
            <a href="#" class="popup-window__close popup-window__close_JS">
                <i class="icon icon-close"></i>
            </a>

            <h3>Заказать обратный<br>звонок</h3>

            <div class="modalcontent">
                <form
                    action="/ajax/send-mail"
                    method="post"
                    {{--   Recaptcha library cant detect submit form name  --}}
                    {{--   So we need to define current submit form by name  --}}
                    onsubmit="currentForm = 'getCallPopup';return false"
                >
                    @captcha()

                    <input
                        type="text"
                        name="name"
                        class="default-input"
                        id="namesend"
                        placeholder="Имя"
                        required="required"
                    >

                    <input
                        type="text"
                        name="surname"
                        class="default-input hidden"
                        id="surnamesend"
                        placeholder="Фамилия"
                        value="not_bot"
                        required="required"
                    >

                    <input
                        type="text" name="telephon"
                        class="default-input phone-mask"
                        id="phonesend"
                        placeholder="Телефон"
                        required="required"
                    >

                    <input type="hidden" name='area' value='0' class="area"/>
                    <input type="hidden" name='crmId' value='0' class="crmId"/>
                    <input type="hidden" name='typedeal' value='0' class="typedeal"/>

                    <div>
                        <input type="checkbox" required>
                        Отправляя свои данные я соглашаюсь с <a href="/politica">Политикой обработки персональных данных</a> и <a href="/usersogl">Пользовательским соглашением</a>
                    </div>
                    <br/>
                    <button class="blue-button" type="submit">
                        Отправить<i class="icon icon-arrow-right-white"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .contacts-section__map::after {
        width: auto;
        height: auto;
    }

    .contacts-section__map {

        float: none;
        clear: both;
    }
</style>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


<script>
    const phoneInputs = document.querySelectorAll('.phone-mask');
    const maskOptions = {
        mask: '+{7} (000) 000-00-00'
    };

    phoneInputs.forEach((input) => IMask(input, maskOptions));

</script>

</body>
</html>
