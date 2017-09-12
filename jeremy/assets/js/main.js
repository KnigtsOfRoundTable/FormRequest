$(document).ready(function() {
    
        
    //==================Jquery AJAX===========================
    $('#ajaxform').submit(function(event) {
        console.log('ajaxform fired');
    
        $('.form-group').removeClass('has-error'); // remove the error class
        $('.help-block').remove(); // remove the error text
    
        // get the form data
        var ajaxData = {
            'name' 	    : $('input[name=fullname].ajaxClass').val(),
            'email' 	: $('input[name=email].ajaxClass').val(),
            'address' 	: $('input[name=address].ajaxClass').val(),
            'destination' 	: $('input[name=destination].ajaxClass').val(),
            'airline' 	: $('select[name=airline].ajaxClass').val(),
        };

        $.ajax({
            type 		: 'POST',
            url 		: 'jeremy/assets/php/processEmailAjax.php', 
            data 		: ajaxData,
            dataType 	: 'json',
            encode 		: true
        })


    });

 //=====================Axios===========================

 $('#axiosform').submit(function(event) {
    console.log('axiosform fired');
    
    $('.form-group').removeClass('has-error'); // remove the error class
    $('.help-block').remove(); // remove the error text

    // get the form data
    var axiosData = {
        'name' 	    : $('input[name=fullname].axiosClass').val(),
        'email' 	: $('input[name=email].axiosClass').val(),
        'address' 	: $('input[name=address].axiosClass').val(),
        'destination' 	: $('input[name=destination].axiosClass').val(),
        'airline' 	: $('select[name=airline].axiosClass').val(),
    };

    console.log('axiosData:', axiosData);
    
    // process the form
    axios.post('jeremy/assets/php/processEmailAxios.php', {
        data: axiosData,
      })
      .then(function (response) {
        console.log(response);
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
