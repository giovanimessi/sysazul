$(function(){
    $('.tabItem').bind('click', function(){
        $('.activetab').removeClass('activetab');
        $(this).addClass('activetab');

        var item = $('.activetab').index();
        $('.tabbody').hide();
        $('.tabbody').eq(item).show();

    });
    $('.tabbody').eq(0).show();
})