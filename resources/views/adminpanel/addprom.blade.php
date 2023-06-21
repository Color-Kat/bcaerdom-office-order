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
                                <h2>Добавить помещение</h2>

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

                                <form method="post">
                                    @csrf
                                    areaMin: <input class="form-control col-6"
                                                    type="text"
                                                    name="areaMin"
                                                    value="{{old('areaMin')}}">

                                    areaMax: <input class="form-control"
                                                    type="text"
                                                    name="areaMax"
                                                    value="{{old('areaMin')}}">

                                    isactive:
                                    <select name="isactive" class="select2_demo_3 form-control">
                                        <option value="on">on</option>
                                        <option value="off">off</option>
                                    </select>
                                    <br/>

                                    crmId: <input class="form-control"
                                                  type="number"
                                                  name="crmId"
                                                  value="{{old('crmId')}}">

                                    <select name="type_id" class="select2_demo_3 form-control">
                                        @foreach ($types as $type)
                                            <option value="{{$type->id_type}}" @if(old('type_id') == $type->id_type)selected @endif>
                                                {{$type->name_types}}
                                            </option>
                                        @endforeach
                                    </select>

                                    floor: <input class="form-control"
                                                  type="number"
                                                  name="floor"
                                                  value="{{old('floor')}}">

                                    price: <input class="form-control"
                                                  type="text"
                                                  name="price"
                                                  value="{{old('price')}}">

                                    pricecur: <input class="form-control"
                                                     type="text"
                                                     name="pricecur"
                                                     value="{{old('pricecur')}}">

                                    <select name="id_typedeal" class="select2_demo_3 form-control">
                                        @foreach ($typedeal as $type)
                                            <option value="{{$type->id_typedeal}}" @if(old('id_typedeal') == $type->id_typedeal)selected @endif>
                                                {{$type->name_typedeal}}
                                            </option>
                                        @endforeach
                                    </select>

                                    <select name="id_tax" class="select2_demo_3 form-control">
                                        @foreach ($tax as $t)
                                            <option value="{{$t->id_tax}}" @if(old('id_tax') == $t->id_tax)selected @endif>
                                                {{$t->name_tax}}
                                            </option>
                                        @endforeach
                                    </select>

                                    isready: <input class="form-control"
                                                    type="text"
                                                    name="isready"
                                                    value="{{old('isready')}}">

                                    readydate: <input class="form-control"
                                                      type="date"
                                                      name="readydate"
                                                      value="{{old('readydate')}}">

                                    explcur: <input class="form-control"
                                                    type="text"
                                                    name="explcur"
                                                    value="{{old('explcur')}}">

                                    explprice: <input class="form-control"
                                                      type="text"
                                                      name="explprice"
                                                      value="{{old('explprice')}}">

                                    layout: <input class="form-control"
                                                   type="text"
                                                   name="layout"
                                                   value="{{old('layout')}}">

                                    lastsynctime: <input class="form-control"
                                                         type="date"
                                                         name="lastsynctime"
                                                         value="{{old('lastsynctime')}}">

                                    <input
                                        type="submit"
                                        name=""
                                        value="Добавить"
                                        class="btn btn-custon-four btn-success"
                                    />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

