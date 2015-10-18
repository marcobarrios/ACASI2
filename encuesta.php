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
                        <input class="textinput textInput form-control" id="nombre" maxlength="45" name="nombre" type="text"  placeholder = "Ingrese su Nombre" required>
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
                        <input class="textinput textInput form-control" id="mes" maxlength="45" name="mes" type="text" placeholder = "Ingrese el Mes">
                        <input class="textinput textInput form-control" id="año" maxlength="45" name="año" type="text" placeholder = "Ingrese el Año">
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
                            <label ><input type="radio" name="color_tarjeta" value="1"/> Rojo</label>
                        </div>
                        <div class = "radio">
                            <label ><input type="radio" name="color_tarjeta" value="2"/> Amarillo </label>
                        </div>
                        <div class = "radio">
                            <label ><input type="radio" name="color_tarjeta" value="3"/> Negro </label>
                        </div>
                        <div class = "radio">
                            <label ><input type="radio" name="color_tarjeta" value="4"/> Blanco</label>
                        </div>
                        <div class = "radio">
                            <label ><input type="radio" name="color_tarjeta" value="5" checked="checked"/>Ninguna de las anteriores</label>
                        </div>
                    </article>
                </div>
                <div class = "next" id ="next5"><a href="#" onclick="nextQuestion(4,5)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="5" class="form-group">
                <div class="question">
                    <label>5. ¿Qué edad tiene?</label>
                </div>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad" maxlength="45" name="edad" type="text" placeholder="Ingrese su Edad">
                </div>
                <div class = "next" id ="next6"><a href="#" onclick="nextQuestion(5,6)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

             <div id="6" class="form-group">
                <div class="question">
                    <label>6. ¿Cuál es su estado civil?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="estado_civil" value="1"/> Soltero</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="estado_civil" value="2"/> Unido </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="estado_civil" value="3"/> Casado </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="estado_civil" value="4" checked="checked"/> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next7"><a href="#" onclick="nextQuestion(6,7)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="7" class="form-group">
                <div class="question">
                    <label>7. ¿Hasta qué grado aprobó usted en la escuela?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="grado" value="1"/> Primaria incompleta (antes de 6to)</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="grado" value="2"/> Primaria completa (6to)</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="grado" value="3"/> Alfabetización</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="grado" value="4"/> Básico</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="grado" value="5"/> Diversificado</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="grado" value="6"/> Universitaria </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="grado" value="7" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next8"><a href="#" onclick="nextQuestion(7,8)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="8" class="form-group">
                <div class="question">
                    <label>8. ¿A qué grupo cultural pertenece?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="grupo_cultural" value="1"/> Maya</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="grupo_cultural" value="2"/> Ladino</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="grupo_cultural" value="3"/> Otro (especifique)</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="grupo_cultural" value="7" checked="checked"/> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                <div id="8.1" class="form-group">
                    <label>Especificque otro grupo cultural</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_grupo_cultural" maxlength="45" name="otro_grupo_cultural" type="text" placeholder="Ingrese Grupo Cultural">
                    </div>
                </div>
                <div class = "next" id ="next9"><a href="#" onclick="nextQuestion(8,9)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="9" class="form-group">
                <div class="question">
                    <label>9. ¿Qué idioma habla?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="idioma" value="1"/> Castellano</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma" value="2"/> Kiche</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma" value="3"/> Mam</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma" value="4"/> Ixil</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma" value="5"/> Aguacateco</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma" value="6"/> Chalchiteco</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma" value="7"/> Sakapulteco</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma" value="8" checked="checked"/> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next10"><a href="#" onclick="nextQuestion(9,10)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="10" class="form-group">
                <div class="question">
                    <label>10. ¿En dónde vive actualmente?</label>
                </div>
                <div class="controls">
                        <input class="textinput textInput form-control" id="aldea" maxlength="45" name="aldea" type="text" placeholder ="Ingrese Aldea">
                        <input class="textinput textInput form-control" id="municipio" maxlength="45" name="municipio" type="text"  placeholder ="Ingrese Municipio">
                        <input class="textinput textInput form-control" id="departamento" maxlength="45" name="departamento" type="text" placeholder = "Ingrese Departamento">
                </div>
                <div class = "next" id ="next11"><a href="#" onclick="nextQuestion(10,11)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="11" class="form-group">
                <div class="question">
                    <label>11. ¿En dónde nació?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="lugar_nacimiento" value="1"/> Hospital Nacional </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="lugar_nacimiento" value="2"/> Hospital Privado </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="lugar_nacimiento" value="3"/> En su casa </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="lugar_nacimiento" value="4"/> Comadrona </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="lugar_nacimiento" value="5"/> Otro (especifique) </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="lugar_nacimiento" value="6"/ checked="checked"> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
            
            <div id="11.1" class="form-group">
                <label>Especificque otro grupo lugar de nacimiento</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_lugar_nacimiento" maxlength="45" name="otro_lugar_nacimiento" type="text" placeholder="Ingrese Lugar de Nacimiento">
                </div>
            </div>
                <div class = "next" id ="next12"><a href="#" onclick="nextQuestion(11,12)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>
            <div id="12" class="form-group">
                <div class="question">
                    <label>12. ¿Cuál es su religión?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="religion" value="1"/> Católica </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="religion" value="2"/> Evangélica </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="religion" value="3"/> Otro (especifique)</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="religion" value="4" checked="checked" /> Ninguna dce las anteriores</label>
                    </div>
                </article>
                </div>
            <div id="12.1" class="form-group">
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
                <div class="main-title">
                    <h3> Nosotrso estamos interesados en conocer el acceso a la educación sexual</h3>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion('clave02',13)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            <div id="13" class="form-group">
            <div class="question">
                <label>13. ¿Has recibido pláticas sobre salud sexual o eduación sexual?</label>
            </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="platicas_salud_sexual" value="1"/> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="platicas_salud_sexual" value="2"/> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="platicas_salud_sexual" value="3" checked="checked"/> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(13,14)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="14" class="form-group">
                <div class="question"><label>14. ¿Sus padres le han hablado de sexualidad?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="padres_hablado" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="padres_hablado" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="padres_hablado" value="3" checked="checked"/> Ningunas de las anteriores </label>
                    </div>
                </article>
                </div>

                <div id="14.1" class="form-group hide">
                <label>¿A qué edad?</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="edad_platica" maxlength="45" name="edad_platica" type="text" placeholder ="Escriba Edad">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(14,15)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            <div id="15" class="form-group">
                <div class="question"><label>15. ¿A qué edad los varones en su comunidad tienen su primera novia?</label></div>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad_varones" maxlength="45" name="edad_varones" type="text" placeholder="Ingrese Edad">
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(15,16)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="16" class="form-group">
                <div class="question"><label>16. ¿A qué edad los padres de familia permiten que la hija tenga novio?</label></div>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad_padres" maxlength="45" name="edad_padres" type="text" placeholder="Ingrese Edad">
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(16,17)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="17" class="form-group">
                <div class="question"><label>17. ¿Ya tuvo su primera relación sexual?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="primera_relacion" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="primera_relacion" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="primera_relacion" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                    <div id="17.1" class="form-group">
                    <label>¿A qué edad?</label>
                    <div class="controls">
                        <input class="textinput textInput form-control" id="edad_relacion" maxlength="45" name="edad_relacion" type="text" placeholder ="Ingrese Edad">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(17,18)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            
            <div id="18" class="form-group">
                <div class="question"><label>18. ¿Por qué los jóvenes inician relaciones sexuales a temprana edad?</label></div>
                <div id ="d-18-1">
                    <label>Demostrar que es hombre</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="demostrar_hombre" value="1" /> Sí</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="demostrar_hombre" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="demostrar_hombre" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-1','d-18-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                <div id="d-18-2" class="answers">
                    <label>Mis papás así lo dicen</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="papas_dicen" value="1" /> Sí </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="papas_dicen" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="papas_dicen" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-2','d-18-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-18-3" class="answers">
                    <label>Mis amigos han tenido relaciones sexuales</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="amigos_relaciones" value="1" /> Sí </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="amigos_relaciones" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="amigos_relaciones" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-3','d-18-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-18-4" class="answers">
                    <label>En mi comunidad se dice que "te deja el tren" si no se casa a temprana edad</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="deja_tren" value="1" /> Sí </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="deja_tren" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="deja_tren" value="2" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-4','d-18-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-18-5" class="answers">
                    <label>Demostrar "la prueba de amor"</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="prueba_amor" value="1" /> Sí </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="prueba_amor" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="prueba_amor" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-18-5','d-18-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-18-6" class="answers">
                    <label>Otro (especifique)</label>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="otro_jovenes_temprana" value="1" /> Sí </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="otro_jovenes_temprana" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="otro_jovenes_temprana" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(18,19)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>

            <div id="19" class="form-group">
                <div class="question"><label>19. ¿Su centro de salud más cercano cuenta con un programa destinado a la educación sexual integral con pertinencia cultural</label></div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="centro_programa" value="1" /> Sí <br></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="centro_programa" value="2" /> No <br></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="centro_programa" value="3" checked="checked"/> Ninguna de las anteriores <br></label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(19,20)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="20" class="form-group">
                <div class="question"><label>20. ¿Cuáles son los servicios con los que cuenta su centro de salud más cercano?</label></div>
                <div id="d-20-1">
                    <label>Pláticas sobre salud sexual y reproductiva en forma simple</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="platicas_salud" value="1" /> Sí </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="platicas_salud" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="platicas_salud" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-20-1','d-20-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-20-2" class="answers">
                    <label>Se utiliza lengua materna para explicar sobre salud sexual y reproductiva</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="lengua_materna" value="1" /> Sí </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="lengua_materna" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="lengua_materna" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-20-2','d-20-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-20-3" class="answers">
                    <label>Se da a conocer los términos de salud sexual y reproductivo de acuerdo al contexto</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="terminos_salud" value="1" /> Sí </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="terminos_salud" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="terminos_salud" value="3" checked="checked"/> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-20-3','d-20-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-20-4" class="answers">
                    <label>Se basan las pláticas en el buen vivir de los pueblos</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="platicas_pueblos" value="1" /> Sí </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="platicas_pueblos" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="platicas_pueblos" value="3" checked="checked" /> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(20,21)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>

            <div id="21" class="form-group">
                <div class="question"><label>21. ¿Los medios de comunicación locales abordan temas sobre salud sexual y reproductiva de la niñez y adolescencia?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="medios_comunicacion" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="medios_comunicacion" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="medios_comunicacion" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(21,22)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="22" class="form-group">
                <div class="question"><label>22. ¿En que idioma lo hacen?</label></div>
                <div id="d-22-1">
                    <label>Español o castellano</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="idioma_español" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma_español" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma_español" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-22-1','d-22-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-22-2" class="answers">
                    <label>Idioma materna</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="idioma_materno" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma_materno" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma_materno" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-22-2','d-22-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-22-3" class ="answers">
                    <label>Español/castellano e idioma materno</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="idioma_español_materno" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma_español_materno" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma_español_materno" value="3" checked="checked"/> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-22-3','d-22-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-22-4" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="idioma_otro" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma_otro" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="idioma_otro" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div id="22.1" class="form-group">
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
                <div class="question"><label>23. ¿En el centro de salud más cercano se tiene acceso a planificación familiar?</label></div>
            </div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="planificacion_familiar" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="planificacion_familiar" value="2" /> No</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="planificacion_familiar" value="3" checked="checked" /> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(23,24)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="24" class="form-group">
                <div class="question"><label>24. ¿Ha sufrido alg´n tipo de discriminación en su centro de salud?</label></div>
                <div id="d-24-1">
                    <label>Por su edad</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_edad" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_edad" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_edad" value="3" checked="checked"/> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                     <div class = "next"><a href="#" onclick="nextQuestion('d-24-1','d-24-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-24-2" class="answers">
                    <label>Por ser indígena</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_indigena" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_indigena" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_indigena" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                     <div class = "next"><a href="#" onclick="nextQuestion('d-24-2','d-24-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-24-3" class="answers">
                    <label>Por su género</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_genero" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_genero" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_genero" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                     <div class = "next"><a href="#" onclick="nextQuestion('d-24-3','d-24-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-24-4" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_otro" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_otro" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="discriminacion_otro" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>

                <div id="24.1" class="form-group">
                    <label>Especifique otra descriminación</label>
                    <div class="controls">
                        <input class="textinput textInput form-control" id="otra_discrminacion" maxlength="45" name="otra_discrminacion" type="text" placeholder="Ingrese Descriminación">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(24,'clave03')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>
        </div>

        <div id = "groupC" name = "groupC" class = "center container">
            <div class = "iA center group-titles"  id = "clave03">
                <div class="main-title">
                    <h3>Nosotros estamos interesados en su conocimiento sobre el riesgo de transmisión de una ITS o VIH, por favor pueda contestar estas preguntas </h3>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion('clave03',25)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="25" class="form-group">
            <div class ="question">
                <label>25. ¿De qué manera se puede reducir el riesgo de transmisión del VIH?</label>
            </div>
            <div id="d-25-1">
                <label>Fidelidad</label>
            
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="fidelidad" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="fidelidad" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="fidelidad" value="3" checked="checked"/> Ninguna de los anteriores </label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-25-1','d-25-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-25-2" class="answers">
                    <label>Uso de un preservativo en cada relación sexual</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="preservativo" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="preservativo" value="2" checked="checked"/> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="preservativo" value="3" checked="checked"/> Ninguna de los anteriores </label>
                    </div>
                </article>
                </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-25-2','d-25-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-25-3" class="answers">
                    <label>Abstinencia</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="abstinencia" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="abstinencia" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="abstinencia" value="3" checked="checked"/> Ninguna de los anteriores </label>
                    </div>
                </article>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(25,26)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>

            <div id="26" class="form-group">
                <div class ="question">
                    <label>26. ¿Una persona de aspecto saludable puede tener VIH?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="persona_saludable" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="persona_saludable" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="persona_saludable" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(26,27)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="27" class="form-group">
                <div class ="question">
                    <label>27. ¿De qué forma se puede adquirir VIH?</label>
                </div>
                <div id="d-27-1">
                    <label>Por picadura de mosquito</label>
                    <div class="controls ">
                    <article>
                        <div class="radio">
                            <label><input type="radio" name="1picadura_mosquito" value="1" /> Si </label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="1picadura_mosquito" value="2" /> No </label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="1picadura_mosquito" value="3" checked="checked"/> Ninguna de las anteriores </label>
                        </div>
                    </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-1','d-27-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-2" class="answers">
                    <label>Tener relaciones sexuales sin protección</label>
                    <div class="controls ">
                        <article>
                            <div class="radio">
                                <label><input type="radio" name="1relacion_proteccion" value="1" /> Si </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1relacion_proteccion" value="2" /> No </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1relacion_proteccion" value="3" checked="checked"/> Ninguna de las anteriores </label>
                            </div>
                        </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-2','d-27-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-3" class="answers">
                    <label>Por compartir alimentos, plato, ropa o baño con otra persona infectada</label>
                    <div class="controls ">
                        <article>
                            <div class="radio">
                                <label><input type="radio" name="1compartir_persona" value="1" /> Si </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1compartir_persona" value="2" /> No </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1compartir_persona" value="3" checked="checked"/> Ninguna de las anteriores </label>
                            </div>
                        </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-3','d-27-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-4" class="answers">
                    <label>Por dar un beso</label>
                
                    <div class="controls ">
                        <article>
                            <div class="radio">
                                <label><input type="radio" name="1beso" value="1" /> Si </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1beso" value="2" /> No </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1beso" value="3" checked="checked"/> Ninguna de las anteriores </label>
                            </div>
                        </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-4','d-27-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-5" class="answers">
                    <label>Por dar un abrazo</label>
                    <div class="controls ">
                        <article>
                            <div class="radio">
                                <label><input type="radio" name="1abrazo" value="1" /> Si </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1abrazo" value="2" /> No </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1abrazo" value="3" checked="checked"/> Ninguno de los anteriores </label>
                            </div>
                        </article>
                    </div>
                    <div class = "next"><a href="#" onclick="nextQuestion('d-27-5','d-27-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
                
                <div id="d-27-6" class="answers">
                    <label>Otro (especifique)</label>
                    <div class="controls ">
                        <article>
                            <div class="radio">
                                <label><input type="radio" name="1adquirir_otro" value="1" /> Si </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1adquirir_otro" value="2" /> No </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="1adquirir_otro" value="3" checked="checked"/> Ninguno de los anteriores </label>
                            </div>
                        </article>
                    </div>
                    <div id="27.1" class="form-group">
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
            <div class ="question">
                <label>28. ¿Cuáles son las señales (signos y síntomas) que presenta una persona que tiene el VIH?</label>
            </div>
            <div id="d-28-1">
                <label>Pérdida de peso mayor al 10%</label>
            
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="2picadura_mosquito" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2picadura_mosquito" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2picadura_mosquito" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-1','d-28-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-2" class="answers">
                    <label>Diarreas repetidas</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="2relacion_proteccion" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2relacion_proteccion" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2relacion_proteccion" value="3" checked="checked"/> Ninguna de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-2','d-28-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-3" class="answers">
                    <label>Tos persistente y seca</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="2compartir_persona" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2compartir_persona" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2compartir_persona" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-3','d-28-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-4" class="answers">
                    <label>Enfermedades oportunitas</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="2beso" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2beso" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2beso" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-4','d-28-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-5" class="answers">
                    <label>Cansancion extremo</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="2abrazo" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2abrazo" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2abrazo" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-28-5','d-28-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-28-6" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="2adquirir_otro" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2adquirir_otro" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="2adquirir_otro" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>

                <div id="28.1" class="form-group">
                    <label>Especifique otra señal que presenta una persona con VIH</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otra_señal" maxlength="45" name="otra_señal" type="text" placeholder="Ingrese Señal">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(28,29)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>

            <div id="29" class="form-group">
                <div class ="question">
                    <label>29. ¿Qué significa para usted "practicar sexo seguro"?</label>
                </div>
                <div id="d-29-1">
                    <label>Abstenerse de relaciones sexuales</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="3picadura_mosquito" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3picadura_mosquito" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3picadura_mosquito" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-1','d-29-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-2" class="answers">
                    <label>Usar condones en las relaciones</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="3relacion_proteccion" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3relacion_proteccion" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3relacion_proteccion" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-2','d-29-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-3" class="answers">
                    <label>No ser promiscuo (tener solo 1 pareja)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="3compartir_persona" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3compartir_persona" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3compartir_persona" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-3','d-29-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-4" class="answers">
                    <label>Evitar relaciones sin protección con trabajadoras de sexo</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="3beso" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3beso" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3beso" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-4','d-29-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-5" class="answers">
                    <label>Evitar relaciones sin protección con homosexuales</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="3abrazo" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3abrazo" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3abrazo" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-29-5','d-29-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-29-6" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="3adquirir_otro" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3adquirir_otro" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="3adquirir_otro" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>

                <div id="29.1" class="form-group">
                <label>Especifique qué significa para usted</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_significado" maxlength="45" name="otro_significado" type="text" placeholder="Especifique">
                </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(29,30)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                </div>
            </div>
    

            <div id="30" class="form-group">
            <div class ="question">
                <label>30. En los últimos seis meses ha presentado síntomas como estos:</label>
            </div>
            <div id="d-30-1">
                <label>Llaga en el pene</label>
            
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="4picadura_mosquito" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4picadura_mosquito" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4picadura_mosquito" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-1','d-30-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-2" class="answers">
                    <label>Comezón o picazón en sus genitales</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="4relacion_proteccion" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4relacion_proteccion" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4relacion_proteccion" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-2','d-30-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-3" class="answers">
                    <label>Algún dolor o ardor al orinar</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="4compartir_persona" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4compartir_persona" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4compartir_persona" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-3','d-30-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-4" class="answers">
                    <label>Materia o pus en sus genitales</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="4beso" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4beso" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4beso" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-4','d-30-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-5" class="answers">
                    <label>Flujo vaginal</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="4abrazo" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4abrazo" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4abrazo" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-5','d-30-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-6" class="answers">
                    <label>Úlceras</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="41abrazo" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="41abrazo" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="41abrazo" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-30-6','d-30-7')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-30-7" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="4adquirir_otro" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4adquirir_otro" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="4adquirir_otro" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>

                <div id="30.1" class="form-group">
                    <label>Especifique otro síntoma</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_sintoma" maxlength="45" name="otro_sintoma" type="text" placeholder="Ingrese Sintoma">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(30,31)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>
            <div id="31" class="form-group">
                <div class="question"><label>31. ¿Usted busca tratamiento o ayuda para curar la infección?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="busca_tratamiento" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="busca_tratamiento" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="busca_tratamiento" value="3" checked="checked"/> Ninguno de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(31,32)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="32" class="form-group">
                <div class="question">
                    <label>32. ¿A dónde fue y/o de quién recibió ayuda?</label>
                </div>
                <div id="d-32-1">
                    <label>Hospital General/Departamental/Privado</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="hospital" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="hospital" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="hospital" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-1','d-32-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-2" class="answers">
                    <label>Centro o puesto de salud</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="puesto" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="puesto" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="puesto" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-2','d-32-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-3" class="answers">
                    <label>Farmacia</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="farmacia" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="farmacia" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="farmacia" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-3','d-32-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-4" class="answers">
                    <label>Doctor(a) o clínica partícula</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="doctora" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="doctora" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="doctora" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-4','d-32-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-5" class="answers">
                    <label>Curandero o Comadrona</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="comadrona" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="comadrona" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="comadrona" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-32-5','d-32-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-32-6" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="ayuda_otro" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="ayuda_otro" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="ayuda_otro" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>

                <div id="32.1" class="form-group">
                    <label>Especifique donde buscó ayuda</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otra_ayuda" maxlength="45" name="otra_ayuda" type="text" placeholder="Ingrese">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(32,33)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>
            <div id="33" class="form-group">
                <div class="question">
                    <label>33. ¿Qué tratamiento se le dió?</label>
                </div>
                <div id="d-33-1">
                    <label>Acetaminofén</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="acetaminofén" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="acetaminofén" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="acetaminofén" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-1','d-33-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-2" class="answers">
                    <label>Antibiótico</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="antibiotico" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="antibiotico" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="antibiotico" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-2','d-33-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-3" class="answers">
                    <label>Vitamina</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="vitamina" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="vitamina" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="vitamina" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-3','d-33-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-4" class="answers">
                    <label>Información sobre como cuidar la salud</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="informacion_cuidar" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="informacion_cuidar" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="informacion_cuidar" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-4','d-33-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-5" class="answers">
                    <label>Nada</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="nada" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="nada" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="nada" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-5','d-33-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-33-6" class="answers">
                    <label>Me refirieron a un médico o especialista</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="refirieron_medico" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="refirieron_medico" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="refirieron_medico" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-33-6','d-33-7')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>

                <div id="d-33-7" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="tratamiento_otro" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tratamiento_otro" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tratamiento_otro" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div id="33.1" class="form-group">
                    <label>Especifique que tratamiento se le dió</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_tratamiento" maxlength="45" name="otro_tratamiento" type="text" placeholder="Ingrese Tratamiento">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(33,34)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>

            <div id="34" class="form-group">
                <div class="question">
                    <label>34. ¿Puede contestar las siguientes preguntas sobre la atención recibida?</label>
                </div>
                <div id="d-34-1">
                    <label>Le dieron condones</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="dieron_condones" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="dieron_condones" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="dieron_condones" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-1','d-34-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-2" class="answers">
                    <label>Le mostraron cómo utilizar el condón</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="utilizar_condones" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="utilizar_condones" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="utilizar_condones" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-2','d-34-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-3" class="answers">
                    <label>Le platicaron sobre el condón y los métodos de planificación</label>
                
                <div class="controls ">
                <article>

                    <div class="radio">
                        <label><input type="radio" name="platicaron_condon" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="platicaron_condon" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="platicaron_condon" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-3','d-34-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-4" class="answers">
                    <label>Le dieron material escrito</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="material_escrito" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="material_escrito" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="material_escrito" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-4','d-34-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-5" class="answers">
                    <label>Le informaron cuando debe volver</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="informacion_volver" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="informacion_volver" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="informacion_volver" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-5','d-34-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-6" class="answers">
                    <label>El servicio era apto para su edad</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="servicio_apto" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="servicio_apto" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="servicio_apto" value="2" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-34-6','d-34-7')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-34-7" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="preguntas_otro" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="preguntas_otro" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="preguntas_otro" value="3" checked="checked" /> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>

                <div id="34.1" class="form-group">
                    <label>Especifique que otra atención se le dió</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_tratamiento" maxlength="45" name="otro_tratamiento" type="text" placeholder="Ingrese Atención">
                    </div>
                </div>

                <div class = "next"><a href="#" onclick="nextQuestion(34,35)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>
            <div id="35" class="form-group">
                <div class="question"><label>35. ¿Usted cree que está en riesgo de infectarse con el virus del VIH?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="riesgo" value="1" /> Definitivamente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="riesgo" value="2" /> Probablemente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="riesgo" value="3" /> Probablemente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="riesgo" value="4" /> Definitivamente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="riesgo" value="5" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(35,36)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="36" class="form-group">
                <div class="question"><label>36. ¿Cuándo usted escuchó hablar del VIH, ha cambiado su comportamiento sexual para protegerse contra el VIH?</label></div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="cambiado_comportamiento" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="cambiado_comportamiento" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="cambiado_comportamiento" value="3" /> No sabe </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="cambiado_comportamiento" value="4" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(36,37)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="37" class="form-group">
                <div class ="question">
                    <label>37. ¿Que há hecho?</label>
                </div>
                <div id="d-37-1">
                    <label>Dejó de tener relaciones sexuales</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="dejo_relaciones" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="dejo_relaciones" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="dejo_relaciones" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-1','d-37-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-2" class="answers">
                    <label>Empezó a utilizar un condón en cada relación sexual</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="condon_relaciones" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="condon_relaciones" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="condon_relaciones" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-2','d-37-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-3" class="answers">
                    <label>Se ha limitado a tener una sola pareja</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="limitado_pareja" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="limitado_pareja" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="limitado_pareja" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-3','d-37-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-4" class="answers">
                    <label>Redujo el número de parejas</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="numero_parejas" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="numero_parejas" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="numero_parejas" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-4','d-37-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-5" class="answers">
                    <label>Prácticar sexo seguro con cada pareja</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="practicar_sexo" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="practicar_sexo" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="practicar_sexo" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-37-5','d-37-6')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-37-6" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="hecho_otro" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="hecho_otro" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="hecho_otro" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>

                <div id="37.1" class="form-group">
                    <label>Especifique que más ha hecho</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_hecho" maxlength="45" name="otro_hecho" type="text" placeholder="Ingrese aqui">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(37,38)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            </div>

            <div id="38" class="form-group">
                <div class="question">
                    <label>38. ¿Qué métodos anticonceptivos protegen contra una ITS y/o VIH?</label>
                </div>
                <div id="d-38-1">
                    <label>Pildora</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="pildora" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="pildora" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="pildora" value="2" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-38-1','d-38-2')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-38-2" class="answers">
                    <label>DIU</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="diu" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="diu" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="diu" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-38-2','d-38-3')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-38-3" class="answers">
                    <label>Inyecciones</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="inyecciones" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="inyecciones" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="inyecciones" value="3" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-38-3','d-38-4')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-38-4" class="answers">
                    <label>Condones</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="condones" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="condones" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="condones" value="2" checked="checked"/> Ninguno de los anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion('d-38-4','d-38-5')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

                </div>
                <div id="d-38-5" class="answers">
                    <label>Otro (especifique)</label>
                
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="metodo_otro" value="1" /> Si <br></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="metodo_otro" value="2" /> No <br></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="metodo_otro" value="3" checked="checked" /> Ninguno de los anteriores <br></label>
                    </div>
                </article>
                </div>


                <div id="38.1" class="form-group">
                    <label>Especifique que otro método anticonceptivo conoce</label>
                    <div class="controls ">
                        <input class="textinput textInput form-control" id="otro_metodo" maxlength="45" name="otro_tmetodo" type="text" placeholder="Ingrese Método Anticonceptivo">
                    </div>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(38,'clave04')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>
            </div>
        </div>

        <div id = "groupD" name = "groupD" class = "center container ">
          <div class = "iA center group-titles"  id = "clave04">
                <div class="main-title">
                    <h3>Las siguentes preguntas refieren sobre las creencias y actitudes sobre los diferentes comportamientos sexuales </h3>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion('clave04',39)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="39" class="form-group">
                <div class ="question">
                    <label>39. ¿Usted piensa que tener experiencia sexual antes de casarse, es más importante para el joven que para la mujer joven?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="experiencia_sexual" value="1" /> Definitivamente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="experiencia_sexual" value="2" /> Probablemente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="experiencia_sexual" value="3" /> Probablemente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="experiencia_sexual" value="4" /> Definitivamente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="experiencia_sexual" value="5" checked="checked" /> Ninguna de las anteriores</label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(39,40)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
                
            </div>

            <div id="40" class="form-group">
                <div class="question">
                    <label>40. ¿Usted piensa que una mujer joven necesita estar virgen antes de casarse?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="joven_virgen" value="1" /> Definitivamente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="joven_virgen" value="2" /> Probablemente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="joven_virgen" value="3" /> Probablemente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="joven_virgen" value="4" /> Definitivamente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="joven_virgen" value="4" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(40,41)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="41" class="form-group">
                <div class="question">
                    <label>41. ¿Usted piensa que si un joven quiere tener relaciones sexuales con barias parejas y las veces que él quiere es correcto para él?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="joven_relaciones" value="1" /> Definitivamente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="joven_relaciones" value="2" /> Probablemente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="joven_relaciones" value="3" /> Probablemente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="joven_relaciones" value="4" /> Definitivamente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="joven_relaciones" value="5" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(41,42)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="42" class="form-group">
                <div class="question">
                    <label>42. ¿Usted piensa que si una mujer quiere tener relaciones sexuales con varias parejas y las veces que ella quiere es correcto para ella?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="mujer_relaciones" value="1" /> Definitivamente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mujer_relaciones" value="2" /> Probablemente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mujer_relaciones" value="3" /> Probablemente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mujer_relaciones" value="4" /> Definitivamente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mujer_relaciones" value="5" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(42,43)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="43" class="form-group">
                <div class="question">
                    <label>43. ¿Cree usted que si una mujer joven al coquetear a un hombre, es por intensiones o propósitos sexuales?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="mujer_coquetear" value="1" /> Definitivamente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mujer_coquetear" value="2" /> Probablemente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mujer_coquetear" value="3" /> Probablemente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mujer_coquetear" value="4" /> Definitivamente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mujer_coquetear" value="5" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(43,44)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="44" class="form-group">
                <div class="question">
                    <label>44. ¿Usted piensa que el hombre al sentir excitación por su pareja, necesariamente deben de cumplir sexualmente?</label>
                </div>
                <div class="controls ">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="hombre_exitacion" value="1" /> Definitivamente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="hombre_exitacion" value="2" /> Probablemente si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="hombre_exitacion" value="3" /> Probablemente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="hombre_exitacion" value="4" /> Definitivamente no </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="hombre_exitacion" value="5" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(44,'clave05')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>
        </div>

        <div id = "groupE" name = "groupE" class = "center container">
            <div class = "iA center group-titles"  id = "clave05">
                <div class="main-title">
                     <h3>Algunas personas tienen sexo con la primera y sola pareja. Otras personas tienen sexo con más de una compañera. Otras personas tienen sexo con múltiples compañeras casuales. Nosotros necesitamos saber información general sobre las prácticas sexuales de los hombres para mejorar los servicios en su comunidad. </h3>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion('clave05',45)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>
            <div id="45" class="form-group">
                <div class="question">
                    <label>45. ¿Cuánto tiempo lleva de estar con su pareja?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_pareja" value="1" /> Menos de 6 meses </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_pareja" value="2" /> Entre 6 meses y un año </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_pareja" value="3" /> Más de un año </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_pareja" value="4" checked="checked"/> Ninguno de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(45,46)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="46" class="form-group">
                <div class="question">
                    <label>46. ¿Tiene más de una pareja?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="mas_pareja" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mas_pareja" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mas_pareja" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(46,47)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="47" class="form-group">
                <div class="question">
                    <label>47. ¿Cuánto tiempo lleva con la otra pareja?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra1" value="1" /> Actualmente no tengo pareja </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra1" value="2" /> De vez en cuando o casual </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra1" value="3" /> Menos de 6 meses </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra1" value="4" /> Entre 6 meses y un año </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra1" value="5" /> Más de un año </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra1" value="6" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(47,48)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="48" class="form-group">
                <div class="question">
                    <label>48. ¿Cuántas parejas tiene al mes?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="cuantas_parejas" value="1" /> 1 - 2 </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="cuantas_parejas" value="2" /> 3 - 4 </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="cuantas_parejas" value="3" /> 5 - 6 </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="cuantas_parejas" value="4" /> 7 o más </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="cuantas_parejas" value="6" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(48,49)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="49" class="form-group">
                <div class="question">
                    <label>49. ¿Usa condón con las otras parejas?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="condon_otras" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="condon_otras" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="condon_otras" value="3" checked="checked" /> Ninguno de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(49,50)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="50" class="form-group">
                <div class="question">
                    <label>50. ¿Usó condón durante su última relación sexual?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="condon_ultima" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="condon_ultima" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="condon_ultima" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(50,51)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="51" class="form-group">
                <div class="question">
                    <label>51. ¿Con qué freuencia usa usted el condón?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra" value="1" /> Actualmente no tengo pareja </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra" value="2" /> De vez en cuando o casual </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra" value="3" /> Menos de 6 meses </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="tiempo_otra" value="4" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(51,52)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="52" class="form-group">
                <div class="question">
                    <label>52. ¿Usted toma alcohol?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="toma_alcohol" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="toma_alcohol" value="2" /> No </label>
                    </div>
                   <div class="radio">
                        <label><input type="radio" name="toma_alcohol" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(52,53)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="53" class="form-group">
                <div class="question">
                    <label>53. ¿Usted toma alcohol?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="toma_alcohol1" value="1" /> Diario </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="toma_alcohol1" value="2" /> Fin de semana </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="toma_alcohol1" value="3" /> Ocasional </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="toma_alcohol1" value="4" /> Nunca toma </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="toma_alcohol1" value="5" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="next1"><a href="#" onclick="nextQuestion(53,54)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="54" class="form-group">
                <div class="question">
                    <label>54. ¿Usted toma alcohol antes de tener relaciones sexuales?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="toma_relaciones" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="toma_relaciones" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="toma_relaciones" value="3" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(54,55)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>
            </div>

            <div id="55" class="form-group">
                <div class="question">
                    <label>55. ¿En general, qué idioma habla usted con sus amigos?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="general_idioma" value="1" /> Solo español </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="general_idioma" value="2" /> Español más que lengua maya </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="general_idioma" value="3" /> Las dos lenguas </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="general_idioma" value="4" /> Lengua maya mas que español </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="general_idioma" value="5" /> Solo lengua maya </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="general_idioma" value="6" checked="checked" /> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next"><a href="#" onclick="nextQuestion(55,56)"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>

            <div id="56" class="form-group">
                <div class="question">
                    <label>56. ¿Te gustaría tener más información sobre ITS y VIH?</label>
                </div>
                <div class="controls">
                <article>
                    <div class="radio">
                        <label><input type="radio" name="mas_informacion" value="1" /> Si </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mas_informacion" value="2" /> No </label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="mas_informacion" value="3" checked="checked"/> Ninguna de las anteriores </label>
                    </div>
                </article>
                </div>
                <div class = "next" id ="the-end"><a href="#" onclick="nextQuestion('the-end','btn-send')"><span class = "glyphicon glyphicon-chevron-right"></span></a></div>

            </div>
        </div>

        <div class = "btn-div" id="btn-send">
            <input type="submit" class="btn btn-danger" />
        </div>
    </form>
    <footer class ="hide">
          <img src="images/logoIDEI.png" class = "img-footer" />
          <img src="images/logoPARLAMENTO.png" class = "img-footer" />
          <img src="images/logoHIVOS.png" class = "img-footer" />
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="controllers/poll.js"></script>
    
    <script type="text/javascript" src="controllers/geolocalizacion.js"></script>
</body>
</html>