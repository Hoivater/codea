@extends('layouts.app')

@section('title')
{{ $teg -> teg }}
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


@section('description'){{ $teg -> description }}@endsection


@section('right_message')
    @if(session('success'))
    <div class="container-fluid blocks success m-3">
        <p class="m-3">{{ session('success') }}</p>
    </div>
    @endif
@endsection

@section('content')

        <div class="container-fluid blocks mt-3" style = "background-image:url('/images/fon/{{ $teg -> background }}');">
            <div class="row">
                <div class="col-12">


                <div class='circle_green mt-1'></div>v. {{ $teg -> version1 }} <a href = "{{ route('redaction', $teg -> id ) }}">Редактировать </a><a href = '#'>Поделиться</a>


                <h3 class="card-title teg_menu" ># {{$teg->teg}}</h3>



                  <p class="card-text desc">{!!$teg->text_tegs!!}</p>
                  <p class="card-text"><small class="text-muted text-right">{{$teg -> created_at}}</small></p>
                </div>
                <div class="author m-3">
                    <a href = "{{route('author', $teg -> author)}}">@ {{$teg -> author}} </a>
                </div>
            </div>
        </div>



        @foreach($old_tegs as $old_teg)
        @if($old_teg -> views == 'Off')
        <div class="container-fluid blocks_two mt-3" style = "background-image:url('/images/fon/{{ $old_teg -> background }}');">
                <div class="row mt-2">
                    <div class="col-12">

                        <div class='circle_red mt-1'></div> {{$old_teg -> version1}} <!-- <a href = "{{ route('redaction', $old_teg -> id ) }}">Редактировать </a><a href = '#'>Поделиться</a> -->
                    <h3 class="card-title">#{{$old_teg -> teg}}</h3>
                      <p class="card-text desc">{{$old_teg -> text}}</p>
                      <p class="card-text"><small class="text-muted text-right"> {{$old_teg -> created_at}}</small></p>
                    </div>
                    <div class="author m-3">
                        <a href = "#">@ {{$old_teg -> author}}</a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach

<div class="container-fluid mt-3 " style= 'margin-bottom:80px;'>
    <div class="pagination_bootstrap">
    {{ $old_tegs -> links() }}
    </div>
</div>

@endsection