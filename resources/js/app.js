require('./bootstrap');


$(document).on("click", ".addDesc", function(event){
    event.preventDefault();
    $('.add_blocks').css("display", "block");
});