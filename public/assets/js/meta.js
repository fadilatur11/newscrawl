$(document).ready(function(){
    var title = $("#title").val();
    var thumbnail = $("#thumbnail").val();
    var deskripsi = $("#deskripsi").val();
    var publish = $('#publish').val();
    var author = $('#author').val();
    // setup meta
    $('meta[property="og:title"]').attr("content",title);
    $('meta[property="og:image"]').attr("content",thumbnail);
    $('meta[property="og:description"]').attr("content",deskripsi);
    $('meta[name="publishdate"]').attr("content",publish);
    $('meta[name="author"]').attr("content",author);
    $('meta[itemprop="headline"]').attr("content",deskripsi);
    $('meta[name="thumbnailUrl"]').attr("content",thumbnail);
    $('meta[name="pubdate"]').attr("content",publish);
    $('meta[name="twitter:description"]').attr("content",deskripsi);
    $('meta[name="twitter:image"]').attr("content",thumbnail);
    $('meta[name="description"]').attr("content",deskripsi);
    $('meta[name="originalTitle"]').attr("content",title);
    $('title').html(title);
});