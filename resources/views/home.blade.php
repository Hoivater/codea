@extends('layouts.app')

@section('title')
Главная страница
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

    @foreach($data as $el)
        <div class="container-fluid blocks mt-3" style = "background-image:url('images/fon/{{ $el -> background }}');">
            <div class="row">
                <div class="col-12">


                <a tabindex="0" class="btn btn-sm btn-light" role="button" data-bs-html="true"  data-bs-toggle="popover" data-bs-trigger="focus" title="Информация" data-bs-content="Изменений: {{ $el -> version }}<br /> Авторов: ? <br /> Поделились: {{ $el -> saves }}"><div class='circle_green mt-1'></div>v. {{ $el -> version1 }} </a>


                <a href=" {{ route('tegs', $el -> id) }} ">
                    <h3 class="card-title"># {{ $el -> teg }}</h3>
                </a>
                  <p class="card-text desc"> {!! $el -> text_tegs !!}</p>
                  <p class="card-text"><small class="text-muted text-right">@ {{ $el -> author }} {{ $el -> created_at }}</small></p>
                </div>
            </div>
        </div>
    @endforeach 
<div class="container-fluid mt-3" style= 'margin-bottom:80px;'>
    <div class="pagination_bootstrap">
    {{ $data -> links() }}
    </div>
</div>
@endsection