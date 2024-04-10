<!DOCTYPE html>
<html lang="es">

<head class="html">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UFT-8" />
    <title>SPACE CHEER</title>
    <link rel="stylesheet" type="text/css" href="../CSS/estilosindex.css">
</head>
 
<body class="html" id="particles-js">
    <?php include('../PHP_VISTA/MENU.php');
    ?>
    <div class="contenedorLogo">
        <img src="../IMAGENES/LOGO SPACE.png" class="logo">
    </div>
    <div class="contenedorvideo">
        <video src="../IMAGENES/VIDEO.mp4" class="video" loop autoplay></video>
    </div>
    <section class="container">
        <div class="slider--wrapper">
            <div class="slider">
                <img id=img1 src="../IMAGENES/LOGO SPACE.png" alt>
                <img id=img2 src="../IMAGENES/I1.jfif" alt="">
                <img id=img3 src="../IMAGENES/I2.jfif" alt="">
                <img id=img4 src="../IMAGENES/ESPACIO.jpg" alt="">
            </div>
            <div class="slider-navegador">
                <a href="#img1"></a>
                <a href="#img2"></a>
                <a href="#img3"></a>
                <a href="#img4"></a>
            </div>

        </div>
    </section>
    <div class="divtargetas">
        <div class="targeta"><img src="../IMAGENES/I2.jfif">
            <p>DESCRIPCION......: Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <Button>Ver mas..</Button>
        </div>
        <div class="targeta"> <img class="imgt" src="../IMAGENES/I1.jfif">
            <p>DESCRIPCION......:</p>
            <Button>Ver mas..</Button>
        </div>
        <div class="targeta"> <img class="imgt" src="../IMAGENES/I1.jfif">
            <p>DESCRIPCION......:</p>
            <Button>Ver mas..</Button>
        </div>
        <div class="targeta"> <img class="imgt" src="../IMAGENES/ESPACIO.jpg">
            <p>DESCRIPCION......:</p>
            <Button>Ver mas..</Button>
        </div>
        <div class="targeta"> <img class="imgt" src="../IMAGENES/LOGO SPACE.png">
            <p>DESCRIPCION......:</p>
            <Button>Ver mas..</Button>
        </div>
    </div>


    <script src="../Particulas/particles.min.js"></script>
    <script src="../JS/OperacionesIndex.js"></script>
    <script src="../JS/PARTICULAS.JS"></script>
</body>

</html>