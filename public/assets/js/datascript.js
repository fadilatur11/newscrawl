
   $(document).ready(function (){
    domain = document.URL;
   	var limit = 10;
   	$('.loadmore').click(function (){
   		// alert('test');
   		var more = Number($("#more").val());
   		getdata = more + limit;
   		$("#more").attr('value',getdata);
   		console.log(getdata);
   		$.ajax({
   			method: "GET",
   			url: domain+"more/"+getdata,
   			dataType : "JSON",
   		success: function(response){
   			var getmore = response;
   			var html = '';
   			for (let a = 0; a < getmore.length; a++) {
   				html += '<div class="row">'+
   				'<div class="col-50">'+
   					'<div class="content">'+
   						'<a class="external" href="'+domain+'detail/'+getmore[a].id+'/'+getmore[a].slug+'">'+
   							'<img src="'+getmore[a].image+'" alt="'+getmore[a].title+'">'+
   						'</a>'+
   					'</div>'+
   				'</div>'+
   				'<div class="col-50">'+
   					'<div class="content-text">'+
   						'<span>'+getmore[a].author+'</span>'+
   						'<a class="external" href="'+domain+'detail/'+getmore[a].id+'/'+getmore[a].slug+' "><h5>'+getmore[a].title+'</h5></a>'+
   						'<p class="date">20 minute ago</p>'+
   					'</div>'+
   				'</div>'+
   			'</div>';
   			}
   			$("#setmore").append(html);
   		}
   		});
   		// alert(data);
   	})
   });
