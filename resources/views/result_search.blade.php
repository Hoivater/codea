@foreach($data as $key)
	<div class="container-fluid blocks mt-3" style = "background-image:url('images/fon/{{ $key -> background }}');">
        <div class="row">
            <div class="col-12">
            

            <a tabindex="0" class="btn btn-sm btn-light" role="button" data-bs-html="true"  data-bs-toggle="popover" data-bs-trigger="focus" title="Информация" data-bs-content="Изменений: {{ $key -> version }}<br /> Авторов: 32<br /> Поделились: 12"><div class='circle_green mt-1'></div>v. {{ $key -> version1 }}</a>


            <a href="{{ route('tegs', $key -> id) }}">
                <h3 class="card-title">#{{$key -> teg}}</h3>
            </a>
              <p class="card-text desc">{{ $key -> text_tegs }}</p>
              <p class="card-text"><small class="text-muted text-right">@ {{$key -> author}} {{ $key -> created_at }}</small></p>
            </div>
        </div>
    </div>
@endforeach