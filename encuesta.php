<!--Created by Marco Barrios on 12/02/2015.-->
<!DOCTYPE html>
<html>
<head lang="es-ES">
    <meta charset="UTF-8">
    <meta name = "viewport" content= "width=device-width, minimum-scale=1, maximum-scale=1"/>
    <title>::Monitoreo::</title>
    <link rel = "stylesheet" href = "styles/normalize.css"/>
    <link rel="stylesheet" href="styles/styles.css"/>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'/>
    <link rel ="shortcut icon" type = "image/x-icon" href = "images/logo.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>
    <header>
        <figure id = "logo">
            <img src="images/logo.png" width="20px" />
        </figure>
        <h2>ACASI</h2>
    </header>

    <form name="myform" method="post" action="controllers/guardardatos.php">

        <input type="hidden" name="latitud" id="latitud" value="">
        <input type="hidden" name="longitud" id="longitud" value="">
        <input type="hidden" name="altitud" id="altitud" value="">

        <div id = "groupA" class = "center container " name="groupA">
            <div class = "iA center"  id = "0">
                <div class="main-title">
                    <h3>Información General</h3>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(0,1)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            <div id="1" class="form-group">
                <div class="question">
                    <label>1. ¿Cuál es su nombre?</label>
                </div>
                <div class="controls">
                        <input class="textinput textInput form-control vacio" id="nombre" maxlength="45" name="nombre" type="text"  placeholder = "Ingrese su Nombre" required>
                </div>
                <div class = "next" id ="next2"><a href="#" onclick="nextQuestion(1,2)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="2" class="form-group">
                <div class="question">
                    <label>2. ¿Cuál es su apellido?</label>
                </div>
                <div class="controls">
                        <input class="textinput textInput form-control" id="apellido" maxlength="45" name="apellido" type="text" placeholder = "Ingrese su Apellido">
                </div>
                <div class = "next" id ="next3"><a href="#" onclick="nextQuestion(2,3)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="3" class="form-group">
                <div class="question">
                    <label>3. ¿Cuál es su fecha de nacimiento?</label>
                </div>
                <div class="controls">
                        <input class="textinput textInput form-control" id="dia" maxlength="45" name="dia" type="text" placeholder = "Ingrese el Dia">
                        <br><input class="textinput textInput form-control" id="mes" maxlength="45" name="mes" type="text" placeholder = "Ingrese el Mes">
                        <br><input class="textinput textInput form-control" id="año" maxlength="45" name="año" type="text" placeholder = "Ingrese el Año">
                </div>
                <div class = "next" id ="next4"><a href="#" onclick="nextQuestion(3,4)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="4" class="form-group">
                <div class="question">
                    <label>4. Seleccione el color de su tarjeta</label>
                </div>
                <div class="controls">
                    <article>
                        <div class = "radio">
                            <label ><input type="radio" name="color_tarjeta" value="Rojo" checked="checked" /> Rojo</label>
                        </div>
                        <div class = "radio">
                            <label ><input type="radio" name="color_tarjeta" value="Amarillo"/> Amarillo </label>
                        </div>
                        <div class = "radio">
                            <label ><input type="radio" name="color_tarjeta" value="Negro"/> Negro </label>
                        </div>
                        <div class = "radio">
                            <label ><input type="radio" name="color_tarjeta" value="Blanco"/> Blanco</label>
                        </div>
                    </article>
                </div>
                <div class = "next" id ="next5"><a href="#" onclick="nextQuestion(4,5)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="5" class="form-group">
                <div class="question" onmousemove="PlaySound('edad_s')" onmouseout="StopSound('edad_s')">
                    <label>5. ¿Qué edad tiene?</label>
                </div>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad" maxlength="45" name="edad" type="text" placeholder="Ingrese su Edad">
                </div>
                <div class = "next" id ="next6"><a href="#" onclick="nextQuestion(5,6)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

             <div id="6" class="form-group" >
                <div class="question" onmousemove="PlaySound('estado_s')" onmouseout="StopSound('estado_s')"> 
                    <label>6. ¿Cuál es su estado civil?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('estado_s1')" onmouseout="StopSound('estado_s1')">
                        <label><input type="radio" name="estado_civil" value="2.1"/> Soltero</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('estado_s2')" onmouseout="StopSound('estado_s2')">
                        <label><input type="radio" name="estado_civil" value="2.2"/> Unido </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('estado_s3')" onmouseout="StopSound('estado_s3')">
                        <label><input type="radio" name="estado_civil" value="2.3"/> Casado </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="estado_civil" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="estado_civil" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next7"><a href="#" onclick="nextQuestion(6,7)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="7" class="form-group">
                <div class="question" onmousemove="PlaySound('grado_s')" onmouseout="StopSound('grado_s')">
                    <label>7. ¿Hasta qué grado aprobó usted en la escuela?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('grado_s1')" onmouseout="StopSound('grado_s1')">
                        <label><input type="radio" name="grado" value="3.1"/> Primaria incompleta (antes de 6to)</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('grado_s2')" onmouseout="StopSound('grado_s2')">
                        <label><input type="radio" name="grado" value="3.2"/> Primaria completa (6to)</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('grado_s3')" onmouseout="StopSound('grado_s3')">
                        <label><input type="radio" name="grado" value="3.3"/> Alfabetización</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('grado_s4')" onmouseout="StopSound('grado_s4')">
                        <label><input type="radio" name="grado" value="3.4"/> Básico</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('grado_s5')" onmouseout="StopSound('grado_s5')">
                        <label><input type="radio" name="grado" value="3.5"/> Diversificado</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('grado_s6')" onmouseout="StopSound('grado_s6')">
                        <label><input type="radio" name="grado" value="3.6"/> Universitaria </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="grado" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="grado" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next8"><a href="#" onclick="nextQuestion(7,8)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="8" class="form-group">
                <div class="question" onmousemove="PlaySound('grupo_s')" onmouseout="StopSound('grupo_s')">
                    <label>8. ¿A qué grupo cultural pertenece?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('grupo_s1')" onmouseout="StopSound('grupo_s1')">
                        <label onclick="nextSubQuestionNOT()"><input type="radio" name="grupo_cultural" value="4.1"/> Maya</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('grupo_s2')" onmouseout="StopSound('grupo_s2')">
                        <label ><input type="radio" name="grupo_cultural" value="4.2"/> Ladino</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('grupo_s3')" onmouseout="StopSound('grupo_s3')">
                        <label ><input type="radio" name="grupo_cultural" value="4.3"/> Otro (especifique)</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="grupo_cultural" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="grupo_cultural" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div id="8.1" class="form-group1">
                    <label>Especificque otro grupo cultural</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_grupo_cultural" maxlength="45" name="otro_grupo_cultural" type="text" placeholder="Ingrese Grupo Cultural">
                    </div>
                </div>
                <div class = "next" id ="next9"><a href="#" onclick="nextQuestion(8,9)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="9" class="form-group">
                <div class="question" onmousemove="PlaySound('idioma_s')" onmouseout="StopSound('idioma_s')">
                    <label>9. ¿Qué idioma habla?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('idioma_s1')" onmouseout="StopSound('idioma_s1')">
                        <label><input type="radio" name="idioma" value="5.1"/> Castellano</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('idioma_s2')" onmouseout="StopSound('idioma_s2')">
                        <label><input type="radio" name="idioma" value="5.2"/> Kiche</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('idioma_s3')" onmouseout="StopSound('idioma_s3')">
                        <label><input type="radio" name="idioma" value="5.3"/> Mam</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('idioma_s4')" onmouseout="StopSound('idioma_s4')">
                        <label><input type="radio" name="idioma" value="5.4"/> Ixil</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('idioma_s5')" onmouseout="StopSound('idioma_s5')">
                        <label><input type="radio" name="idioma" value="5.5"/> Aguacateco</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('idioma_s6')" onmouseout="StopSound('idioma_s6')">
                        <label><input type="radio" name="idioma" value="5.6"/> Chalchiteco</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('idioma_s7')" onmouseout="StopSound('idioma_s7')">
                        <label><input type="radio" name="idioma" value="5.7"/> Sacapulteco</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="idioma" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="idioma" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next10"><a href="#" onclick="nextQuestion(9,10)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="10" class="form-group">
                <div class="question" onmousemove="PlaySound('vive_s')" onmouseout="StopSound('vive_s')">
                    <label>10. ¿En dónde vive actualmente?</label>
                </div>
                <div class="controls">
                <div onmousemove="PlaySound('vive_s1')" onmouseout="StopSound('vive_s1')">Aldea:</div>
                        <input class="textinput textInput form-control" id="aldea" maxlength="45" name="aldea" type="text" placeholder ="Ingrese Aldea">
                <br><div onmousemove="PlaySound('vive_s2')" onmouseout="StopSound('vive_s2')">Municipio:</div>
                        <input class="textinput textInput form-control" id="municipio" maxlength="45" name="municipio" type="text"  placeholder ="Ingrese Municipio">
                <br><div onmousemove="PlaySound('vive_s3')" onmouseout="StopSound('vive_s3')">Departamento:</div>
                        <input class="textinput textInput form-control" id="departamento" maxlength="45" name="departamento" type="text" placeholder = "Ingrese Departamento">
                </div>
                <div class = "next" id ="next11"><a href="#" onclick="nextQuestion(10,11)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="11" class="form-group">
                <div class="question" onmousemove="PlaySound('nacio_s')" onmouseout="StopSound('nacio_s')">
                    <label>11. ¿En dónde nació?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('nacio_s1')" onmouseout="StopSound('nacio_s1')">
                        <label><input type="radio" name="lugar_nacimiento" value="7.1"/> Hospital Nacional </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('nacio_s2')" onmouseout="StopSound('nacio_s2')">
                        <label><input type="radio" name="lugar_nacimiento" value="7.2"/> Hospital Privado </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('nacio_s3')" onmouseout="StopSound('nacio_s3')">
                        <label><input type="radio" name="lugar_nacimiento" value="7.3"/> En su casa </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('nacio_s4')" onmouseout="StopSound('nacio_s4')">
                        <label><input type="radio" name="lugar_nacimiento" value="7.4"/> Comadrona </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('nacio_s5')" onmouseout="StopSound('nacio_s5')">
                        <label><input type="radio" name="lugar_nacimiento" value="7.5"/> Otro (especifique) </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="lugar_nacimiento" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="lugar_nacimiento" value="99"/> No se la respuesta</label>
                    </div>
                </article>
               </div>
            
            <div id="11.1" class="form-group1">
                <label>Especificque otro grupo lugar de nacimiento</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_lugar_nacimiento" maxlength="45" name="otro_lugar_nacimiento" type="text" placeholder="Ingrese Lugar de Nacimiento">
                </div>
            </div>
                <div class = "next" id ="next12"><a href="#" onclick="nextQuestion(11,12)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>
            <div id="12" class="form-group">
                <div class="question" onclick="nextSubQuestion()" onmousemove="PlaySound('religion_s')" onmouseout="StopSound('religion_s')">
                    <label>12. ¿Cuál es su religión?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('religion_s1')" onmouseout="StopSound('religion_s1')">
                        <label><input type="radio" name="religion" value="8.1"/> Católica </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('religion_s2')" onmouseout="StopSound('religion_s2')">
                        <label><input type="radio" name="religion" value="8.2"/> Evangélica </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('religion_s3')" onmouseout="StopSound('religion_s3')">
                        <label><input type="radio" name="religion" value="8.3"/> Otro (especifique)</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('religion_s4')" onmouseout="StopSound('religion_s4')">
                        <label><input type="radio" name="religion" value="8.4"/> Ninguno</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onclick="nextSubQuestion()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="religion" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onclick="nextSubQuestion()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="religion" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
            <div id="12.1" class="form-group1">
                <label>Especificque otra religión</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otra_religion" maxlength="45" name="otra_religion" type="text" placeholder= "Ingrese Región">
                </div>
            </div>
                <div class = "next"><a href="#" onclick="nextQuestion(12,'clave02')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
        </div>

        <div id = "groupB" name = "groupB" class = "center container">
            <div class = "iA center group-titles"  id = "clave02">
                <div class="main-title" onmousemove="PlaySound('title_9')" onmouseout="StopSound('title_9')">
                    <h3> Nosotrso estamos interesados en conocer el acceso a la educación sexual</h3>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion('clave02',13)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            <div id="13" class="form-group">
            <div class="question" onmousemove="PlaySound('platicas_s')" onmouseout="StopSound('platicas_s')">
                <label>13. ¿Has recibido pláticas sobre salud sexual o eduación sexual?</label>
            </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('platicas_s1')" onmouseout="StopSound('platicas_s1')">
                        <label><input type="radio" name="platicas_salud_sexual" value="9.1"/> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('platicas_s2')" onmouseout="StopSound('platicas_s2')">
                        <label><input type="radio" name="platicas_salud_sexual" value="9.2"/> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="platicas_salud_sexual" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="platicas_salud_sexual" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(13,14)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="14" class="form-group">
                <div class="question" onmousemove="PlaySound('phds_s')" onmouseout="StopSound('phds_s')"><label>14. ¿Sus padres le han hablado de sexualidad?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('phds_s1')" onmouseout="StopSound('phds_s1')">
                        <label><input type="radio" name="padres_hablado" value="10.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('phds_s2')" onmouseout="StopSound('phds_s2')">
                        <label><input type="radio" name="padres_hablado" value="10.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="padres_hablado" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="padres_hablado" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>

                <div id="14.1" class="form-group1">
                <label>¿A qué edad?</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="edad_platica" maxlength="45" name="edad_platica" type="text" placeholder ="Escriba Edad">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(14,15)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            <div id="15" class="form-group">
                <div class="question" onmousemove="PlaySound('aqesex_s')" onmouseout="StopSound('aqesex_s')"><label>15. ¿A qué edad los varones en su comunidad tienen su primera novia?</label></div>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad_varones" maxlength="45" name="edad_varones" type="text" placeholder="Ingrese Edad">
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(15,16)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="16" class="form-group">
                <div class="question" onmousemove="PlaySound('aqesex2_s')" onmouseout="StopSound('aqesex2_s')" ><label>16. ¿A qué edad los padres de familia permiten que la hija tenga novio?</label></div>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad_padres" maxlength="45" name="edad_padres" type="text" placeholder="Ingrese Edad">
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(16,17)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="17" class="form-group">
                <div class="question" onmousemove="PlaySound('primera_s')" onmouseout="StopSound('primera_s')"><label>17. ¿Ya tuvo su primera relación sexual?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('primera_s1')" onmouseout="StopSound('primera_s1')">
                        <label><input type="radio" name="primera_relacion" value="13.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('primera_s2')" onmouseout="StopSound('primera_s2')">
                        <label><input type="radio" name="primera_relacion" value="13.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="primera_relacion" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="primera_relacion" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                    <div id="17.1" class="form-group1">
                    <div onmousemove="PlaySound('primera_s3')" onmouseout="StopSound('primera_s3')"><label>¿A qué edad?</label></div>
                    <div class="controls">
                        <input class="textinput textInput form-control" id="edad_relacion" maxlength="45" name="edad_relacion" type="text" placeholder ="Ingrese Edad">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(17,18)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            
            <div id="18" class="form-group">
                <div class="question"  onmousemove="PlaySound('porquesex_s')" onmouseout="StopSound('porquesex_s')">
                <label>18. ¿Por qué los jóvenes inician relaciones sexuales a temprana edad?</label></div>
                <div id ="d-18-1">
                    <div class="subText" onmousemove="PlaySound('porquesex_s1')" onmouseout="StopSound('porquesex_s1')">
                    <label >Demostrar que es hombre</label></div>
                
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('primera_s1')" onmouseout="StopSound('primera_s1')">
                        <label><input type="radio" name="demostrar_hombre" value="14.A.1" /> Sí</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('primera_s2')" onmouseout="StopSound('primera_s2')">
                        <label><input type="radio" name="demostrar_hombre" value="14.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="demostrar_hombre" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="demostrar_hombre" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-1','d-18-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                <div id="d-18-2" class="answers">
                    <div class="subText" onmousemove="PlaySound('porquesex_s2')" onmouseout="StopSound('porquesex_s2')"><label>Mis papás así lo dicen</label></div>
                
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('primera_s1')" onmouseout="StopSound('primera_s1')">
                        <label><input type="radio" name="papas_dicen" value="14.B.1" /> Sí </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('primera_s2')" onmouseout="StopSound('primera_s2')">
                        <label><input type="radio" name="papas_dicen" value="14.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="papas_dicen" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="papas_dicen" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-2','d-18-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-18-3" class="answers">
                    <div class="subText" onmousemove="PlaySound('porquesex_s3')" onmouseout="StopSound('porquesex_s3')">
                      <label>Mis amigos han tenido relaciones sexuales</label>  
                    </div> 
                
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('primera_s1')" onmouseout="StopSound('primera_s1')">
                        <label><input type="radio" name="amigos_relaciones" value="14.C.1" /> Sí </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('primera_s2')" onmouseout="StopSound('primera_s2')">
                        <label><input type="radio" name="amigos_relaciones" value="14.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="amigos_relaciones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="amigos_relaciones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-3','d-18-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-18-4" class="answers">
                    <div class="subText" onmousemove="PlaySound('porquesex_s4')" onmouseout="StopSound('porquesex_s4')">
                    <label>En mi comunidad se dice que "te deja el tren" si no se casa a temprana edad</label></div>
                
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('primera_s1')" onmouseout="StopSound('primera_s1')">
                        <label><input type="radio" name="deja_tren" value="14.D.1" /> Sí </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('primera_s2')" onmouseout="StopSound('primera_s2')">
                        <label><input type="radio" name="deja_tren" value="14.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="deja_tren" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="deja_tren" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-4','d-18-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-18-5" class="answers">
                    <div class="subText" onmousemove="PlaySound('porquesex_s5')" onmouseout="StopSound('porquesex_s5')">
                        
                    <label>Demostrar "la prueba de amor"</label></div>
                
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('primera_s1')" onmouseout="StopSound('primera_s1')">
                        <label><input type="radio" name="prueba_amor" value="14.E.1" /> Sí </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('primera_s2')" onmouseout="StopSound('primera_s2')">
                        <label><input type="radio" name="prueba_amor" value="14.E.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="prueba_amor" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="prueba_amor" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-5','d-18-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-18-6" class="answers">
                    <div class="subText" onmousemove="PlaySound('porquesex_s6')" onmouseout="StopSound('porquesex_s6')">
                        
                   
                    <label>Otro (especifique)</label> </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('primera_s1')" onmouseout="StopSound('primera_s1')">
                        <label><input type="radio" name="otro_jovenes_temprana" value="14.F.1" /> Sí </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('primera_s2')" onmouseout="StopSound('primera_s2')">
                        <label><input type="radio" name="otro_jovenes_temprana" value="14.F.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="otro_jovenes_temprana" value="3" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="otro_jovenes_temprana" value="3"/> No se la respuesta </label>
                    </div>
                </article>
                </div>
                <div id="18.1" class="form-group1">
                    <label>Especifique </label>
                    <div class="controls">
                            <input class="textinput textInput form-control" id="otro_jovenes_temprano" maxlength="45" name="otro_joven_temprano" type="text" placeholder="Ingrese">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(18,19)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>

            <div id="19" class="form-group">
                <div class="question" onmousemove="PlaySound('centro_s')" onmouseout="StopSound('centro_s')">
                <label>19. ¿Su centro de salud más cercano cuenta con un programa destinado a la educación sexual integral con pertinencia cultural?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('centro_s1')" onmouseout="StopSound('centro_s1')">
                        <label><input type="radio" name="centro_programa" value="15.1" /> Sí <br></label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('centro_s2')" onmouseout="StopSound('centro_s2')">
                        <label><input type="radio" name="centro_programa" value="15.2" /> No <br></label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="centro_programa" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="centro_programa" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(19,20)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="20" class="form-group">
                <div class="question" onmousemove="PlaySound('servicios_s')" onmouseout="StopSound('servicios_s')">
                <label>20. ¿Cuáles son los servicios con los que cuenta su centro de salud más cercano?</label></div>
                <div id="d-20-1">
                <div class="subText" onmousemove="PlaySound('servicios_s1')" onmouseout="StopSound('servicios_s1')">
                    <label>Pláticas sobre salud sexual y reproductiva en forma simple</label>
                </div>
                    
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('centro_s1')" onmouseout="StopSound('centro_s1')">
                        <label><input type="radio" name="platicas_salud" value="16.A.1" /> Sí </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('centro_s2')" onmouseout="StopSound('centro_s2')">
                        <label><input type="radio" name="platicas_salud" value="16.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="platicas_salud" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="platicas_salud" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-20-1','d-20-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-20-2" class="answers">
                    <div class="subText" onmousemove="PlaySound('servicios_s2')" onmouseout="StopSound('servicios_s2')">
                    <label>Se utiliza lengua materna para explicar sobre salud sexual y reproductiva</label></div>
                
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('centro_s1')" onmouseout="StopSound('centro_s1')">
                        <label><input type="radio" name="lengua_materna" value="16.B.1" /> Sí </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('centro_s2')" onmouseout="StopSound('centro_s2')">
                        <label><input type="radio" name="lengua_materna" value="16.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="lengua_materna" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="lengua_materna" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-20-2','d-20-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-20-3" class="answers">
                    <div class="subText" onmousemove="PlaySound('servicios_s3')" onmouseout="StopSound('servicios_s3')">
                      <label>Se da a conocer los términos de salud sexual y reproductivo de acuerdo al contexto</label>  
                    </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('centro_s1')" onmouseout="StopSound('centro_s1')">
                        <label><input type="radio" name="terminos_salud" value="16.C.1" /> Sí </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('centro_s2')" onmouseout="StopSound('centro_s2')">
                        <label><input type="radio" name="terminos_salud"  value="16.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="terminos_salud" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="terminos_salud" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-20-3','d-20-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-20-4" class="answers">
                    <div class="subText" onmousemove="PlaySound('servicios_s4')" onmouseout="StopSound('servicios_s4')" >
                        <label>Se basan las pláticas en el buen vivir de los pueblos</label>
                    </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('centro_s1')" onmouseout="StopSound('centro_s1')">
                        <label><input type="radio" name="platicas_pueblos" value="16.D.1" /> Sí </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('centro_s2')" onmouseout="StopSound('centro_s2')">
                        <label><input type="radio" name="platicas_pueblos" value="16.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="platicas_pueblos" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="platicas_pueblos" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(20,21)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>

            <div id="21" class="form-group">
                <div class="question"onmousemove="PlaySound('abordan_s')" onmouseout="StopSound('abordan_s')">
                <label>21. ¿Los medios de comunicación locales abordan temas sobre salud sexual y reproductiva de la niñez y adolescencia?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('abordan_s1')" onmouseout="StopSound('abordan_s1')">
                        <label><input type="radio" name="medios_comunicacion" value="17.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('abordan_s2')" onmouseout="StopSound('abordan_s2')">
                        <label><input type="radio" name="medios_comunicacion" value="17.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="medios_comunicacion" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="medios_comunicacion" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="questionNext21()"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="22" class="form-group">
                <div class="question" onmousemove="PlaySound('eidioma_s')" onmouseout="StopSound('eidioma_s')">
                <label>22. ¿En que idioma lo hacen?</label></div>
                <div id="d-22-1">
                    <div class="subTexto" onmousemove="PlaySound('eidioma_s1')" onmouseout="StopSound('eidioma_s1')">
                    <label>Español o castellano</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('abordan_s1')" onmouseout="StopSound('abordan_s1')">
                        <label><input type="radio" name="idioma_español" value="18.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('abordan_s2')" onmouseout="StopSound('abordan_s2')">
                        <label><input type="radio" name="idioma_español" value="18.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="idioma_español" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="idioma_español" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-22-1','d-22-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-22-2" class="answers">
                    <div class="subTexto" onmousemove="PlaySound('eidioma_s2')" onmouseout="StopSound('eidioma_s2')">
                    <label>Idioma materna</label>
                    </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('abordan_s1')" onmouseout="StopSound('abordan_s1')">
                        <label><input type="radio" name="idioma_materno" value="18.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('abordan_s2')" onmouseout="StopSound('abordan_s2')">
                        <label><input type="radio" name="idioma_materno" value="18.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="idioma_materno" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="idioma_materno" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-22-2','d-22-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-22-3" class ="answers">
                    <div class="subText" onmousemove="PlaySound('eidioma_s3')" onmouseout="StopSound('eidioma_s3')">
                    <label>Español/castellano e idioma materno</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('abordan_s1')" onmouseout="StopSound('abordan_s1')">
                        <label><input type="radio" name="idioma_español_materno" value="18.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('abordan_s2')" onmouseout="StopSound('abordan_s2')">
                        <label><input type="radio" name="idioma_español_materno" value="18.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="idioma_español_materno" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="idioma_español_materno" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-22-3','d-22-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-22-4" class="answers">
                    <div class="subText" onmousemove="PlaySound('eidioma_s4')" onmouseout="StopSound('eidioma_s4')">
                    <label>Otro (especifique)</label></div>
                
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('abordan_s1')" onmouseout="StopSound('abordan_s1')">
                        <label><input type="radio" name="idioma_otro" value="18.D.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('abordan_s2')" onmouseout="StopSound('abordan_s2')">
                        <label><input type="radio" name="idioma_otro" value="18.D.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="idioma_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="idioma_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div id="22.1" class="form-group1">
                    <label>Especifique otro idioma</label>
                    <div class="controls">
                            <input class="textinput textInput form-control" id="otro_idioma" maxlength="45" name="otro_idioma" type="text" placeholder="Ingrese Idioma">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(22,23)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>

            <div id="23" class="form-group">
            <div>
                <div class="question" onmousemove="PlaySound('plan_s')" onmouseout="StopSound('plan_s')">
                <label>23. ¿En el centro de salud más cercano se tiene acceso a planificación familiar?</label></div>
            </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('plan_s1')" onmouseout="StopSound('plan_s1')">
                        <label><input type="radio" name="planificacion_familiar" value="19.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('plan_s2')" onmouseout="StopSound('plan_s2')">
                        <label><input type="radio" name="planificacion_familiar" value="19.2" /> No</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="planificacion_familiar" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="planificacion_familiar" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(23,24)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="24" class="form-group">
                <div class="question" onmousemove="PlaySound('discriminacion_s')" onmouseout="StopSound('discriminacion_s')">
                <label>24. ¿Ha sufrido algún tipo de discriminación en su centro de salud?</label></div>
                <div id="d-24-1">
                    <div class="subText" onmousemove="PlaySound('discriminacion_s1')" onmouseout="StopSound('discriminacion_s1')">
                        <label>Por su edad</label>
                    </div>
                
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('plan_s1')" onmouseout="StopSound('plan_s1')">
                        <label><input type="radio" name="discriminacion_edad" value="20.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('plan_s2')" onmouseout="StopSound('plan_s2')">
                        <label><input type="radio" name="discriminacion_edad" value="20.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="discriminacion_edad" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="discriminacion_edad" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                     <div class = "next"><a href="#" onclick="nextQuestion('d-24-1','d-24-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-24-2" class="answers">
                    <div class="subText" onmousemove="PlaySound('discriminacion_s2')" onmouseout="StopSound('discriminacion_s2')">
                    <label>Por ser indígena</label>
                    </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('plan_s1')" onmouseout="StopSound('plan_s1')">
                        <label><input type="radio" name="discriminacion_indigena" value="20.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('plan_s2')" onmouseout="StopSound('plan_s2')">
                        <label><input type="radio" name="discriminacion_indigena" value="20.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="discriminacion_indigena" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="discriminacion_indigena" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                     <div class = "next"><a href="#" onclick="nextQuestion('d-24-2','d-24-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-24-3" class="answers">
                    <div class="subText" onmousemove="PlaySound('discriminacion_s3')" onmouseout="StopSound('discriminacion_s3')">
                    <label>Por su género</label>
                    </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('plan_s1')" onmouseout="StopSound('plan_s1')">
                        <label><input type="radio" name="discriminacion_genero" value="20.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('plan_s2')" onmouseout="StopSound('plan_s2')">
                        <label><input type="radio" name="discriminacion_genero" value="20.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="discriminacion_genero" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="discriminacion_genero" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                     <div class = "next"><a href="#" onclick="nextQuestion('d-24-3','d-24-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-24-4" class="answers">
                    <div class="subText" onmousemove="PlaySound('discriminacion_s4')" onmouseout="StopSound('discriminacion_s4')">
                    <label>Otro (especifique)</label>
                    </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('plan_s1')" onmouseout="StopSound('plan_s1')">
                        <label><input type="radio" name="discriminacion_otro" value="20.D.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('plan_s2')" onmouseout="StopSound('plan_s2')">
                        <label><input type="radio" name="discriminacion_otro" value="20.D.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="discriminacion_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="discriminacion_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>

                <div id="24.1" class="form-group1">
                    <label>Especifique otra descriminación</label>
                    <div class="controls">
                        <input class="textinput textInput form-control" id="otra_discriminacion" maxlength="45" name="otra_discriminacion" type="text" placeholder="Ingrese Descriminación">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(24,'clave03')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>
        </div>

        <div id = "groupC" name = "groupC" class = "center container">
            <div class = "iA center group-titles"  id = "clave03">
                <div class="main-title" onmousemove="PlaySound('title_22_s')" onmouseout="StopSound('title_22_s')">
                    <h3>Nosotros estamos interesados en su conocimiento sobre el riesgo de transmisión de una ITS o VIH, por favor pueda contestar estas preguntas </h3>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion('clave03',25)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="25" class="form-group">
            <div class ="question" onmousemove="PlaySound('q23_s')" onmouseout="StopSound('q23_s')">
                <label>25. ¿De qué manera se puede reducir el riesgo de transmisión del VIH?</label>
            </div>
            <div id="d-25-1">
                <div class="subText" onmousemove="PlaySound('q23_s1')" onmouseout="StopSound('q23_s1')">
                    <label>Fidelidad</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('plan_s1')" onmouseout="StopSound('plan_s1')">
                        <label><input type="radio" name="fidelidad" value="21.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('plan_s2')" onmouseout="StopSound('plan_s2')">
                        <label><input type="radio" name="fidelidad" value="21.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="fidelidad" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="fidelidad" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-25-1','d-25-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-25-2" class="answers">
                    <div class="subText" onmousemove="PlaySound('q23_s2')" onmouseout="StopSound('q23_s2')">
                    <label>Uso de un preservativo en cada relación sexual</label>
                    </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('plan_s1')" onmouseout="StopSound('plan_s1')">
                        <label><input type="radio" name="preservativo" value="21.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('plan_s2')" onmouseout="StopSound('plan_s2')">
                        <label><input type="radio" name="preservativo" value="21.B.2" checked="checked"/> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="preservativo" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="preservativo" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-25-2','d-25-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-25-3" class="answers">
                    <div class="subText" onmousemove="PlaySound('q23_s3')" onmouseout="StopSound('q23_s3')">
                    <label>Abstinencia</label>
                    </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('plan_s1')" onmouseout="StopSound('plan_s1')">
                        <label><input type="radio" name="abstinencia" value="21.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('plan_s2')" onmouseout="StopSound('plan_s2')">
                        <label><input type="radio" name="abstinencia" value="21.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="abstinencia" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="abstinencia" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(25,26)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>

            <div id="26" class="form-group">
                <div class ="question" onmousemove="PlaySound('q24_s')" onmouseout="StopSound('q24_s')">
                    <label>26. ¿Una persona de aspecto saludable puede tener VIH?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="persona_saludable" value="22.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="persona_saludable" value="22.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="persona_saludable" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="persona_saludable" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(26,27)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="27" class="form-group">
                <div class ="question" onmousemove="PlaySound('q25_s')" onmouseout="StopSound('q25_s')">
                    <label>27. ¿De qué forma se puede adquirir VIH?</label>
                </div>
                <div id="d-27-1">
                    <div class="subText" onmousemove="PlaySound('q25_s1')" onmouseout="StopSound('q25_s1')">
                    <label>Por picadura de mosquito</label>
                    </div>
                    <div class="controls ">
                    <article>
                        <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                            <label><input type="radio" name="picadura_mosquito" value="23.A.1" /> Si </label>
                        </div>
                        <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                            <label><input type="radio" name="picadura_mosquito" value="23.A.2" /> No </label>
                        </div>
                        <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="picadura_mosquito" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="picadura_mosquito" value="99"/> No se la respuesta</label>
                    </div>
                    </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-1','d-27-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-2" class="answers">
                    <div class="subText" onmousemove="PlaySound('q25_s2')" onmouseout="StopSound('q25_s2')">
                        <label>Tener relaciones sexuales sin protección</label>
                    </div>
                    <div class="controls ">
                        <article>
                            <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                                <label><input type="radio" name="relacion_proteccion" value="23.B.1" /> Si </label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                                <label><input type="radio" name="relacion_proteccion" value="23.B.2" /> No </label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                                <label><input type="radio" name="relacion_proteccion" value="98" checked="checked"/> No quiero contestar</label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                                <label><input type="radio" name="relacion_proteccion" value="99"/> No se la respuesta</label>
                            </div>
                        </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-2','d-27-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-3" class="answers">
                    <div class="subText" onmousemove="PlaySound('q25_s3')" onmouseout="StopSound('q25_s3')">
                        <label>Por compartir alimentos, plato, ropa o baño con otra persona infectada</label>
                    </div>
                    <div class="controls ">
                        <article>
                            <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                                <label><input type="radio" name="compartir_persona" value="23.C.1" /> Si </label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                                <label><input type="radio" name="compartir_persona" value="23.C.2" /> No </label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                                <label><input type="radio" name="compartir_persona" value="98" checked="checked"/> No quiero contestar</label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                                <label><input type="radio" name="compartir_persona" value="99"/> No se la respuesta</label>
                            </div>
                        </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-3','d-27-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-4" class="answers">
                    
                    <div class="subText" onmousemove="PlaySound('q25_s4')" onmouseout="StopSound('q25_s4')">
                        <label>Por dar un beso</label>
                    </div>
                
                    <div class="controls ">
                        <article>
                            <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                                <label><input type="radio" name="beso" value="23.D.1" /> Si </label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                                <label><input type="radio" name="beso" value="23.D.2" /> No </label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                                <label><input type="radio" name="beso" value="98" checked="checked"/> No quiero contestar</label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                                <label><input type="radio" name="beso" value="99"/> No se la respuesta</label>
                            </div>
                        </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-4','d-27-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-5" class="answers">
                    <div class="subText" onmousemove="PlaySound('q25_s5')" onmouseout="StopSound('q25_s5')">
                    <label>Por dar un abrazo</label>
                    </div>
                    <div class="controls ">
                        <article>
                            <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                                <label><input type="radio" name="abrazo" value="23.E.1" /> Si </label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                                <label><input type="radio" name="abrazo" value="23.E.2" /> No </label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                                <label><input type="radio" name="abrazo" value="98" checked="checked"/> No quiero contestar</label>
                            </div>
                            <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                                <label><input type="radio" name="abrazo" value="99"/> No se la respuesta</label>
                            </div>
                        </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-5','d-27-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-6" class="answers">
                    <div class="subText" onmousemove="PlaySound('q25_s6')" onmouseout="StopSound('q25_s6')">
                       <label>Otro (especifique)</label> 
                    </div>
                    <div class="controls ">
                        <article>
                            <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                                <label><input type="radio" name="adquirir_otro" value="23.F.1" /> Si </label>
                            </div>
                            <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                                <label><input type="radio" name="adquirir_otro" value="23.F.2" /> No </label>
                            </div>
                            <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                                <label><input type="radio" name="adquirir_otro" value="98" checked="checked"/> No quiero contestar</label>
                            </div>
                            <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                                <label><input type="radio" name="adquirir_otro" value="99"/> No se la respuesta</label>
                            </div>
                        </article>
                    </div>
                    <div id="27.1" class="form-group1">
                        <div>
                            <label>Especifique de que otra manera puede adquirir VIH</label>
                        </div>
                        <div class="controls ">
                            <input class="textinput textInput form-control" id="otra_manera" maxlength="45" name="otra_manera" type="text" placeholder="Ingrese Otra Manera">
                        </div>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion(27,28)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>

            <div id="28" class="form-group">
            <div class ="question" onmousemove="PlaySound('q26_s')" onmouseout="StopSound('q26_s')">
                <label>28. ¿Cuáles son las señales (signos y síntomas) que presenta una persona que tiene el VIH?</label>
            </div>
            <div id="d-28-1">
                <div class="subText" onmousemove="PlaySound('q26_s1')" onmouseout="StopSound('q26_s1')">
                    <label>Pérdida de peso mayor al 10%</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="peso" value="24.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="peso" value="24.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="peso" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="peso" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-1','d-28-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-2" class="answers">
                <div class="subText" onmousemove="PlaySound('q26_s2')" onmouseout="StopSound('q26_s2')">
                    <label>Diarreas repetidas</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="diarrea" value="24.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="diarrea" value="24.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="diarrea" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="diarrea" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-2','d-28-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-3" class="answers">
                <div class="subText" onmousemove="PlaySound('q26_s3')" onmouseout="StopSound('q26_s3')">
                    <label>Tos persistente y seca</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="tos" value="24.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="tos" value="24.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="tos" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="tos" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-3','d-28-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-4" class="answers">
                <div class="subText" onmousemove="PlaySound('q26_s4')" onmouseout="StopSound('q26_s4')">
                    <label>Enfermedades oportunitas</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="enfermedades" value="24.D.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="enfermedades" value="24.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="enfermedades" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="enfermedades" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-4','d-28-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-5" class="answers">
                <div class="subText" onmousemove="PlaySound('q26_s5')" onmouseout="StopSound('q26_s5')">
                    <label>Cansancion extremo</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="cansancio" value="24.E.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="cansancio" value="24.E.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="cansancio" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="cansancio" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-5','d-28-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-6" class="answers">
                <div class="subText" onmousemove="PlaySound('q26_s6')" onmouseout="StopSound('q26_s6')">
                    <label>Otro (especifique)</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="señal_otro" value="24.F.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="señal_otro" value="24.F.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="señal_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="señal_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>

                <div id="28.1" class="form-group1">
                    <label>Especifique otra señal que presenta una persona con VIH</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otra_señal" maxlength="45" name="otra_señal" type="text" placeholder="Ingrese Señal">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(28,29)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>

            <div id="29" class="form-group">
                <div class ="question" onmousemove="PlaySound('q27_s')" onmouseout="StopSound('q27_s')">
                    <label>29. ¿Qué significa para usted "practicar sexo seguro"?</label>
                </div>
                <div id="d-29-1">
                <div class="subText" onmousemove="PlaySound('q27_s1')" onmouseout="StopSound('q27_s1')">
                    <label>Abstenerse de relaciones sexuales</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="abstenerse" value="25.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="abstenerse" value="25.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="abstenerse" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="abstenerse" value="99"/> No se la respuesta</label>
                    </div>>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-1','d-29-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-2" class="answers">
                <div class="subText" onmousemove="PlaySound('q27_s2')" onmouseout="StopSound('q27_s2')">
                    <label>Usar condones en las relaciones</label>
                </div>
                <div class="controls " onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="condon_relacion" value="25.B.1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="condon_relacion" value="25.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="condon_relacion" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="condon_relacion" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-2','d-29-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-3" class="answers">
                <div class="subText" onmousemove="PlaySound('q27_s3')" onmouseout="StopSound('q27_s3')">
                    <label>No ser promiscuo (tener solo 1 pareja)</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="promiscuo" value="25.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="promiscuo" value="25.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="promiscuo" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="promiscuo" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-3','d-29-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-4" class="answers">
                <div class="subText" onmousemove="PlaySound('q27_s4')" onmouseout="StopSound('q27_s4')">
                    <label>Evitar relaciones sin protección con trabajadoras de sexo</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="trabajadoras" value="25.D.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="trabajadoras" value="25.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="trabajadoras" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="trabajadoras" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-4','d-29-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-5" class="answers">
                <div class="subText" onmousemove="PlaySound('q27_s5')" onmouseout="StopSound('q27_s5')">
                    <label>Evitar relaciones sin protección con homosexuales</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="homosexuales" value="25.E.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="homosexuales" value="25.E.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="homosexuales" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="homosexuales" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-5','d-29-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-6" class="answers">
                <div class="subText" onmousemove="PlaySound('q27_s6')" onmouseout="StopSound('q27_s6')">
                    <label>Otro (especifique)</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="significa_otro" value="25.F.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="significa_otro" value="25.F.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="significa_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="significa_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>

                <div id="29.1" class="form-group1">
                <label>Especifique qué significa para usted</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_significado" maxlength="45" name="otro_significado" type="text" placeholder="Especifique">
                </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(29,30)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>
    

            <div id="30" class="form-group">
            <div class ="question" onmousemove="PlaySound('q28_s')" onmouseout="StopSound('q28_s')">
                <label>30. En los últimos seis meses ha presentado síntomas como estos:</label>
            </div>
            <div id="d-30-1">
                <div class="subText" onmousemove="PlaySound('q28_s1')" onmouseout="StopSound('q28_s1')">
                    <label>Llaga en el pene</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="llaga" value="26.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="llaga" value="26.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="llaga" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="llaga" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-1','d-30-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-2" class="answers">
                <div class="subText" onmousemove="PlaySound('q28_s2')" onmouseout="StopSound('q28_s2')">
                    <label>Comezón o picazón en sus genitales</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="comezon" value="26.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="comezon" value="26.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="comezon" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="comezon" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-2','d-30-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-3" class="answers">
                <div class="subText" onmousemove="PlaySound('q28_s3')" onmouseout="StopSound('q28_s3')">
                    <label>Algún dolor o ardor al orinar</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="ardor" value="26.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="ardor" value="26.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="ardor" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="ardor" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-3','d-30-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-4" class="answers">
                <div class="subText" onmousemove="PlaySound('q28_s4')" onmouseout="StopSound('q28_s4')">
                    <label>Materia o pus en sus genitales</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="materia" value="26.D.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="materia" value="26.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="materia" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="materia" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-4','d-30-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-5" class="answers">
                <div class="subText" onmousemove="PlaySound('q28_s5')" onmouseout="StopSound('q28_s5')">
                    <label>Flujo vaginal</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="flujo" value="26.E.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="flujo" value="26.E.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="flujo" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="flujo" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-5','d-30-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-6" class="answers">
                <div class="subText" onmousemove="PlaySound('q28_s6')" onmouseout="StopSound('q28_s6')">
                    <label>Úlceras</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="ulcera" value="26.F.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="ulcera" value="26.F.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_queiro')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="ulcera" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="ulcera" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-6','d-30-7')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-7" class="answers">
                <div class="subText" onmousemove="PlaySound('q28_s7')" onmouseout="StopSound('q28_s7')">
                    <label>Otro (especifique)</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q24_s1')" onmouseout="StopSound('q24_s1')">
                        <label><input type="radio" name="sintoma_otro" value="26.G.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('q24_s2')" onmouseout="StopSound('q24_s2')">
                        <label><input type="radio" name="sintoma_otro" value="26.G.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="sintoma_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="sintoma_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>

                <div id="30.1" class="form-group1">
                    <label>Especifique otro síntoma</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_sintoma" maxlength="45" name="otro_sintoma" type="text" placeholder="Ingrese Sintoma">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="questionNext30()"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>
            <div id="31" class="form-group">
                <div class="question" onmousemove="PlaySound('q29_s')" onmouseout="StopSound('q29_s')">
                <label>31. ¿Usted busca tratamiento o ayuda para curar la infección?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="busca_tratamiento" value="27.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="busca_tratamiento" value="27.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="busca_tratamiento" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="busca_tratamiento" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="questionNext31()"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="32" class="form-group">
                <div class="question" onmousemove="PlaySound('q30_s')" onmouseout="StopSound('q30_s')" >
                    <label>32. ¿A dónde fue y/o de quién recibió ayuda?</label>
                </div>
                <div id="d-32-1">
                <div class="subText" onmousemove="PlaySound('q30_s1')" onmouseout="StopSound('q30_s1')">
                    <label>Hospital General/Departamental/Privado</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="hospital" value="28.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="hospital" value="28.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="hospital" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="hospital" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-1','d-32-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-2" class="answers">
                <div class="subText" onmousemove="PlaySound('q30_s2')" onmouseout="StopSound('q30_s2')">
                    <label>Centro o puesto de salud</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="puesto" value="28.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="puesto" value="28.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="puesto" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="puesto" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-2','d-32-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-3" class="answers">
                <div class="subText" onmousemove="PlaySound('q30_s3')" onmouseout="StopSound('q30_s3')">
                    <label>Farmacia</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="farmacia" value="28.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="farmacia" value="28.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="farmacia" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="farmacia" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-3','d-32-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-4" class="answers">
                <div class="subText" onmousemove="PlaySound('q30_s4')" onmouseout="StopSound('q30_s4')">
                    <label>Doctor(a) o clínica partícula</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="doctora" value="28.D.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="doctora" value="28.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="doctora" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="doctora" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-4','d-32-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-5" class="answers">
                <div class="subText" onmousemove="PlaySound('q30_s5')" onmouseout="StopSound('q30_s5')">
                    <label>Curandero o Comadrona</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="comadrona" value="28.E.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="comadrona" value="28.E.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="comadrona" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="comadrona" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-5','d-32-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-6" class="answers">
                <div class="subText" onmousemove="PlaySound('q30_s6')" onmouseout="StopSound('q30_s6')">
                    <label>Otro (especifique)</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="ayuda_otro" value="28.F.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="ayuda_otro" value="28.F.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="ayuda_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="ayuda_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>

                <div id="32.1" class="form-group1">
                    <label>Especifique donde buscó ayuda</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otra_ayuda" maxlength="45" name="otra_ayuda" type="text" placeholder="Ingrese">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(32,33)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>
            <div id="33" class="form-group">
                <div class="question" onmousemove="PlaySound('q31_s')" onmouseout="StopSound('q31_s')">
                    <label>33. ¿Qué tratamiento se le dió?</label>
                </div>
                <div id="d-33-1">
                <div class="subText" onmousemove="PlaySound('q31_s1')" onmouseout="StopSound('q31_s1')">
                    <label>Acetaminofén</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="acetaminofen" value="29.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="acetaminofen" value="29.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="acetaminofen" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="acetaminofen" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-1','d-33-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-2" class="answers">
                <div class="subText" onmousemove="PlaySound('q31_s2')" onmouseout="StopSound('q31_s2')">
                    <label>Antibiótico</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="antibiotico" value="29.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="antibiotico" value="29.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="antibiotico" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="antibiotico" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-2','d-33-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-3" class="answers">
                <div class="subText" onmousemove="PlaySound('q31_s3')" onmouseout="StopSound('q31_s3')">
                    <label>Vitamina</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="vitamina" value="29.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="vitamina" value="29.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="vitamina" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="vitamina" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-3','d-33-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-4" class="answers">
                <div class="subText" onmousemove="PlaySound('q31_s4')" onmouseout="StopSound('q31_s4')">
                    <label>Información sobre como cuidar la salud</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="informacion_cuidar" value="29.D.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="informacion_cuidar" value="29.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="informacion_cuidar" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="informacion_cuidar" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-4','d-33-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-5" class="answers">
                <div class="subText" onmousemove="PlaySound('q31_s5')" onmouseout="StopSound('q31_s5')">
                    <label>Nada</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="nada" value="29.E.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="nada" value="29.E.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="nada" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="nada" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-5','d-33-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-6" class="answers">
                <div class="subText" onmousemove="PlaySound('q31_s6')" onmouseout="StopSound('q31_s6')">
                    <label>Me refirieron a un médico o especialista</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="refirieron_medico" value="29.F.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="refirieron_medico" value="29.F.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="refirieron_medico" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="refirieron_medico" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-6','d-33-7')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>

                <div id="d-33-7" class="answers">
                <div class="subText" onmousemove="PlaySound('q31_s7')" onmouseout="StopSound('q31_s7')">
                    <label>Otro (especifique)</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="tratamiento_otro" value="29.G.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="tratamiento_otro" value="29.G.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="tratamiento_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="tratamiento_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div id="33.1" class="form-group1">
                    <label>Especifique que tratamiento se le dió</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_tratamiento" maxlength="45" name="otro_tratamiento" type="text" placeholder="Ingrese Tratamiento">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(33,34)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>

            <div id="34" class="form-group">
                <div class="question" onmousemove="PlaySound('q32_s')" onmouseout="StopSound('q32_s')">
                    <label>34. ¿Puede contestar las siguientes preguntas sobre la atención recibida?</label>
                </div>
                <div id="d-34-1">
                <div class="subText" onmousemove="PlaySound('q32_s1')" onmouseout="StopSound('q32_s1')">
                    <label>Le dieron condones</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="dieron_condones" value="30.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="dieron_condones" value="30.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="dieron_condones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="dieron_condones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-1','d-34-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-2" class="answers">
                <div class="subText" onmousemove="PlaySound('q32_s2')" onmouseout="StopSound('q32_s2')">
                    <label>Le mostraron cómo utilizar el condón</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="utilizar_condones" value="30.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="utilizar_condones" value="30.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="utilizar_condones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input  type="radio" name="utilizar_condones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-2','d-34-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-3" class="answers">
                <div class="subText" onmousemove="PlaySound('q32_s3')" onmouseout="StopSound('q32_s3')">
                    <label>Le platicaron sobre el condón y los métodos de planificación</label>
                </div>
                <div class="controls ">
                <article>

                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="platicaron_condon" value="30.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="platicaron_condon" value="30.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="platicaron_condon" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="platicaron_condon" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-3','d-34-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-4" class="answers">
                <div class="subText" onmousemove="PlaySound('q32_s4')" onmouseout="StopSound('q32_s4')">
                    <label>Le dieron material escrito</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="material_escrito" value="30.D.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="material_escrito" value="30.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="material_escrito" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="material_escrito" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-4','d-34-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-5" class="answers">
                <div class="subText" onmousemove="PlaySound('q32_s5')" onmouseout="StopSound('q32_s5')">
                    <label>Le informaron cuando debe volver</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="informacion_volver" value="30.E.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="informacion_volver" value="30.E.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="informacion_volver" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="informacion_volver" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-5','d-34-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-6" class="answers">
                <div class="subText" onmousemove="PlaySound('q32_s6')" onmouseout="StopSound('q32_s6')">
                    <label>El servicio era apto para su edad</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="servicio_apto" value="30.F.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="servicio_apto" value="30.F.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="servicio_apto" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="servicio_apto" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-6','d-34-7')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-7" class="answers">
                <div class="subText" onmousemove="PlaySound('q32_s7')" onmouseout="StopSound('q32_s7')">
                    <label>Otro (especifique)</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="preguntas_otro" value="30.G.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="preguntas_otro" value="30.G.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="preguntas_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="preguntas_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>

                <div id="34.1" class="form-group1">
                    <label>Especifique que otra atención se le dió</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otra_atencion" maxlength="45" name="otra_atencion" type="text" placeholder="Ingrese Atención">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(34,35)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>
            <div id="35" class="form-group">
                <div class="question" onmousemove="PlaySound('q33_s')" onmouseout="StopSound('q33_s')">
                <label>35. ¿Usted cree que está en riesgo de infectarse con el virus del VIH?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q33_s1')" onmouseout="StopSound('q33_s1')">
                        <label><input type="radio" name="riesgo" value="31.1" /> Definitivamente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q33_s2')" onmouseout="StopSound('q33_s2')">
                        <label><input type="radio" name="riesgo" value="31.2" /> Probablemente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q33_s3')" onmouseout="StopSound('q33_s3')">
                        <label><input type="radio" name="riesgo" value="31.3" /> Probablemente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q33_s4')" onmouseout="StopSound('q33_s4')">
                        <label><input type="radio" name="riesgo" value="31.4" /> Definitivamente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="riesgo" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="riesgo" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(35,36)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="36" class="form-group">
                <div class="question" onmousemove="PlaySound('q34_s')" onmouseout="StopSound('q34_s')">
                <label>36. ¿Cuándo usted escuchó hablar del VIH, ha cambiado su comportamiento sexual para protegerse contra el VIH?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="cambiado_comportamiento" value="32.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="cambiado_comportamiento" value="32.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q34_s1')" onmouseout="StopSound('q30_s')">
                        <label><input type="radio" name="cambiado_comportamiento" value="3" /> No sabe </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="cambiado_comportamiento" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="cambiado_comportamiento" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="questionNext36()"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="37" class="form-group">
                <div class ="question" onmousemove="PlaySound('q35_s')" onmouseout="StopSound('q35_s')">
                    <label>37. ¿Que há hecho?</label>
                </div>
                <div id="d-37-1">
                <div class="subText" onmousemove="PlaySound('q35_s1')" onmouseout="StopSound('q35_s1')">
                    <label>Dejó de tener relaciones sexuales</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="dejo_relaciones" value="33.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="dejo_relaciones" value="33.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="dejo_relaciones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="dejo_relaciones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-1','d-37-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-2" class="answers">
                <div class="subText" onmousemove="PlaySound('q35_s2')" onmouseout="StopSound('q35_s2')">
                    <label>Empezó a utilizar un condón en cada relación sexual</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="condon_relaciones" value="33.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="condon_relaciones" value="33.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="condon_relaciones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="condon_relaciones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-2','d-37-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-3" class="answers">
                <div class="subText" onmousemove="PlaySound('q35_s3')" onmouseout="StopSound('q35_s3')">
                    <label>Se ha limitado a tener una sola pareja</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="limitado_pareja" value="33.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="limitado_pareja" value="33.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="limitado_pareja" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="limitado_pareja" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-3','d-37-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-4" class="answers">
                <div class="subText" onmousemove="PlaySound('q35_s4')" onmouseout="StopSound('q35_s4')">
                    <label>Redujo el número de parejas</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="numero_parejas" value="33.D.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="numero_parejas" value="33.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="numero_parejas" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="numero_parejas" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-4','d-37-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-5" class="answers">
                <div class="subText" onmousemove="PlaySound('q35_s5')" onmouseout="StopSound('q35_s5')">
                    <label>Prácticar sexo seguro con cada pareja</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="practicar_sexo" value="33.E.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="practicar_sexo" value="33.E.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="practicar_sexo" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="practicar_sexo" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-5','d-37-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-6" class="answers">
                <div class="subText" onmousemove="PlaySound('q36_s5')" onmouseout="StopSound('q36_s5')">
                    <label>Otro (especifique)</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="hecho_otro" value="33.F.1" /> Si </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="hecho_otro" value="33.F.2" /> No </label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="hecho_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="hecho_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>

                <div id="37.1" class="form-group1">
                    <label>Especifique que más ha hecho</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_hecho" maxlength="45" name="otro_hecho" type="text" placeholder="Ingrese aqui">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(37,38)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>

            <div id="38" class="form-group">
                <div class="question" onmousemove="PlaySound('q36_s')" onmouseout="StopSound('q36_s')">
                    <label>38. ¿Qué métodos anticonceptivos protegen contra una ITS y/o VIH?</label>
                </div>
                <div id="d-38-1">
                <div class="subText" onmousemove="PlaySound('q36_s1')" onmouseout="StopSound('q36_s1')">
                    <label>Pildora</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="pildora" value="34.A.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="pildora" value="34.A.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="pildora" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="pildora" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-38-1','d-38-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-38-2" class="answers">
                <div class="subText" onmousemove="PlaySound('q36_s2')" onmouseout="StopSound('q36_s2')">
                    <label>DIU</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="diu" value="34.B.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="diu" value="34.B.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="diu" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="diu" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-38-2','d-38-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-38-3" class="answers">
                <div class="subText" onmousemove="PlaySound('q36_s3')" onmouseout="StopSound('q36_s3')">
                    <label>Inyecciones</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="inyecciones" value="34.C.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="inyecciones" value="34.C.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="inyecciones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="inyecciones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-38-3','d-38-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-38-4" class="answers">
                <div class="subText" onmousemove="PlaySound('q36_s4')" onmouseout="StopSound('q36_s4')">
                    <label>Condones</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="condones" value="34.D.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="condones" value="34.D.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="condones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="condones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-38-4','d-38-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-38-5" class="answers">
                <div class="subText" onmousemove="PlaySound('q36_s5')" onmouseout="StopSound('q36_s5')">
                    <label>Otro (especifique)</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onclick="nextSubQuestion()" onmousemove="PlaySound('q29_s1')" onmouseout="StopSound('q29_s1')">
                        <label><input type="radio" name="metodo_otro" value="34.E.1" /> Si <br></label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('q29_s2')" onmouseout="StopSound('q29_s2')">
                        <label><input type="radio" name="metodo_otro" value="34.E.2" /> No <br></label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="metodo_otro" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onclick="nextSubQuestionNOT()" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="metodo_otro" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>


                <div id="38.1" class="form-group1">
                    <label>Especifique que otro método anticonceptivo conoce</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_metodo" maxlength="45" name="otro_metodo" type="text" placeholder="Ingrese Método Anticonceptivo">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(38,'clave04')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>
            </div>
        </div>

        <div id = "groupD" name = "groupD" class = "center container ">
          <div class = "iA center group-titles"  id = "clave04">
                <div class="main-title" onmousemove="PlaySound('title_37')" onmouseout="StopSound('title_37')">
                    <h3>Las siguentes preguntas refieren sobre las creencias y actitudes sobre los diferentes comportamientos sexuales </h3>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion('clave04',39)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="39" class="form-group">
                <div class ="question" onmousemove="PlaySound('q38_s')" onmouseout="StopSound('q38_s')">
                    <label>39. ¿Usted piensa que tener experiencia sexual antes de casarse, es más importante para el joven que para la mujer joven?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q38_s1')" onmouseout="StopSound('q38_s1')">
                        <label><input type="radio" name="experiencia_sexual" value="35.1" /> Definitivamente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s2')" onmouseout="StopSound('q38_s2')">
                        <label><input type="radio" name="experiencia_sexual" value="35.2" /> Probablemente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s3')" onmouseout="StopSound('q38_s3')">
                        <label><input type="radio" name="experiencia_sexual" value="35.3" /> Probablemente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s4')" onmouseout="StopSound('q38_s4')">
                        <label><input type="radio" name="experiencia_sexual" value="35.4" /> Definitivamente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="experiencia_sexual" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="experiencia_sexual" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(39,40)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                
            </div>

            <div id="40" class="form-group">
                <div class="question" onmousemove="PlaySound('q39_s')" onmouseout="StopSound('q39_s')">
                    <label>40. ¿Usted piensa que una mujer joven necesita estar virgen antes de casarse?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q38_s1')" onmouseout="StopSound('q38_s1')">
                        <label><input type="radio" name="joven_virgen" value="36.1" /> Definitivamente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s2')" onmouseout="StopSound('q38_s2')">
                        <label><input type="radio" name="joven_virgen" value="36.2" /> Probablemente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s3')" onmouseout="StopSound('q38_s3')">
                        <label><input type="radio" name="joven_virgen" value="36.3" /> Probablemente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s4')" onmouseout="StopSound('q38_s4')">
                        <label><input type="radio" name="joven_virgen" value="36.4" /> Definitivamente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="joven_virgen" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="joven_virgen" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(40,41)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="41" class="form-group">
                <div class="question" onmousemove="PlaySound('q40_s')" onmouseout="StopSound('q40_s')">
                    <label>41. ¿Usted piensa que si un joven quiere tener relaciones sexuales con barias parejas y las veces que él quiere es correcto para él?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q38_s1')" onmouseout="StopSound('q38_s1')">
                        <label><input type="radio" name="joven_relaciones" value="37.1" /> Definitivamente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s2')" onmouseout="StopSound('q38_s2')">
                        <label><input type="radio" name="joven_relaciones" value="37.2" /> Probablemente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s3')" onmouseout="StopSound('q38_s3')">
                        <label><input type="radio" name="joven_relaciones" value="37.3" /> Probablemente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s4')" onmouseout="StopSound('q38_s4')">
                        <label><input type="radio" name="joven_relaciones" value="37.4" /> Definitivamente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="joven_relaciones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="joven_relaciones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(41,42)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="42" class="form-group">
                <div class="question" onmousemove="PlaySound('q41_s')" onmouseout="StopSound('q41_s')">
                    <label>42. ¿Usted piensa que si una mujer quiere tener relaciones sexuales con varias parejas y las veces que ella quiere es correcto para ella?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q38_s1')" onmouseout="StopSound('q38_s1')">
                        <label><input type="radio" name="mujer_relaciones" value="38.1" /> Definitivamente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s2')" onmouseout="StopSound('q38_s2')">
                        <label><input type="radio" name="mujer_relaciones" value="38.2" /> Probablemente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s3')" onmouseout="StopSound('q38_s3')">
                        <label><input type="radio" name="mujer_relaciones" value="38.3" /> Probablemente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s4')" onmouseout="StopSound('q38_s4')">
                        <label><input type="radio" name="mujer_relaciones" value="38.4" /> Definitivamente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="mujer_relaciones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="mujer_relaciones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(42,43)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="43" class="form-group">
                <div class="question" onmousemove="PlaySound('q42_s')" onmouseout="StopSound('q42_s')">
                    <label>43. ¿Cree usted que si una mujer joven al coquetear a un hombre, es por intensiones o propósitos sexuales?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q38_s1')" onmouseout="StopSound('q38_s1')">
                        <label><input type="radio" name="mujer_coquetear" value="39.1" /> Definitivamente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s2')" onmouseout="StopSound('q38_s2')">
                        <label><input type="radio" name="mujer_coquetear" value="39.2" /> Probablemente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s3')" onmouseout="StopSound('q38_s3')">
                        <label><input type="radio" name="mujer_coquetear" value="39.3" /> Probablemente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s4')" onmouseout="StopSound('q38_s4')">
                        <label><input type="radio" name="mujer_coquetear" value="39.4" /> Definitivamente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="mujer_coquetear" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="mujer_coquetear" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(43,44)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="44" class="form-group">
                <div class="question" onmousemove="PlaySound('q43_s')" onmouseout="StopSound('q43_s')">
                    <label>44. ¿Usted piensa que el hombre al sentir excitación por su pareja, necesariamente deben de cumplir sexualmente?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio" onmousemove="PlaySound('q38_s1')" onmouseout="StopSound('q38_s1')">
                        <label><input type="radio" name="hombre_exitacion" value="40.1" /> Definitivamente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s2')" onmouseout="StopSound('q38_s2')">
                        <label><input type="radio" name="hombre_exitacion" value="40.2" /> Probablemente si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s3')" onmouseout="StopSound('q38_s3')">
                        <label><input type="radio" name="hombre_exitacion" value="40.3" /> Probablemente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q38_s4')" onmouseout="StopSound('q38_s4')">
                        <label><input type="radio" name="hombre_exitacion" value="40.4" /> Definitivamente no </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="hombre_exitacion" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="hombre_exitacion" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(44,'clave05')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>
        </div>

        <div id = "groupE" name = "groupE" class = "center container">
            <div class = "iA center group-titles"  id = "clave05">
                <div class="main-title" onmousemove="PlaySound('title_44')" onmouseout="StopSound('title_44')">
                     <h3>Algunas personas tienen sexo con la primera y sola pareja. Otras personas tienen sexo con más de una compañera. Otras personas tienen sexo con múltiples compañeras casuales. Nosotros necesitamos saber información general sobre las prácticas sexuales de los hombres para mejorar los servicios en su comunidad. </h3>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion('clave05',45)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            <div id="45" class="form-group">
                <div class="question" onmousemove="PlaySound('q45_s')" onmouseout="StopSound('q45_s')">
                    <label>45. ¿Cuánto tiempo lleva de estar con su pareja?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q45_s1')" onmouseout="StopSound('q45_s1')">
                        <label><input type="radio" name="tiempo_pareja" value="41.1" /> Menos de 6 meses </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q45_s2')" onmouseout="StopSound('q45_s2')">
                        <label><input type="radio" name="tiempo_pareja" value="41.2" /> Entre 6 meses y un año </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q45_s3')" onmouseout="StopSound('q45_s3')">
                        <label><input type="radio" name="tiempo_pareja" value="41.3" /> Más de un año </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_pareja" value="41.4" /> Actualmente no tengo pareja </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="tiempo_pareja" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="tiempo_pareja" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="questionNext45()"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="46" class="form-group">
                <div class="question" onmousemove="PlaySound('q46_s')" onmouseout="StopSound('q46_s')">
                    <label>46. ¿Tiene más de una pareja?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q46_s1')" onmouseout="StopSound('q46_s1')">
                        <label><input type="radio" name="mas_pareja" value="42.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q46_s2')" onmouseout="StopSound('q46_s2')">
                        <label><input type="radio" name="mas_pareja" value="42.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="mas_pareja" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="mas_pareja" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="questionNext46()"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="47" class="form-group">
                <div class="question" onmousemove="PlaySound('q47_s')" onmouseout="StopSound('q47_s')">
                    <label>47. ¿Cuánto tiempo lleva con la otra pareja?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q47_s1')" onmouseout="StopSound('q47_s1')">
                        <label><input type="radio" name="tiempo_otra1" value="43.1" /> Actualmente no tengo pareja </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q47_s1')" onmouseout="StopSound('q47_s1')">
                        <label><input type="radio" name="tiempo_otra1" value="43.2" /> De vez en cuando o casual </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q47_s2')" onmouseout="StopSound('q47_s2')">
                        <label><input type="radio" name="tiempo_otra1" value="43.3" /> Menos de 6 meses </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q47_s3')" onmouseout="StopSound('q47_s3')">
                        <label><input type="radio" name="tiempo_otra1" value="43.4" /> Entre 6 meses y un año </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q47_s4')" onmouseout="StopSound('q47_s4')">
                        <label><input type="radio" name="tiempo_otra1" value="43.5" /> Más de un año </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="tiempo_otra1" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="tiempo_otra1" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(47,48)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="48" class="form-group">
                <div class="question" onmousemove="PlaySound('q48_s')" onmouseout="StopSound('q48_s')">
                    <label>48. ¿Cuántas parejas tiene al mes?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q48_s1')" onmouseout="StopSound('q48_s1')">
                        <label><input type="radio" name="cuantas_parejas" value="44.1" /> 1 - 2 </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q48_s2')" onmouseout="StopSound('q48_s2')">
                        <label><input type="radio" name="cuantas_parejas" value="44.2" /> 3 - 4 </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q48_s3')" onmouseout="StopSound('q48_s3')">
                        <label><input type="radio" name="cuantas_parejas" value="44.3" /> 5 - 6 </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q48_s4')" onmouseout="StopSound('q48_s4')">
                        <label><input type="radio" name="cuantas_parejas" value="44.4" /> 7 o más </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="cuantas_parejas" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="cuantas_parejas" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(48,49)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="49" class="form-group">
                <div class="question" onmousemove="PlaySound('q49_s')" onmouseout="StopSound('q49_s')">
                    <label>49. ¿Usa condón con las otras parejas?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q49_s1')" onmouseout="StopSound('q49_s1')">
                        <label><input type="radio" name="condon_otras" value="45.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q49_s2')" onmouseout="StopSound('q49_s2')">
                        <label><input type="radio" name="condon_otras" value="45.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="condon_otras" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="condon_otras" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="question49()"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="50" class="form-group">
                <div class="question" onmousemove="PlaySound('q50_s')" onmouseout="StopSound('q50_s')">
                    <label>50. ¿Usó condón durante su última relación sexual?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q49_s1')" onmouseout="StopSound('q49_s1')">
                        <label><input type="radio" name="condon_ultima" value="46.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q49_s2')" onmouseout="StopSound('q49_s2')">
                        <label><input type="radio" name="condon_ultima" value="46.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="condon_ultima" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="condon_ultima" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(50,51)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="51" class="form-group">
                <div class="question" onmousemove="PlaySound('q51_s')" onmouseout="StopSound('q51_s')">
                    <label>51. ¿Con qué freuencia usa usted el condón?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q51_s1')" onmouseout="StopSound('q51_s1')">
                        <label><input type="radio" name="tiempo_otra" value="47.1" /> Siempre </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q51_s2')" onmouseout="StopSound('q51_s2')">
                        <label><input type="radio" name="tiempo_otra" value="47.2" /> De vez en cuando </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q51_s3')" onmouseout="StopSound('q51_s3')">
                        <label><input type="radio" name="tiempo_otra" value="47.3" /> Nunca </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="tiempo_otra" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="tiempo_otra" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(51,52)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="52" class="form-group">
                <div class="question" onmousemove="PlaySound('q52_s')" onmouseout="StopSound('q52_s')">
                    <label>52. ¿Usted toma alcohol?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q52_s1')" onmouseout="StopSound('q52_s1')">
                        <label><input type="radio" name="toma_alcohol1" value="48.1" /> Diario </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q52_s2')" onmouseout="StopSound('q52_s2')">
                        <label><input type="radio" name="toma_alcohol1" value="48.2" /> Fin de semana </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q52_s3')" onmouseout="StopSound('q52_s3')">
                        <label><input type="radio" name="toma_alcohol1" value="48.3" /> Ocasional </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q52_s4')" onmouseout="StopSound('q52_s4')">
                        <label><input type="radio" name="toma_alcohol1" value="48.4" /> Nunca toma </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="toma_alcohol1" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="toma_alcohol1" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="questionNext52()"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="53" class="form-group">
                <div class="question" onmousemove="PlaySound('q53_s')" onmouseout="StopSound('q53_s')">
                    <label>53. ¿Usted toma alcohol antes de tener relaciones sexuales?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q53_s1')" onmouseout="StopSound('q53_s1')">
                        <label><input type="radio" name="toma_relaciones" value="49.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q53_s2')" onmouseout="StopSound('q53_s2')">
                        <label><input type="radio" name="toma_relaciones" value="49.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="toma_relaciones" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="toma_relaciones" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(53,54)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="54" class="form-group">
                <div class="question" onmousemove="PlaySound('q54_s')" onmouseout="StopSound('q54_s')">
                    <label>54. ¿En general, qué idioma habla usted con sus amigos?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q54_s1')" onmouseout="StopSound('q54_s1')">
                        <label><input type="radio" name="general_idioma" value="50.1" /> Solo español </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q54_s2')" onmouseout="StopSound('q54_s2')">
                        <label><input type="radio" name="general_idioma" value="50.2" /> Español más que lengua maya </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q54_s3')" onmouseout="StopSound('q54_s3')">
                        <label><input type="radio" name="general_idioma" value="50.3" /> Las dos lenguas </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q54_s4')" onmouseout="StopSound('q54_s4')">
                        <label><input type="radio" name="general_idioma" value="50.4" /> Lengua maya mas que español </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q54_s5')" onmouseout="StopSound('q54_s5')">
                        <label><input type="radio" name="general_idioma" value="50.5" /> Solo lengua maya </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="general_idioma" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="general_idioma" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(54,55)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="55" class="form-group">
                <div class="question" onmousemove="PlaySound('q55_s')" onmouseout="StopSound('q55_s')">
                    <label>55. ¿Te gustaría tener más información sobre ITS y VIH?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio" onmousemove="PlaySound('q55_s1')" onmouseout="StopSound('q55_s1')">
                        <label><input type="radio" name="mas_informacion" value="51.1" /> Si </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('q55_s2')" onmouseout="StopSound('q55_s2')">
                        <label><input type="radio" name="mas_informacion" value="51.2" /> No </label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_quiero')" onmouseout="StopSound('no_quiero')">
                        <label><input type="radio" name="mas_informacion" value="98" checked="checked"/> No quiero contestar</label>
                    </div>
                    <div class="radio" onmousemove="PlaySound('no_se')" onmouseout="StopSound('no_se')">
                        <label><input type="radio" name="mas_informacion" value="99"/> No se la respuesta</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="the-end"><a href="#" onclick="nextQuestion('the-end','btn-send')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>
        </div>

        <div class = "btn-div" id="btn-send" >
            <input type="submit" class="btn btn-danger" onclick="PlaySound('fin_s')"/>
        </div>
    </form>

    <footer class ="hide">
          <img src="images/logoIDEI.png" class = "img-footer" />
          <img src="images/logoPARLAMENTO.png" class = "img-footer" />
          <img src="images/logoHIVOS.png" class = "img-footer" />
    </footer>

<?php
$idioma = $_GET['idiomas'];
if($idioma == "ninguno")
{
}
elseif($idioma == "espaniol")
{
    include("audios/audios.php");
    var1($idioma);
}
elseif($idioma == "aguacateco")
{
    include("audios/audios.php");
    var1($idioma);
}
elseif($idioma == "ixil")
{
    include("audios/audios.php");
    var1($idioma);
}
elseif($idioma == "mam")
{
    include("audios/audios.php");
    var1($idioma);
}
?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="controllers/poll.js"></script>
    
    <script type="text/javascript" src="controllers/geolocalizacion.js"></script>
</body>
</html>