
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
   			dataType : "JSON",
   		success: function(response){
   			$("#setmore").append(response);
   		}
   		});
   		// alert(data);
   	})
   });
