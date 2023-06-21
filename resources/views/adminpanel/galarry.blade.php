
@extends('adminpanel/mainadmin')
@section('title', 'Админ панель')
@section('content')
<style type="text/css">
    input, select, option{
        color: #000;
        margin: 10px;
    }
    #hidebloxk{
        display: none;
        border: 1px solid #fff;
        border-radius: 4px;
        padding: 15px;
    }
    a{
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
 <div class="checkbox-setting-pro" >
  <h2 style="color: #fff" align="center">Все помещения</h2>
  <h2>Выбрать помещение</h2> 
    <form method="post" enctype='multipart/form-data'>
        @csrf
        <select name="id">
            @foreach($promis as $pr)
            <option value="{{$pr->id}}">{{$pr->name_typedeal}}-{{$pr->areaMax}}-crmId:{{$pr->crmId}} </option>
            @endforeach
        </select>
        <input type="file" name="fileUpload[]" multiple class = "input-data">
        <input type="file" name="fileUpload[]" multiple class = "input-data">
        <input type="file" name="fileUpload[]" multiple class = "input-data">
        <input type="file" name="fileUpload[]" multiple class = "input-data">
        <input type="file" name="fileUpload[]" multiple class = "input-data">
        <input type="submit" name=""> 
    </form>

    <h2>Фотографии</h2>
 <form method="post">
        @csrf
        <select name="id_gal">
            @foreach($promis as $pr)
            <option value="{{$pr->id}}">{{$pr->name_typedeal}}-{{$pr->areaMax}}-crmId:{{$pr->crmId}} </option>
            @endforeach
        </select>
        <div>
            @if (isset($gallery))
                @foreach($gallery as $gal)
                    <div><img src="/public/images/gallery/{{$gal->image}}" width="80%"> <a href="/del/?id={{$gal->id_gallery}}">Удалить</a></div>
                @endforeach
            @endif
        </div>
        <input type="submit" name="select_photo">
  </form>      
                                                                            </div>
                                            </div></div></div></div></div></div>

<script>
  function next(e){

    if(e.nextElementSibling.style.display == 'block'){
        e.nextElementSibling.style.display = 'none';
    }else{
        e.nextElementSibling.style.display = 'block';
    }

    }

    //document.addEventListener('click',e => console.log(e.target))


 
</script>

@endsection

