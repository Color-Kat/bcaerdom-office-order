@extends('adminpanel/mainadmin')
@section('title', 'Админ панель')
@section('content')
    <style type="text/css">
        input, select, option {
            color: #000;
            margin: 10px;
        }

        #hidebloxk {
            display: none;
            border: 1px solid #fff;
            border-radius: 4px;
            padding: 15px;
        }

        a {
            cursor: pointer;
        }
    </style>

    <div class="single-product-tab-area mg-b-30" style="color: #fff; padding: 14px;">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="review-tab-pro-inner">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-6">
                            <div class="checkbox-setting-pro">
                                <h2 style="color: #fff" align="center">Все помещения</h2>

                                {{--    Erorrs   --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                </form>
                                @foreach ($data as $d)
                                    <form method="post">
                                        @csrf

                                        <input type="hidden" name="id" value="{{$d->id}}">
                                        <div style="color: #fff; margin: 10px">
                                            {{$d->name_typedeal}}-{{$d->areaMax}}-crmId:{{$d->crmId}}

                                            @if ($d->isActive == 'on')
                                                <input type="checkbox" checked readonly>
                                            @else
                                                <input type="checkbox" readonly>
                                            @endif

                                            <a onclick="next(this)" class="has-arrow">Редактировать</a>

                                            <div id="hidebloxk" class="" style="border-color: #234073">
                                                areaMin: <input class="form-control"
                                                                type="text"
                                                                name="areaMin"
                                                                value="{{old('areaMin') ?? $d->areaMin}}">

                                                areaMax: <input class="form-control"
                                                                type="text"
                                                                name="areaMax"
                                                                value="{{old('areaMax') ?? $d->areaMax}}">

                                                isactive: <input type="checkbox"
                                                                 @if ($d->isActive == 'on') checked @endif
                                                                 name="isActive">


                                                <br/>
                                                crmId: <input class="form-control"
                                                              type="number"
                                                              name="crmId"
                                                              value="{{old('crmId') ?? $d->crmId}}">

                                                <select name="type_id" class="select2_demo_3 form-control">
                                                    @foreach ($types as $type)
                                                        @if($type->id_type == (old('type_id') ?? $d->type_id))
                                                            <option value="{{$type->id_type}}" selected>
                                                                {{$type->name_types}}
                                                            </option>
                                                        @else
                                                            <option value="{{$type->id_type}}">
                                                                {{$type->name_types}}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>

                                                floor: <input class="form-control"
                                                              type="number"
                                                              name="floor"
                                                              value="{{old('floor') ?? $d->floor}}">

                                                price: <input class="form-control"
                                                              type="text"
                                                              name="price"
                                                              value="{{old('price') ?? $d->price}}">

                                                pricecur: <input class="form-control"
                                                                 type="text"
                                                                 name="pricecur"
                                                                 value="{{old('pricecur') ?? $d->pricecur}}">

                                                <select name="id_typedeal" class="select2_demo_3 form-control">
                                                    @foreach ($typedeal as $type)
                                                        @if($type->id_typedeal == (old('typedeal') ?? $d->id_typedeal))
                                                            <option value="{{$type->id_typedeal}}" selected>
                                                                {{$type->name_typedeal}}
                                                            </option>
                                                        @else
                                                            <option value="{{$type->id_typedeal}}">
                                                                {{$type->name_typedeal}}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>

                                                <select name="id_tax" class="select2_demo_3 form-control">
                                                    @foreach ($tax as $t)
                                                        @if($t->id_tax == (old('id_tax') ?? $d->id_tax))
                                                            <option value="{{$type->id_typedeal}}" selected>
                                                                {{$t->name_tax}}
                                                            </option>
                                                        @else
                                                            <option value="{{$type->id_typedeal}}">
                                                                {{$t->name_tax}}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>

                                                isready: <input class="form-control"
                                                                type="text"
                                                                name="isready"
                                                                value="{{old('isready') ?? $d->isready}}">

                                                readydate: <input class="form-control"
                                                                  type="date"
                                                                  name="readydate"
                                                                  value="{{old('readydate') ?? $d->readydate}}">

                                                explcur: <input class="form-control"
                                                                type="text"
                                                                name="explcur"
                                                                value="{{old('explcur') ?? $d->explcur}}">

                                                explprice: <input class="form-control"
                                                                  type="text"
                                                                  name="explprice"
                                                                  value="{{old('explprice') ?? $d->explprice}}">

                                                layout: <input class="form-control"
                                                               type="text"
                                                               name="layout"
                                                               value="{{old('layout') ?? $d->layout}}">

                                                lastsynctime: <input class="form-control"
                                                                     type="date"
                                                                     name="lastsynctime"
                                                                     value="{{old('lastsynctime') ?? $d->lastsynctime}}">

                                                <input
                                                    type="submit"
                                                    name=""
                                                    value="Обновить"
                                                    class="btn btn-custon-four btn-success"
                                                />
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function next(e) {

            if (e.nextElementSibling.style.display == 'block') {
                e.nextElementSibling.style.display = 'none';
            } else {
                e.nextElementSibling.style.display = 'block';
            }

        }
    </script>

@endsection

