@extends('main')
@section('title', 'Аренда офиса в бизнес-центре Башня Федерация')
@section('content')
    <!-- DEFAULT PAGE -->
    <div
        class="free-areas-in-rent-section default-page default-section default-section_gray-bg objects-table objects-table_rent JS-obects-table JS-obects-table_rent block"
    >
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
                        <li class="bread-crumbs__link bread-crumbs__link_current">Снять офис в БЦ Башня Федерация</li>
                    </ul>

                    <h1>Аренда офисов в бизнес-центре Башня Федерация</h1>

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
                            @foreach($data as $d)
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
                                                    <span class='arendstavka1'>
                            					       {{ number_format(( ((($d->price + $d->explprice)+$d->explprice) / 12) * $d->areaMin), 0, '', ' ') }} - {{ number_format(( ((($d->price + $d->explprice)+$d->explprice) / 12) * $d->areaMax), 0, '', ' ') }} руб.
                                                    </span>
                                                @else
                                                    <span class='arendstavka1'>
                                                        {{ number_format(( ((($d->price + $d->explprice)+$d->explprice) / 12) * $d->areaMax), 0, '', ' ') }} руб.
                                                    </span>
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

                            <tbody class="default-table__tbody mobile" style='display: none'>
                            @foreach($data as $d)
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
                                            @if ($d->price == -1)
                                                Договорная
                                            @else
                                                <span class='arendstavka'>{{ number_format(($d->price + $d->explprice), 0, '', ' ') }} руб.</span>
                                            @endif

                                        </a>
                                    </td>
                                    <td>
                                        <a href="/block/rent/{{$d->crmId}}">
                                            @if ($d->areaMin != null && $d->areaMax != null)
                                                от {{number_format($d->areaMin, 0, '', ' ')}}
                                                до {{number_format($d->areaMax, 0, '', ' ')}} м<sup>2</sup>
                                            @else
                                                {{number_format($d->areaMax, 0, '', ' ')}} м<sup>2</sup>
                                            @endif
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/block/rent/{{$d->crmId}}">
                                            {{$d->isready}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/block/rent/{{$d->crmId}}">
                                            @if ($d->price == -1)
                                                Договорная
                                            @else
                                                @if ($d->areaMin != null && $d->areaMax != null)
                                                    <span class='arendstavka1'>
                                                        {{ number_format((($d->price+$d->explprice+$d->explprice) / 12 * $d->areaMin), 0, '', ' ') }} - {{ number_format((($d->price+$d->explprice+$d->explprice) / 12 * $d->areaMax), 0, '', ' ') }} руб.
                                                    </span>
                                                @else
                                                    <span class='arendstavka1'>
                                                        {{ number_format((($d->price+$d->explprice+$d->explprice) / 12 * $d->areaMax), 0, '', ' ') }} руб.
                                                    </span>
                                                @endif
                                            @endif
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/block/rent/{{$d->crmId}}">
                                            {{$d->name_tax}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <a href="#" class="show-more-default-link show-more-default-link_JS">Показать еще</a>
                        <div class="small-contacts-block small-contacts-block_inline">
                            <a href="tel:{{env('SETTINGS_PHONE')}}" class="default-contact-phone">
                                {{env('SETTINGS_PHONE')}}
                            </a>
                            <a href="#" class="default-contact-call JS-get-call-popup-open">Обратный звонок</a>
                        </div>
                    </div>

                    <p>
                        В МФК "Башня Федерация" предлагаются офисы класса А от 15 до 2000 кв.м различных конфигураций. Ставки аренды зависят от расположения блоков, метража и качества отделки внутри помещений.
                    </p>
                    <p>
                        Актуальные площади и ставки аренды можно уточнить у менеджеров по аренде по телефону {{env('SETTINGS_PHONE')}}
                    </p>
                    <p>
                        <a href="https://of.ru/bc/bashnya-federatciya-vostok">Все актуальные предолжения по продаже офисов в Башне Федерация можно посмотреть тут.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
