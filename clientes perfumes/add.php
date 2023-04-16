<?php
include_once('../config/config.php');
include('cliente.php');

if ( isset($_POST) && !empty($_POST) ){
    $p = new cliente();

    $save = $p->save($_POST);
    if ($save){
        $mensaje = '<div class="alert alert-sucess"> Enviado</div>';
    }else{
        $mensaje = '<div class="alert alert-danger"> Error de envio</div>';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../src/css/style.css">

</head>
<body>
<nav>
            <a href="./index.html"> <img
                    src="../src/img/diseno-logotipo-jp-carta-diseno-logotipo-jp-concepto-onda-agua_754537-490.avif"
                    class="img-logo" alt=""> </a>
            <ul>
                <li> <a href="../index.html"> Inicio </a> </li>
                <li><a href="../aromas/aromas.html"> Aromas</a> </li>
                <li> <a href="../fragancias.html"> Fragancias </a> </li>
                <li> <a href="../clientes perfumes/add.php"> Contactenos </a> </li>
            </ul>
        </nav>
    <div class='container'>
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>
        <h2 class="text-center mb-2"> Contacto </h2>
        <form method="POST" enctype="multipart/form-data">

        <div class="d-grid gap-2 col-6 mx-auto">
        <div class=col>
                <input type="text" name="Nombres" id="Nombres" placeholder="Nombres del cliente" class="form-control"/>  
            </div>
            <div class=col>
                <input type="text" name="Apellidos" id="Apellidos" placeholder="Apellidos del cliente" class="form-control"/>  
            </div>
            <div class=col>
                <input type="email" name="Email" id="Email" placeholder="Email del cliente" class="form-control"/>  
            </div>
            <div class=col>
                <input type="number" name="Celular" id="Celular" placeholder="celular del cliente" class="form-control"/>  
            </div>
            <div class=col>
                <input type="text" name="Mensaje" id="Mensaje" placeholder="Mensaje" class="form-control"/>  
            </div>
            <button class="btn btn-info col-4 mx-auto fs-4" >enviar</button>

        </div>

    
        </form>
    </div>
    <footer>
        <address>
            <h1>DERECHOS RESERVADOS JP FRAGANCIAS.COM </h1>
        </address>
        <figure>
            <img src="../src/img/redes sociales.jpg" alt="">
        </figure>
        <div>
            <h3>
                <a href="#">Facebook</a>-
                <a href="#">Twitter</a>-
                <a href="#">Instagram</a>-
                <p>
                <h1>NUESTRAS REDES SOCIALES</h1>
                </p>
            </h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>