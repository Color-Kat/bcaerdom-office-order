@extends('main')
@section('title', 'Продажа офиса в бизнес-центре Аэродом')
@section('content')

    <!-- DEFAULT PAGE -->
    <div
        class="free-areas-in-rent-section default-page default-section default-section_gray-bg objects-table objects-table_rent JS-obects-table JS-obects-table_rent block">
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
                        <li class="bread-crumbs__link bread-crumbs__link_current">Купить офис в БЦ Аэродом</li>
                    </ul>
                    <h1>Продажа офисов в бизнес-центре Аэродом</h1>
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
                            @foreach($data as $d)
                                <tr data-href="/block/sale/{{$d->crmId}}" href="/block/sale/{{$d->crmId}}"
                                    data-block-id="{{$d->crmId}}" data-block-type="sale">
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

                                                <span
                                                    class='arendstavka2'>{{number_format($d->price, 0, '', ' ')}} руб.</span>
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
                                                    - {{ number_format(($d->price * $d->areaMax), 0, '', ' ') }} руб.

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
                            <tbody class="default-table__tbody mobile" style="display: none">
                            @foreach($data as $d)
                                <tr data-href="/block/sale/{{$d->crmId}}" href="/block/sale/{{$d->crmId}}"
                                    data-block-id="{{$d->crmId}}" data-block-type="sale">
                                    <td>
                                        <a href="/block/sale/{{$d->crmId}}">
                                            {{$d->floor}} этаж
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/block/sale/{{$d->crmId}}">
                                            @if($d->price == -1)
                                                Договорная
                                            @else

                                                <span
                                                    class='arendstavka2'>{{number_format($d->price, 0, '', ' ')}} руб.</span>
                                            @endif
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

                                            {{$d->isready}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/block/sale/{{$d->crmId}}">
                                            @if($d->price == -1)
                                                Договорная
                                            @else
                                                @if ($d->areaMin != null && $d->areaMax)
                                                    {{ number_format(($d->price * $d->areaMin), 0, '', ' ') }}
                                                    - {{ number_format(($d->price * $d->areaMax), 0, '', ' ') }} руб.

                                                @else
                                                    {{ number_format(($d->price * $d->areaMax), 0, '', ' ') }} руб.

                                                @endif

                                            @endif
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/block/sale/{{$d->crmId}}">
                                            {{$d->name_tax}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <a href="#" class="show-more-default-link show-more-default-link_JS">Показать еще</a>
                        <div class="small-contacts-block small-contacts-block_inline">
                            <a href="tel:+74994900592" class="default-contact-phone">+7 (499) 490-05-92</a>
                            <a href="#" class="default-contact-call JS-get-call-popup-open">Обратный звонок</a>
                        </div>
                    </div>
                    <p>
                        «Аэродом» – это бизнес-центр, сочетающий в себе комплекс всех необходимых характеристик,
                        свидетельствующих о его престижности. Отличная инфраструктура, транспортная доступность и
                        качество здания делают его отличным вариантом в вопросе о покупке офисного помещения.
                    </p>
                    <p>
                        Покупка офиса в бизнес-центре «Аэродом» станет отличным выбором для тех организаций, которые
                        хотели бы организовать свое рабочее пространство в современном высококлассном здании на
                        северо-западе Москвы.
                        Стоимость квадратного метра составляет в среднем около 200 000 рублей. Здесь возможна покупка
                        свободных площадей как с уже готовым ремонтом, доступных к въезду, так и под отделку. Планировка
                        помещений – открытая, площадь офисных блоков – от 220 м2.
                    </p>
                    <p>
                        В целях покупки офиса в бизнес-центре «Аэродом» звоните нам по телефону +7 (499) 490-05-92 или
                        оставляйте заявку на нашем сайте.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection


