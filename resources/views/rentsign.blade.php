@extends('main')
@section('title', 'Описание БЦ Аэродом. Инфраструктура, компании-арендаторы в Аэродоме')
@section('content')
    <div class="default-page block">
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
                        <li class="bread-crumbs__link" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" title="Купить офис в БЦ Аэродом" href="/sale" class="">
                                @if ($data->id_typedeal == 1)
                                    Аренда
                                @else
                                    Продажа
                                @endif
                                офиса в БЦ Аэродом
                            </a>
                        </li>
                        <li class="bread-crumbs__link"> /</li>
                        <li class="bread-crumbs__link bread-crumbs__link_current">Офис
                            @if ($data->areaMin != null && $data->areaMax != null)
                                от {{number_format($data->areaMin, 0, '', ' ')}}
                                до {{number_format($data->areaMax, 0, '', ' ')}} м<sup>2</sup>
                            @else
                                {{number_format($data->areaMax, 0, '', ' ')}} м<sup>2</sup>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Office Page -->
        <div class="office-page office-page_JS block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="popup-window__headline" style="font-weight: normal !important; font-size: 24px">
                            @if ($data->id_typedeal == 1)
                                Аренда
                            @else
                                Продажа
                            @endif
                            офиса в БЦ Аэродом
                            офиса

                            @if ($data->areaMin != null && $data->areaMax != null)
                                от {{number_format($data->areaMin, 0, '', ' ')}}
                                до {{number_format($data->areaMax, 0, '', ' ')}} м<sup>2</sup>
                            @else
                                {{number_format($data->areaMax, 0, '', ' ')}} м<sup>2</sup>
                            @endif
                            в бизнес-центре Аэродом
                        </h1>
                    </div>
                </div>
            </div>
            <div class="popup-window__slider default-gallery-slider default-gallery-slider_JS">
                @foreach($gals as $g)
                    <div class="default-gallery-slider__cover"
                         style="background-image: url('/public/images/gallery/{{$g->image}}')"></div>

                @endforeach
            </div>
            <div class="container">
                <div class="popup-window__content">
                    <div class="row">
                        <div class="col-md-5 col-sm-7">
                            <table class="characteristics-table">
                                <tr>
                                    <td>Этаж:</td>
                                    <td>
                                        {{$data->floor}}                                               </td>
                                </tr>
                                <tr>
                                    <td>Арендуемая площадь:</td>
                                    <td>
                                        @if ($data->areaMin != null && $data->areaMax != null)
                                            от {{number_format($data->areaMin, 0, '', ' ')}}
                                            до {{number_format($data->areaMax, 0, '', ' ')}} м<sup>2</sup>
                                        @else
                                            {{number_format($data->areaMax, 0, '', ' ')}} м<sup>2</sup>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Готовность:</td>
                                    <td>{{$data->isready}}</td>
                                </tr>
                                <tr>
                                    <td>Планировка:</td>
                                    <td>{{$data->layout}}</td>
                                </tr>
                                <tr>
                                    <td>Цена:</td>
                                    <td>
                                        @if ($data->id_typedeal == 1)
                                            @if ($data->price == -1)
                                                Договорная
                                            @else
                                                {{ number_format(($data->price + $data->explprice), 0, '', ' ') }} руб.
                                                за м<sup>2</sup> / год
                                            @endif

                                        @else
                                            @if($data->price == -1)
                                                Договорная
                                            @else

                                                {{number_format($data->price, 0, '', ' ')}} руб. за м<sup>2</sup>
                                            @endif

                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Общая стоимость:</td>
                                    <td>
                                        @if ($data->id_typedeal == 1)
                                            @if ($data->price == -1)
                                                Договорная
                                            @else
                                                @if ($data->areaMin != null && $data->areaMax != null)

                                                    {{ number_format((($data->price+$data->explprice+$data->explprice) / 12 * $data->areaMin), 0, '', ' ') }}
                                                    - {{ number_format((($data->price+$data->explprice+$data->explprice) / 12 * $data->areaMax), 0, '', ' ') }}
                                                    руб. / мес.
                                                @else
                                                    {{ number_format((($data->price+$data->explprice+$data->explprice) / 12 * $data->areaMax), 0, '', ' ') }}
                                                    руб. / мес.
                                                @endif
                                            @endif

                                        @else
                                            @if($data->price == -1)
                                                Договорная
                                            @else
                                                @if ($data->areaMin != null && $data->areaMax != null)
                                                    {{ number_format(($data->price * $data->areaMin), 0, '', ' ') }}
                                                    - {{ number_format(($data->price * $data->areaMax), 0, '', ' ') }}
                                                    руб.

                                                @else
                                                    {{ number_format(($data->price * $data->areaMax), 0, '', ' ') }}руб.

                                                @endif

                                            @endif

                                        @endif
                                    </td>
                                </tr>
                                @if ($data->id_typedeal == 1)
                                    <tr>
                                        <td>Эксплуатационные расходы:</td>
                                        @if ($data->explprice != null)
                                            <td>{{ number_format($data->explprice, 0, '', ' ') }} руб. за м<sup>2</sup>
                                                в год
                                            </td>
                                        @else
                                            <td>Договорная</td>
                                        @endif

                                    </tr>
                                @endif
                                <tr>
                                    <td>Налогообложение:</td>
                                    <td>{{$data->name_tax}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-md-3 col-sm-4">
                            <div class="small-contacts-block small-contacts-block_colored"
                                 style="margin-bottom: 8px;padding: 15px;background: #32CD32">
                                <a href="#" class="default-contact-call JS-get-call-popup-open whatsapp" data="whatsapp"
                                   style="border: none; font-size: 16px"
                                   @if ($data->areaMin != null && $data->areaMax != null)
                                       dataroistat='{{$data->areaMin}}-{{$data->areaMax}} м2'
                                   datacrmId='{{$data->crmId}}'
                                   datatypedeal='@if ($data->id_typedeal == 1) Аренда @else Продажа @endif'>Получить
                                    презентацию в Whatsapp</a>

                                @else
                                    dataroistat='{{$data->areaMax}} м2' datacrmId='{{$data->crmId}}'
                                    datatypedeal='@if ($data->id_typedeal == 1)
                                        Аренда
                                    @else
                                        Продажа
                                    @endif'>Получить презентацию в Whatsapp</a>

                                @endif

                            </div>
                            <div class="small-contacts-block small-contacts-block_colored">
                                <a href="tel:{{env('SETTINGS_PHONE')}}" class="default-contact-phone">{{env('SETTINGS_PHONE')}}</a>
                                <a href="#" class="default-contact-call JS-get-call-popup-open"
                                   @if ($data->areaMin != null && $data->areaMax != null)
                                       dataroistat='{{$data->areaMin}} - {{$data->areaMax}} м2'
                                   datacrmId='{{$data->crmId}}'
                                   datatypedeal='@if ($data->id_typedeal == 1) Аренда @else Продажа @endif'>Обратный
                                    звонок</a>

                                @else
                                    dataroistat='{{$data->areaMax}} м2' datacrmId='{{$data->crmId}}'
                                    datatypedeal='@if ($data->id_typedeal == 1)
                                        Аренда
                                    @else
                                        Продажа
                                    @endif'>Обратный звонок</a>

                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
