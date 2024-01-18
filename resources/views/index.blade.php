@extends('main')
@section('title', 'Бизнес-центр Silver City в Москве')
@section('content')

    <!-- HOME PAGE TOP SECTION -->
    <section class="home-top-section block">

        <div class="home-top-section__blackout"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-top-section__wrapper">
                        <h1>
                            Жилой комплекс Сити Парк
{{--                            <span class="simple-description-block">--}}
{{--                                <span>САМЫЙ ВЫСОКИЙ<br>НЕБОСКРЁБ</span><br>--}}
{{--                                в Москва-Сити--}}
{{--                            </span>--}}
                        </h1>
                        <span class="home-top-section-description">
                            Премиум класс рядом с Москва Сити
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
                    <h2>О жилом комплексе</h2>
                </div>
            </div>

            <div class="row open-hidden-text-wrapper open-hidden-text-wrapper_JS">
                <div class="col-md-6 col-sm-6">
                    <p>
                        Коммерческая недвижимость в жилом комплексе CITY PARK представляет собой уникальную возможность для размещения бизнеса в квартале премиум-класса в центре Москвы. Расположенный в нескольких минутах ходьбы от набережной Москвы-реки, Краснопресненского парка, Нового Арбата, делового центра "Москва-Сити", стадиона "Красная Пресня" и Московского зоопарка, CITY PARK обеспечивает идеальное расположение и удобную транспортную доступность.
                    </p>
                    <p>
                        Коммерческие помещения на 1 и 2 этажах жилых зданий обладают рядом преимуществ, делающих их привлекательными для бизнеса. Каждое помещение имеет индивидуальный вход, панорамное остекление, свободную планировку, что позволяет адаптировать их под конкретные потребности бизнеса. Присутствие вместительного подземного паркинга обеспечивает удобную парковку как для сотрудников, так и для клиентов.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        Статус премиум-класса жилого квартала свидетельствует о платежеспособности его жителей, что делает их идеальной аудиторией для размещения бизнеса. В Пресненском районе проживают порядка 140 тысяч потенциальных клиентов, создавая стабильный трафик для магазинов, кафе, салонов красоты, сервисных и бытовых предприятий. Это позволяет деловым предприятиям, ресторанам, магазинам и другим учреждениям ощутить поддержку и интерес со стороны местных жителей.
                    </p>

                    <p>
                        Таким образом, коммерческая недвижимость в жилом комплексе CITY PARK представляет собой привлекательную возможность для бизнеса, обещая удобное расположение, высокий поток клиентов и возможности для роста и развития.
                    </p>
                    {{--                    <p>--}}
                    {{--                        Бизнес-центр «{{env('SETTINGS_BC_NAME')}}» не оставит равнодушными даже самых взыскательных арендаторов!--}}
                    {{--                    </p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="complex-in-nums block">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">215 415  м²</span>
                                    <span class="blue-decorated-text">общая площадь</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">B+</span>
                                    <span class="blue-decorated-text">класс бизнес-центра</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">21</span>
                                    <span class="blue-decorated-text">этажность здания</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">1467</span>
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

{{--                Свободные планировки (Помещения от 480 кв метров подходят под любой бизнес: от магазина и салона красоты до офиса компании.)--}}
{{--                Историческое место и окружение (Возможность создания кондоминимумов для офисов зарубежных компаний.)--}}
{{--                Управляющая компания уже на месте (Все ваши заботы по оборудованию помещения под бизнес возьмет на себя УК.)--}}
{{--                Архитектура (Возможность проектирования 2-х уровневых помещений.)--}}

                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-buildings advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Свободные планировки</strong><br>Помещения от 480 м<sup>2</sup> под любой бизнес
                        </span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-tree advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Историческое место и окружение</strong><br>Возможность создания кондоминиумов
                        </span>
                    </div>
                </div>

{{--                <div class="col-md-4 col-sm-4 col-xs-6">--}}
{{--                    <div class="advantage-card">--}}
{{--                        <i class="icon icon-advantages-train advantage-card__icon"></i>--}}
{{--                        <span class="advantage-card__text">--}}
{{--                            <strong>Транспортная доступность</strong><br>Всего 2 минуты пешком от метро--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-view advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Архитектура</strong><br>Возможность проектирования 2-х уровневых помещений
                        </span>
                    </div>
                </div>

{{--                <div class="col-md-4 col-sm-4 col-xs-6">--}}
{{--                    <div class="advantage-card">--}}
{{--                        <i class="icon icon-advantages-car advantage-card__icon"></i>--}}
{{--                        <span class="advantage-card__text">--}}
{{--                            <strong>Подземная парковка</strong><br>С выходами во все три корпуса--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-medal advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Управляющая компания уже на месте</strong><br>Все ваши заботы по оборудованию помещения под бизнес возьмет на себя УК
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

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/5.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/6.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/7.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/8.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/9.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/10.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/11.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/12.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/13.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/14.jpg')}});"
                ></div>

                <div
                    class="default-gallery-slider__cover"
                    style="background-image: url({{asset('images/gallery/15.jpg')}});"
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
                            Москва, ул Мантулинская, д 9 к 1.<br>
                            Бизнес-центр CITY PARK.
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

        {{--    Map    --}}
        <div class="contacts-section__map" id="contacts-section__map_JS">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A31637b99672e9ba3f9d29636ae97cd74f82264c0a6c204eb68dacbc29883ac07&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
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
                    <h2>Коммерческие помещения в жилом комплексе Сити Парк</h2>
                </div>
            </div>
            <div class="row open-hidden-text-wrapper open-hidden-text-wrapper_JS">
                <div class="col-md-6 col-sm-6">
                    <p>
                        Коммерческие помещения в жилом комплексе CITY PARK предлагают своим арендаторам и покупателям уникальные возможности для создания собственного пространства. Свободные планировки обеспечивают гибкость в создании рабочего пространства или магазина, в то время как индивидуальные входы придают независимость и уникальность каждому помещению.
                    </p>

{{--                    <p>--}}
{{--                    </p>--}}
                </div>

                <div class="col-md-6 col-sm-6">
                    <p>
                        Панорамное остекление добавляет простора и естественного света, создавая привлекательную атмосферу для клиентов и сотрудников. Такие возможности делают коммерческие помещения в CITY PARK идеальным выбором для любого бизнеса, стремящегося к современному и стильному облику.
                    </p>

{{--                    <p>--}}
{{--                        Оснащение самое современное, соответствует классу A. Проведены высокоскоростной интернет и телефония, имеется выбор провайдеров. Комплекс круглосуточно охраняется, имеется система видеонаблюдения, контроль доступа в здание, на территории расположен охраняемый крытый паркинг.--}}
{{--                    </p>--}}

{{--                    <p>--}}
{{--                        Комфортные условия работы обеспечиваются комфортабельными местами общественного питания с доступными ценами и широким выбором меню. Имеется салон красоты и спортивный центр. Организованы специальные зоны отдыха, где сотрудники компании и гости центра могут провести свободное время. Бизнес-центр Сильвер Сити(Серебряный город) представляет достойную возможность для бизнесменов, которые ценят лучшие условия и ищут возможности для дальнейшего развития.--}}
{{--                    </p>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
