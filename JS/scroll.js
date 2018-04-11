$(document).ready(function() {
   
    var page_url=window.location.href;
    var page_id = page_url.substring(page_url.lastIndexOf("#")+1);
    
    if (page_id=="form"){
        $("html,body").animate({
            scrollTop: $("#scroll-"+page_id).offset().top-70
//            alert('scroll');
        }, 2000);
    }
    
    
});