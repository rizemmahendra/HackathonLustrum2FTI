$(document).ready(function(){
    $("#header-container").css("border-bottom", "none");
    // change color header
    setInterval(function(){
        let valScroll = $(window).scrollTop();
        if(valScroll >= 35){
            $("#header-container").css("background-color", "white");
        }
        else{
            $("#header-container").css("background-color", "transparent");
        }
    },10)


    // click home
    $('#home-button').on('click', function(){
        $("#header-container").css("border-bottom", "none");
        $('#home-page').removeClass('hidden');
        $('#saham-page').addClass('hidden');
        $('#calc-saham').addClass('hidden');
        $('#about').addClass('hidden');
    });
    
    $('#get-button').on('click', function(){
        $("#header-container").css("border-bottom", "2px solid silver");
        $('#home-page').addClass('hidden');
        $('#saham-page').removeClass('hidden');
        $('#calc-saham').addClass('hidden');
        $('#about').addClass('hidden');
    });
    $('#saham-button').on('click', function(){
        $("#header-container").css("border-bottom", "2px solid silver");
        $('#home-page').addClass('hidden');
        $('#saham-page').removeClass('hidden');
        $('#calc-saham').addClass('hidden');
        $('#about').addClass('hidden');
    });
    $('#calculate-button').on('click', function(){
        $("#header-container").css("border-bottom", "2px solid silver");
        $('#home-page').addClass('hidden');
        $('#saham-page').addClass('hidden');
        $('#calc-saham').removeClass('hidden');
        $('#about').addClass('hidden');
    });
    $('#calc-button').on('click', function(){
        $("#header-container").css("border-bottom", "2px solid silver");
        $('#home-page').addClass('hidden');
        $('#saham-page').addClass('hidden');
        $('#calc-saham').removeClass('hidden');
        $('#about').addClass('hidden');
    });
    $('#about-button').on('click', function(){
        $("#header-container").css("border-bottom", "2px solid silver");
        $('#home-page').addClass('hidden');
        $('#saham-page').addClass('hidden');
        $('#calc-saham').addClass('hidden');
        $('#about').removeClass('hidden');
    });

})