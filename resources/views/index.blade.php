@extends('main')
@section('title', 'Бизнес-центр Port Plaza на берегу реки Москвы')
@section('content')

    <!-- HOME PAGE TOP SECTION -->
    <section class="home-top-section block">

        <div class="home-top-section__blackout"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-top-section__wrapper">
                        <h1>
                            PORT PLAZA
{{--                            <span class="simple-description-block">--}}
{{--                                <span>ПРЕСТИЖНЫЙ<br>БИЗНЕС-ЦЕНТР</span><br>--}}
{{--                                на Белорусской--}}
{{--                            </span>--}}
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
                        Бизнес-центр Port Plaza – элитный деловой центр класса В+, возведен и сдан в эксплуатацию в 2013 году. Шестиэтажное здание элит-класса расположено в пешей доступности к двум станциям метрополитена – Коломенская и Автозаводская. Рядом проходит набережная Москва-реки, местечко очень уютное и спокойное, позволяет работать в тишине и покое, находясь при этом в самом центре деловой жизни столицы. Неподалеку расположен парк Нагатинская пойма, который выходит на одноименную набережную. Для владельцев автомобиля удобство представляют выезды на проспект Андропова, до МКАД расстояние составляет 12 км, а до ТТК – не более 3 км. Радует богатая инфраструктура района, которая включает находящиеся поблизости аптечные сети и места общественного питания, уютную кофейню, отделения крупных банков и супермаркеты.
                    </p>

{{--                    <p>--}}
{{--                        По международной классификации зданий «Белая Площадь» принадлежит к категории «А». Здания соединяются пешеходными зонами.--}}
{{--                    </p>--}}
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        Площадь сдаваемых помещений составляет 65,5 тысяч квадратных метров. Более подробную информацию по условиям сдачи можно узнать, обратившись в эксплуатирующую компанию БЦ по телефону или онлайн.
                    </p>

                    <p>
                        Современное архитектурное решение привлекает внимание к зданию бизнес-центра, не уступает и внутреннее обустройство здания. Здесь имеются централизованное кондиционирование и система вентиляции, ведется постоянное видеонаблюдение по внешнему периметру. Установлена противопожарная сигнализация, действует служба охраны. Функционирует 19 современных скоростных лифтов.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="complex-in-nums block">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">65 500 м²</span>
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
                                    <span class="single-complex-num">6</span>
                                    <span class="blue-decorated-text">этажность здания</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">400</span>
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
                            <strong>Класс А</strong><br>Комфортный БЦ в ЮАО
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-train advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>СТ. М. ТЕХНОПАРК</strong><br>в 5 минутах ходьбы
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-view advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Панорамные виды</strong><br>на набережную
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-car advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Просторная парковка</strong><br>на территории БЦ
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-medal advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Обладатель награды</strong><br>European Property Awards 2014-2015
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-tree advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Рядом парк</strong><br>"Нагатинская пойма"
                        </span>
                    </div>
                </div>

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

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/6.jpg')}});"
                ></div>

{{--                <div--}}
{{--                    class="default-gallery-slider__cover"--}}
{{--                    style="background-image: url({{asset('images/gallery/7.jpg')}});"--}}
{{--                ></div>--}}

{{--                <div--}}
{{--                    class="default-gallery-slider__cover"--}}
{{--                    style="background-image: url({{asset('images/gallery/8.jpg')}});"--}}
{{--                ></div>--}}

{{--                <div--}}
{{--                    class="default-gallery-slider__cover"--}}
{{--                    style="background-image: url({{asset('images/gallery/9.jpg')}});"--}}
{{--                ></div>--}}

{{--                <div--}}
{{--                    class="default-gallery-slider__cover"--}}
{{--                    style="background-image: url({{asset('images/gallery/10.jpg')}});"--}}
{{--                ></div>--}}

{{--                <div--}}
{{--                    class="default-gallery-slider__cover"--}}
{{--                    style="background-image: url({{asset('images/gallery/11.jpg')}});"--}}
{{--                ></div>--}}

{{--                <div--}}
{{--                    class="default-gallery-slider__cover"--}}
{{--                    style="background-image: url({{asset('images/gallery/12.jpg')}});"--}}
{{--                ></div>--}}

{{--                <div--}}
{{--                    class="default-gallery-slider__cover"--}}
{{--                    style="background-image: url({{asset('images/gallery/13.jpg')}});"--}}
{{--                ></div>--}}

{{--                <div--}}
{{--                    class="default-gallery-slider__cover"--}}
{{--                    style="background-image: url({{asset('images/gallery/14.jpg')}});"--}}
{{--                ></div>--}}

{{--                <div--}}
{{--                    class="default-gallery-slider__cover"--}}
{{--                    style="background-image: url({{asset('images/gallery/15.jpg')}});"--}}
{{--                ></div>--}}
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
                            Москва, 4062-й Проектируемый проезд, 6, стр. 16. <br>
                            Бизнес-центр Port Plaza.
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
                            <a href="mailto:{{env('SETTINGS_EMAIL')}}">{{env('SETTINGS_EMAIL')}}</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="contacts-section__map" id="contacts-section__map_JS">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad2962035a81b5ae0ef2a5f0c38ce19dd69a9723853a194fe346098f7b084bac8&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
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
                    <h2>Современный БЦ на берегу реки Москвы</h2>
                </div>
            </div>
            <div class="row open-hidden-text-wrapper open-hidden-text-wrapper_JS">
                <div class="col-md-6 col-sm-6">
                    <p>
                        Главное преимущество БЦ Port Plaza – местоположение. Деловой комплекс расположен в природоохранной зоне. Территория составляет порядка 3 Га, где устроены прогулочные зоны, организован ландшафтный дизайн, а также имеются собственная наземная станция Технопарк и причал, акваторией могут пользоваться частные малометражные суда и водные такси. Стоит отметить богатейшую инфраструктуру делового центра. Арендаторы могут также пользоваться обслуживающими структурами соседнего бизнес-парка Nagatino-iLand, доступна торговая галерея ТЦ Мегаполис. Территория БЦ Port Plaza включает уютные кафе, где с пользой можно провести обеденный перерыв за приятными беседами.
                    </p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <p>
                        Имеется корпоративный ресторан площадью 800 квадратных метров, вмещающих до 400 гостей, а также действуют цветочный салон и аптека, минимаркет и точка торговли спортивной одеждой и питанием, сервисный центр по ремонту мобильных устройств и студия эстетической медицины. Центр оборудован охраняемой наземной парковкой на 400 машиномест, имеется паркинг для гостей и VIP-парковка. Возможно создание дополнительных мест для стоянки автомобилей. Помещения в БЦ Port Plaza – уникальная возможность для успешного развития бизнеса для человека, ценящего свое время!
                    </p>

{{--                    <p>--}}
{{--                    </p>--}}

{{--                    <p>--}}
{{--                    </p>--}}

{{--                    <p>--}}
{{--                    </p>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
