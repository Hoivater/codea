@extends('layouts.app')

@section('title')
Пересоздать "{{ $data -> teg }}"
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


@section('content')

<div class="container-fluid blocks blocks_red mt-3">
    <div class="row">
        <h3 class="text-center">Внесение изменений в тег: <a href = "{{route('tegs', $data -> id)}}" class="tegs">#{{ $data -> teg }}</a></h3>
    <div class="col-12">
        <form action="{{ route('redTegs') }}" class="m-3" name="redDescription" method = 'post'>
            {{csrf_field()}}
            <input type = 'text' class = "form-control mt-2" name = "author" placeholder="Ваш ник* не обязательно" />

            <input type = 'text' class = "form-control mt-2" name = "teg" style = 'display: none;' value = "{{ $data -> teg }}"/>
            <input type = 'text' name = 'key' value = '{{$data -> key}}' style = 'display: none;'/>
            <input type = 'text' name = 'old_id' value = '{{$data -> id}}' style = 'display: none;'/>

            <input type = 'text' name = 'old_version' value = '{{$data -> version}}' style = 'display: none;'/>

            <textarea class="form-control mt-2" name = "text" placeholder="Определение" maxlength="150" >{{ $data -> text }}</textarea>
            <button type="submit" class="btn btn-success mt-2">Загрузить</button>   <p class = "res p-1 mt-3">150</p>
        </form>
    </div>
</div>
</div>

@endsection