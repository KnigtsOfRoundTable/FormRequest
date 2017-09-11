$(document).ready(function(){


$("#sendMe").submit(function(){
e.preventDefault();


	var data = {
        name: $("#name").val(),
    	from: $("#from").val(),
    	body: $("#body").val()
    };

	$.ajax({
    	url: 'ajax.php', 
    	type: 'POST',
        data: data,
    	success: function(data){
        	$("div#returnedMessage").html(data);
        	console.log(data);
    	}//end of success callback function
    })//end of ajax method
    .done(function(data){
        $("div#returnedMessage").html(data);
            console.log(data);
        });

});//end of sendMe click event



















});