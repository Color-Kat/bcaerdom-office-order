@extends('main')
@section('title', 'Продажа офиса в бизнес-центре Башня Федерация')
@section('content')

    <!-- DEFAULT PAGE -->
    <div class="free-areas-in-rent-section default-page default-section default-section_gray-bg objects-table objects-table_rent JS-obects-table JS-obects-table_rent block">
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
                        <li class="bread-crumbs__link bread-crumbs__link_current">Купить офис в БЦ Башня Федерация</li>
                    </ul>

                    <h1>Продажа офисов в бизнес-центре Башня Федерация</h1>

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

                            {{--    Desktop    --}}
                            <tbody class="default-table__tbody desctop">
                            @foreach($data as $d)
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

                            {{--    Mobile    --}}
                            <tbody class="default-table__tbody mobile" style="display: none">
                            @foreach($data as $d)
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
                            <a href="tel:{{env('SETTINGS_PHONE')}}" class="default-contact-phone">
                                {{env('SETTINGS_PHONE')}}
                            </a>

                            <a href="#" class="default-contact-call JS-get-call-popup-open">Обратный звонок</a>
                        </div>
                    </div>

                    <p>
                        <a href="https://of.ru/bc/bashnya-federatciya-vostok">Все актуальные предолжения по продаже офисов в Башне Федерация можно посмотреть тут.</a>
                    </p>
                    <p>
                        У вас появилась уникальная возможность приобрести в собственность готовые блоки с ремонтом и свидетельством о собственности от 50 кв.м.
                    </p>
                    <p>
                        Цена продажи офисов от 330 000 рублей за метр квадратный. Блоки предлагаются на 37 этаже в Башне Запад МФК "Башня Федерация".
                    </p>
                    <p>
                        Информацию по форме проведения сделки и метражам Вы можете уточнить у менеджеров по продаже по телефону {{env('SETTINGS_PHONE')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection


