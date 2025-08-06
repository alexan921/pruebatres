<?php 
session_start();
require_once("config/database.php");
$config = new Database ();
$con = $config->conectar();

?>

<?php
if (isset($_POST["btn2"]))
{
    $DOCUMENTO=$_POST["documento"];
    $NOMBRE=$_POST["Nombre"];
    $APELLIDO=$_POST["Apellido"];
    $TELEFONO=$_POST["Telefono"];
    $CORREO=$_POST["Correo"];
    $CONTRASEÑA=$_POST["c2"];
    $sql = $con->prepare("INSERT INTO `propietarios y compras` 
        (DOCUMENTO, NOMBRE, APELLIDO, TELEFONO, CORREO, CONTRASEÑA) 
        VALUES (?, ?, ?, ?, ?, ?)");

    $sql->execute([$DOCUMENTO, $NOMBRE, $APELLIDO, $TELEFONO, $CORREO, $CONTRASEÑA]);

    echo "<script>alert('Registro exitoso');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
        <meta charset="utf-8">
    <title>Registro</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/LOGO.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> 
    
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container" align="center">
        <fieldset class="mb-4">
            <legend><i class="fas fa-user" ></i> &nbsp; REGISTRARSE</legend>
                <form role="form" class="form-horizontal" method="post" name="form1" id="form1" autocomplete="off">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="col-12 col-md-9">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="cargo" class="nav-link"> &nbsp;<strong>DOCUMENTO </strong></label>
                                            <input type="int" id="documento" class="form-control Input" name="documento">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-12 col-md-6 col-lg-6">
                        <div class="col-12 col-md-9">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="cargo" class="nav-link"> &nbsp;<strong>NOMBRE </strong></label>
                                            <input type="text" id="Nombre" class="form-control Input" name="Nombre">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="col-12 col-md-9">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="cargo" class="nav-link"> &nbsp;<strong>APELLIDO </strong></label>
                                            <input type="text" id="Apellido" class="form-control Input" name="Apellido">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="col-12 col-md-9">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="cargo" class="nav-link"> &nbsp;<strong>TELEFONO </strong></label>
                                            <input type="text" id="Telefono" class="form-control Input" name="Telefono">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="col-12 col-md-9">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="cargo" class="nav-link"> &nbsp;<strong>CORREO </strong></label>
                                            <input type="text" id="Correo" class="form-control Input" name="Correo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="col-12 col-md-9">
                            <div class="form-outline mb-4">
                                <div class="mb-4">
                                    <div class="form-outline mb-4">
                                        <label for="cargo" class="nav-link"> &nbsp;<strong>CONTRASEÑA </strong></label>
                                        <input type="password" id="c2" class="form-control Input" name="c2">   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" name="btn2" id="inicio" value="   Registrarse   " class="btn btn-info center-block"/>
                    </div><br>
    </div>
</body>
</html>