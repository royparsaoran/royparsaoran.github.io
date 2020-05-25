$(document).ready(function(){

    var stopAutohide;

    function showWindow(){
        $('#main').show();
        $('html body').css('overflow', 'hidden');
        stopAutohide = setTimeout(hideWindow,10000);
    }
    // showWindow();

    function hideWindow(){
        $('#main').hide();
        $('html body').css('overflow', 'scroll');
    }
    // hideWindow();

    setTimeout(showWindow,500);

    $("#close-btn").click(function(){
        hideWindow();
        clearTimeout(stopAutohide);
    })

    $('html, body').scrollTop(0);

    $(window).on('load', function() {
        setTimeout(function(){
            $('html, body').scrollTop(0);
        }, 0);
    });
})
