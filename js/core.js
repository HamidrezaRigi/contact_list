$(document).ready(function () {
    $(".textbox").focus(function () {
        $(this).parent().addClass('is-active is-completed');
    });

    $('.textbox').focusout(function () {
        if ($(this).val() === '')
            $(this).parent().removeClass('is-completed')

        $(this).parent().removeClass('is-active')
    });
});