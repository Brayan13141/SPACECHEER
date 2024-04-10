<?php
if (
    isset(
        $_POST['id_entrenador'],
        $_POST['nombre'],
        $_POST['edad'],
        $_POST['cuello'],
        $_POST['pecho'],
        $_POST['hombro'],
        $_POST['largo_playera'],
        $_POST['largo_manga'],
        $_POST['ancho_manga'],
        $_POST['cintura'],
        $_POST['cadera'],
        $_POST['largo_pantalon'],
        $_POST['num_calzado'],
        $_POST['playera_entrenamiento'],
        $_POST['short_pants'],
        $_POST['chamarra']
    )
    && !empty($_POST['id_entrenador']) && !empty($_POST['nombre']) && !empty($_POST['edad']) && !empty($_POST['cuello'])
    && !empty($_POST['pecho']) && !empty($_POST['hombro']) && !empty($_POST['largo_playera']) && !empty($_POST['largo_manga'])
    && !empty($_POST['ancho_manga']) && !empty($_POST['cintura']) && !empty($_POST['cadera']) && !empty($_POST['largo_pantalon'])
    && !empty($_POST['num_calzado']) && !empty($_POST['playera_entrenamiento']) && !empty($_POST['short_pants'])
    && !empty($_POST['chamarra'])
) {
    
} else {
    header("Location: ../PHP_VISTA/AlumnosRegistro.php");
   // header("Location: ../PHP_VISTA/AlumnosRegistro.php?error =Por+favor,+completa+todos+los+campos.");
}
