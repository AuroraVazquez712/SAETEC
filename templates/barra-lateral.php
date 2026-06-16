<aside>
        <div class="capa"> </div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu"/>
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <?php
                        //session_start();
                        $_SESSION["nombre completo"];
                        $tunombre = $_SESSION["nombre completo"];
                        echo "Hola $tunombre";
                    ?>
                    <a href="./perfil-alumno.php">Mi perfil</a>
                    <hr>
                    <a href="./vista-perf-alumnos.php">Mis calificaciones</a>
                    <hr>
                    <a href="./act.php">Mis actividades</a>
                    <hr>
                    <a href="./form_semanal.php">¿Cómo te has sentido?</a>
                    <hr>
                    <a href="../docs/2019_Acuerdo_Rectoria_02.pdf">Políticas de seguridad</a>
                    <hr>
                    <a href="./actualizar-contrasenha.php">Modificar datos</a>
                    <hr>
                    <a href="act.php">Lista de actividades</a>
                    <hr>
                    
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
</aside>