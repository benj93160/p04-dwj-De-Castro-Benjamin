
$(".lastNews").hover(function() {
    if($(this).hasClass("animated bounceIn")){
        $(this).removeClass("animated bounceIn");
    }else{
        $(this).addClass("animated bounceIn");
    }
});