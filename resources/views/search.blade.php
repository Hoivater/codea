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
	<input type="text" name="search_word" class="form-control search_fields" placeholder = "Найти...">
</div>
<script type="text/javascript">
    $(".search_fields").keypress(function (e)
    {
        var value_search = $(".search_fields").val();

        $.ajax({
           type:'POST',
           url:"{{ route('postmsg') }}",
           data:{"_token": "{{ csrf_token() }}", "postal":value_search},
           success:function(data){
               $(".unique").html(data);
               $(".dialog").html("Мы нашли...");
           }
        });
    });
</script>
@endsection


@section('content')
    <h3 class="text-center dialog mt-3">Просто начните вводить искомое ...</h3>
    <div class="unique">
        <div class="text-center">
            <img src = "{{route('info')}}/images/data/vopr.svg" class="vopr" />
        </div>
    </div>
    
@endsection