
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
            dataType: "JSON",
            success: function (response) {
				$("#setmore").append(response);
            }
		});
    });

    $('div.post a.external').click(function() {
        $('.block-modal__option-box-container-action-button').attr('href', $(this).data('instant'))
        $('.block-modal__option-box-container-action-button--disabled').attr('href', $(this).data('source'))
        $('.block-modal__option').css('display', 'flex')
    })

    $('.block-modal__option-box-container-action-button--disabled').click(function() {
        $('.block-modal__option').css('display', 'none')
    })

});
