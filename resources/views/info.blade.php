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

        <div class="container-fluid blocks mt-3">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Про WIKI150</h1>
                </div>
            </div>
        </div>
@endsection