<?php
include("../PHP_SERVER/CONEXION.php");
function sanitizar($input)
{
    $input = trim($input);
    $input = htmlspecialchars($input);
    $input = stripslashes($input);
    return $input;
}

// Verificamos si los campos del formulario están configurados
if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {

    $usuario = sanitizar($_POST['usuario']);
    $contraseña = sanitizar($_POST['contraseña']);

    try {
        $query = "SELECT * FROM Entrenadores WHERE usuario = ? AND contraseña = ?";

        if ($stmt = $link->prepare($query)) {
            $stmt->bind_param("ss", $usuario, $contraseña);
            $stmt->execute();
            $result = $stmt->get_result();
            if (mysqli_num_rows($result) === 1) {
                $row = $result->fetch_assoc();
               
                session_start();
                $_SESSION["Session"] = true;
                $_SESSION['nombre_entrenador'] = $row['nombre'];
                $_SESSION['telefono_entrenador'] = $row['telefono'];
                $_SESSION['equipo_entrenador'] = $row['equipo'];
                $_SESSION['correo_entrenador'] = $row['correo'];
                $_SESSION['direccion_entrenador'] = $row['direccion'];
                $_SESSION['ciudad_entrenador'] = $row['ciudad'];
                $_SESSION['codigo_postal_entrenador'] = $row['codigo_postal'];
                $_SESSION['usuario_entrenador'] = $row['usuario'];
                $_SESSION['contraseña_entrenador'] = $row['contraseña']; 
            

                
                header("Location: ../PHP_VISTA/PERFIL_ENTRENADOR.php");
                
                exit();

            } else {
                header('Location: ../PHP_VISTA/Login.php?error=USUARIO O CONTRASEÑA INCORRECTA.');
                exit();
            }
        }
    } catch (Exception) { 
        header('Location: ../PHP_VISTA/Login.php?error='."ERROR: +". $Exception);
        exit();
    }
} else {
    header('Location: ../PHP_VISTA/Login.php?error=POR FAVOR COMPLETE LOS DATOS');
        exit();
}
