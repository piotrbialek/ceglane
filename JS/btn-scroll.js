    function scrollToDiv(divID) {
    $('html, body').animate({
        scrollTop: $("#"+divID+"").offset().top-90
    }, 2000);
}