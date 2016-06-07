$(document).ready(function(){
    $('.price-boxes').each(function() {
				animationHover(this, 'fadeIn');
    });
});
    
    function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);         
        });
}


$(".slide5-hover").hide();
$("#pricing-section").hover(
    function(){
    $(this).find(".slide5-hover").show();
    },
    function(){
    $(this).find(".slide5-hover").hide();
    }
)
