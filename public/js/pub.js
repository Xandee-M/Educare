var form = $('#ajax_form');
form.submit(function(event){
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
                url: "/pub",
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
        });e
});

