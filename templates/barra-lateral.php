<aside>
        <div class="capa"> </div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu"/>
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <h2>324308734</h2>
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
                    <?php
                        /*session_destroy();
                        $cerrar = session_destroy();
                        if ($cerrar=true) {*/
                    ?>
                    <a href="index.php" name="cierre">
                        Cerrar Sesión
                    </a>
                    <?php
                       /* }
                        echo "Se cerró tu sesión, te esperamos";*/
                    ?>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
</aside>