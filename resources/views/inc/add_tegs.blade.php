 @section('add_tegs')
 <div class="container-fluid blocks add_blocks mt-3">
    <div class="row">

    <div class="col-12">
        <form action="{{ route('newTegs') }}" class="m-3" name="newDescription" method = 'post'>
            {{csrf_field()}}
            <input type = 'text' class = "form-control mt-2" name = "author" placeholder="Ваш ник* не обязательно" value = "{{ old('author') }}"/>

            <input type = 'text' class = "form-control mt-2" name = "teg" placeholder="Тег" value = "{{ old('teg') }}"/>

            <textarea class="form-control mt-2 lesstext" name = "text" placeholder="Определение" maxlength="150" >{{ old('text') }}</textarea>
            <button type="submit" class="btn btn-success mt-2">Загрузить</button>   <p class = "res p-1 mt-3">150</p>
        </form>
    </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $(".lesstext").keypress(function (e)
    {
        var lt = $(".lesstext").val().length;
        var res = 150 - lt;
        $(".res").html(res);
        if(res > 60 )
        {
            $(".add_blocks").css("background", "white");
            $(".res").css("background", "#D7F2B4");
        }
        else if(res < 60 && res > 30)
        {
            $(".add_blocks").css("background", "#ffa500");
            $(".res").css("background", "#D7F2B4");
        }
        else if(res < 30 && res > 3)
        {
            $(".add_blocks").css("background", "red");
            $(".res").css("background", "red");
        }
        else if(res < 3)
        {
            $(".res").css("background", "black");
            $(".add_blocks").css("background", "red");
        }
    });
  });
</script>