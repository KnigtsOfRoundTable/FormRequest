$(document).ready(function(){
    

var name = "";
var from = "";
var body = "";

$("#sendMe").submit(function(){
event.preventDefault();

	name = $("#name").val();
	from = $("#from").val();
	body = $("#body").val();

	$.ajax({
    	url: 'ajax.php', 
    	type: 'POST',
    	success: function(data){
        	$("div#returnedMessage").html(data);
        	console.log(data);
    	}//end of success callback function
    });//end of ajax method


});//end of sendMe click event



















});