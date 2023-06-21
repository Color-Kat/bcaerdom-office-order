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
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <div class="checkbox-setting-pro">
                                <h2 style="color: #fff" align="center">Редактировать профиль</h2>


                                </form>


                                <form method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{auth()->user()->id}}">

                                    Name: <input class="form-control"
                                                 type="text"
                                                 name="name"
                                                 value="{{auth()->user()->name}}">

                                    email: <input class="form-control"
                                                  type="text"
                                                  name="email"
                                                  value="{{auth()->user()->email}}">

                                    password: <input class="form-control"
                                                     type="password"
                                                     name="password"
                                                     placeholder="password">

                                    <input
                                        type="submit"
                                        name=""
                                        value="Обновить"
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

    <script>
        function next(e) {

            if (e.nextElementSibling.style.display == 'block') {
                e.nextElementSibling.style.display = 'none';
            } else {
                e.nextElementSibling.style.display = 'block';
            }

        }

        //document.addEventListener('click',e => console.log(e.target))


    </script>

@endsection

