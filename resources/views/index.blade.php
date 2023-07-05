@extends('main')
@section('title', 'Бизнес-центр Victory Plaza на Севере Москвы')
@section('content')

    <!-- HOME PAGE TOP SECTION -->
    <section class="home-top-section block">

        <div class="home-top-section__blackout"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-top-section__wrapper">
                        <h1>
                            VICTORY PLAZA
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
                        Бизнес-центр «Victory Plaza» - это расположенное в престижном месте Москвы офисное здание класса А. Введенный в эксплуатацию в 2008 году, данный бизнес-центр вскоре стал одним из наиболее популярных мест для аренды офисов в Северном административном округе Москвы. Принадлежность к зданиям класса А свидетельствует о соответствии требованиям высоких европейских стандартов к инженерно-техническому и коммуникационному обеспечению.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        Современная архитектура бизнес-центра, хорошее расположение, качественное техническое обеспечение – одни из качеств, позволяющих смело заявить о том, что выбор БЦ «Виктори Плаза» в качестве места организации рабочего пространства не оставит равнодушными даже самых требовательных арендаторов и станет для Вас отличным решением в вопросе аренды или покупки офисного помещения.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="complex-in-nums block">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">31 000 м²</span>
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
                                    <span class="single-complex-num">20</span>
                                    <span class="blue-decorated-text">этажность здания</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="complex-in-nums__single">
                                    <span class="single-complex-num">240</span>
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
                            <strong>Класс А</strong><br>Комфортный БЦ в САО
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-train advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>ТРАНСПОРТНАЯ ДОСТУПНОСТЬ</strong><br>Всего 3 минуты пешком от метро
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-view advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Панорамные виды</strong><br>С верхних этажей бизнес-центра
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-car advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Подземная парковка</strong><br>рачситана на 240 автомобилей
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-medal advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Соотношение цена/качество</strong><br>Одни из лучших предложений в округе
                        </span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="advantage-card">
                        <i class="icon icon-advantages-tree advantage-card__icon"></i>
                        <span class="advantage-card__text">
                            <strong>Хорошая экология</strong><br>В окрестностях расположено несколько парков
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
                            Москва, улица Викторенко д. 5 cтр. 1. <br>
                            Бизнес-центр Victory Plaza.
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
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3033bbf626f5176d65731b1e992ab0734709c4c11cbdde99e5f37812c331c233&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
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
                    <h2>Офисы рядом с метро Аэропорт</h2>
                </div>
            </div>
            <div class="row open-hidden-text-wrapper open-hidden-text-wrapper_JS">
                <div class="col-md-6 col-sm-6">
                    <p>
                        Бизнес-центр «Victory Plaza» расположился в Хорошевском районе Северного административного округа Москвы по адресу улица Викторенко, дом 5. Архитектура бизнес-центра выполнена в современном стиле с использованием панорамного остекления.
                    </p>

                    <p>
                        «Victory Plaza» обладает отличной транспортной и пешей доступностью. Ближайшая к нему станция метро – «Аэропорт» - располагается на расстоянии 350 метров, путь до нее, таким образом, составит около 4 минут.
                    </p>

                    <p>
                        Транспортная доступность также очень хорошая: бизнес-центр располагается в 5 км от Садового кольца, в 3 км – от Третьего транспортного кольца. Рядом пролегают Ленинградское и Волоколамское шоссе, Ленинградский проспект.
                    </p>

                    <p>
                        Данный бизнес-центр представляет собой 20-этажное здание с уникальной архитектурой, богатой входной группой и качественной отделкой помещений.
                    </p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <p>
                        Просторные, хорошо инсолируемые офисы имеют открытую планировку, позволяющую максимально эффективно организовать рабочее пространство, моделируя его в соответствии с индивидуальными потребностями, спецификой деятельности компании.
                    </p>

                    <p>
                        Площадь здания составляет 31 000 м2, из них офисы занимают 24 000 м2. Здание оборудовано шестью грузопассажирскими лифтами швейцарского производства Schindler, проведены современные технические и коммуникационные системы. Здесь функционируют системы видеонаблюдения, полный противопожарный комплекс, приточно-вытяжная вентиляция и центральная система кондиционирования. Инфраструктура как бизнес-центра, так и прилегающей территории отлично развиты.
                    </p>

                    <p>
                        Стоимость аренды помещений в бизнес-центре «Виктори Плаза» соответствует уровню предоставляемых услуг. Здесь доступны офисные площади от 180 до 1120 м2, состояние отделки – shell&core. Аренда или покупка офиса в таком здании станет отличным выбором для тех компаний, которые высоко ценят престиж и комфорт.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
