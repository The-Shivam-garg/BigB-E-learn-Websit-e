// floating button to the top 
$(document).ready(function() {
    $(document).scroll(function(){
        if($(this).scrollTop() > 100){
            $("#scroll").fadeIn();
        } else{
            $("#scroll").fadeOut();
        }
    });
    $("#scroll").click(function () {
        $("html,body").animate({scrollTop:0},600);
        return false;
    });
});