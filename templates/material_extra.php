<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/material_extra.css">
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

    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <?php
            include 'barrapro.php';
    ?>
    <br>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    <main>
        <div id="materiales">
            <div id="modulo">
                <div class="titulo_modulo">Módulo 1: Aplicaciones de uso general</div>
                <div class="ejercicio">
                    <h3> Ejercicios: </h3>
                        <p>Aquí va el ejercicio UwU</p>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        <p>Link al super video</p>
                </div>
            </div>
            <div id="modulo">
                <div class="titulo_modulo">Módulo 2: Introducción a la Computación</div>
                <div class="ejercicio">
                    <h3> Bibliografía: </h3>
                        <ul>
                            <li>Vasconcelos, J.  (2013). 
                                Introducción a la computación. México: Grupo Editorial Patria. Página: 296 </li>
                            <li><a href="https://www.mheducation.es/bcv/guide/capitulo/8448147227.pdf">
                                Introducción a la programación en C.</a> </li>
                            <li><a href="http://fcasua.contad.unam.mx/apuntes/interiores/docs/2005/informatica/1/1167.pdf">
                                Kanagusico, D. (s.f.). Apunte Introducción a la Programación. Páginas: 4-5 </a></li>
                        </ul>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        <p>Link al super video</p>
                </div>
            </div>
            <div id="modulo">
                <div class="titulo_modulo">Módulo 3: Programación Estructurada</div>
                <div class="ejercicio">
                    <h3> Bibliografía: </h3>
                        <ul>
                            <li> Deitel, H. y Deitel, P. (2004). Cómo programar en C, C++ y Java. México: 
                                Prentice Hall. Páginas: 51-69, 90-106 </li>
                            <li><a href="https://webs.um.es/iverdu/P00LibreriasANSIc.pdf ">
                                Davidson, S. y Pozo, S. (2003). Librerías ANSI C: Librerías estándar C. R.</a> </li>
                            <li><a href="http://odin.fi-b.unam.mx/salac/practicasFP/fp_p7.pdf ">
                                García, E. y Solano, J. (s.f.). Guía práctica de estudio 07: Fundamentos de Lenguaje C. </a></li>
                        </ul>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=rEsSxd0L4GI&list=PLpOqH6AE0tNgqknxjMAJ8bX_L1a7lnBaH">
                                Codigofacilito (s.f.). Curso Básico de C [Archivos de video]. </a> </li>
                            <li><a href="https://www.youtube.com/watch?v=9ijhlPfxFnk&list=PLMDLYpoZkTxNARxzB3-FcqcXoEOExyxe7">
                                Codeando. (2015). Curso de C [Archivos de video] </a></li>
                            <li><a href="https://www.youtube.com/watch?v=ztEsa-dtn3E">
                                Casanova, R. (2012). Manejo de archivos en lenguaje C [Archivo de video].</a></li>
                        </ul>
                </div>
            </div>
            <div id="modulo">
                <div class="titulo_modulo">Módulo 4: Sistemas Operativos</div>
                <div class="ejercicio">
                    <h3> Bibliografía: </h3>
                        <ul>
                            <li><a href="https://triton.astroscu.unam.mx/fruiz/introduccion/clases/so/SO.pdf">
                                Ruiz Sala, F. (s. f.). Sistema operativo. Instituto de Astronomía, Universidad Nacional Autónoma de México.</a></li>
                        </ul>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        <p>Link al super video</p>
                </div>
            </div>
            <div id="modulo">
                <div class="titulo_modulo">Módulo 5: Solución de problemas y tecns. progr.</div>
                <div class="ejercicio">
                    <h3> Ejercicios: </h3>
                        <p>Aquí va el ejercicio UwU</p>
                </div>
                <div class="video">
                    <h3>Videos de Apoyo:</h3>
                        
                </div>
            </div>
        </div>
    </main>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>