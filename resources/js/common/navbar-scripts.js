
$(function () {
    if (currentUrl === berandaRoutes) {
        $("#navbar-li").addClass('border-b-2 border-[var(--color-secondary)]');
        $("#navbar-li").removeClass('border-transparent');
    } else {
        $("#navbar-li").addClass('border-transparent');
        $("#navbar-li").removeClass('border-[var(--color-secondary)]');
    }
    if (currentUrl === berandaRoutes) {
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 900) {
                $('#navbar-main').addClass('bg-white text-gray-700 shadow-md');
                $('#navbar-main').removeClass('bg-transparent');
            } else {
                $('#navbar-main').removeClass('bg-white shadow-md');
                $('#navbar-main').addClass('bg-transparent');
            }

            if ($(this).scrollTop() > 900) {
                $('#navbar-main-li').removeClass('text-white');
                $('#navbar-main-li').addClass('text-gray-700');
                $('#navbar-slogan span').removeClass('text-white');
                $('#navbar-slogan span').addClass('text-gray-700');
            } else {
                $('#navbar-main-li').removeClass('text-gray-700');
                $('#navbar-main-li').addClass('text-white');
                $('#navbar-slogan span').removeClass('text-gray-700');
                $('#navbar-slogan span').addClass('text-white');
            }
        });
    }
});

$(function () {
    if (currentUrl === jadwalRoutes) {
        $('#navbar-main').addClass('bg-white text-gray-700 shadow-md');
        $('#navbar-main').removeClass('bg-transparent');
        $('#navbar-main-li').removeClass('text-white');
        $('#navbar-main-li').addClass('text-gray-700');
        $('#navbar-slogan span').removeClass('text-white');
        $('#navbar-slogan span').addClass('text-gray-700');
    }
});