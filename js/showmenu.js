$('a.sm').click(function(){


    $('#showmenu').show();
    $('a.sm').toggleClass('open close');
});
$(':not(#anything)').click(function (e) {
    if (!$(e.target).closest('.sm.close').length && !$(e.target).closest('#showmenu').length){
        $('#showmenu').hide();
        $('a.sm').removeClass('close').addClass('open');
    }
});