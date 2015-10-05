<!--Created by Marco Barrios on 12/02/2015.-->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name = "viewport" content= "width=device-width, minimum-scale=1, maximum-scale=1"/>
    <title>Monitoreo</title>
    <link rel = "stylesheet" href = "styles/normalize.css"/>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel ="shortcut icon" type = "image/x-icon" href = "images/logo.ico">
</head>
<body>
    <header>
        <figure id = "logo">
            <img src="images/logo.png"/>
        </figure>
        <h2 id = "header-h1">ACASI</h2>
        <h2 id = "header-h2">ACASI</h2>
    </header>

    <?php if (!(($_GET['id']) != "")) { ?>
    <form name="myform" method="post" action="controllers/guardardatos.php">

        <input type="hidden" name="latitud" id="latitud" value="">
        <input type="hidden" name="longitud" id="longitud" value="">
        <input type="hidden" name="altitud" id="altitud" value="">

        <div id="groupA" name="groupA">
            <h3><span><img src="images/logo.png" width="50px"></span>Información General</h3>

            <div id="1" class="form-group">
                <label>1. ¿Cuál es su nombre?</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="nombre" maxlength="45" name="nombre" type="text">
                </div>
            </div>

            <div id="2" class="form-group">
                <label>2. ¿Cuál es su apellido?</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="apellido" maxlength="45" name="apellido" type="text">
                </div>
            </div>

            <div id="3" class="form-group">
                <label>3. ¿Cuál es su fecha de nacimiento?</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="dia" maxlength="45" name="dia" type="text">
                        <input class="textinput textInput form-control" id="mes" maxlength="45" name="mes" type="text">
                        <input class="textinput textInput form-control" id="año" maxlength="45" name="año" type="text">
                </div>
            </div>

            <div id="4" class="form-group">
                <label>4. Seleccione el color de su tarjeta</label>
                <div class="controls">
                        <label><input type="radio" name="color_tarjeta" value="1"/> Rojo <br></label>
                        <label><input type="radio" name="color_tarjeta" value="2"/> Amarillo <br></label>
                        <label><input type="radio" name="color_tarjeta" value="3"/> Negro <br></label>
                        <label><input type="radio" name="color_tarjeta" value="4"/> Blanco <br></label>
                </div>
            </div>

            <div id="5" class="form-group">
                <label>5. ¿Qué edad tiene?</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad" maxlength="45" name="edad" type="text">
                </div>
            </div>

             <div id="6" class="form-group">
                <label>6. ¿Cuál es su estado civil?</label>
                <div class="controls">
                        <label><input type="radio" name="estado_civil" value="1"/> Soltero <br></label>
                        <label><input type="radio" name="estado_civil" value="2"/> Unido <br></label>
                        <label><input type="radio" name="estado_civil" value="3"/> Casado <br></label>
                </div>
            </div>

            <div id="7" class="form-group">
                <label>7. ¿Hasta qué grado aprobó usted en la escuela?</label>
                <div class="controls">
                        <label><input type="radio" name="grado" value="1"/> Primaria incompleta (antes de 6to) <br></label>
                        <label><input type="radio" name="grado" value="2"/> Primaria completa (6to) <br></label>
                        <label><input type="radio" name="grado" value="3"/> Alfabetización <br></label>
                        <label><input type="radio" name="grado" value="4"/> Básico <br></label>
                        <label><input type="radio" name="grado" value="5"/> Diversificado <br></label>
                        <label><input type="radio" name="grado" value="6"/> Universitaria <br></label>
                </div>
            </div>

            <div id="8" class="form-group">
                <label>8. ¿A qué grupo cultural pertenece?</label>
                <div class="controls">
                        <label><input type="radio" name="grupo_cultural" value="1"/> Maya <br></label>
                        <label><input type="radio" name="grupo_cultural" value="2"/> Ladino <br></label>
                        <label><input type="radio" name="grupo_cultural" value="3"/> Otro (especifique) <br></label>
                </div>
            </div>
            <div id="8.1" class="form-group">
                <label>Especificque otro grupo cultural</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_grupo_cultural" maxlength="45" name="otro_grupo_cultural" type="text">
                </div>
            </div>

            <div id="9" class="form-group">
                <label>9. ¿Qué idioma habla?</label>
                <div class="controls">
                        <label><input type="radio" name="idioma" value="1"/> Castellano <br></label>
                        <label><input type="radio" name="idioma" value="2"/> Kiche <br></label>
                        <label><input type="radio" name="idioma" value="3"/> Mam <br></label>
                        <label><input type="radio" name="idioma" value="4"/> Ixil <br></label>
                        <label><input type="radio" name="idioma" value="5"/> Aguacateco <br></label>
                        <label><input type="radio" name="idioma" value="6"/> Chalchiteco <br></label>
                        <label><input type="radio" name="idioma" value="7"/> Sakapulteco <br></label>
                </div>
            </div>

            <div id="10" class="form-group">
                <label>10. ¿En dónde vive actualmente?</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="aldea" maxlength="45" name="aldea" type="text">
                        <input class="textinput textInput form-control" id="municipio" maxlength="45" name="municipio" type="text">
                        <input class="textinput textInput form-control" id="departamento" maxlength="45" name="departamento" type="text">
                </div>
            </div>

            <div id="11" class="form-group">
                <label>11. ¿En dónde nació?</label>
                <div class="controls">
                        <label><input type="radio" name="lugar_nacimiento" value="1"/> Hospital Nacional <br></label>
                        <label><input type="radio" name="lugar_nacimiento" value="2"/> Hospital Privado <br></label>
                        <label><input type="radio" name="lugar_nacimiento" value="3"/> En su casa <br></label>
                        <label><input type="radio" name="lugar_nacimiento" value="4"/> Comadrona <br></label>
                        <label><input type="radio" name="lugar_nacimiento" value="5"/> Otro (especifique) <br></label>
                </div>
            </div>
            <div id="11.1" class="form-group">
                <label>Especificque otro grupo lugar de nacimiento</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_lugar_nacimiento" maxlength="45" name="otro_lugar_nacimiento" type="text">
                </div>
            </div>

            <div id="12" class="form-group">
                <label>12. ¿Cuál es su religión?</label>
                <div class="controls">
                        <label><input type="radio" name="religion" value="1"/> Católica <br></label>
                        <label><input type="radio" name="religion" value="2"/> Evangélica <br></label>
                        <label><input type="radio" name="religion" value="3"/> Otro (especifique) <br></label>
                        <label><input type="radio" name="religion" value="4"/> Ninguna <br></label>
                </div>
            </div>
            <div id="12.1" class="form-group">
                <label>Especificque otra religión</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otra_religion" maxlength="45" name="otra_religion" type="text">
                </div>
            </div>
        </div>

        <div id="groupB" name="groupB">
            <h3><span><img src="images/logo.png" width="50px"></span> Nosotrso estamos interesados en conocer el acceso a la educación sexual</h3>

            <div id="13" class="form-group">
                <label>13. ¿Has recibido pláticas sobre salud sexual o eduación sexual?</label>
                <div class="controls">
                        <label><input type="radio" name="platicas_salud_sexual" value="1"/> Si <br></label>
                        <label><input type="radio" name="platicas_salud_sexual" value="2"/> No <br></label>
                </div>
            </div>

            <div id="14" class="form-group">
                <label>14. ¿Sus padres le han hablado de sexualidad?</label>
                <div class="controls ">
                        <label><input type="radio" name="padres_hablado" value="1" /> Si <br></label>
                        <label><input type="radio" name="padres_hablado" value="2" /> No <br></label>
                </div>
            </div>

            <div id="14.1" class="form-group">
                <label>¿A qué edad?</label>
                <div class="controls ">
                        <input class="textinput textInput form-control" id="edad_platica" maxlength="45" name="edad_platica" type="text">
                </div>
            </div>

            <div id="15" class="form-group">
                <label>15. ¿A qué edad los varones en su comunidad tienen su primera novia?</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad_varones" maxlength="45" name="edad_varones" type="text">
                </div>
            </div>

            <div id="16" class="form-group">
                <label>16. ¿A qué edad los padres de familia permiten que la hija tenga novio?</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad_padres" maxlength="45" name="edad_padres" type="text">
                </div>
            </div>

            <div id="17" class="form-group">
                <label>17. ¿Ya tuvo su primera relación sexual?</label>
                <div class="controls ">
                        <label><input type="radio" name="primera_relacion" value="1" /> Si <br></label>
                        <label><input type="radio" name="primera_relacion" value="2" /> No <br></label>
                </div>
            </div>

            <div id="17.1" class="form-group">
                <label>¿A qué edad?</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="edad_relacion" maxlength="45" name="edad_relacion" type="text">
                </div>
            </div>

            <div id="18" class="form-group">
                <label>18. ¿Por qué los jóvenes inician relaciones sexuales a temprana edad?<br></label>
                <label>Demostrar que es hombre</label>
                <div class="controls ">
                        <label><input type="radio" name="demostrar_hombre" value="1" /> Sí <br></label>
                        <label><input type="radio" name="demostrar_hombre" value="2" /> No <br></label>
                </div>
                <label>Mis papás así lo dicen</label>
                <div class="controls ">
                        <label><input type="radio" name="papas_dicen" value="1" /> Sí <br></label>
                        <label><input type="radio" name="papas_dicen" value="2" /> No <br></label>
                </div>
                <label>Mis amigos han tenido relaciones sexuales</label>
                <div class="controls ">
                        <label><input type="radio" name="amigos_relaciones" value="1" /> Sí <br></label>
                        <label><input type="radio" name="amigos_relaciones" value="2" /> No <br></label>
                </div>
                <label>En mi comunidad se dice que "te deja el tren" si no se casa a temprana edad</label>
                <div class="controls ">
                        <label><input type="radio" name="deja_tren" value="1" /> Sí <br></label>
                        <label><input type="radio" name="deja_tren" value="2" /> No <br></label>
                </div>
                <label>Demostrar "la prueba de amor"</label>
                <div class="controls ">
                        <label><input type="radio" name="prueba_amor" value="1" /> Sí <br></label>
                        <label><input type="radio" name="prueba_amor" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="otro_jovenes_temprana" value="1" /> Sí <br></label>
                        <label><input type="radio" name="otro_jovenes_temprana" value="2" /> No <br></label>
                </div>
            </div>

            <div id="19" class="form-group">
                <label>19. ¿Su centro de salud más cercano cuenta con un programa destinado a la educación sexual integral con pertinencia cultural</label>
                <div class="controls ">
                        <label><input type="radio" name="centro_programa" value="1" /> Sí <br></label>
                        <label><input type="radio" name="centro_programa" value="2" /> No <br></label>
                </div>
            </div>

            <div id="20" class="form-group">
                <label>20. ¿Cuáles son los servicios con los que cuenta su centro de salud más cercano?</label>
                <label>Pláticas sobre salud sexual y reproductiva en forma simple</label>
                <div class="controls ">
                        <label><input type="radio" name="platicas_salud" value="1" /> Sí <br></label>
                        <label><input type="radio" name="platicas_salud" value="2" /> No <br></label>
                </div>
                <label>Se utiliza lengua materna para explicar sobre salud sexual y reproductiva</label>
                <div class="controls ">
                        <label><input type="radio" name="lengua_materna" value="1" /> Sí <br></label>
                        <label><input type="radio" name="lengua_materna" value="2" /> No <br></label>
                </div>
                <label>Se da a conocer los términos de salud sexual y reproductivo de acuerdo al contexto</label>
                <div class="controls ">
                        <label><input type="radio" name="terminos_salud" value="1" /> Sí <br></label>
                        <label><input type="radio" name="terminos_salud" value="2" /> No <br></label>
                </div>
                <label>Se basan las pláticas en el buen vivir de los pueblos</label>
                <div class="controls ">
                        <label><input type="radio" name="platicas_pueblos" value="1" /> Sí <br></label>
                        <label><input type="radio" name="platicas_pueblos" value="2" /> No <br></label>
                </div>
            </div>

            <div id="21" class="form-group">
                <label>21. ¿Los medios de comunicación locales abordan temas sobre salud sexual y reproductiva de la niñez y adolescencia?</label>
                <div class="controls ">
                        <label><input type="radio" name="medios_comunicacion" value="1" /> Si <br></label>
                        <label><input type="radio" name="medios_comunicacion" value="2" /> No <br></label>
                </div>
            </div>

            <div id="22" class="form-group">
                <label>22. ¿En que idioma lo hacen?</label>
                <label>Español o castellano</label>
                <div class="controls ">
                        <label><input type="radio" name="idioma_español" value="1" /> Si <br></label>
                        <label><input type="radio" name="idioma_español" value="2" /> No <br></label>
                </div>
                <label>Idioma materna</label>
                <div class="controls ">
                        <label><input type="radio" name="idioma_materno" value="1" /> Si <br></label>
                        <label><input type="radio" name="idioma_materno" value="2" /> No <br></label>
                </div>
                <label>Español/castellano e idioma materno</label>
                <div class="controls ">
                        <label><input type="radio" name="idioma_español_materno" value="1" /> Si <br></label>
                        <label><input type="radio" name="idioma_español_materno" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="idioma_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="idioma_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="22.1" class="form-group">
                <label>Especifique otro idioma</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="otro_idioma" maxlength="45" name="otro_idioma" type="text">
                </div>
            </div>

            <div id="23" class="form-group">
                <label>23. ¿En el centro de salud más cercano se tiene acceso a planificación familiar?</label>
                <div class="controls ">
                        <label><input type="radio" name="planificacion_familiar" value="1" /> Si <br></label>
                        <label><input type="radio" name="planificacion_familiar" value="2" /> No <br></label>
                </div>
            </div>

            <div id="24" class="form-group">
                <label>24. ¿Ha sufrido alg´n tipo de discriminación en su centro de salud?</label>
                <label>Por su edad</label>
                <div class="controls ">
                        <label><input type="radio" name="discriminacion_edad" value="1" /> Si <br></label>
                        <label><input type="radio" name="discriminacion_edad" value="2" /> No <br></label>
                </div>
                <label>Por ser indígena</label>
                <div class="controls ">
                        <label><input type="radio" name="discriminacion_indigena" value="1" /> Si <br></label>
                        <label><input type="radio" name="discriminacion_indigena" value="2" /> No <br></label>
                </div>
                <label>Por su género</label>
                <div class="controls ">
                        <label><input type="radio" name="discriminacion_genero" value="1" /> Si <br></label>
                        <label><input type="radio" name="discriminacion_genero" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="discriminacion_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="discriminacion_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="24.1" class="form-group">
                <label>Especifique otra descriminación</label>
                <div class="controls">
                        <input class="textinput textInput form-control" id="otra_discrminacion" maxlength="45" name="otra_discrminacion" type="text">
                </div>
            </div>
        </div>

        <div id="groupC" name="groupC">
            <h3><span><img src="images/logo.png" width="50px"></span> Nosotros estamos interesados en su conocimiento sobre el riesgo de transmisión de una ITS o VIH, por favor pueda contestar estas preguntas </h3>

            <div id="25" class="form-group">
                <label>25. ¿De qué manera se puede reducir el riesgo de transmisión del VIH?</label>
                <label>Fidelidad</label>
                <div class="controls ">
                        <label><input type="radio" name="fidelidad" value="1" /> Si <br></label>
                        <label><input type="radio" name="fidelidad" value="2" /> No <br></label>
                </div>
                <label>Uso de un preservativo en cada relación sexual</label>
                <div class="controls ">
                        <label><input type="radio" name="preservativo" value="1" /> Si <br></label>
                        <label><input type="radio" name="preservativo" value="2" /> No <br></label>
                </div>
                <label>Abstinencia</label>
                <div class="controls ">
                        <label><input type="radio" name="abstinencia" value="1" /> Si <br></label>
                        <label><input type="radio" name="abstinencia" value="2" /> No <br></label>
                </div>
            </div>

            <div id="26" class="form-group">
                <label>26. ¿Una persona de aspecto saludable puede tener VIH?</label>
                <div class="controls ">
                        <label><input type="radio" name="persona_saludable" value="1" /> Si <br></label>
                        <label><input type="radio" name="persona_saludable" value="2" /> No <br></label>
                </div>
            </div>

            <div id="27" class="form-group">
                <label>27. ¿De qué forma se puede adquirir VIH?</label>
                <label>Por picadura de mosquito</label>
                <div class="controls ">
                        <label><input type="radio" name="picadura_mosquito" value="1" /> Si <br></label>
                        <label><input type="radio" name="picadura_mosquito" value="2" /> No <br></label>
                </div>
                <label>Tener relaciones sexuales sin protección</label>
                <div class="controls ">
                        <label><input type="radio" name="relacion_proteccion" value="1" /> Si <br></label>
                        <label><input type="radio" name="relacion_proteccion" value="2" /> No <br></label>
                </div>
                <label>Por compartir alimentos, plato, ropa o baño con otra persona infectada</label>
                <div class="controls ">
                        <label><input type="radio" name="compartir_persona" value="1" /> Si <br></label>
                        <label><input type="radio" name="compartir_persona" value="2" /> No <br></label>
                </div>
                <label>Por dar un beso</label>
                <div class="controls ">
                        <label><input type="radio" name="beso" value="1" /> Si <br></label>
                        <label><input type="radio" name="beso" value="2" /> No <br></label>
                </div>
                <label>Por dar un abrazo</label>
                <div class="controls ">
                        <label><input type="radio" name="abrazo" value="1" /> Si <br></label>
                        <label><input type="radio" name="abrazo" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="adquirir_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="adquirir_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="27.1" class="form-group">
                <label>Especifique de que otra manera puede adquirir VIH</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otra_manera" maxlength="45" name="otra_manera" type="text">
                </div>
            </div>

            <div id="28" class="form-group">
                <label>28. ¿Cuáles son las señales (signos y síntomas) que presenta una persona que tiene el VIH?</label>
                <label>Pérdida de peso mayor al 10%</label>
                <div class="controls ">
                        <label><input type="radio" name="picadura_mosquito" value="1" /> Si <br></label>
                        <label><input type="radio" name="picadura_mosquito" value="2" /> No <br></label>
                </div>
                <label>Diarreas repetidas</label>
                <div class="controls ">
                        <label><input type="radio" name="relacion_proteccion" value="1" /> Si <br></label>
                        <label><input type="radio" name="relacion_proteccion" value="2" /> No <br></label>
                </div>
                <label>Tos persistente y seca</label>
                <div class="controls ">
                        <label><input type="radio" name="compartir_persona" value="1" /> Si <br></label>
                        <label><input type="radio" name="compartir_persona" value="2" /> No <br></label>
                </div>
                <label>Enfermedades oportunitas</label>
                <div class="controls ">
                        <label><input type="radio" name="beso" value="1" /> Si <br></label>
                        <label><input type="radio" name="beso" value="2" /> No <br></label>
                </div>
                <label>Cansancion extremo</label>
                <div class="controls ">
                        <label><input type="radio" name="abrazo" value="1" /> Si <br></label>
                        <label><input type="radio" name="abrazo" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="adquirir_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="adquirir_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="28.1" class="form-group">
                <label>Especifique otra señal que presenta una persona con VIH</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otra_señal" maxlength="45" name="otra_señal" type="text">
                </div>
            </div>

            <div id="29" class="form-group">
                <label>29. ¿Qué significa para usted "practicar sexo seguro"?</label>
                <label>Abstenerse de relaciones sexuales</label>
                <div class="controls ">
                        <label><input type="radio" name="picadura_mosquito" value="1" /> Si <br></label>
                        <label><input type="radio" name="picadura_mosquito" value="2" /> No <br></label>
                </div>
                <label>Usar condones en las relaciones</label>
                <div class="controls ">
                        <label><input type="radio" name="relacion_proteccion" value="1" /> Si <br></label>
                        <label><input type="radio" name="relacion_proteccion" value="2" /> No <br></label>
                </div>
                <label>No ser promiscuo (tener solo 1 pareja)</label>
                <div class="controls ">
                        <label><input type="radio" name="compartir_persona" value="1" /> Si <br></label>
                        <label><input type="radio" name="compartir_persona" value="2" /> No <br></label>
                </div>
                <label>Evitar relaciones sin protección con trabajadoras de sexo</label>
                <div class="controls ">
                        <label><input type="radio" name="beso" value="1" /> Si <br></label>
                        <label><input type="radio" name="beso" value="2" /> No <br></label>
                </div>
                <label>Evitar relaciones sin protección con homosexuales</label>
                <div class="controls ">
                        <label><input type="radio" name="abrazo" value="1" /> Si <br></label>
                        <label><input type="radio" name="abrazo" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="adquirir_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="adquirir_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="29.1" class="form-group">
                <label>Especifique qué significa para usted</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_significado" maxlength="45" name="otro_significado" type="text">
                </div>
            </div>

            <div id="30" class="form-group">
                <label>30. En los últimos seis meses ha presentado síntomas como estos:</label>
                <label>Llaga en el pene</label>
                <div class="controls ">
                        <label><input type="radio" name="picadura_mosquito" value="1" /> Si <br></label>
                        <label><input type="radio" name="picadura_mosquito" value="2" /> No <br></label>
                </div>
                <label>Comezón o picazón en sus genitales</label>
                <div class="controls ">
                        <label><input type="radio" name="relacion_proteccion" value="1" /> Si <br></label>
                        <label><input type="radio" name="relacion_proteccion" value="2" /> No <br></label>
                </div>
                <label>Algún dolor o ardor al orinar</label>
                <div class="controls ">
                        <label><input type="radio" name="compartir_persona" value="1" /> Si <br></label>
                        <label><input type="radio" name="compartir_persona" value="2" /> No <br></label>
                </div>
                <label>Materia o pus en sus genitales</label>
                <div class="controls ">
                        <label><input type="radio" name="beso" value="1" /> Si <br></label>
                        <label><input type="radio" name="beso" value="2" /> No <br></label>
                </div>
                <label>Flujo vaginal</label>
                <div class="controls ">
                        <label><input type="radio" name="abrazo" value="1" /> Si <br></label>
                        <label><input type="radio" name="abrazo" value="2" /> No <br></label>
                </div>
                <label>Úlceras</label>
                <div class="controls ">
                        <label><input type="radio" name="abrazo" value="1" /> Si <br></label>
                        <label><input type="radio" name="abrazo" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="adquirir_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="adquirir_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="30.1" class="form-group">
                <label>Especifique otro síntoma</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_sintoma" maxlength="45" name="otro_sintoma" type="text">
                </div>
            </div>

            <div id="31" class="form-group">
                <label>31. ¿Usted busca tratamiento o ayuda para curar la infección?</label>
                <div class="controls ">
                        <label><input type="radio" name="busca_tratamiento" value="1" /> Si <br></label>
                        <label><input type="radio" name="busca_tratamiento" value="2" /> No <br></label>
                </div>
            </div>

            <div id="32" class="form-group">
                <label>32. ¿A dónde fue y/o de quién recibió ayuda?</label>
                <label>Hospital General/Departamental/Privado</label>
                <div class="controls ">
                        <label><input type="radio" name="hospital" value="1" /> Si <br></label>
                        <label><input type="radio" name="hospital" value="2" /> No <br></label>
                </div>
                <label>Centro o puesto de salud</label>
                <div class="controls ">
                        <label><input type="radio" name="puesto" value="1" /> Si <br></label>
                        <label><input type="radio" name="puesto" value="2" /> No <br></label>
                </div>
                <label>Farmacia</label>
                <div class="controls ">
                        <label><input type="radio" name="farmacia" value="1" /> Si <br></label>
                        <label><input type="radio" name="farmacia" value="2" /> No <br></label>
                </div>
                <label>Doctor(a) o clínica partícula</label>
                <div class="controls ">
                        <label><input type="radio" name="doctora" value="1" /> Si <br></label>
                        <label><input type="radio" name="doctora" value="2" /> No <br></label>
                </div>
                <label>Curandero o Comadrona</label>
                <div class="controls ">
                        <label><input type="radio" name="comadrona" value="1" /> Si <br></label>
                        <label><input type="radio" name="comadrona" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="ayuda_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="ayuda_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="32.1" class="form-group">
                <label>Especifique donde buscó ayuda</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otra_ayuda" maxlength="45" name="otra_ayuda" type="text">
                </div>
            </div>

            <div id="33" class="form-group">
                <label>33. ¿Qué tratamiento se le dió?</label>
                <label>Acetaminofén</label>
                <div class="controls ">
                        <label><input type="radio" name="acetaminofén" value="1" /> Si <br></label>
                        <label><input type="radio" name="acetaminofén" value="2" /> No <br></label>
                </div>
                <label>Antibiótico</label>
                <div class="controls ">
                        <label><input type="radio" name="antibiotico" value="1" /> Si <br></label>
                        <label><input type="radio" name="antibiotico" value="2" /> No <br></label>
                </div>
                <label>Vitamina</label>
                <div class="controls ">
                        <label><input type="radio" name="vitamina" value="1" /> Si <br></label>
                        <label><input type="radio" name="vitamina" value="2" /> No <br></label>
                </div>
                <label>Información sobre como cuidar la salud</label>
                <div class="controls ">
                        <label><input type="radio" name="informacion_cuidar" value="1" /> Si <br></label>
                        <label><input type="radio" name="informacion_cuidar" value="2" /> No <br></label>
                </div>
                <label>Nada</label>
                <div class="controls ">
                        <label><input type="radio" name="nada" value="1" /> Si <br></label>
                        <label><input type="radio" name="nada" value="2" /> No <br></label>
                </div>
                <label>Me refirieron a un médico o especialista</label>
                <div class="controls ">
                        <label><input type="radio" name="refirieron_medico" value="1" /> Si <br></label>
                        <label><input type="radio" name="refirieron_medico" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="tratamiento_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="tratamiento_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="33.1" class="form-group">
                <label>Especifique que tratamiento se le dió</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_tratamiento" maxlength="45" name="otro_tratamiento" type="text">
                </div>
            </div>

            <div id="34" class="form-group">
                <label>34. ¿Puede contestar las siguientes preguntas sobre la atención recibida?</label>
                <label>Le dieron condones</label>
                <div class="controls ">
                        <label><input type="radio" name="dieron_condones" value="1" /> Si <br></label>
                        <label><input type="radio" name="dieron_condones" value="2" /> No <br></label>
                </div>
                <label>Le mostraron cómo utilizar el condón</label>
                <div class="controls ">
                        <label><input type="radio" name="utilizar_condones" value="1" /> Si <br></label>
                        <label><input type="radio" name="utilizar_condones" value="2" /> No <br></label>
                </div>
                <label>Le platicaron sobre el condón y los métodos de planificación</label>
                <div class="controls ">
                        <label><input type="radio" name="platicaron_condon" value="1" /> Si <br></label>
                        <label><input type="radio" name="platicaron_condon" value="2" /> No <br></label>
                </div>
                <label>Le dieron material escrito</label>
                <div class="controls ">
                        <label><input type="radio" name="material_escrito" value="1" /> Si <br></label>
                        <label><input type="radio" name="material_escrito" value="2" /> No <br></label>
                </div>
                <label>Le informaron cuando debe volver</label>
                <div class="controls ">
                        <label><input type="radio" name="informacion_volver" value="1" /> Si <br></label>
                        <label><input type="radio" name="informacion_volver" value="2" /> No <br></label>
                </div>
                <label>El servicio era apto para su edad</label>
                <div class="controls ">
                        <label><input type="radio" name="servicio_apto" value="1" /> Si <br></label>
                        <label><input type="radio" name="servicio_apto" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="preguntas_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="preguntas_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="34.1" class="form-group">
                <label>Especifique que otra atención se le dió</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_tratamiento" maxlength="45" name="otro_tratamiento" type="text">
                </div>
            </div>

            <div id="35" class="form-group">
                <label>35. ¿Usted cree que está en riesgo de infectarse con el virus del VIH?</label>
                <div class="controls ">
                        <label><input type="radio" name="riesgo" value="1" /> Definitivamente si <br></label>
                        <label><input type="radio" name="riesgo" value="2" /> Probablemente si <br></label>
                        <label><input type="radio" name="riesgo" value="3" /> Probablemente no <br></label>
                        <label><input type="radio" name="riesgo" value="4" /> Definitivamente no <br></label>
                </div>
            </div>

            <div id="36" class="form-group">
                <label>36. ¿Cuándo usted escuchó hablar del VIH, ha cambiado su comportamiento sexual para protegerse contra el VIH?</label>
                <div class="controls ">
                        <label><input type="radio" name="cambiado_comportamiento" value="1" /> Si <br></label>
                        <label><input type="radio" name="cambiado_comportamiento" value="2" /> No <br></label>
                        <label><input type="radio" name="cambiado_comportamiento" value="3" /> No sabe <br></label>
                </div>
            </div>

            <div id="37" class="form-group">
                <label>37. ¿Que há hecho?</label>
                <label>Dejó de tener relaciones sexuales</label>
                <div class="controls ">
                        <label><input type="radio" name="dejo_relaciones" value="1" /> Si <br></label>
                        <label><input type="radio" name="dejo_relaciones" value="2" /> No <br></label>
                </div>
                <label>Empezó a utilizar un condón en cada relación sexual</label>
                <div class="controls ">
                        <label><input type="radio" name="condon_relaciones" value="1" /> Si <br></label>
                        <label><input type="radio" name="condon_relaciones" value="2" /> No <br></label>
                </div>
                <label>Se ha limitado a tener una sola pareja</label>
                <div class="controls ">
                        <label><input type="radio" name="limitado_pareja" value="1" /> Si <br></label>
                        <label><input type="radio" name="limitado_pareja" value="2" /> No <br></label>
                </div>
                <label>Redujo el número de parejas</label>
                <div class="controls ">
                        <label><input type="radio" name="numero_parejas" value="1" /> Si <br></label>
                        <label><input type="radio" name="numero_parejas" value="2" /> No <br></label>
                </div>
                <label>Prácticar sexo seguro con cada pareja</label>
                <div class="controls ">
                        <label><input type="radio" name="practicar_sexo" value="1" /> Si <br></label>
                        <label><input type="radio" name="practicar_sexo" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="hecho_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="hecho_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="37.1" class="form-group">
                <label>Especifique que más ha hecho</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_hecho" maxlength="45" name="otro_hecho" type="text">
                </div>
            </div>

            <div id="38" class="form-group">
                <label>38. ¿Qué métodos anticonceptivos protegen contra una ITS y/o VIH?</label>
                <label>Pildora</label>
                <div class="controls ">
                        <label><input type="radio" name="pildora" value="1" /> Si <br></label>
                        <label><input type="radio" name="pildora" value="2" /> No <br></label>
                </div>
                <label>DIU</label>
                <div class="controls ">
                        <label><input type="radio" name="diu" value="1" /> Si <br></label>
                        <label><input type="radio" name="diu" value="2" /> No <br></label>
                </div>
                <label>Inyecciones</label>
                <div class="controls ">
                        <label><input type="radio" name="inyecciones" value="1" /> Si <br></label>
                        <label><input type="radio" name="inyecciones" value="2" /> No <br></label>
                </div>
                <label>Condones</label>
                <div class="controls ">
                        <label><input type="radio" name="condones" value="1" /> Si <br></label>
                        <label><input type="radio" name="condones" value="2" /> No <br></label>
                </div>
                <label>Otro (especifique)</label>
                <div class="controls ">
                        <label><input type="radio" name="metodo_otro" value="1" /> Si <br></label>
                        <label><input type="radio" name="metodo_otro" value="2" /> No <br></label>
                </div>
            </div>

            <div id="38.1" class="form-group">
                <label>Especifique que otro método anticonceptivo conoce</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_metodo" maxlength="45" name="otro_tmetodo" type="text">
                </div>
            </div>

        </div>

        <div id="groupD" name="groupD">
            <h3><span><img src="images/logo.png" width="50px"></span> Las siguentes preguntas refieren sobre las creencias y actitudes sobre los diferentes comportamientos sexuales </h3>

            <div id="39" class="form-group">
                <label>39. ¿Usted piensa que tener experiencia sexual antes de casarse, es más importante para el joven que para la mujer joven?</label>
                <div class="controls ">
                        <label><input type="radio" name="experiencia_sexual" value="1" /> Definitivamente si <br></label>
                        <label><input type="radio" name="experiencia_sexual" value="2" /> Probablemente si <br></label>
                        <label><input type="radio" name="experiencia_sexual" value="3" /> Probablemente no <br></label>
                        <label><input type="radio" name="experiencia_sexual" value="4" /> Definitivamente no <br></label>
                </div>
            </div>

            <div id="40" class="form-group">
                <label>40. ¿Usted piensa que una mujer joven necesita estar virgen antes de casarse?</label>
                <div class="controls ">
                        <label><input type="radio" name="joven_virgen" value="1" /> Definitivamente si <br></label>
                        <label><input type="radio" name="joven_virgen" value="2" /> Probablemente si <br></label>
                        <label><input type="radio" name="joven_virgen" value="3" /> Probablemente no <br></label>
                        <label><input type="radio" name="joven_virgen" value="4" /> Definitivamente no <br></label>
                </div>
            </div>

            <div id="41" class="form-group">
                <label>41. ¿Usted piensa que si un joven quiere tener relaciones sexuales con barias parejas y las veces que él quiere es correcto para él?</label>
                <div class="controls ">
                        <label><input type="radio" name="joven_relaciones" value="1" /> Definitivamente si <br></label>
                        <label><input type="radio" name="joven_relaciones" value="2" /> Probablemente si <br></label>
                        <label><input type="radio" name="joven_relaciones" value="3" /> Probablemente no <br></label>
                        <label><input type="radio" name="joven_relaciones" value="4" /> Definitivamente no <br></label>
                </div>
            </div>

            <div id="42" class="form-group">
                <label>42. ¿Usted piensa que si una mujer quiere tener relaciones sexuales con varias parejas y las veces que ella quiere es correcto para ella?</label>
                <div class="controls ">
                        <label><input type="radio" name="mujer_relaciones" value="1" /> Definitivamente si <br></label>
                        <label><input type="radio" name="mujer_relaciones" value="2" /> Probablemente si <br></label>
                        <label><input type="radio" name="mujer_relaciones" value="3" /> Probablemente no <br></label>
                        <label><input type="radio" name="mujer_relaciones" value="4" /> Definitivamente no <br></label>
                </div>
            </div>

            <div id="43" class="form-group">
                <label>43. ¿Cree usted que si una mujer joven al coquetear a un hombre, es por intensiones o propósitos sexuales?</label>
                <div class="controls ">
                        <label><input type="radio" name="mujer_coquetear" value="1" /> Definitivamente si <br></label>
                        <label><input type="radio" name="mujer_coquetear" value="2" /> Probablemente si <br></label>
                        <label><input type="radio" name="mujer_coquetear" value="3" /> Probablemente no <br></label>
                        <label><input type="radio" name="mujer_coquetear" value="4" /> Definitivamente no <br></label>
                </div>
            </div>

            <div id="44" class="form-group">
                <label>44. ¿Usted piensa que el hombre al sentir excitación por su pareja, necesariamente deben de cumplir sexualmente?</label>
                <div class="controls ">
                        <label><input type="radio" name="hombre_exitacion" value="1" /> Definitivamente si <br></label>
                        <label><input type="radio" name="hombre_exitacion" value="2" /> Probablemente si <br></label>
                        <label><input type="radio" name="hombre_exitacion" value="3" /> Probablemente no <br></label>
                        <label><input type="radio" name="hombre_exitacion" value="4" /> Definitivamente no <br></label>
                </div>
            </div>
        </div>

        <div id="groupE" name="groupE">
            <h3><span><img src="images/logo.png" width="50px"></span> Algunas personas tienen sexo con la primera y sola pareja. Otras personas tienen sexo con más de una compañera. Otras personas tienen sexo con múltiples compañeras casuales. Nosotros necesitamos saber información general sobre las prácticas sexuales de los hombres para mejorar los servicios en su comunidad. </h3>

            <div id="45" class="form-group">
                <label>45. ¿Cuánto tiempo lleva de estar con su pareja?</label>
                <div class="controls">
                    <label><input type="radio" name="tiempo_pareja" value="1" /> Menos de 6 meses <br></label>
                    <label><input type="radio" name="tiempo_pareja" value="2" /> Entre 6 meses y un año <br></label>
                    <label><input type="radio" name="tiempo_pareja" value="3" /> Más de un año <br></label>
                </div>
            </div>

            <div id="46" class="form-group">
                <label>46. ¿Tiene más de una pareja?</label>
                <div class="controls">
                    <label><input type="radio" name="mas_pareja" value="1" /> Si <br></label>
                    <label><input type="radio" name="mas_pareja" value="2" /> No <br></label>
                </div>
            </div>

            <div id="47" class="form-group">
                <label>47. ¿Cuánto tiempo lleva con la otra pareja?</label>
                <div class="controls">
                    <label><input type="radio" name="tiempo_otra" value="1" /> Actualmente no tengo pareja <br></label>
                    <label><input type="radio" name="tiempo_otra" value="2" /> De vez en cuando o casual <br></label>
                    <label><input type="radio" name="tiempo_otra" value="3" /> Menos de 6 meses <br></label>
                    <label><input type="radio" name="tiempo_otra" value="4" /> Entre 6 meses y un año <br></label>
                    <label><input type="radio" name="tiempo_otra" value="5" /> Más de un año <br></label>
                </div>
            </div>

            <div id="48" class="form-group">
                <label>48. ¿Cuántas parejas tiene al mes?</label>
                <div class="controls">
                    <label><input type="radio" name="cuantas_parejas" value="1" /> 1 - 2 <br></label>
                    <label><input type="radio" name="cuantas_parejas" value="2" /> 3 - 4 <br></label>
                    <label><input type="radio" name="cuantas_parejas" value="3" /> 5 - 6 <br></label>
                    <label><input type="radio" name="cuantas_parejas" value="4" /> 7 o más <br></label>
                </div>
            </div>

            <div id="49" class="form-group">
                <label>49. ¿Usa condón con las otras parejas?</label>
                <div class="controls">
                    <label><input type="radio" name="condon_otras" value="1" /> Si <br></label>
                    <label><input type="radio" name="condon_otras" value="2" /> No <br></label>
                </div>
            </div>

            <div id="50" class="form-group">
                <label>50. ¿Usó condón durante su última relación sexual?</label>
                <div class="controls">
                    <label><input type="radio" name="condon_ultima" value="1" /> Si <br></label>
                    <label><input type="radio" name="condon_ultima" value="2" /> No <br></label>
                </div>
            </div>

            <div id="51" class="form-group">
                <label>51. ¿Con qué freuencia usa usted el condón?</label>
                <div class="controls">
                    <label><input type="radio" name="tiempo_otra" value="1" /> Actualmente no tengo pareja <br></label>
                    <label><input type="radio" name="tiempo_otra" value="2" /> De vez en cuando o casual <br></label>
                    <label><input type="radio" name="tiempo_otra" value="3" /> Menos de 6 meses <br></label>
                </div>
            </div>

            <div id="52" class="form-group">
                <label>52. ¿Usted toma alcohol?</label>
                <div class="controls">
                    <label><input type="radio" name="toma_alcohol" value="1" /> Si <br></label>
                    <label><input type="radio" name="toma_alcohol" value="2" /> No <br></label>
                </div>
            </div>

            <div id="53" class="form-group">
                <label>53. ¿Usted toma alcohol?</label>
                <div class="controls">
                    <label><input type="radio" name="toma_alcohol" value="1" /> Diario <br></label>
                    <label><input type="radio" name="toma_alcohol" value="2" /> Fin de semana <br></label>
                    <label><input type="radio" name="toma_alcohol" value="3" /> Ocasional <br></label>
                    <label><input type="radio" name="toma_alcohol" value="4" /> Nunca toma <br></label>
                </div>
            </div>

            <div id="54" class="form-group">
                <label>54. ¿Usted toma alcohol antes de tener relaciones sexuales?</label>
                <div class="controls">
                    <label><input type="radio" name="toma_relaciones" value="1" /> Si <br></label>
                    <label><input type="radio" name="toma_relaciones" value="2" /> No <br></label>
                </div>
            </div>

            <div id="55" class="form-group">
                <label>55. ¿En general, qué idioma habla usted con sus amigos?</label>
                <div class="controls">
                    <label><input type="radio" name="general_idioma" value="1" /> Solo español <br></label>
                    <label><input type="radio" name="general_idioma" value="2" /> Español más que lengua maya <br></label>
                    <label><input type="radio" name="general_idioma" value="3" /> Las dos lenguas <br></label>
                    <label><input type="radio" name="general_idioma" value="4" /> Lengua maya mas que español <br></label>
                    <label><input type="radio" name="general_idioma" value="5" /> Solo lengua maya <br></label>
                </div>
            </div>

            <div id="56" class="form-group">
                <label>56. ¿Te gustaría tener más información sobre ITS y VIH?</label>
                <div class="controls">
                    <label><input type="radio" name="mas_informacion" value="1" /> Si <br></label>
                    <label><input type="radio" name="mas_informacion" value="2" /> No <br></label>
                </div>
            </div>

        </div>

        <div class = "btn">
            <input type="submit"/>
        </div>
        
    </form>
    <?php } else { header('Location: index.php'); } ?>

    <footer>
          <img src="images/logoIDEI.png" class = "img-footer" />
          <img src="images/logoPARLAMENTO.png" class = "img-footer" />
          <img src="images/logoHIVOS.png" class = "img-footer" />
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="controllers/functions.js"></script>
    <script type="text/javascript" src="controllers/geolocalizacion.js"></script>
</body>
</html>