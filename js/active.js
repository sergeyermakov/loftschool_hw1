$(document).ready(function() {

    $('.mainmenu > li >a').each(function() {
    	var activepath = '/';
    	activepath = activepath + $(this).attr('href');
    	
        if (activepath == location.pathname) {
        	$(this).parent().addClass('active');
        	activepath = '/';
        }
    });

});
