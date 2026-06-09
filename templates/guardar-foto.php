            <?php   
                if(isset($_FILES['foto-perfil']))
                {
                    $archivo = $_FILES['foto-perfil'];
                    $nombre_archivo = $archivo['name'];
                    $ruta_temporal = $archivo['tmp_name'];

                    move_uploaded_file($ruta_temporal, '../statics/img/perfil-usuario.jpg');
                }
            ?>
            <div class="vista-previa">
                <?php
                    $ruta_imagen="";
                    if(file_exists("../statics/img/perfil-usuario.jpg")){
                        $ruta_imagen= "../statics/img/perfil-usuario.jpg";
                    }else{
                        $ruta_imagen="../statics/img/imagen-predeterminada.jpeg";
                    }
                    echo "<img src= '$ruta_imagen' class= 'profile-pic'>";
                ?>

                <a href="perfil-alumno.php" class="btn-editar">Regresar al perfil</a>
            </div>