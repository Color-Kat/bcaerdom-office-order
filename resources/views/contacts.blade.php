@extends('main')
@section('title', 'Контактная информация | Бизнес-центр Башня Федерация')
@section('content')

    <!-- CONTACTS -->
    <section class="contacts-section default-page default-section_shadow-bottom block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="bread-crumbs">
                        <li class="bread-crumbs__link" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" title="БЦ Башня Федерация" href="/" class="">
                                <span itemprop="title">БЦ Башня Федерация</span>
                            </a>
                        </li>
                        <li class="bread-crumbs__link"> /</li>
                        <li class="bread-crumbs__link bread-crumbs__link_current">
                            Контактная информация | Бизнес-центр Башня Федерация
                        </li>
                    </ul>
                    <h1>Контакты бизнес-центра Башня Федерация</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-sm-4">
                    <div class="default-single-contact-element">
                        <span class="default-single-contact-element__name">Адрес:</span>
                        <address class="default-single-contact-element__value">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Москва, Пресненская набережная, 12</br>Башня Федерация
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="default-single-contact-element">
                        <span class="default-single-contact-element__name">Телефон:</span>
                        <span class="default-single-contact-element__value">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:{{env('SETTINGS_PHONE')}}">{{env('SETTINGS_PHONE')}}</a> — отдел аренды
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="default-single-contact-element">
                        <span class="default-single-contact-element__name">E-mail:</span>
                        <span class="default-single-contact-element__value">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:info@bcaerodom.ru">info@fed-tower.ru</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{--    Map    --}}
        <div class="contacts-section__map" id="contacts-section__map_JS">
             <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa0e32d6ad41a1805ab2f6926ec5673fb5b85754685fe79d4e99a3e1bf85d197e&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="contacts-form-block block">
                        <span class="contacts-form-block__title">Оставить заявку на просмотр</span>
                        <form action="/ajax/send-mail" method="get" onsubmit="return false">
                            <div class="contacts-form-block__top-wrapper block" style="float: none">
                                <input
                                    type="text"
                                    name="name"
                                    class="default-input"
                                    id="mainname"
                                    placeholder="Имя"
                                    required="required"
                                >

                                <input
                                    type="text"
                                    name="telephon"
                                    class="default-input phone-mask"
                                    id="mainphone"
                                    placeholder="Телефон" required="required"
                                >

                                <input
                                    type="text"
                                    name="email"
                                    class="default-input"
                                    id="mainemail"
                                    placeholder="E-mail"
                                >
                            </div>

                            <textarea
                                class="default-textarea"
                                name="comment"
                                id="maincomment"
                                style="float: none"
                              placeholder="Сообщение"
                            ></textarea>

                            <div>
                                <input type="checkbox" required>
                                Отправляя свои данные я соглашаюсь с <a href="/politica">Политикой обработки персональных данных</a> и <a href="/usersogl">Пользовательским соглашением</a>
                            </div>
                            <br/>
                            <button class="blue-button">
                                Отправить<i class="icon icon-arrow-right-white"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

@endsection
