$(function(){

    $('#contact-form').submit(function (e){

        e.preventDefault();
        console.log('Submitting....');

        // Get route on div form
        let route = $(this).data('route');
        // get all form data and create an instance
        let formData = new FormData(this);

        $.ajax({
            type: 'Post',
            url: route,
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },

            beforeSend: function () {
                // Hide favorite button
                $('#contact-form').prop('disabled', true);

                // Show spinner
                let loader = '<i class="fa fa-spinner fa-2x fa-spin text-white"></i>'
                $('#submit-contact-btn').html(loader);
                $('#submit-contact-btn').append('Loading....Please wait');
            },

            success: function (response){
                console.log(response);

                if(response.success){
                    $('#submit-contact-btn').html('Submit');
                    $('.form-messege').html("<p class='p-1 bg-success text-white text-center'>"
                        +response.success +"</p>");
                }

                if(response.errors){
                    $.each(response.errors, function(key, value) {
                        $('.form-messege').html("");
                        $('.form-messege').append("<p class='p-1 bg-danger text-white text-center'>"+value+"</p>");
                    });
                }
            },

            error: function (Response){
                console.log(Response.responseText);
                $('.form-messege').html("<p class='p-1 bg-danger text-white text-center'>" +
                    "An error occurred.</p>");
            }

        });
    });

});
