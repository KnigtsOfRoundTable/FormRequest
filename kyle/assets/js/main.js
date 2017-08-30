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
                type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url 		: 'kyle/assets/php/ajax.php', // the url where we want to POST
                data 		: ajaxData, // our data object
                dataType 	: 'json', // what type of data do we expect back from the server
                encode 		: true
            })
            // using the done promise callback
            .done(function(data) {
                console.log('Ajax Done', data);
                // here we will handle errors and validation messages
				if ( ! data.success) {
					console.log('Ajax fail');
					// handle errors for name ---------------
					if (data.errors.name) {
						$('#name-group').addClass('has-error'); // add the error class to show red input
						$('#name-group').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}

				} else {
                    // log data to the console so we can see
                    console.log('Ajax Success', data); 
                    alert("Ajax Successful, check out the console before clicking okay.");
                    // redirect a user to another pag
                    window.location = 'kyle/thankyou.html';
                } 
                })
    
                // using the fail promise callback
                .fail(function(data) {
    
                    // show any errors
                    // best to remove for production
                    console.log(data);
                });
    
            // stop the form from submitting the normal way and refreshing the page
            event.preventDefault();
        });
    
    });