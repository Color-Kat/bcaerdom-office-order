@extends('main')
@section('title', 'Контактная информация | Бизнес-центр Аэродом')
@section('content')

    <!-- CONTACTS -->
    <section class="contacts-section default-page default-section_shadow-bottom block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="bread-crumbs">
                        <li class="bread-crumbs__link" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" title="БЦ Аэродом" href="/" class="">
                                <span itemprop="title">БЦ Аэродом</span>
                            </a>
                        </li>
                        <li class="bread-crumbs__link"> /</li>
                        <li class="bread-crumbs__link bread-crumbs__link_current">Контактная информация | Бизнес-центр
                            Аэродом
                        </li>
                    </ul>
                    <h1>Контакты бизнес-центра Аэродом</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-4">
                    <div class="default-single-contact-element">
                        <span class="default-single-contact-element__name">Адрес:</span>
                        <address class="default-single-contact-element__value"><i class="fa fa-map-marker"
                                                                                  aria-hidden="true"></i> Москва,
                            Ленинградский проспект д. 37к7.</br>Бизнес-центр Аэродом.
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="default-single-contact-element">
                        <span class="default-single-contact-element__name">Телефон:</span>
                        <span class="default-single-contact-element__value"><i class="fa fa-phone"
                                                                               aria-hidden="true"></i> <a
                                href="tel:+74994900592">+7 (499) 490-05-92</a> — отдел аренды</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="default-single-contact-element">
                        <span class="default-single-contact-element__name">E-mail:</span>
                        <span class="default-single-contact-element__value"><i class="fa fa-envelope"
                                                                               aria-hidden="true"></i> <a
                                href="mailto:info@bcaerodom.ru">info@bcaerodom.ru</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts-section__map" id="contacts-section__map_JS">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A63587560d3a77dd48ff463177b4e24497d2ff61035e40397b5a507c553eeeae7&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="contacts-form-block block">
                        <span class="contacts-form-block__title">Оставить заявку на просмотр</span>
                        <form action="/ajax/send-mail" method="get" onsubmit="return false">
                            <div class="contacts-form-block__top-wrapper block" style="float: none">
                                <input type="text" name="name" class="default-input" id="mainname" placeholder="Имя"
                                       required="required">
                                <input type="text" name="telephon" class="default-input phone-mask" id="mainphone"
                                       placeholder="Телефон" required="required">
                                <input type="text" name="email" class="default-input" id="mainemail"
                                       placeholder="E-mail">
                            </div>
                            <textarea class="default-textarea" name="comment" id="maincomment" style="float: none"
                                      placeholder="Сообщение"></textarea>
                            <div><input type="checkbox" required> Отправляя свои данные я соглашаюсь с <a
                                    href="/politica">Политикой обработки персональных данных</a> и <a href="/usersogl">Пользовательским
                                    соглашением</a></div>
                            <br/>
                            <button class="blue-button">Отправить<i class="icon icon-arrow-right-white"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

@endsection
