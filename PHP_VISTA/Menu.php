<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS/MENU_NAV.css">
</head>


<body>
    <nav id="divMenu" class="PanelMenu">
        <header>
            <div class="TextoDeImagen">
                <span class="ImagenSpanPM">
                    <img src="../IMAGENES/LOGO SPACE.png" alt="logo">
                </span>
                <div class="divTextologo">
                    <span class="TextoLogo">
                        SPACE CHEER
                        Imagina tu espacio
                        Crea tu mundo
                    </span>
                </div>
            </div>
            <i class='bx bx-chevron-right flecha' onclick="Mostrar()"></i>
        </header>
        <div class="Barra-Menu">
            <div class="menu">
                <ul class="menu-links">
                    <!-- /*ELEMENTO DE LISTA(LI) INICIO*/  -->
                    <li class="li-links" id="Inicio">
                        <a href="../PHP_VISTA/index.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="Texto">
                                INICIO
                            </span>
                        </a>
                    </li>
                    <!-- /*ELEMENTO DE LISTA(LI) PERFIL*/  -->
                    <li class="li-links" id="Perfil">
                        <a href="../PHP_VISTA/Login.php">
                            <i class='bx bxs-user icon'></i>
                            <span class="Texto">
                                PERFIL
                            </span>
                        </a>
                    </li>
                    <!-- /*ELEMENTO DE LISTA(LI) PROMOCIONES*/  -->
                    <li class="li-links">
                        <a href="#">
                            <i class='bx bxs-purchase-tag-alt icon'></i>
                            <span class="Texto">
                                PROMOCIONES
                            </span>
                        </a>
                    </li>
                    <!-- /*ELEMENTO DE LISTA(LI) EQUIPO*/ -->
                    <li class="li-links" id="Equipo">
                        <a href="#">
                            <i class='bx bxs-trophy icon'></i>
                            <span class="Texto">
                                EQUIPO
                            </span>
                        </a>
                    </li>
                    <!-- /*ELEMENTO DE LISTA(LI) SALIR*/ -->
                    <li class="li-links" id="Salir">
                        <a href="../PHP_VISTA/index.php">
                            <i class='bx bxs-log-out icon'></i>
                            <span class="Texto">
                                SALIR..
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="../JS/MENU_NAV.js"></script>
    <script>
        function borrarDatosSesion() {
            
            <?php
            // Eliminar variables de sesión
            unset($_SESSION['nombre_entrenador']);
            unset($_SESSION['telefono_entrenador']);
            unset($_SESSION['equipo_entrenador']);
            unset($_SESSION['correo_entrenador']);
            unset($_SESSION['direccion_entrenador']);
            unset($_SESSION['ciudad_entrenador']);
            unset($_SESSION['codigo_postal_entrenador']);
            unset($_SESSION['usuario_entrenador']);
            unset($_SESSION['contraseña_entrenador']);
            ?>
        }
    </script>

</body>

</html>