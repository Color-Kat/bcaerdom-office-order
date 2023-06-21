
@extends('adminpanel/mainadmin')
@section('title', 'Админ панель')
@section('content')
 <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
 <div class="checkbox-setting-pro" style="width: 80%;margin: auto;">
  <h2 style="color: #fff" align="center">Продажа офисов</h2>
  <form method="post" action="ajax/addcheck">
    
  
                                                                            <div class="checkbox-title-pro">
                                                                                    <h2>Шапка</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">

                                                                                          @if ($data->flag_header == 1)
                                                                                            <input type="checkbox" name="
                                                                                            collapsemenu" class="onoffswitch-checkbox" id="example1" onclick="f1('flag_header',0, '{{ csrf_token() }}')" checked>

                                                                                          @else
                                                                                          <input type="checkbox" name="
                                                                                            collapsemenu" class="onoffswitch-checkbox" id="example1" onclick="f1('flag_header',1, '{{ csrf_token() }}')" >

                                                                                          @endif
                                                                                            <label class="onoffswitch-label" for="example1">
                                                  <span class="onoffswitch-inner"></span>
                                                  <span class="onoffswitch-switch"></span>
                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Футер</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            @if ($data->flag_footer == 1)
                                                                                            <input type="checkbox" name="
                                                                                            collapsemenu" class="onoffswitch-checkbox" id="example2" onclick="f1('flag_footer', 0, '{{ csrf_token() }}')" checked>

                                                                                          @else
                                                                                          <input type="checkbox" name="
                                                                                            collapsemenu" class="onoffswitch-checkbox" id="example2" onclick="f1('flag_footer',1, '{{ csrf_token() }}')" >

                                                                                          @endif
                                                                                       
                                                                                            <label class="onoffswitch-label" for="example2">
                                                  <span class="onoffswitch-inner"></span>
                                                  <span class="onoffswitch-switch"></span>
                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Отключить страницу</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            @if ($data->flag_sign == 1)
                                                                                            <input type="checkbox" name="
                                                                                            collapsemenu" class="onoffswitch-checkbox" id="example3" onclick="f1('flag_sign',0, '{{ csrf_token() }}')" checked>

                                                                                          @else
                                                                                          <input type="checkbox" name="
                                                                                            collapsemenu" class="onoffswitch-checkbox" id="example3" onclick="f1('flag_sign',1, '{{ csrf_token() }}')" >

                                                                                          @endif
                                                                                            <label class="onoffswitch-label" for="example3">
                                                  <span class="onoffswitch-inner"></span>
                                                  <span class="onoffswitch-switch"></span>
                                                </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </form>
                                                                            </div>
                                            </div></div></div></div></div></div>

<script>
  function f1(name, id, token){
     $.ajax({
    url: 'ajax/addcheck3',         /* Куда отправить запрос */
    method: 'get',             /* Метод запроса (post или get) */
    dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
    data: {
      "_token":  token,
      id: id,
      idf: 2,
      name: name
    },     /* Данные передаваемые в массиве */
    success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
           document.location.href='/plosh2'
    }
  });
  }


 
</script>

@endsection

