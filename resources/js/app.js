/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// *
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
 

// const app = new Vue({
//     el: '#app',
// });


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