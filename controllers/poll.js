$(document).ready(function(){
	$(".form-group").hide();
	$(".group-titles").hide();
	$(".btn-div").hide();
	$(".answers").hide();
});

function nextQuestion(hide, show){
	$("#" + hide).hide();
	$("#" + show).show();
} 
