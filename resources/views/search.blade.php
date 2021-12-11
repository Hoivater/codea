@extends('layouts.app')

@section('title')
Поиск
@endsection


@section('error_message')
	@if($errors -> any())
    <div class="error_message m-3 p-3">
    @foreach($errors -> all() as $el)
        <p>{{$el}}</p>
    @endforeach
    </div>
    @endif
@endsection


@section('search_field')
<div class="container-fluid blocks mt-3" style="background: #f2f0ff84;">
	<form action="#" method="post" class="m-3" >
		<input type="text" name="search_word" class="form-control" placeholder = "Найти...">
	</form>
</div>
@endsection


@section('content')
    <h3 class="text-center">Мы нашли ...</h3>
    <div class="container-fluid blocks mt-3" style = "background-image:url('images/fon/fon_tegs_1.jpg');">
        <div class="row">
            <div class="col-12">


            <a tabindex="0" class="btn btn-sm btn-light" role="button" data-bs-html="true"  data-bs-toggle="popover" data-bs-trigger="focus" title="Информация" data-bs-content="Изменений: 56<br /> Авторов: 32<br /> Поделились: 12"><div class='circle_green mt-1'></div>v. 1.0.2</a>


            <a href="/one.html">
                <h3 class="card-title">#спорт</h3>
            </a>
              <p class="card-text desc">проверенный способ устать с минимальной пользой</p>
              <p class="card-text"><small class="text-muted text-right">@koiuu 12:15 12.12.2021</small></p>
            </div>
        </div>
    </div>
@endsection