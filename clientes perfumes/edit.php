<?php
include('../config/config.php');
include('cliente.php');


$p = new cliente();
$dp = mysqli_fetch_object($p->getOne($_GET['id']));

if (isset($_POST) && !empty($_POST)){
    $update= $p->update($_POST);
    if($update){
    $mensaje = '<div class="alert alert-success" role="alert"> Edicion cliente con exito </div>';
}else{
    $mensaje = '<div class="alert alert-danger" role="alert"> Eror </div>';
}
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php') ?>
    <div class='container'>
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>
        <h2 class="text-center mb-2"> Editar </h2>
        <form method="POST" enctype="multipart/form-data">

        <div class="d-grid gap-2 col-6 mx-auto">
            <div class="col">
            <input type="text" name="Nombres" id="Nombres" placeholder="Nombres del cliente" class="form-control" value="<?= $dp->Nombres ?>"/>  
            </div>
            <input type="hidden" name="id" value="<?= $dp->id ?>"/>
            <div class=col>
                <input type="text" name="Apellidos" id="Apellidos" placeholder="Apellidos del cliente" class="form-control" value="<?= $dp->Apellidos ?>"/>  
            </div>
            <div class=col>
                <input type="email" name="Email" id="Email" placeholder="Email del cliente" class="form-control" value="<?= $dp->Email ?>"/>  
            </div>
            <div class=col>
                <input type="number" name="Celular" id="Celular" placeholder="celular del cliente" class="form-control" value="<?= $dp->Celular ?>"/>  
            </div>
            <div class=col>
                <input type="text" name="Mensaje" id="Mensaje" placeholder="Mensaje" class="form-control" value="<?= $dp->Mensaje ?>"/>  
            </div>
            <button class="btn btn-info col-2 mx-auto fs-5">enviar</button>


        </div>
        </form>
    </div>
</body>
</html>