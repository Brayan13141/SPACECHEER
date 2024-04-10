<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Entrenadores</title>
  <link rel="stylesheet" href="../CSS/RegistroEntrenador.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body id="particles-js">
  <?php
  if (isset($_GET['error'])) {
    $message = $_GET['error'];
    echo "<script>
      $(document).ready(function() {
          $('#modalError').modal('show');
          $('#errorText').text('$message');
      });
    </script>";

  ?>
    <!-- Modal de Error -->
    <div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="modalErrorLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            </button>
          </div>
          <div class="modal-body">
            <p id="errorText"><?php echo isset($message) ? $message : ''; ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <div class="container"> 
    <h2>Registro de Entrenadores</h2>
    <form action="../PHP_SERVER/REGISTRO_SERVER.PHP" method="POST" id="Formulario_entrenadores">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
      </div>
      <div class="form-group">
        <label for="telefono">Número de Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">
      </div>
      <div class="form-group">
        <label for="equipo">Equipo:</label>
        <input type="text" id="equipo" name="equipo">
      </div>
      <div class="form-group">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo">
      </div>
      <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion">
      </div>
      <div class="form-group">
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad">
      </div>
      <div class="form-group">
        <label for="cp">Código Postal:</label>
        <input type="text" id="cp" name="cp">
      </div>
      <div class="form-group">
        <label for="Usuario">Usuario:</label>
        <input type="text" id="Usuario" name="Usuario">
      </div>
      <div class="form-group">
        <label for="Contraseña">Contraseña:</label>
        <input type="password" id="Contraseña" name="Contraseña" class="form-control" aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
          <label for="">
            Tu contraseña debe tener al menos 8 caracteres y contener una combinación de letras mayúsculas, minúsculas, dígitos y caracteres
          </label>
        </div>
      </div>
      <div class="botones">
        <button type="submit" class="btn-submit">REGISTRARSE</button>
        <button type="button" class="btn btn-primary" onclick="location.href='./Login.php'">ENTRAR</button>
      </div>
    </form>

  </div>

  <script src="../Particulas/particles.min.js"></script>
  <script src="../JS/RegistroEntrenador.js"></script>
  <script src="../JS/PARTICULAS.JS"></script>
</body>

</html>