var $backtoTop = $('#backtoTop');
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $backtoTop.css("display","block");
    }
    else {
        $backtoTop.css("display","none");
    }
}

function topFunction() {
    $("body,html").animate({scrollTop: 0},800);
}