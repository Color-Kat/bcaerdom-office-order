@extends('main')
@section('title', 'Продажа офисов в бизнес-центре Сильвер Сити')
@section('content')

    <!-- DEFAULT PAGE -->
    <div class="free-areas-in-rent-section default-page default-section default-section_gray-bg objects-table objects-table_rent JS-obects-table JS-obects-table_rent block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="bread-crumbs">
                        <li class="bread-crumbs__link" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" title="БЦ Сильвер Сити" href="/" class="">
                                <span itemprop="title">БЦ Сильвер Сити</span>
                            </a>
                        </li>
                        <li class="bread-crumbs__link"> /</li>
                        <li class="bread-crumbs__link bread-crumbs__link_current">Купить офис в БЦ Сильвер Сити</li>
                    </ul>

                    <h1>Продажа офисов в бизнес-центре {{env('SETTINGS_BC_NAME')}}</h1>

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
                        Покупка офиса в бизнес-центре «Silver City» станет отличным выбором для тех, кто хотел бы приобрести помещение в престижном офисном комплексе с развитой инфраструктурой и хорошей транспортной доступностью.
                    </p>

                    <p>
                        В данном бизнес-центре предлагаются к покупке помещения кабинетной, смешанной и открытой планировки. Из окон офисов открывается великолепный вид на набережную реки Яуза. В оформлении зон общего пользования и холлов использованы высококлассные материалы.
                    </p>

                    <p>
                        Площадь типового этажа здесь составляет 4 500 м<sup>2</sup>, высота потолков 2,75 м.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection


