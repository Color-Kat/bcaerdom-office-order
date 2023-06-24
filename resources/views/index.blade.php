@extends('main')
@section('title', 'Бизнес-центр Алкон на Ленинградском проспекте в Москве')
@section('content')

    <!-- HOME PAGE TOP SECTION -->
    <section class="home-top-section block">

        <div class="home-top-section__blackout"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-top-section__wrapper">
                        <h1>
                            ALCON
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
                        Бизнес-центр «Алкон» - это грандиозный многофункциональный комплекс 2013 года постройки с
                        собственной высокоразвитой инфраструктурой, расположенный в престижном деловом районе Москвы на
                        Ленинградском проспекте.
                    </p>
                    <p>
                        Согласно международной классификации зданий, МФК «Алкон» относится к категории «А», что
                        свидетельствует о высоком качестве его инженерно-технологического и коммуникационного
                        обеспечения.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        Комплекс преимуществ «Алкон» позволяет судить о нем как об одном из наиболее престижных
                        бизнес-центров современной Москвы. В этом многофункциональном комплексе по максимуму обеспечены
                        благоприятные условия для организации комфортной и эффективной работы компаний-арендаторов.
                        Аренда и покупка офисных помещений в БЦ «Алкон» станет отличным выбором для компаний, которые
                        хотели бы разместить свое представительство в комфортных условиях в престижном районе «Сокол».
                    </p>
                    {{--                    <p>--}}
                    {{--                        Бизнес-центр «Алкон» не оставит равнодушными даже самых взыскательных арендаторов!--}}
                    {{--                    </p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="complex-in-nums block">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">102 000 м²</span>
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
                                    <span class="single-complex-num">11</span>
                                    <span class="blue-decorated-text">этажность здания</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">1016</span>
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
                            Москва, Ленинградский проспект д. 72.</br>
                            Бизнес-центр Алкон.
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
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae0d79ef379f0cc67f11353510b1258911ace3c59bfa9fafefff8f489932979dd&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
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
                    <h2>Современный БЦ на Ленинградском проспекте</h2>
                </div>
            </div>
            <div class="row open-hidden-text-wrapper open-hidden-text-wrapper_JS">
                <div class="col-md-6 col-sm-6">
                    <p>
                        Многофункциональный комплекс «Алкон» находится на полностью реконструированной территории завода «Изолятор». Адрес его расположения – Северо-Западный административный округ Москвы, район «Сокол», Ленинградский проспект, владение 72.
                    </p>

                    <p>«Алкон 1» состоит из 4 зданий, общая его площадь составляет 102 177 м2.:</p>

                    <p>
                        <ul>
                            <li>Здание 1 «Лондон» насчитывает 8 этажей и составляет площадь 13 909 м2</li>
                            <li>Здание 2 «Гонконг» - также 8-этажное здание, его площадь – 13 913 м2</li>
                            <li>Здание 3 «Токио» - 11-этажное здание общей площадью 20 472 м2</li>
                            <li>Здание 4 «Нью-Йорк» - здание из 11 этажей с общей площадью 20 469 м2</li>
                        </ul>
                    </p>

                    <p>Транспортная и пешая доступность «Алкон» очень удобны.</p>

                    <p>Ближайшая станция метро – «Сокол» - находится всего в семи минутах ходьбы (600 м).</p>

                    <p>
                        Здесь открывается непосредственный доступ к таким трассам, как Ленинградское шоссе, Третье транспортное кольцо и МКАД.
                    </p>

                    <p>
                        Удобен проезд к центру Москвы. Также здесь осуществим прямой доступ к международному аэропорту «Шереметьево».
                    </p>

                    <p>
                        Для арендаторов и их клиентов здесь предусмотрены удобные условия парковки: имеются как уличная, так и подземная двухуровневая парковка вместимостью на 1016 машиномест.
                    </p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <p>
                        Площадь, занимаемая территорией данного многофункционального комплекса равна 2,4 Га. Его архитектура выполнена в сдержанном современном стиле с использованием панелей кирпичного цвета и панорамного остекления. Дополняется она презентабельной дизайнерски оформленной входной группой. Фасады украшены шикарными террасными ярусами. Деловой центр обогащен озелененными зонами отдыха для арендаторов и их клиентов. Как офисное пространство, так и зоны общего пользования оформлены по единому дизайн-проекту. Атриумы, спроектированные в центре каждого из зданий, обеспечивают отличную инсоляцию офисных помещений. Здесь предоставляются в аренду и доступны к продаже помещения открытой планировки как с готовым ремонтом, так и под отделку.
                    </p>

                    <p>
                        Здание оборудовано лифтами производства компании «Schindler». Бизнес-центр оснащен качественными современными техническими и коммуникационными системами. Безопасность обеспечивается полным противопожарным комплексом и системами круглосуточного видеонаблюдения. Комфортный микроклимат круглый год создается с помощью центральной системы кондиционирования и приточно-вытяжной вентиляцией.
                    </p>

                    <p>
                        «Алкон» является одним из самых амбициозных проектов современной деловой Москвы. Комплекс зданий данного многофункционального комплекса являет собой как бы город в городе с собственной развитой инфраструктурой и единым дизайном.
                    </p>

                    <p>
                        Стоимость аренды и покупки помещений в МФК «Алкон» соответствует классу его зданий. Аренда или покупка офиса здесь станет отличным выбором для тех компаний, которые ценят комфорт и престиж.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
