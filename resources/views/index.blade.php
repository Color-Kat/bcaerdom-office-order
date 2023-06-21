@extends('main')
@section('title', 'Бизнес-центр Аэродом на Ленинградском проспекте в Москве')
@section('content')
    <!-- HOME PAGE TOP SECTION -->
    <section class="home-top-section block">

        <div class="home-top-section__blackout">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-top-section__wrapper">
                        <h1>
                            Аэродом
                            <span class="simple-description-block">
									<span>Лучший бизнес-центр</span><br>
									на Ленинградском проспекте
								</span>
                        </h1>
                        <span
                            class="home-top-section-description">Современный многофункциональный комплекс класса А </span>
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
                        «Аэродом» – это высококлассный бизнес-центр 2014 года постройки с современной архитектурой и
                        интерьером.
                        Он расположен в престижном районе Москвы, в деловой части Ленинградского проспекта, недалеко от
                        станции метро «Ходынское поле».
                    </p>
                    <p>
                        По международной классификации зданий «Аэродом» принадлежит к категории «А», а это значит, что
                        здесь согласно передовым тенденциям обеспечены все необходимые условия для организации
                        максимально комфортной работы для арендаторов и владельцев офисов.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        В офисных помещениях выполнена качественная отделка, а благодаря панорамному остеклению здания
                        бизнес-центра, они отлично инсолируемы.
                        Общие характеристики, инфраструктура и транспортная доступность образуют комплекс преимуществ,
                        который позволяет заявить, что аренда и покупка офиса в таком бизнес-центре станет отличным
                        выбором для компаний, высоко ценящих комфорт и престиж.
                    </p>
                    <p>
                        Бизнес-центр «Аэродом» не оставит равнодушными даже самых взыскательных арендаторов!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="complex-in-nums block">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">36 000 м²</span>
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
                                    <span class="single-complex-num">13</span>
                                    <span class="blue-decorated-text">этажность здания</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">293</span>
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
                                <tbody class="default-table__tbody desctop">
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

                            <a href="#" class="show-more-default-link show-more-default-link_JS">Показать еще</a>
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
                                <tbody class="default-table__tbody desctop">

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

                            <a href="#" class="show-more-default-link show-more-default-link_JS">Показать еще</a>
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
								<strong>Класс А</strong><br>Комфортный БЦ В CЗАО
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
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-car advantage-card__icon"></i>
                        <span class="advantage-card__text">
								<strong>Подземная парковка</strong><br>Более 1000 машиномест
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
								<strong>хорошая экология</strong><br>Рядом расположен парк
							</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GALLERY -->
    <section class="gallery-section default-section default-section_gray-bg block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Фотогалерея</h2>
                </div>
            </div>
        </div>

        <div class="default-gallery-slider default-gallery-slider_JS">
            <div class="default-gallery-slider__cover" style="background-image: url(images/gallery/2000_1.jpg);"></div>
            <div class="default-gallery-slider__cover" style="background-image: url(images/gallery/2000_2.jpg);"></div>
            <div class="default-gallery-slider__cover" style="background-image: url(images/gallery/2000_3.jpg);"></div>
            <div class="default-gallery-slider__cover" style="background-image: url(images/gallery/2000_4.jpg);"></div>
            <div class="default-gallery-slider__cover" style="background-image: url(images/gallery/2000_5.jpg);"></div>
        </div>
    </section>


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
                        <form action="/ajax/send-mail" method="get" onsubmit='return false' style="position: static"
                              id="formmain">
                            <div class="contactsF-form-block__top-wrapper block" style="float: none">
                                <input type="text" name="name" class="default-input" id="mainname" placeholder="Имя"
                                       required="required">
                                <input type="text" name="phone" class="default-input phone-mask" id="mainphone"
                                       placeholder="Телефон" required="required">
                                <input type="text" name="email" class="default-input" id="mainemail"
                                       placeholder="E-mail">
                            </div>
                            <textarea class="default-textarea" name="comment" id="maincomment" placeholder="Сообщение"
                                      style="float: none"></textarea>
                            <div>
                                <input type="checkbox" required> Отправляя свои данные я соглашаюсь с <a
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
                        Бизнес-центр «Аэродом» располагается в районе «Динамо» по адресу Ленинградский проспект, дом 37,
                        корпус 7.
                        Это бизнес-центр класса «А», что свидетельствует о его престижности.
                        Дизайн «Аэродома» выполнен в современном стиле, бизнес-центр оснащен передовыми техническими
                        системами.
                    </p>
                    <p>
                        Транспортная и пешая доступность «Аэродома» вполне удобны.
                        Путь до станции метро «Динамо», ближайшей к бизнес-центру, составит около 18 минут (1,7 км), а
                        непосредственная близость от ТТК и МКАД открывает удобные транспортные пути.
                        Удобна доступность бизнес-центра как по пути из центра, так и из аэропорта «Шереметьево».
                        Для арендаторов и их клиентов здесь имеются как уличная, так и многоуровневая подземная парковка
                        вместимостью на 293 машиноместа.
                    </p>
                    <p>
                        Бизнес-центр «Аэродом» – это 14-этажное панорамно остекленное здание 2014 года постройки.
                        Его архитектура дополняется презентабельной дизайнерски оформленной входной группой.
                        Как офисное пространство, так и зоны общего пользования оформлены по единому дизайн-проекту.
                        Здесь предоставляются в аренду и доступны к продаже помещения открытой планировки как с готовым
                        ремонтом, так и под отделку.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        Площадь бизнес-центра составляет 36 000 м2.
                        Эргономичное рабочее пространство создается фунциональной и эффективной планировкой этажей и
                        современным оборудованием и теллекоммуникациями.
                    </p>
                    <p>
                        Здание оборудовано восьмью лифтами производства компании «OTIS».
                        В бизнес-центре проведены качественные современные технические и коммуникационные системы.
                        Здесь функционирует полный противопожарный комплекс, системы видеонаблюдения, центральная
                        система кондиционирования и приточно-вытяжная вентиляция.
                    </p>
                    <p>
                        Инфраструктура в бизнес-центре «Аэродом» включает в себя места ожидания для посетителей, кафе
                        для арендаторов, банкоматы и магазины.
                    </p>
                    <p>
                        Стоимость аренды помещений в данном бизнес-центре соответствует классу здания и его
                        месторасположению.
                        В данном бизнес центре арендуют офисы и владеют помещениями отечественные и зарубежные компании.
                        Аренда или покупка офиса здесь станет отличным выбором для тех компаний, которые ценят комфорт и
                        престиж.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
