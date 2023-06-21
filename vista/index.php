<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="public/bootstrap5/css/bootstrap.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    otra opción
    <title>BUENVENIDO A SUJALITO</title>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="navId" role="tablist">
        <li class="nav-item">
            <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#tab2Id">Action</a>
                <a class="dropdown-item" href="#tab3Id">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tab4Id">Action</a>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
        </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel">as</div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel">asa</div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel">asa</div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel">ass</div>
    </div>
    
    <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
    <script>
        var triggerEl = document.querySelector('#navId a')
        bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
    </script>
    


    <h1>BIENVENIDO A SUJALITO</h1>
    <h2>Por favor, inicie sesión o regístrese</h2>
    <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">idfsdfnicio</a>
    <a href="login.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Iniciar sesión</a>
    <a href="registro.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Registrarse</a>
    <a href="index.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Salir</a>
    <br>


</body>
</html>