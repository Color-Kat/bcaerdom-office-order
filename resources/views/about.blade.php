@extends('main')
@section('title', 'Описание БЦ Белая Площадь. Инфраструктура, характеристики БЦ Белая Площадь')
@section('content')
    <!-- DEFAULT PAGE -->
    <div class="default-page block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="bread-crumbs">
                        <li class="bread-crumbs__link" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" title="БЦ Сильвер Сити" href="/" class="">
                                <span itemprop="title">БЦ {{env('SETTINGS_BC_NAME')}}</span>
                            </a>
                        </li>
                        <li class="bread-crumbs__link"> /</li>
                        <li class="bread-crumbs__link bread-crumbs__link_current">Описание бизнес-центра {{env('SETTINGS_BC_NAME')}}. Инфраструктура, характеристики БЦ {{env('SETTINGS_BC_NAME')}}
                        </li>
                    </ul>

                    <h1>О бизнес-центре {{env('SETTINGS_BC_NAME')}}</h1>

                    <p>
                        «Victory Plaza» - это современный 20-этажный бизнес-центр с высокими качественными характеристиками и современной архитектурой, выполненной с применением панорамного остекления. Дополнение к презентабельному внешнему виду составляет отлично оформленная входная группа и качественная отделка внутренних помещений. Высокие технические характеристики, отличная транспортная доступность, хорошая инфраструктура делают бизнес-центр «Victory Plaza» одним из наиболее привлекательных вариантов в вопросе аренды и покупки офисных помещений на территории Северного административного округа Москвы.
                    </p>

                    <h1>Транспортная доступность</h1>

                    <p>
                        Бизнес-центр «Victory Plaza» располагается по адресу улица Викторенко, дом 5. Благодаря месторасположению, у здания обеспечена отличная транспортная и пешая доступность. Станция метро «Аэропорт», ближайшая к бизнес-центру, располагается в четырех минутах ходьбы, на расстоянии 350 метров. Добираться транспортом также очень удобно: рядом пролегают Ленинградское и Волоколамское шоссе, Ленинградский проспект, в 5 км располагается Садовое кольцо, в 3 км – Третье транспортное кольцо. Для удобства владельцев помещений, арендаторов и их клиентов здесь предусмотрена подземная парковка вместимостью на 240 машиномест.
                    </p>

                    <h2>Технические характеристики</h2>

                    <p>
                        Площадь бизнес-центра равна 31 000 м2, из них офисы занимают площадь в 24 000 м2. Высота потолков – 3,35 м. В данном бизнес-центре проведены все необходимые современные инженерно-технические и коммуникационные системы, отвечающие требованиям высоких европейских стандартов к зданиям премиум-класса. Противопожарная безопасность обеспечивается современным комплексом со спринклерной системой пожаротушения и системой оповещения. Эффективная охрана с системами видеонаблюдения, контролем доступа в здание и на территорию круглосуточно гарантирует безопасность. Комфортный микроклимат круглогодично обеспечивается центральной системой кондиционирования и приточно-вытяжной вентиляцией.
                    </p>

                    <h2>Инфраструктура</h2>

                    <p>
                        Инфраструктура бизнес-центра предполагает все необходимое для комфортного ведения бизнеса: здесь имеются кафе и столовая, платежные терминалы, банкоматы, отделение банка. Инфраструктура Хорошевского района, в котором располагается «Victory Plaza» отлично развита. В непосредственной близости от бизнес-центра располагаются различные заведения общественного питания, аптеки, химчистки, салоны красоты, магазины, фитнес-центр, медицинский центр и т.д.
                    </p>
                </div>
            </div>
        </div>

    </div>

@endsection
