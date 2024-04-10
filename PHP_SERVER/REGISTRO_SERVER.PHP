 <?php
  // Incluir la conexión a la base de datos
  require("../PHP_SERVER/CONEXION.PHP");
  // Función para sanitizar la entrada del usuario
  function sanitizar($input)
  {
    $input = trim($input);
    $input = htmlspecialchars($input);
    $input = stripslashes($input);
    return $input;
  }

  if (
    isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['telefono']) && !empty($_POST['telefono']) &&
    isset($_POST['equipo']) && !empty($_POST['equipo']) &&
    isset($_POST['correo']) && !empty($_POST['correo']) &&
    isset($_POST['direccion']) && !empty($_POST['direccion']) &&
    isset($_POST['ciudad']) && !empty($_POST['ciudad']) &&
    isset($_POST['cp']) && !empty($_POST['cp'])&&
    isset($_POST['Usuario']) && !empty($_POST['Usuario'])&&
    isset($_POST['Contraseña']) && !empty($_POST['Contraseña'])
  ) {
    $nombre = sanitizar($_POST['nombre']);
    $telefono = sanitizar($_POST['telefono']);
    $equipo = sanitizar($_POST['equipo']);
    $correo = sanitizar($_POST['correo']);
    $direccion = sanitizar($_POST['direccion']);
    $ciudad = sanitizar($_POST['ciudad']);
    $cp = sanitizar($_POST['cp']);
    $Usuario = sanitizar($_POST['Usuario']);
    $Contraseña = sanitizar($_POST['Contraseña']);

    try {
      $sql = "SELECT * FROM entrenadores WHERE equipo = '$equipo'";
      $result = $link->query($sql);
      if (mysqli_num_rows($result) === 0) {
        $insert_query = "INSERT INTO `cityxtreme`.`entrenadores`
        (`id`, `nombre`, `telefono`, `equipo`, `correo`, `direccion`, `ciudad`, `codigo_postal`,
        `usuario`,`contraseña`)
        VALUES
        (NULL, '$nombre', '$telefono', '$equipo', '$correo', '$direccion', '$ciudad', '$cp',
        '$Usuario', '$Contraseña')";

        if ($link->query($insert_query)) {

          header("Location:  ../PHP_VISTA/EntrenadorRegistro.php?error=El entrenador se ha registrado correctamente.");

        } else {
     
          header("Location:  ../PHP_VISTA/EntrenadorRegistro.php?error=Error al registrar el entrenador:");    
        }
      } else {
        header("Location: ../PHP_VISTA/EntrenadorRegistro.php?error=Este entrenador ya existe.");
        
    
      }
    } catch (Exception) { 
      header("Location:  ../PHP_VISTA/EntrenadorRegistro.php?error="."ERROR: " . $Exception . "SQL" . $sql);
    
    
    }
  } else {
    header("Location: ../PHP_VISTA/EntrenadorRegistro.php?error=Por favor, completa todos los campos.");
    
  }

  ?>
