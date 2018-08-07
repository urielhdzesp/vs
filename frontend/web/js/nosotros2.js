var global = {}; 

$(document).ready(function(){
    
    var element = $(".wrapper");
    	offset = element.offset();

    global.top = offset.top;
    global.height = element.outerHeight();
     
});

$(window).scroll(function () {
    
    var scroll_top = $(document).scrollTop();
    
    if (scroll_top > global.top ) {
        $('.wrapper').addClass('sticky');
        $("body").css({
            "padding-top": global.height
        });
        
    } else {
        
        $('.wrapper').removeClass('sticky');
        $("body").css({
            "padding-top": 0
        });
    }
    
});

$(window).resize(function(){

	//create event resizeEnd
	if(this.resizeTO) clearTimeout(this.resizeTO);

	this.resizeTO = setTimeout(function() {
		$(this).trigger('resizeEnd');
	}, 500);

});


$(window).bind('resizeEnd', function() { //window size hasn't changed since 500ms

	var offset = $(".wrapper").offset();
	global.top = offset.top;

});