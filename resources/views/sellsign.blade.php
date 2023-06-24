@extends('main')
@section('title', 'Продажа офиса в БЦ ' . env('SETTINGS_BC_NAME'))
@section('content')
    <div class="default-page block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="bread-crumbs">
                        <li class="bread-crumbs__link" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" title="БЦ {{env('SETTINGS_BC_NAME')}}" href="/" class="">
                                <span itemprop="title">БЦ {{env('SETTINGS_BC_NAME')}}</span>
                            </a>
                        </li>
                        <li class="bread-crumbs__link"> /</li>
                        <li class="bread-crumbs__link" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" title="Купить офис в БЦ {{env('SETTINGS_BC_NAME')}}" href="/sale" class="">
                                Купить офис в БЦ {{env('SETTINGS_BC_NAME')}}
                            </a>
                        </li>
                        <li class="bread-crumbs__link"> /</li>
                        <li class="bread-crumbs__link bread-crumbs__link_current">Офис {{$data->areaMin}} м2</li>
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
                            Продажа офиса {{$data->areaMin}} <span> м<sup>2</sup></span> в бизнес-центре {{env('SETTINGS_BC_NAME')}}
                        </h1>
                    </div>
                </div>
            </div>

            <div class="popup-window__slider default-gallery-slider default-gallery-slider_JS">
                @foreach($gals as $g)
                    <div
                        class="default-gallery-slider__cover"
                        style="background-image: url('/public/images/gallery/{{$g->image}}')"
                    ></div>
                @endforeach
            </div>

            <div class="container">
                <div class="popup-window__content">
                    <div class="row">
                        <div class="col-md-5 col-sm-7">
                            <table class="characteristics-table">
                                <tr>
                                    <td>Этаж:</td>
                                    <td>{{$data->floor}}</td>
                                </tr>
                                <tr>
                                    <td>Арендуемая площадь:</td>
                                    <td>{{$data->areaMin}} <span> м<sup>2</sup></span></td>
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
                                    <td>{{$data->price}} руб. за м<sup>2</sup> в год</td>
                                </tr>
                                <tr>
                                    <td>Налогообложение:</td>
                                    <td>{{$data->tax_name}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-md-3 col-sm-4">
                            <div class="small-contacts-block small-contacts-block_colored"
                                 style="margin-bottom: 8px;padding: 15px;background: #32CD32">
                                <a
                                    href="#"
                                    class="default-contact-call JS-get-call-popup-open whatsapp"
                                    data="whatsapp"
                                    style="border: none; font-size: 16px"
                                >
                                    Получить презентацию в Whatsapp
                                </a>
                            </div>
                            <div class="small-contacts-block small-contacts-block_colored">
                                <a href="tel:{{env('SETTINGS_PHONE')}}" class="default-contact-phone">
                                    {{env('SETTINGS_PHONE')}}
                                </a>
                                <a href="#" class="default-contact-call JS-get-call-popup-open">Обратный звонок</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
