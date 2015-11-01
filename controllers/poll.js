$(document).ready(function(){
	$(".form-group").hide();
	$(".group-titles").hide();
	$(".btn-div").hide();
	$(".answers").hide();
	$(".form-group1").hide();
});

function nextQuestion(hide, show){
	$("#" + hide).hide();
	$("#" + show).show();
	$(".form-group1").hide();
} 
function nextSubQuestion(){
	$(".form-group1").show();
}
function nextSubQuestionNOT(){
	$(".form-group1").hide();
}