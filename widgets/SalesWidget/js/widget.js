$(document).ready(function () {
    $.post('/insales', {
        ids: sales_ids
    }).done(function (data) {
        if (data !== 0 && data !== "0") {
            $('.sales-input').val(data);
        } else {
            $('.sales-checkbox').remove();
        }
    }).fail(function () {
        $('.sales-checkbox').remove();
    });
});