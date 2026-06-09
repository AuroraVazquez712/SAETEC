<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/form_semanal.css">

    <title>SAETEC: Alumno</title>
</head>
<body>
    <!---------------ENCABEZADO--------------------------->
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
    </header>

    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <?php
        include 'barrapro.php';
    ?>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    
    <main>
        <form id="contenido">
            <div id=""emociones>
                <label>Esta semana me sentí:</label>
                    <div class="radio-group">
                        <input type="radio" name="emociones" id="ipt-feliz" value="feliz" hidden>
                        <label for="ipt-feliz"> <img src="../statics/img/emocion_feliz.png" alt="Feliz"> </label>
                            
                        <input type="radio" name="emociones" id="ipt-maso" value="maso" hidden>
                        <label for="ipt-maso"> <img src="../statics/img/emocion_maso.png" alt="Mas o menos"> </label>
                            
                        <input type="radio" name="emociones" id="ipt-triste" value="triste" hidden>
                        <label for="ipt-triste"> <img src="../statics/img/emocion_triste.png" alt="Triste"> </label>

                        <input type="radio" name="emociones" id="ipt-cansado" value="cansado" hidden>
                        <label for="ipt-cansado"> <img src="../statics/img/emocion_cansado.png" alt="cansado"> </label>
                    </div>
            </div>
            <div id="preguntas">
                <div class="resp">
                    <label for="trabajo">¿Qué te cuesta trabajo?:</label>
                    <textarea name="trabajo" id="txta-instrucciones" rows="4" placeholder="Me cuesta..."></textarea>
                </div>
                <div class="resp">
                    <label for="reforzar">¿Qué debo reforzar?:</label>
                    <textarea name="reforzar" id="txta-instrucciones" rows="4" placeholder="Debería repasar..."></textarea>
                </div>
                <div class="resp">
                    <label for="explicacion">¿Qué no entendí:</label>
                    <textarea name="explicacion" id="txta-instrucciones" rows="4" placeholder="Me gustaría que me explicaran..."></textarea>
                </div>
            </div>
            <div id="subir">
                <button type="submit" class="btn-submit">Subir</button>
            </div>
        </form>
        
    </main>
    <?php
            include 'footer.php';
    ?>

</body>
</html>