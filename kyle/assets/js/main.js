$(document).ready(function() {
    
        // process the form
        $('#ajaxform').submit(function(event) {
            console.log('ajaxform fired');

            $('.form-group').removeClass('has-error'); // remove the error class
            $('.help-block').remove(); // remove the error text

            // get the form data
            var ajaxData = {
                'name' 	    : $('input[name=name].ajaxClass').val(),
                'company' 	: $('input[name=company].ajaxClass').val(),
                'phone' 	: $('input[name=phone].ajaxClass').val(),
                'email' 	: $('input[name=email].ajaxClass').val(),
                'service' 	: $('select[name=service].ajaxClass').val(),
                'budget' 	: $('input[name=budget].ajaxClass').val(),
                'comments' 	: $('textarea[name=comments].ajaxClass').val()
            };
            console.log('ajaxData:', ajaxData);
            // process the form
            $.ajax({
                type 		: 'POST',
                url 		: 'kyle/assets/php/ajax.php', 
                data 		: ajaxData,
                dataType 	: 'json',
                encode 		: true
            })
            // use the done promise callback
            .done(function(data) {
                console.log('Ajax Done', data);
                //errors and validation messages
				if ( ! data.success) {
					console.log('Ajax fail');
					// handle errors for name ---------------
					if (data.errors.name) {
						$('#name-group').addClass('has-error');
						$('#name-group').append('<div class="help-block">' + data.errors.name + '</div>');
					}

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#email-group').addClass('has-error');
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>');
					}

				} else {
                    // log data to the console
                    console.log('Ajax Success', data); 
                    alert("Ajax Successful, check out the console before clicking okay.");
                    // redirect a user to another page
                    window.location = 'kyle/thankyou.html';
                } 
                })
    
            event.preventDefault();
        });
    
    });