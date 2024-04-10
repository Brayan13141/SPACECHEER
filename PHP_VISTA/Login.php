<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="../CSS/Login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
  <?php include('../PHP_VISTA/Menu.php'); ?>
    <div class="Panelp" id="particles-js">
        <div class="row">
            <div class="col-md">
                <h2 class="mb-4">Inicio de Sesión</h2>
                <form id="loginForm" action="../PHP_SERVER/LOGIN_SERVER.PHP" method="POST">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario">
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña">

                        <a id="Regis" onclick="location.href='./EntrenadorRegistro.php'">¿No tienes cuenta? Registrate</a>
                    </div>
                    <button id="btnIniciar" type="submit" class="btn btn-primary" data-bs-toggle="modal">Iniciar Sesión</button>

                </form>
            </div>
        </div>

    </div>
    <?php
    if (isset($_GET['error'])) {
    ?>
        <div id="ModalError" class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="LabelModal"><?php
                                            if (isset($_GET['error'])) {
                                                echo $_GET['error'];
                                            } else {
                                                echo "";
                                            }
                                            ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <script src="../JS/Login.js"></script>
    <script src="../Particulas/particles.min.js"></script>
    <script src="../JS/PARTICULAS.JS"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>