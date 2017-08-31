$(document).ready(function() {

    
//==================Jquery AJAX===========================
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
            // redirect a user to another page
            window.location = 'kyle/thankyouAjax.html';
        } 
        })

    event.preventDefault();
});
    
    

//=====================Axios============================
//==================Jquery AJAX===========================
$('#axiosform').submit(function(event) {
    console.log('axiosform fired');
    
    $('.form-group').removeClass('has-error'); // remove the error class
    $('.help-block').remove(); // remove the error text

    // get the form data
    var axiosData = {
        'name' 	    : $('input[name=name].axiosClass').val(),
        'company' 	: $('input[name=company].axiosClass').val(),
        'phone' 	: $('input[name=phone].axiosClass').val(),
        'email' 	: $('input[name=email].axiosClass').val(),
        'service' 	: $('select[name=service].axiosClass').val(),
        'budget' 	: $('input[name=budget].axiosClass').val(),
        'comments' 	: $('textarea[name=comments].axiosClass').val()
    };
    console.log('axiosData:', axiosData);
    
    // process the form
    axios.post('kyle/assets/php/axios.php', {
        data: axiosData,
      })
      .then(function (response) {
        console.log(response);
        window.location = 'kyle/thankyouAxios.html';
      })
      .catch(function (error) {
        console.log(error);
        if (error.name) {
            $('#name-group').addClass('has-error');
            $('#name-group').append('<div class="help-block">' + errors.name + '</div>');
        }

        // handle errors for email ---------------
        if (error.email) {
            $('#email-group').addClass('has-error');
            $('#email-group').append('<div class="help-block">' + errors.email + '</div>');
        }
      })

});

});