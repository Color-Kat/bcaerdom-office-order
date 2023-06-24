@extends('main')
@section('title', 'Башня Федерация в Москва-Сити | продажа и аренда офисов от собственника')
@section('content')

    <!-- HOME PAGE TOP SECTION -->
    <section class="home-top-section block">

        <div class="home-top-section__blackout"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-top-section__wrapper">
                        <h1>
                            Башня Федерация
                            <span class="simple-description-block">
                                <span>САМЫЙ ВЫСОКИЙ<br>НЕБОСКРЁБ</span><br>
                                в Москва-Сити
                            </span>
                        </h1>
                        <span class="home-top-section-description">
                            Современный многофункциональный комплекс класса А
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about-section default-section default-section_shadow-bottom block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h2>О бизнес-центре</h2>
                </div>
            </div>

            <div class="row open-hidden-text-wrapper open-hidden-text-wrapper_JS">
                <div class="col-md-6 col-sm-6">
                    <p>
                        МФК «Башня Федерация» входит в деловой комплекс Москва-сити и является самым высоким небоскрёбом
                        России и Европы.
                    </p>
                    <p>
                        Арендаторы и владельцы офисов предпочитают помещения в «Федерации» в первую очередь, потому что
                        в ММДЦ «Москва-Сити» сосредоточено множество компаний представляющих различные сферы бизнеса,
                        среди которых можно найти новых партнёров, а также, из-за транспортной доступности и развитой
                        инфраструктуры.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        Дополнительным преимуществом являются, солидная входная группа и панорамные виды на Москву из
                        большинства офисов. Состоит комплекс из двух башен «Восток» и «Запад» находящихся на одном
                        стилобате. В стилобате расположены офисы и ритейл-зона. В ходе возведения небоскрёба было
                        реализовано такое техническое решение, как размещение двух скоростных лифтов в одной шахте
                        (система TWIN). При строительстве использовали бетон B90 повышенной прочности и стёкла,
                        отражающие солнечную радиацию.
                    </p>
                    {{--                    <p>--}}
                    {{--                        Бизнес-центр «Аэродом» не оставит равнодушными даже самых взыскательных арендаторов!--}}
                    {{--                    </p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="complex-in-nums block">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">443 000 м²</span>
                                    <span class="blue-decorated-text">общая площадь</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">А</span>
                                    <span class="blue-decorated-text">класс бизнес-центра</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">97</span>
                                    <span class="blue-decorated-text">этажность здания</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">63</span>
                                    <span class="blue-decorated-text">парковка (м/м)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- FREE RENT AREAS -->
    @if($rentData)
        <div
            class="free-areas-in-rent-section default-page default-section default-section_gray-bg objects-table objects-table_rent JS-obects-table JS-obects-table_rent block"
        >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h2>Свободные площади в аренду</h2>

                        <div class="default-content-block block">
                            <table class="default-table default-table_closed default-table_JS">
                                <thead class="default-table__thead">
                                <tr>
                                    <td>Этаж</td>
                                    <td>Площадь</td>
                                    <td>Арендная<br>ставка</td>
                                    <td>Налоги</td>
                                    <td>За помещение<br>в месяц</td>
                                    <td>Состояние</td>
                                </tr>
                                </thead>
                                <tbody class="default-table__tbody">
                                @foreach($rentData as $d)
                                    <tr
                                        data-href="/block/rent/{{$d->crmId}}"
                                        href="/block/rent/{{$d->crmId}}"
                                        data-block-id="{{$d->crmId}}"
                                        data-block-type="rent"
                                    >
                                        <td>
                                            <a href="/block/rent/{{$d->crmId}}">
                                                {{$d->floor}} этаж
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/rent/{{$d->crmId}}">
                                                @if ($d->areaMin != null && $d->areaMax != null && $d->areaMin != 0)
                                                    от {{number_format($d->areaMin, 0, '', ' ')}}
                                                    до {{number_format($d->areaMax, 0, '', ' ')}} м<sup>2</sup>
                                                @else
                                                    {{number_format($d->areaMax, 0, '', ' ')}} м<sup>2</sup>
                                                @endif

                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/rent/{{$d->crmId}}">
                                                @if ($d->price == -1)
                                                    Договорная
                                                @else
                                                    <span class='arendstavka'>{{ number_format(($d->price + $d->explprice), 0, '', ' ') }} руб.</span>
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/rent/{{$d->crmId}}">
                                                {{$d->name_tax}}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/rent/{{$d->crmId}}">
                                                @if ($d->price == -1)
                                                    Договорная
                                                @else
                                                    @if ($d->areaMin != null && $d->areaMax != null && $d->areaMin != 0)

                                                        <span class='arendstavka1'> {{ number_format((($d->price+$d->explprice+$d->explprice) / 12 * $d->areaMin), 0, '', ' ') }} - {{ number_format((($d->price+$d->explprice+$d->explprice) / 12 * $d->areaMax), 0, '', ' ') }} руб.</span>
                                                    @else
                                                        <span class='arendstavka1'>{{ number_format((($d->price+$d->explprice+$d->explprice) / 12 * $d->areaMax), 0, '', ' ') }} руб.</span>
                                                    @endif
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/rent/{{$d->crmId}}">
                                                {{$d->isready}}
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>

                            @if(count($rentData) > 3)
                                <a href="#" class="show-more-default-link show-more-default-link_JS">Показать еще</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- FREE RENT AREAS -->


    <!-- FREE SELL AREAS -->
    @if($saleData)
        <div
            class="free-areas-in-rent-section default-page default-section default-section_gray-bg objects-table objects-table_rent JS-obects-table JS-obects-table_rent block"
        >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h2>Свободные площади на продажу</h2>

                        <div class="default-content-block block">
                            <table class="default-table default-table_closed default-table_JS">
                                <thead class="default-table__thead">
                                <tr>
                                    <td>Этаж</td>
                                    <td>Площадь</td>
                                    <td>Стоимость, за м<sup>2</sup></td>
                                    <td>Налогообложение</td>
                                    <td>Общая стоимость</td>
                                    <td>Состояние</td>
                                </tr>
                                </thead>
                                <tbody class="default-table__tbody">

                                @foreach($saleData as $d)
                                    <tr
                                        data-href="/block/sale/{{$d->crmId}}"
                                        href="/block/sale/{{$d->crmId}}"
                                        data-block-id="{{$d->crmId}}"
                                        data-block-type="sale"
                                    >
                                        <td>
                                            <a href="/block/sale/{{$d->crmId}}">
                                                {{$d->floor}} этаж
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/sale/{{$d->crmId}}">
                                                @if ($d->areaMin != null && $d->areaMax)
                                                    от {{number_format($d->areaMin, 0, '', ' ')}}
                                                    до {{number_format($d->areaMax, 0, '', ' ')}} м<sup>2</sup>
                                                @else
                                                    {{number_format($d->areaMax, 0, '', ' ')}} м<sup>2</sup>
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/sale/{{$d->crmId}}">
                                                @if($d->price == -1)
                                                    Договорная
                                                @else
                                                    <span class='arendstavka2'>
                                                    {{number_format($d->price, 0, '', ' ')}} руб.
                                                </span>
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/sale/{{$d->crmId}}">
                                                {{$d->name_tax}}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/sale/{{$d->crmId}}">
                                                @if($d->price == -1)
                                                    Договорная
                                                @else
                                                    @if ($d->areaMin != null && $d->areaMax)
                                                        {{ number_format(($d->price * $d->areaMin), 0, '', ' ') }}
                                                        - {{ number_format(($d->price * $d->areaMax), 0, '', ' ') }}
                                                        руб.

                                                    @else
                                                        {{ number_format(($d->price * $d->areaMax), 0, '', ' ') }} руб.
                                                    @endif
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/block/sale/{{$d->crmId}}">
                                                {{$d->isready}}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            @if(count($saleData) > 3)
                                <a href="#" class="show-more-default-link show-more-default-link_JS">Показать еще</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- FREE SELL AREAS -->

    <!-- ADVANTAGES SECTION -->
    <section class="advantages-section default-section default-section_shadow-bottom block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Наши преимущества</h2>
                </div>
            </div>
            <div class="row advantages-section__margin-bottom">

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-buildings advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Класс А</strong><br>Комфортный БЦ В ЦАО
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-train advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Транспортная доступность</strong><br>Всего 5 минут пешком от метро
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-view advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Панорамные виды</strong><br> с верхних этажей бизнес-центра
                        </span>
                    </div>
                </div>

                {{--                <div class="col-md-4 col-sm-4 col-xs-6">--}}
                {{--                    <div class="advantage-card">--}}
                {{--                        <i class="icon icon-advantages-car advantage-card__icon"></i>--}}
                {{--                        <span class="advantage-card__text">--}}
                {{--                            <strong>Подземная парковка</strong><br>Более 1000 машиномест--}}
                {{--                        </span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-md-4 col-sm-4 col-xs-6">--}}
                {{--                    <div class="advantage-card">--}}
                {{--                        <i class="icon icon-advantages-medal advantage-card__icon"></i>--}}
                {{--                        <span class="advantage-card__text">--}}
                {{--                            <strong>соотношение цена/качество</strong><br>Одни из лучших предложений в округе--}}
                {{--                        </span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-md-4 col-sm-4 col-xs-6">--}}
                {{--                    <div class="advantage-card">--}}
                {{--                        <i class="icon icon-advantages-tree advantage-card__icon"></i>--}}
                {{--                        <span class="advantage-card__text">--}}
                {{--                            <strong>хорошая экология</strong><br>Рядом расположен парк--}}
                {{--                        </span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            </div>
        </div>
    </section>

    <!-- GALLERY -->
    @if(env('SHOW_GALLERY'))
    <section class="gallery-section default-section default-section_gray-bg block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Фотогалерея</h2>
                </div>
            </div>
        </div>

        <div class="default-gallery-slider default-gallery-slider_JS">
            <div
                class="default-gallery-slider__cover"
                style="background-image: url({{asset('images/gallery/1.jpg')}});"
            ></div>

            <div
                class="default-gallery-slider__cover"
                style="background-image: url({{asset('images/gallery/2.jpg')}});"
            ></div>

            <div
                class="default-gallery-slider__cover"
                style="background-image: url({{asset('images/gallery/3.jpg')}});"
            ></div>

            <div
                class="default-gallery-slider__cover"
                style="background-image: url({{asset('images/gallery/4.jpg')}});"
            ></div>

            <div
                class="default-gallery-slider__cover"
                style="background-image: url({{asset('images/gallery/5.jpg')}});"
            ></div>
        </div>
    </section>
    @endif

    <!-- CONTACTS -->
    <section class="contacts-section default-section default-section_shadow-bottom block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Контакты</h2>
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

        <div class="contacts-section__map" id="contacts-section__map_JS">
{{--            <script--}}
{{--                type="text/javascript"--}}
{{--                charset="utf-8"--}}
{{--                async--}}
{{--                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A63587560d3a77dd48ff463177b4e24497d2ff61035e40397b5a507c553eeeae7&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"--}}
{{--            ></script>--}}

            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa0e32d6ad41a1805ab2f6926ec5673fb5b85754685fe79d4e99a3e1bf85d197e&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <div class="contacts-form-block block">
                        <span class="contacts-form-block__title">Оставить заявку на просмотр</span>
                        <form
                            action="/ajax/send-mail"
                            method="get"
                            onsubmit='return false'
                            style="position: static"
                            id="formmain"
                        >
                            <div class="contactsF-form-block__top-wrapper block" style="float: none">
                                <input
                                    type="text"
                                    name="name"
                                    class="default-input"
                                    id="mainname" placeholder="Имя"
                                    required="required"
                                >

                                <input
                                    type="text"
                                    name="phone"
                                    class="default-input phone-mask"
                                    id="mainphone"
                                    placeholder="Телефон"
                                    required="required"
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
                                placeholder="Сообщение"
                                style="float: none"
                            ></textarea>

                            <div>
                                <input type="checkbox" required>
                                Отправляя свои данные я соглашаюсь с <a href="/politica">Политикой обработки
                                    персональных данных</a> и <a href="/usersogl">Пользовательским соглашением</a>
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

    <!-- ABOUT BUSINESS CENTER -->
    <section class="about-section default-section default-section_gray-bg block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Офисы в МФК Башня Федерация. Аренда и продажа коммерческих площадей и апартаментов</h2>
                </div>
            </div>
            <div class="row open-hidden-text-wrapper open-hidden-text-wrapper_JS">
                <div class="col-12" style="margin-bottom: 18px; padding: 0 15px">
                    <p>
                        Офисы в МФК Башня Федерация. Аренда и продажа коммерческих площадей и апартаментов Купить или снять офисы и апартаменты уже сейчас можно в обеих башнях. Предложения от собственников офисных этажей и апартаментов смотрите в разделах аренда и продажа. По всем вопросам оформления сделок, просмотров апартаментов и офисов, а также организации переговоров с собственниками Вы можете обращаться по номеру +7 (499) 653-67-22
                    </p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <h2>Башня «Запад»</h2>

                    <p>
                        В западной башне 62 этажа. С 1-го по 34 этаж – размещается офис банка ВТБ. С 35 по 47 офисы в аренду и на продажу, этажи 49 по 59 этаж отведены под апартаменты. На 61-этаже расположен фитнес-клуб «Небо», и ресторан Sixty на 62-м этаже.
                    </p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <h2>Башня «Восток»</h2>

                    <p>
                        В восточной башне 97 этажей. В здании есть офисы, Sky-офисы и апартаменты в аренду и на продажу. Также предусмотрен клубный этаж для владельцев апартаментов.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
