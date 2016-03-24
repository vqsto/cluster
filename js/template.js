$(document).ready(function() {

    $('.delete').click(function() {

        var field = $(this).attr('field');
        $("[field=" + field + "]").remove();
    });


    $('.edit').click(function() {
        var field = $(this).attr('field');
        console.log(field);
        $("[field=" + field + "] .editeur").css("display", "block");
        $("[field=" + field + "] .editable").css("display", "none");
    });
    $('.add').click(function() {
        var field = $(this).attr('field');
        console.log(field);
    });
});