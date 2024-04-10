<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Medidas</title>
    <link rel="stylesheet" href="../CSS/TABLA.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
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
    <div class="ContendorPrincipal">
        <div class="container">
            <h2 class="mt-4 mb-4">Tabla de Medidas</h2>
            <form id="form_alumnos" action="../PHP_SERVER/RegistroAlumnos.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="Juan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" value="25">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cuello">Cuello:</label>
                        <input type="text" class="form-control" id="cuello" name="cuello" value="40">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pecho">Pecho:</label>
                        <input type="text" class="form-control" id="pecho" name="pecho" value="90">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="hombro">Hombro:</label>
                        <input type="text" class="form-control" id="hombro" name="hombro" value="50">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="largo_playera">Largo Playera:</label>
                        <input type="text" class="form-control" id="largo_playera" name="largo_playera" value="70">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="largo_manga">Largo Manga:</label>
                        <input type="text" class="form-control" id="largo_manga" name="largo_manga" value="60">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ancho_manga">Ancho Manga:</label>
                        <input type="text" class="form-control" id="ancho_manga" name="ancho_manga" value="20">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cintura">Cintura:</label>
                        <input type="text" class="form-control" id="cintura" name="cintura" value="80">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cadera">Cadera:</label>
                        <input type="text" class="form-control" id="cadera" name="cadera" value="95">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="largo_pantalon">Largo Pantalón:</label>
                        <input type="text" class="form-control" id="largo_pantalon" name="largo_pantalon" value="100">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="num_calzado">Número de Calzado:</label>
                        <input type="text" class="form-control" id="num_calzado" name="num_calzado" value="8">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="playera_entrenamiento">Playera de Entrenamiento:</label>
                        <input type="text" class="form-control" id="playera_entrenamiento" name="playera_entrenamiento" value="M">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="short_pants">Short/Pants:</label>
                        <input type="text" class="form-control" id="short_pants" name="short_pants" value="M">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="chamarra">Chamarra:</label>
                        <input type="text" class="form-control" id="chamarra" name="chamarra" value="L">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="otro">Otro:</label>
                        <input type="text" class="form-control" id="otro" name="otro" value="nada">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Agregar</button>
            </form>
        </div>
        <div class="table table-dark table-striped-columns Tabla_Alumnos">
            <h2>Tabla de Medidas</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Cuello</th>
                        <th>Pecho</th>
                        <th>Hombro</th>
                        <th>Largo Playera</th>
                        <th>Largo Manga</th>
                        <th>Ancho Manga</th>
                        <th>Cintura</th>
                        <th>Cadera</th>
                        <th>Largo Pantalón</th>
                        <th>Número de Calzado</th>
                        <th>Playera de Entrenamiento</th>
                        <th>Short/Pants</th>
                        <th>Chamarra</th>
                        <th>Otro</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <script src="../JS/RegistroAlumnos.js"></script>
</body>

</html>