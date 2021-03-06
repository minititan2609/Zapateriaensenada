<?php
require 'db.php';
$mysql = new mysqli(SERVER,USUARIO,PASWD,BD);
if ($mysql->connect_error){
    die("No me pude conectar; error: ".$mysql->connect_errno. "interpretacion: ".$mysql->connect_error);
}
$mysql->set_charset("utf8");

$consulta = "SELECT Id_Zapatos, IMAGEN from altazapatos";
$result =$mysql->query($consulta)
?>

<!doctype>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
            integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ=="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title >Panaderia Carlitos</title>
    <link rel="shortcut icon" href="image/logo.png" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilo1.css">
    <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body >
<br>
<br>
<br>

<nav class="navbar navbar-expand-md navbar-custom fixed-top">
    <a class="navbar-brand" href="#">Zapateria Ensenada</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" >
        <img src="image/tres.png" width="40" height="40">
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link font" href="administrador.php">Inicio <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link font" href="Reportes.php">Reportes <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown font">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdown04">Dar de alta</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zapatos</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown02">
                        <a class="dropdown-item" href="AltaDama.php">Dama</a>
                        <a class="dropdown-item" href="AltaZapatos.php">Caballero</a>
                    </div>
                    <a class="dropdown-item" href="AltaRopa.php">Ropa Casual</a>
                    <a class="dropdown-item" href="AltaBatas.php">Batas</a>
                </div>

            </li>

            <li class="nav-item dropdown font">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dar de baja</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zapatos</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown02">
                        <a class="dropdown-item" href="BajasDama.php">Dama</a>
                        <a class="dropdown-item" href="BajasZapatos.php">Caballero</a>
                    </div>
                    <a class="dropdown-item" href="BajasRopa.php">Ropa Casual</a>
                    <a class="dropdown-item" href="BajasBatas.php">Batas</a>
                </div>
            </li>

            <li class="nav-item dropdown font">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modificaciones</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zapatos</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown02">
                        <a class="dropdown-item" href="ModificarDama.php">Dama</a>
                        <a class="dropdown-item" href="ModificarZapatos.php">Caballero</a>
                    </div>
                    <a class="dropdown-item" href="ModificarRopa.php">Ropa Casual</a>
                    <a class="dropdown-item" href="ModificarBatas.php">Batas</a>
                </div>
            </li>

        </ul>
    </div>
</nav>

<div class="fondo jumbotron">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <h2 class="featurette-heading">DAR DE BAJA PRODUCTOS.</h2>
        </div>
        <br>
    </div>
</div>

<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="container">
        <div class="row justify-content-center text-center">
            <?php
            foreach ($result as $row):
                ?>

                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    <br>
                    <div class="card">
                        <img src="<?= $row['IMAGEN'] ?>" alt="" class="car-top">
                    </div>
                    <hr>
                    <p><a href="eliminarZapatos.php?id=<?php echo $row["Id_Zapatos"];?>" class="btn btn-secondary"  role="button" >Dar de baja &raquo;</a></p>
                </div>
            <?php
            endforeach;
            ?>
        </div>

        <hr>
    </div>

</main>
<footer class="container">
    ?? 2021 Zapateria Ensenada. Todos los Derechos Reservados.
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>