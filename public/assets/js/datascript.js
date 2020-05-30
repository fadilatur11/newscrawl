
$(document).ready(function () {
    domain = document.URL;
    var limit = 5;
    $('.loadmore').click(function () {
        var more = Number($("#more").val());
        getdata = more + limit;
        $("#more").attr('value', getdata);
        $.ajax({
            method: "GET",
            url: domain + "more/" + getdata + '/' + limit,
            success: function (response) {
                $("#setmore").append(response)
            }
        });
    });

    $('.block-modal__option-box-container-action-button--disabled').click(function () {
        $('.block-modal__option').css('display', 'none')
    })
});

function showOptionRead(instant, source) {
    $('.block-modal__option-box-container-action-button').attr('href', instant)
    $('.block-modal__option-box-container-action-button--disabled').attr('href', source)
    $('.block-modal__option').css('display', 'flex')
}
