$(document).ready(function(){
    var title = $("#title").val();
    var thumbnail = $("#thumbnail").val();
    var deskripsi = $("#deskripsi").val();
    var publish = $('#publish').val();
    var author = $('#author').val();
    var currenUrl = document.URL;
    // setup meta
    $('meta[name="title"]').attr("content",title);
    $('meta[name="twitter:title"]').attr("content",title);
    $('meta[name="keywords"]').attr("content",title);
    $('meta[itemprop="name"]').attr("content",title);
    $('meta[property="og:title"]').attr("content",title);
    $('meta[itemprop="image"]').attr("content",thumbnail);
    $('meta[property="og:image"]').attr("content",thumbnail);
    $('meta[name="twitter:image"]').attr("content",thumbnail);
    $('meta[itemprop="description"]').attr("content",deskripsi);
    $('meta[name="twitter:description"]').attr("content",deskripsi);
    $('meta[name="description"]').attr("content",deskripsi);
    $('meta[property="og:description"]').attr("content",deskripsi);
    $('meta[property="og:url"]').attr("content",currenUrl);
    $('title').html(title);
});