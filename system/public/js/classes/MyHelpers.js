function toggleWithTransition(selector) {
    if ($(selector).hasClass('hide-element-with-transition')) {
        $(selector).removeClass('hide-element-with-transition');
        $(selector).addClass('show-element-with-transition');
    } else if ($(selector).hasClass('show-element-with-transition')) {
        $(selector).removeClass('show-element-with-transition');
        $(selector).addClass('hide-element-with-transition');
    }
}