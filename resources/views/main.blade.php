<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>
    <!-- JQUERY-->
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>--}}
    <meta name="description" content="Аренда и продажа офисов класса А в бизнес-центре Аэродом на Севере Москвы.">
    <meta name="keywords" content="бц Аэродом, Ленинградский проспект, офис в Хорошевском районе">

    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/imask"></script>

    {{--    <link href="/public/css/bootstrap.css" rel="stylesheet">--}}
    {{--    <link href="/public/css/main.css" rel="stylesheet">--}}

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
        })(window, document, 'script', 'cloud.roistat.com', 'deaaddadea3ea46f61889be0950ce214');
    </script>
    <!-- Roistat Counter End -->

</head>
<body>
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
                        <img src="/public/images/logo.png" alt="БЦ Аэродом">
                        <br>
                        <span>Аэродом</span>
                    </div>
                    <span class="logo__text">Современный<br>комплекс класса А</span>
                </a>
            </div>
            <div class="col-md-7 col-sm-1">
                <nav class="navigation navigation_JS">
                    <ul class="header-menu">
                        @if ($_SERVER['REQUEST_URI'] == '/')
                            <li class="header-menu__link header-menu__link_active">
                        @else
                            <li class="header-menu__link">
                                @endif
                                <a href="/" itemprop="url">Главная</a>
                            </li>

                            @if (isset($sign) && $sign->flag_header != 1)
                                @if ($_SERVER['REQUEST_URI'] == '/rent')
                                    <li class="header-menu__link header-menu__link_active">
                                @else
                                    <li class="header-menu__link">
                                        @endif
                                        <a href="/rent" itemprop="url">Аренда офисов</a>
                                    </li>
                                @endif

                                @if (isset($sign_1) && $sign_1->flag_header != 1)
                                    @if ($_SERVER['REQUEST_URI'] == '/sale')
                                        <li class="header-menu__link header-menu__link_active">
                                    @else
                                        <li class="header-menu__link">
                                            @endif
                                            <a href="/sale" itemprop="url">Продажа офисов</a>
                                            @endif
                                        </li>

                                        @if ($_SERVER['REQUEST_URI'] == '/about')
                                            <li class="header-menu__link header-menu__link_active">
                                        @else
                                            <li class="header-menu__link">
                                                @endif
                                                <a href="/about" itemprop="url">О бизнес-центре</a>
                                            </li>

                                            @if ($_SERVER['REQUEST_URI'] == '/contacts')
                                                <li class="header-menu__link header-menu__link_active">
                                            @else
                                                <li class="header-menu__link">
                                                    @endif
                                                    <a href="/contacts" itemprop="url">Контакты</a>
                                                </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-2 col-sm-3 header__contacts">
                <div class="small-contacts-block">
                    <a href="tel:+74994900592" class="default-contact-phone">+7 (499) 490-05-92</a>
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
                        <img src="/public/images/logo-white.png" alt="Бизнес-центр Аэродом">
                        <br>
                        <span>Аэродом</span>
                    </div>
                    <span class="logo__text">Современный<br>комплекс класса А</span>
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

                        <li class="header-menu__link">
                            <a href="/about">О бизнес-центре</a>
                        </li>
                        <li class="header-menu__link">
                            <a href="/contacts">Контакты</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="col-md-2 col-sm-5 footer__contacts">
                <div class="small-contacts-block">
                    <a href="tel:+74994900592" class="default-contact-phone">+7 (499) 490-05-92</a>
                    <a href="#" class="default-contact-call JS-get-call-popup-open">Обратный звонок</a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="navigation navigation_footer">
                    <ul class="header-menu">
                        <li class="header-menu__link"><a href="/politica">Политика обработки персональных данных</a>
                        </li>
                        <li class="header-menu__link"><a href="/usersogl">Пользовательское соглашение</a></li>
                    </ul>
                </nav>
                <p class="footer__copy">&copy; 2023 БЦ АЭРОДОМ. Все права защищены</p>

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
                <form action="/ajax/send-mail" method="post">
                    <input type="text" name="name" class="default-input" id="namesend" placeholder="Имя"
                           required="required">
                    <input type="text" name="telephon" class="default-input phone-mask" id="emailsend"
                           placeholder="Телефон"
                           required="required">
                    <input type="hidden" name='area' value='0' class="area"/>
                    <input type="hidden" name='crmId' value='0' class="crmId"/>
                    <input type="hidden" name='typedeal' value='0' class="typedeal"/>
                    <div><input type="checkbox" required> Отправляя свои данные я соглашаюсь с <a href="/politica">Политикой
                            обработки персональных данных</a> и <a href="/usersogl">Пользовательским соглашением</a>
                    </div>
                    <br/>
                    <button class="blue-button">Отправить<i class="icon icon-arrow-right-white"></i>
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

{{--<script src="/public/js/jquery.js"></script>--}}
{{--<script src="/public/js/slick.min.js"></script>--}}
{{--<script src="/public/js/main.js"></script>--}}

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
