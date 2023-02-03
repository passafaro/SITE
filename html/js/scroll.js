$(document).ready(function () {
		
    $(window).scroll(function(){
        if($(this).scrollTop() < 20){
            $(".scrollToTop").css("opacity", "0");
        } else {
            $(".scrollToTop").css("opacity", "1");
        }
    });
    
    
    $("#botaoNavMobile").click(function(){ 
        $("#botoesNavegador a ").click(function(){ 
            $("#botoesNavegador").collapse('hide');
        });
    });
        
});