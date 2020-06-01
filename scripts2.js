$(function() {
    $(".type-switcher").change(function() {
    var selectedOption = $(this).val();
    var size = $('.size-to-hide');
    var dimension = $('.dimension-to-hide');
    var weight = $('.weight-to-hide');
    var rsize = $('.size-required');
    var rdimension = $('.dimension-required');
    var rweight = $('.weight-required');

    if (selectedOption == "dvd-disc") {
        size.show();
        rsize.attr('required', '');
        rsize.attr('data-error', 'This field is required');
    } else {
        size.hide();
        rsize.removeAttr('required');
        rsize.removeAttr('data-error');
    }

    if (selectedOption == "book") {
        weight.show();
        rweight.attr('required', '');
        rweight.attr('data-error', 'This field is required');
    } else {
        weight.hide();
        rweight.removeAttr('required');
        rweight.removeAttr('data-error');
    }

    if (selectedOption == "furniture") {
        dimension.show();
        rdimension.attr('required', '');
        rdimension.attr('data-error', 'This field is required');
    } else {
        dimension.hide();
        rdimension.removeAttr('required');
        rdimension.removeAttr('data-error');
    } 
});
$(".type-switcher").trigger("change");
});

//$(function() {
//    $('input[type=text]').on('change',function(){
//    var arr = [];
//    $siblings = $(this).siblings();
//    $.each($siblings, function (i, key) {
 //      arr.push($(key).val()); 
 //   });
 //   if ($.inArray($(this).val(), arr) !== -1)
 //   {
 //       alert("duplicate has been found");
 //   }
//});
//});
