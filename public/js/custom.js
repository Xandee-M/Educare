

	var form = $('#ajax_form');
	form.submit(function(event){
			event.preventDefault();
			var form_status = $('<div class="form_status"></div>');
			$.ajax({
					url: "/resp",
					data: $( form ).serialize(),
					type: 'post',	
					beforeSend: function(){
						form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Enviando duvida ...</p>').fadeIn() );
					}				
			}).done(function(data){
					form_status.html('<p class="text-success">' + 'Duvida cadastrada com sucesso' + '</p>').delay(3000).fadeOut();

					$('#ajax_form')[0].reset();
					$("#myModal").modal('hide');
					// window.location.reload()

					return true;
			});
	});

	



	var page = 1;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
	        loadMoreData(page);
	    }
	});


	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '?page=' + page,
	            type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == " "){
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $('.ajax-load').hide();
	            $("#post-data").append(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}
	
