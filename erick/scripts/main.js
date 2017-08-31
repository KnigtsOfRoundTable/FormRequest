$(document).ready(function(){
    

var name = "";
var from = "";
var body = "";


$("#sendMe").click(function(){

	name = $("#name").val();
	from = $("#from").val();
	body = $("#body").val();


	$.ajax({
    	url: "ajax.php", 
    	type: "POST",
    	data: {name: name, from: from, body: body},
    	success: function(result){
        	$("div#returnedMessage").html(result);
    	}//end of success callback function
    });//end of ajax method

});//end of sendMe click event



















});