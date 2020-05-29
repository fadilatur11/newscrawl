
$(document).ready(function () {

    $.date = function (dateObject) {
        var d = new Date(dateObject * 1000);
        var day = d.getDate();
        var month = d.getMonth() + 1;
        var year = d.getFullYear();
        if (day < 10) {
            day = "0" + day;
        }
        if (month < 10) {
            month = "0" + month;
        }
        var date = year + "-" + month + "-" + day;

        return date;
    };

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
                var getmore = response;
                var html = '';
                for (let a = 0; a < getmore.length; a++) {
                    html += '<div class="row">' +
                        '<div class="col-50">' +
                        '<div class="content">' +
                        '<a class="external" href="' + domain + 'detail/' + getmore[a].id + '/' + getmore[a].slug + '">' +
                        '<img src="' + getmore[a].image + '" alt="' + getmore[a].title + '">' +
                        '</a>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-50">' +
                        '<div class="content-text">' +
                        '<span>' + getmore[a].author + '</span>' +
                        '<a class="external" href="' + domain + 'detail/' + getmore[a].id + '/' + getmore[a].slug + ' "><h5>' + getmore[a].title + '</h5></a>' +
                        '<p class="date">' + $.date(getmore[a].published_at) + '</p>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                }
                $("#setmore").append(html);
            }
        });
    })

    $('div.post a.external').click(function() {
        $('.block-modal__option-box-container-action-button').attr('href', $(this).data('instant'))
        $('.block-modal__option-box-container-action-button--disabled').attr('href', $(this).data('source'))
        $('.block-modal__option').css('display', 'flex')
    })

    $('.block-modal__option-box-container-action-button--disabled').click(function() {
        $('.block-modal__option').css('display', 'none')
    })

});
