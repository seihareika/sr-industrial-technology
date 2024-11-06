$(document).ready(function() {
    $('.openbtn_top').on('click', function() {
        $('.openbtn_top').toggleClass('active');
        $('#g-nav').toggleClass('panelactive');
        // return false;
    });

    // $('#g-nav a').click(function() {
    //     $('.openbtn_top').removeClass('active');
    //     $('#g-nav').removeClass('panelactive');
    // });
});