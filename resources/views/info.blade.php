@extends('layouts.app')

@section('title')
WIKISTRING
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

@section('right_message')
    @if(session('success'))
    <div class="container-fluid blocks success m-3">
        <p class="m-3">{{ session('success') }}</p>
    </div>
    @endif
@endsection



@section('content')
        @if(isset($auth))
            <div class="userhello">
                <p>{{ $auth -> name }}, мы рады вас снова видеть на портале wikistring</p>
            </div> 
        @endif
        <div class="container-fluid blocks mt-3">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">WIKI STRING</h1>
                    <div class="date">
                        <p class="text-center mt-3">Общая информация</p>
                    </div>
                    <div class="newday">
                        <p class="text-justify"><div class = 'circle_blue'></div>
                            <mark>WIKISTRING</mark> - сборник коротких определений, состоящих максимум из 150 символов. Создавать и редактировать теги могут все. История изменений сохраняется, но в основных результатах и результах поиска отображается исключительно определение последней редакции. 
                        </p>
                    </div>
                    <div class="newday">
                        <p class="text-justify"><div class = 'circle_blue'></div>Веб-приложение создано, как учебный полигон для отработки полезностей Laravel. Стараюсь захватить в них как можно больше функций, обычно востребованных в любых других сайтах. Ниже по датам расписаны появляющиеся функции. Основные моменты создания отражены на <a href = "https://gifit.ru">gifit.ru</a></p>
                    </div>
                    <div class="date">
                        <p class="text-center mt-3">15.12.2021</p>
                    </div>
                    <div class="newday">
                        <p class="text-justify"><div class = 'circle_green'></div>Сегодня появилась возможность зарегистрироваться, добавление определения восприимчиво к имени автора. Стало возможно открыть определения созданные определенным автором. </p>
                    </div>
                    <div class="date">
                        <p class="text-center mt-3">14.12.2021</p>
                    </div>
                    <div class="newday">
                        <p class="text-justify"><div class = 'circle_green'></div>Начата реализация нового интерфейса. Реализован поиск. </p>
                    </div>
                    <div class="date">
                        <p class="text-center mt-3">-.-.202-</p>
                    </div>
                    <div class="newday">
                        <p class="text-justify"><div class = 'circle_red'></div> </p>
                        
                        <p class="text-justify"><div class = 'circle_red'></div> </p>
                        
                    </div>
                </div>
            </div>
        </div>
@endsection