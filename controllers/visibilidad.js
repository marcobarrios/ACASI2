/**
 * Created by Marco Barrios on 22/02/2015.
 */
function SelectChanged() {
    if(document.myform.grupo_cultural.value == "3") {
        mostrar('8.1');
    } else {
        ocultar('8.1');
    }

    if(document.myform.lugar_nacimiento.value == "5") {
        mostrar('11.1');
    } else {
        ocultar('11.1');
    }

    if(document.myform.religion.value == "3") {
        mostrar('12.1');
    } else {
        ocultar('12.1');
    }

    if(document.myform.padres_hablado.value == "1") {
        mostrar('14.1');
    } else {
        ocultar('14.1');
    }

    if(document.myform.primera_relacion.value == "1") {
        mostrar('17.1');
    } else {
        ocultar('17.1');
    }

    if(document.myform.otro_jovenes_temprana.value == "1") {
        mostrar('18.1');
    } else {
        ocultar('18.1');
    }

    if(document.myform.centro_programa.value == "1") {
        mostrar('20');
    } else {
        ocultar('20');
    }

    if(document.myform.grupo_cultural.value == "3") {
        mostrar('8.1');
    } else {
        ocultar('8.1');
    }
}

function ocultar(id){
    var elDiv = document.getElementById(id);
    elDiv.style.display='none';
}

function mostrar(id){
    var elDiv = document.getElementById(id);
    elDiv.style.display='block';
}

window.onload = function() {
    ocultar('8.1');
    ocultar('11.1');
    ocultar('12.1');
    ocultar('14.1');
    ocultar('17.1');
    ocultar('18.1');
    ocultar('20');
    ocultar('22');
    ocultar('22.1');
    ocultar('24.1');
    ocultar('27.1');
    ocultar('28.1');
    ocultar('29.1');
    ocultar('30.1');
    ocultar('31');
    ocultar('32');
    ocultar('32.1');
    ocultar('33');
    ocultar('33.1');
    ocultar('34');
    ocultar('34.1');
    ocultar('37');
    ocultar('37.1');
    ocultar('38.1');
    ocultar('45');
    ocultar('46');
    ocultar('47');
    ocultar('48');
    ocultar('49');
    ocultar('50');
    ocultar('51');
    ocultar('53');
}