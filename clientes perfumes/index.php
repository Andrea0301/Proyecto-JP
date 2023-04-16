<?php
include_once('../config/config.php');
include('cliente.php');

$p = new cliente();
$data = $p->getAll();

if (isset ($_GET['id']) && !empty($_GET['id'])){
   $remove = $p->delete($_GET['id']);
   if ($remove){
    header('Location: ' .ROOT.'/clientes perfumes/index.php');
   }else{
    $mensaje = '<div class="alert alert-danger" role="alert"> Error al eliminar</div>';
   }
}

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title>Lista de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php') ?>
    <div class="container">
        <h2 class="text-center mb-2">Clientes</h2>
        <div class="row">
            <?php
            while( $pt = mysqli_fetch_object($data) ){
                echo "<div class='col' >";
                echo"<div class='border border-info p-2'>";
                echo"<h5>$pt->Nombres $pt->Apellidos</h5>";
                echo"<div class='text-center'>";
                echo"<a class= 'btn btn-info col-4 mx-auto fs-56' href='".ROOT."/clientes perfumes/edit.php?id=$pt->id'>Editar</a>-<a class ='btn btn-info col-4 mx-auto fs-6' href='".ROOT."/clientes perfumes/index.php?id=$pt->id'>Eliminar<a>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
            }        
            ?>

        </div>
    </div>
</body>
</html>