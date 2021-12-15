 @section('add_tegs')
 <div class="container-fluid blocks add_blocks mt-3">
    <div class="row">

    <div class="col-12">
        <form action="{{ route('newTegs') }}" class="m-3" name="newDescription" method = 'post'>
            {{csrf_field()}}
            @guest 
                <input type = 'text' class = "form-control mt-2" name = "author" placeholder="Ваш ник* не обязательно" value = "{{ old('author') }}"/>
            @endguest

            <input type = 'text' class = "form-control mt-2" name = "teg" placeholder="Тег" value = "{{ old('teg') }}"/>

            <textarea class="form-control mt-2 lesstext" name = "text" placeholder="Определение" maxlength="150" >{{ old('text') }}</textarea>
            <button type="submit" class="btn btn-success mt-2">Загрузить</button>   <p class = "res p-1 mt-3">150</p>
        </form>
    </div>
</div>
</div>
