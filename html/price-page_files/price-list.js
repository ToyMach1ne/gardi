var imgContainer = [];
$(document).ready(function () {
    $('.price-column').each(function (index, element) {
        var splitText = element.innerText.split('/');
        if (typeof splitText[1] === 'undefined') {
            $(element).html('<span>' + element.innerText + '</span>');
        }

    });
/**
    $(".hover-img").mouseenter(function () {

        plantId = $(this).attr('data-value');

        if (typeof imgContainer[plantId] === 'undefined') {
            imgContainer[plantId] = 'success';
            $.post("/ImageShow.php", { id: plantId })
                .done(function (data) {
                    data = '<img style="display:none;position: absolute;top: 0;left: 230px;z-index: 999;" id="img-' + plantId + '" src="' + data + '" />';
                    $("#" + plantId).append(data);
                    $('#img-' + plantId).css("display", "block");
                });
        } else {
            $('#img-' + plantId).css("display", "block");
        }

    }).mouseleave(function () {
            $('#img-' + plantId).css("display", "none");
        });
 **/
});

