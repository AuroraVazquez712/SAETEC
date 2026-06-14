<?php
    require_once '../dynamics/config.php';
    session_start();

    // Nos preguntamos si eligió tipo de usuario
    $rol = "";
    if(isset($_GET["rol"])) {
        var_dump($_GET);
        $rol = $_GET["rol"];
    } else {
        echo "No hay POST";
        //header("Location: index.php");
        //exit;
    }

    


    // Este if dice si ya se envió formulario
    if (isset($_POST["usuario"]))
    {
        $con = connect();

        // Recibir y limpiar la entrada del usuario:
        $usuario = trim($_POST["usuario"]);
        $contrasenha = trim($_POST["contrasenha"]);
        $hasheo = password_hash($contrasenha, PASSWORD_DEFAULT);

        //Debe agregarse un usuario administrador, y profesor para checar credenciales

        // Primero revisamos que el registro esté en la tabla estudiante
        // Si sí, entonces será un usuario de tipo estudiante. Y ponemos los datos 
        // en las variables de sesión

        // Si no, revisamos la tabla de profesor


        // Ahora, con base en el rol del usuario, vamos a buscar en su tabla específica si existe el usuario

        switch ($rol) {
            // El caso de administrador
            case $rol = "A":
                $query = "SELECT id_administrador, nombre_administrador FROM administrador WHERE nombre_administrador ='$usuario'";
                $result = mysqli_query($con, $query);
                $num_registros = mysqli_num_rows($result);

                if($num_registros > 0) {
                    $registro1 = mysqli_fetch_assoc($result);
                    $id_perfil = $registro1["id_administrador"];

                    //TABLA PERFIL CONSULTA 2
                    $query2 = "SELECT id_perfil, nombre, apellido_paterno, apellido_materno, correo, contrasenha
                    FROM perfil WHERE id_perfil = '$id_perfil'";
                    //Hacer el hasheo de contrasenha
                    $result2 = mysqli_query($con, $query2);
                    $registro2 = mysqli_fetch_assoc($result2);

                    if ($registro2) {
                        $_SESSION["nombre completo"] = $registro2["nombre"] . " " . $registro2["apellido_paterno"] . " " . $registro2["apellido_materno"];
                        $_SESSION["correo"] = $registro2["correo"];
                        $_SESSION["nombre_administrador"] = $registro1["nombre_administrador"];
                        $_SESSION["id_perfil"] = $registro2["id_perfil"];
                        $_SESSION["rol"] = 'A';
                        header("Location: perfil-alumno.php");
                        exit;
                    }
                } else {
                    // No hay registros asociados a ese nombre de administrador
                    // Mandar mensaje de error
                }
                break;
            // El caso del estudiante
            case $rol = "E":
                // Query para bsucar si el usuario está en 'estudiante'
                $query = "SELECT  id_estudiante, id_grupo, nocta FROM estudiante WHERE nocta = '$usuario'";
                $result = mysqli_query($con, $query);
                // Contamos el numero de filas devueltas
                $num_registros = mysqli_num_rows($result);

                if($num_registros > 0) {
                    // El usuario es estudiante
                    // Guardaremos los datos en variables de sesion, cookies,
                    // y redirigirlo
                    $registro1 = mysqli_fetch_assoc($result);
                    $id_perfil = $registro1["id_estudiante"];

                    // TABLA PERFIL CONSULTA 2
                    $query2 = "SELECT id_perfil, nombre, apellido_paterno, apellido_materno, correo, contrasenha 
                    FROM perfil WHERE id_perfil = '$id_perfil'";
                    //Cambiar el contrsenha a hasheo, después de hacer el formulario
                    $result2 = mysqli_query( $con, $query2);
                    $registro2 = mysqli_fetch_assoc($result2);

                    //CONSULTA DE GRUPO, TABLE GRUPO
                    $id_grupo = $registro1["id_grupo"];
                    $query3 = "SELECT id_grupo, nombre_grupo FROM grupo WHERE id_grupo = '$id_grupo'";
                    $result3 = mysqli_query( $con, $query3);
                    $registro3 = mysqli_fetch_assoc($result3);

                    if ($registro2) {
                        $_SESSION["nombre_completo"] = $registro2["nombre"] . " " . $registro2["apellido_paterno"] . " " . $registro2["apellido_materno"];
                        $_SESSION["correo"] = $registro2["correo"];
                        $_SESSION["nocta"] = $registro1["nocta"];
                        $_SESSION["grupo"] = $registro3["nombre_grupo"];
                        $_SESSION["id_perfil"] = $registro2["id_perfil"];
                        $_SESSION["rol"] = "E";
                        setcookie("usuario", $registro1["nocta"], time() + (86400)); // 1 dia = 86400 segundos, expirará en un dia
                        header("Location: perfil-alumno.php");
                        exit;
                    }
                } else {
                    // No existe en la tabla un estudiante con ese numero de cuenta
                    // Por hacer: mandar mensaje de error
                    
                }
                break;
            // El caso del profesor
            case $rol = "P":
                $query = "SELECT id_profesor, no_trabajador FROM profesor WHERE no_trabajador = '$usuario'";
                $result = mysqli_query($con, $query);
                $num_registros = mysqli_num_rows($result);
                if($num_registros > 0) {
                    // Sí era profesor, toca guardar sus respectivas variables de sesión, cookies,
                    // y redirigirlo
                    $registro1 = mysqli_fetch_assoc($result);
                    $id_perfil = $registro1["id_profesor"];

                    // CONSULTA TABLA PERFIL
                    $query2 = "SELECT id_perfil, nombre, apellido_paterno, apellido_materno, correo, contrasenha 
                    FROM perfil WHERE id_perfil = '$id_perfil'";
                    //Cambiar el contrsenha a hasheo, después de hacer el formulario
                    $result2 = mysqli_query( $con, $query2);
                    $registro2 = mysqli_fetch_assoc($result2);

                    // CONSULTA A LA TABLA GRUPOS PARA SABER QUÉ GRUPOS DA EL PROFE
                    $query3 = "SELECT id_grupo, nombre_grupo FROM grupo WHERE id_profesor = '$id_perfil'";
                    $result3 = mysqli_query($con, $query3);
                    // Arreglo vacío
                    $grupos = [];
                    // Mientras los resultados de nuestra query no sean filas vacías
                    while ($row = mysqli_fetch_assoc($result3)){
                        $grupos[] = $row;
                    }

                    if ($registro2) {
                        $_SESSION["nombre_completo"] = $registro2["nombre"] . " " . $registro2["apellido_paterno"] . " " . $registro2["apellido_materno"];
                        $_SESSION["correo"] = $registro2 ["correo"];
                        $_SESSION["no_trabajador"] = $registro1["no_trabajador"];
                        $_SESSION["id_perfil"] = $registro2["id_perfil"];
                        $_SESSION["grupos"] = $grupos;
                        $_SESSION["rol"] = "P";
                        // Por hacer: Poner la cookie tal como en el estudiante
                        header("Location: profesor.php");
                        exit;
                    }
                } else {
                    // No existe un registro en la tabla de profe con ese numero de trabajador
                    // Por hacer: mandar mensaje de error
                    // $error = "No se ha encontrado al profesor";
                }
                break;
        }
    }
?>