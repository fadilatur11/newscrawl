
   $(document).ready(function (){

    domain = $("#baseurl").val();
   	var limit = 10;
   	$('.loadmore').click(function (){
        var keywords = $("#keywords").val();
   		var more = Number($("#more").val());
   		getdata = more + limit; //offset+limit
   		$("#more").attr('value',getdata);
   		console.log(getdata);
   		$.ajax({
   			method: "GET",
   			url: domain+"/search/more/"+keywords+"/"+getdata,
   		success: function(response){
   			$("#setmore").append(response);
   		}
   		});
   		// alert(data);
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

