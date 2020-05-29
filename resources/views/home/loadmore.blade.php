<script>

$(document).ready(function (){
	
    domain = document.URL;
   	var limit = 5;
   	$('.loadmore').click(function (){
   		// alert('test');
   		var more = Number($("#more").val());
   		getdata = more + limit;
   		$("#more").attr('value',getdata);
   		console.log(getdata);
   		$.ajax({
   			method: "GET",
   			url: domain+"more/"+getdata+'/'+limit,
   			dataType : "JSON",
   		success: function(response){
   			$("#setmore").append(response);
   		}
   		});
   		// alert(data);
   	})
   });

</script>