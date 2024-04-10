<?php session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/PERFIL1.css">
    <title>Document</title>
</head>

<body id="particles-js">
    <div class="contenedorPrincipal">
        <div class="Info_Img">
            <div id="Info" class="col-md-6">

                <h4 class="fw-bold" id="nombre_entrenador">Nombre: <?php echo isset($_SESSION['nombre_entrenador']) ? $_SESSION['nombre_entrenador'] : ''; ?></h4>
            
                <h4 class="fw-bold" id="telefono_entrenador">Telefono: <?php echo isset($_SESSION['telefono_entrenador']) ? $_SESSION['telefono_entrenador'] : ''; ?></h4>
               
                <h4 class="fw-bold" id="equipo_entrenador">Equipo: <?php echo isset($_SESSION['equipo_entrenador']) ? $_SESSION['equipo_entrenador'] : ''; ?></h4>
                
                <h4 class="fw-bold" id="correo_entrenador">Correo: <?php echo isset($_SESSION['correo_entrenador']) ? $_SESSION['correo_entrenador'] : ''; ?></h4>
               
                <h4 class="fw-bold" id="direccion_entrenador">Direccion: <?php echo isset($_SESSION['direccion_entrenador']) ? $_SESSION['direccion_entrenador'] : ''; ?></h4>
                
                <h4 class="fw-bold" id="ciudad_entrenador">Ciudad: <?php echo isset($_SESSION['ciudad_entrenador']) ? $_SESSION['ciudad_entrenador'] : ''; ?></h4>
             
                <h4 class="fw-bold" id="codigo_postal_entrenador">Codigo postal<?php echo isset($_SESSION['codigo_postal_entrenador']) ? $_SESSION['codigo_postal_entrenador'] : ''; ?></h4>
                
                <h4 class="fw-bold" id="usuario_entrenador">Usuario: <?php echo isset($_SESSION['usuario_entrenador']) ? $_SESSION['usuario_entrenador'] : ''; ?></h4>
                

            </div>
            <div class="Img col-md-6">
                <span>
                    <img class="Img" src="../IMAGENES/LOGO_SPACE.png" alt="">
                </span>
            </div>
        </div>
        <div class="divBoton">
            <button id="btn" class="btn btn-success btn-lg" onclick="window.location.href='../PHP_VISTA/AlumnosRegistro.php'">REGISTRO DE ALUMNOS</button>
        </div>
    </div>
    <script src="../Particulas/particles.min.js"></script>
    <script src="../JS/PARTICULAS.JS"></script>

    <?php include('../PHP_VISTA/Menu.php'); ?>
</body>

</html>