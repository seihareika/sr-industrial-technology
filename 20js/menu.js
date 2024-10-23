$(document).ready(function() {
    $('.openbtn_top').on('click', function() {
        $(this).toggleClass('active');
        $('#g-nav').toggleClass('panelactive');
        return false;
    });

    $('#g-nav a').click(function() {
        $('.openbtn_top').removeClass('active');
        $('#g-nav').removeClass('panelactive');
    });
});
