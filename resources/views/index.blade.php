@extends('main')
@section('title', 'Бизнес-центр Северное Сияние рядом с ТТК')
@section('content')

    <!-- HOME PAGE TOP SECTION -->
    <section class="home-top-section block">

        <div class="home-top-section__blackout"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-top-section__wrapper">
                        <h1>
                            СЕВЕРНОЕ СИЯНИЕ
                            {{--                            <span class="simple-description-block">--}}
                            {{--                                <span>САМЫЙ ВЫСОКИЙ<br>НЕБОСКРЁБ</span><br>--}}
                            {{--                                в Москва-Сити--}}
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
                        Бизнес-центр Северное Сияние представляет собой современный деловой комплекс с высокой функциональностью, относящийся к классу А.
                    </p>
                    <p>
                        Пятнадцатиэтажный БЦ находится по адресу: г. Москва, САО, р-н Беговой, ул. Правды, д. 26, в пределах ТТК.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        Удобство местоположения обеспечивается отличной транспортной доступностью, рядом проходят крупные автомагистрали столицы, в шаговой доступности станция метро Савеловская. Офисный центр расположен в районе в отлично развитой инфраструктурой, рядом имеются медицинские учреждения и офисы крупных банков, рестораны и уютные кафе, парикмахерские, салоны красоты и торговые объекты.
                    </p>

{{--                    <p>--}}
{{--                        Вниманию потенциальных пользователей представлены помещения площадью от 340 квадратных метров со свободной и смешанной планировками, что позволяет арендовать объекты как крупным компаниям, так и владельцам небольшого бизнеса. Во всех блоках выполнена качественная отделка, а из окон открываются изумительные виды на Серебряническую набережную.--}}
{{--                    </p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="complex-in-nums block">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">37 000 м²</span>
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
                                    <span class="single-complex-num">15</span>
                                    <span class="blue-decorated-text">этажность здания</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">307</span>
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
                            <strong>Класс А</strong><br>Комфортный БЦ в ЦАО
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-train advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Транспортная доступность</strong><br>Всего 2 минуты пешком от метро
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

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-car advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Подземная парковка</strong><br>С выходами во все три корпуса
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-medal advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>соотношение цена/качество</strong><br>Одни из лучших предложений в округе
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-tree advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>хорошая экология</strong><br>В окрестностях расположено несколько парков
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

            <div class="default-gallery-slider default-gallery-without-bg default-gallery-slider_JS">
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
                            Москва, улица Правды д. 26. <br>
                            Бизнес-центр Северное Сияние.
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
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af92b578cc9f2d013ee73d04b27e4274969c52705b71441a937197deb8766bfbe&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
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
                            {{--   !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!     --}}
                            {{--   Recaptcha library cant detect submit form name    --}}
                            {{--   So we need to define current submit form by name  --}}
                            onsubmit="currentForm = 'main';return false"
                            style="position: static"
                            id="formmain"
                        >
                            @captcha()

                            <div class="contacts-form-block__top-wrapper block" style="float: none">
                                <input
                                    type="text"
                                    name="name"
                                    class="default-input"
                                    id="mainname" placeholder="Имя"
                                    required="required"
                                >

                                <input
                                    type="text"
                                    name="surname"
                                    class="default-input hidden"
                                    id="mainsurname"
                                    placeholder="Фамилия"
                                    value="not_bot"
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

                            <div class="text-left">
                                <input type="checkbox" required>
                                Отправляя свои данные, я соглашаюсь с <a href="/usersogl">Пользовательским соглашением</a> и <a href="/privacy-policy">Политикой конфиденциальности</a>
                            </div>
                            <br/>
                            <div class="text-left">
                                <input type="checkbox" required>
                                Даю согласие на <a href="/politica">Обработку персональных данных</a>
                            </div>
                            <br/>

                            <button
                                class="blue-button loading-button"
                                type="submit"
                            >
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
                    <h2>Современный БЦ рядом с ТТК</h2>
                </div>
            </div>
            <div class="row open-hidden-text-wrapper open-hidden-text-wrapper_JS">
                <div class="col-md-6 col-sm-6">
                    <p>
                        Из общей площади комплекса – 37 тысяч кв.м, более 28 000 квадратов занимают офисные помещения. Вниманию арендаторов предлагаются коммерческие объекты смешанной и открытой планировки, которые полностью готовы к эксплуатации.
                    </p>

                    <p>
                        Аренда офиса в БЦ Северное Сияние – возможность снять качественный офис в относительной близости от центра мегаполиса. Постоянный интерес со стороны арендаторов обеспечивается высокими техническими характеристиками здания и отличным соотношением цена/качество. Годовая арендная ставка фиксированная. Светлые просторные помещения дают возможность оптимальной организации внутреннего пространства.
                    </p>

                    <p>
                        Преимущества аренда офиса в БЦ Северное Сияние очевидны. Комплекс оборудован девятью вместительными высокоскоростными лифтами известной компании. Сотрудники компаний арендаторов имеют возможность пользоваться охраняемым подземным двухуровневым паркингом, в который можно попасть прямо из здания. Имеется и наземная парковка, машиноместа арендуются заранее.
                    </p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <p>
                        Реконструкция здания, проведенная в 2006 году, позволила повысить качественные характеристики помещений и отнести его к более высокому классу А. Современные материалы и оборудование, строгие линии и формы, панорамное остекление фасада, роскошный нестандартный дизайн – все это выгодно отличает офисы в этом деловом центре от аналогичных предложений.
                    </p>

                    <p>
                        Комфортную работу обеспечивают установленные в комплексе современные системы видеонаблюдения, кондиционирования, вентиляции, пожаротушения. Имеется централизованное отопление. Безопасность на высоте, организована круглосуточная охрана, поддержанием порядка занимается специальная компания. Ее сотрудники проводят мониторинг объектов путем видеонаблюдения, имеется система контроля доступа, установлена охранная сигнализация. Территория комплекса огорожена.
                    </p>

                    <p>
                        Бизнес-центр Северное Сияние – прекрасный выбор для ведения успешного бизнеса в комфортных условиях!
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
