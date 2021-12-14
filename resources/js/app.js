require('./bootstrap');


$(document).on("click", ".addDesc", function(event){
    event.preventDefault();
    $('.add_blocks').css("display", "block");
});

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
 $(".redtext").keypress(function (e)
    {
        var lt = $(".redtext").val().length;
        var res = 150 - lt;
        $(".res").html(res);
    });
  });