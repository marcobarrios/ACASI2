$(document).ready(function(){
	$(".n_next").hide();
	$(".next11").hide();
	$(".r_next").hide();
	$(".form-group").hide();
	$(".group-titles").hide();
	$(".btn-div").hide();
	$(".answers").hide();
	$(".form-group1").hide()
	
});
function nextQuestion(hide,show){
	$("#"+hide).hide();
	$("#"+show).show();
	$(".form-group1").hide()
	$(".n_next").hide();
	$(".r_next").hide();
}
function nextSubQuestion(){
	$(".form-group1").show()
}
function nextSubQuestionNOT(){
	$(".form-group1").hide()
}
function question49(){
	$(".r_next").hide();
	$("#49").hide();
	if(document.myform.primera_relacion.value=="13.1"){
		$("#50").show()}else{$("#51").show();
	}
}
function questionNext21(){
	$("#21").hide();
	$(".r_next").hide();
	if(document.myform.medios_comunicacion.value=="17.1"){
		$("#22").show()
	}else{
		$("#23").show()
	}
}
function questionNext30(){
	$("#30").hide();
	$(".r_next").hide();
	if((document.myform.llaga.value=="26.A.1")||(document.myform.comezon.value=="26.B.1")||(document.myform.ardor.value=="26.C.1")||(document.myform.materia.value=="26.D.1")||(document.myform.flujo.value=="26.E.1")||(document.myform.ulcera.value=="26.F.1")||(document.myform.sintoma_otro.value=="26.F.1"))
		{
			$("#31").show()
		}else{
			$("#35").show()
		}
}
function questionNext31(){
	$("#31").hide();
	$(".r_next").hide();
	if(document.myform.busca_tratamiento.value=="27.1"){
		$("#32").show()
	}else{
		$("#35").show()
	}
}
function questionNext36(){
	$("#36").hide();
	$(".r_next").hide();
	if(document.myform.cambiado_comportamiento.value=="32.1"){
		$("#37").show()
	}else{
		$("#38").show()
	}
}
function questionNext45(){
	$("#45").hide();
	$(".r_next").hide();
	if(document.myform.tiempo_pareja.value!="41.4"){
		$("#46").show()
	}else{
		if(document.myform.primera_relacion.value=="13.1"){
			$("#50").show()
		}else{
			$("#52").show()
		}
	}

}
function questionNext46(){
	$("#46").hide();
	$(".r_next").hide();
	if(document.myform.mas_pareja.value=="42.1"){
		$("#47").show()
	}else{
		if(document.myform.primera_relacion.value=="13.1"){
			$("#50").show()
		}else{
			$("#51").show()
		}
	}
}
function questionNext52(){
	$("#52").hide();
	$(".r_next").hide();
	if(document.myform.toma_alcohol1.value=="48.4"){
		$("#54").show()
	}else{
		$("#53").show()
	}
}
function vacios(){
	if($.trim($(".vacio").html())==''){
		$(".siguiente").hide()
	}else{
		$(".siguiente").show()
	}
}
function PlaySound(soundobj){
	var thissound=document.getElementById(soundobj);thissound.play()
}
function StopSound(soundobj){
	var thissound=document.getElementById(soundobj);thissound.pause();thissound.currentTime=0
}
function validacion_texto(v,v2){
	var valor = $('#'+v).val().trim();
	if(valor == '')
	{
		$('.'+v2).hide();
	}
	else
	{
		$('.'+v2).show();
	}
};

$('._mDep').on('change',function(){
    var valor = $(this).val();
    if(valor=='Aguacatán'){
        document.getElementById("departamento").value = "Huehuetenango";
    }
    else if(valor == 'Colotenango')
    {
       document.getElementById("departamento").value = "Huehuetenango";
       $(".next11").show();
    }
    else if(valor == 'Concepción Chiquirichapa')
    {
       document.getElementById("departamento").value = "Quetzaltenango";
       $(".next11").show(); 
    }
    else if(valor == 'Nebaj')
    {
       document.getElementById("departamento").value = "Quiche";
       $(".next11").show();
    }
    else if(valor == 'San Juan Ostuncalco')
    {
    	document.getElementById("departamento").value = "Quetzaltenango";
       $(".next11").show(); 
    }
    else if(valor == 'San Pedro Sacatepéquez')
    { 
       document.getElementById("departamento").value = "San Marcos";
       $(".next11").show();
    }
});
function ver__(){
	var valor = $('#departamento').val();
	alert(valor);
}
function fecha(){
	$(".n_next").show();
}

$('#edad').on('keydown',function(){
  	
});

function radio(){
	$(".r_next").show();
}

function radio_text(){
	$(".r_next").hide();
}

$('.radio').on('change',function(){
	$(".r_next").show();
});

$('.radio_oc').on('change',function(){
	$(".r_next").hide();
});

