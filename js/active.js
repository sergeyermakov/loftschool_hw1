$(document).ready(function() {
	var first = $('.mainmenu > li:first-child');

	if (location.pathname === '/') {
		first.addClass('active')
	} else{
    $('.mainmenu > li >a').each(function() {
    	var activepath = '/',
    		lng = $(this).attr('href').length - 4;

    	activepath = activepath + $(this).attr('href').slice(0,lng);

        if (activepath == location.pathname) {
        	$(this).parent().addClass('active');
        	activepath = '/';
        }
    });
    };
});
