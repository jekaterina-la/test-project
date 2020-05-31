$(function() {
    $(".type-switcher").change(function() {
    var selectedOption = $(this).val();
    var size = $('.size-to-hide');
    var dimension = $('.dimension-to-hide');
    var weight = $('.weight-to-hide');

    if (selectedOption == "dvd-disc") {
        size.show();
    } else {
        size.hide();
    }

    if (selectedOption == "book") {
        weight.show();
    } else {
        weight.hide();
    }

    if (selectedOption == "furniture") {
        dimension.show();
    } else {
        dimension.hide();
    } 
})
});
