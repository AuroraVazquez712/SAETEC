<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Diego Ivan Salcedo Perez">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/cuestionario.css">
    <title>Formulario del alumno</title>
</head>
<body>
     <header>
        <div id="iconos_unam">
            <div class="logo-unam">
                <a href="https://www.unam.mx/">
                    <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp">
                <a href="http://enp.unam.mx/">
                    <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp6">
                <a href="https://www.prepa6.unam.mx/ENP6/_P6/">
                    <img class="iconos"src="../statics/img/logo-prepa6.png" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-475años">
                <img class="iconos"src="../statics/img/logo-475años.png" alt="Escuedo de la UNAM">
            </div>
        </div>
        <div id="titulo_encabezado">
            <a href="./index.html">
                <p>SAETEC</p>
            </a>
        </div>
        <div id="iconos_ete">
            <div class="logo-compu">
                <a href="https://www.ete.enp.unam.mx/">
                    <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
                </a>
            </div>
            <div class="logo-ete"></div>
                <a href="https://www.ete.enp.unam.mx/CM.html">
                    <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
                </a>
            </div>
            <div class="logo-40años"></div>
                    <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
            </div>
        </div>
    </header>
    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <?php
            include 'barrapro.php';
    ?> 
    <br>
    <!-------------------------------------------FORMS------------>
    <form action="" method="POST">
        <div class="form-semanal">

            <div class="input-group">
                <label for="nocta">Número de cuenta:</label>
                <input type="text" name="nocta" id="ipt-nocta" placeholder="123456789" required>
            </div>
            <?php
                
            ?>

            <div class="input-group full-width">
                <label>Grupo:</label>
                <div class="radio-group">
                    <input type="radio" name="grupo" value="61B" required>
                    <label for="61B">61B</label>
                            
                    <input type="radio" name="grupo" value="61D">
                    <label for="61D">61D</label>
                </div>
            </div>

            <div class="input-group full-width">
                <label>¿Qué campo te interesa más?</label>
                <div class="radio-group">
                    <input type="radio" name="interes" value="deportes" required>
                    <label for="deportes">Deportes</label>
                            
                    <input type="radio" name="interes" value="artes">
                    <label for="artes">Artes</label>

                    <input type="radio" name="interes" value="tecnologia">
                    <label for="tecnologia">Tecnología</label>

                    <input type="radio" name="interes" value="espectaculo">
                    <label for="espectaculo">Espectáculo</label>
                </div>
            </div>

            <div class="input-group full-width">
                <label>¿Qué dificultad puede ser un obstáculo para tu desempeño en el ETE?</label>
                <div class="radio-group">
                    <input type="radio" name="dificultad" value="tiempo" required>
                    <label for="tiempo">Tiempo</label>
                            
                    <input type="radio" name="dificultad" value="desconocimiento">
                    <label for="desconocimiento">Desconocimiento</label>

                    <input type="radio" name="dificultad" value="falta_computadora">
                    <label for="falta_computadora">Falta de computadora</label>

                    <input type="radio" name="dificultad" value="grupo_demandante">
                    <label for="grupo_demandante">Grupo demandante</label>

                    <input type="radio" name="dificultad" value="motivos_personales">
                    <label for="motivos_personales">Motivos personales</label>
                </div>
            </div>

            <div class="input-group full-width">
                <label>¿Qué te motivó a inscribirte en la ETE?</label>
                <div class="radio-group">
                    <input type="radio" name="razon_ingreso" value="curiosidad" required>
                    <label for="curiosidad">Curiosidad</label>
                            
                    <input type="radio" name="razon_ingreso" value="interes_previo">
                    <label for="interes_previo">Interés previo</label>

                    <input type="radio" name="razon_ingreso" value="relacion_carrera">
                    <label for="relacion_carrera">Relación con la carrera</label>
                </div>
            </div>

            <div class="input-group full-width">
                <label>¿Qué hábito de estudio tienes?</label>
                <div class="radio-group">
                    <input type="radio" name="habito_estudio" value="constancia" required>
                    <label for="constancia">Constancia</label>
                            
                    <input type="radio" name="habito_estudio" value="tiempo_dedicado">
                    <label for="tiempo_dedicado">Tiempo dedicado</label>

                    <input type="radio" name="habito_estudio" value="estudio_individual">
                    <label for="estudio_individual">Estudio individual</label>

                    <input type="radio" name="habito_estudio" value="practica">
                    <label for="practica">Práctica constante</label>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn-submit">Confirmar</button>
    </form>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>