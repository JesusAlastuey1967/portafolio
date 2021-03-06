<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name=”description” content=”Digitalizacion Empresas” />
    <meta name=”description” content=”Digitalizacion Empresas” />
    <meta name=”distribution” content=”global” />
    <meta name="keywords" content="Power BI; Power Apps; Power Automate; Microsoft Power Platform; Zaragoza">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Personal</title>
    <link rel="stylesheet" type="text/css" href="acceso.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/Logo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antic&display=swap" rel="stylesheet">    
</head>

<body>

<div class="container col-11">
        <div class="row">
                 <div class="foto d-none d-md-block col-md-6 my-3 ml-5" >         
                        <img src="img/Fondo_Oficina.jpg" alt=""  >
                </div>
        
                <div class="formulario col-12 col-md-5 my-3">
                        <form method="POST"><br>
                                <div class="text-right">
                                <img src="img/Logo.jpg" width="80" alt="" >
                                </div><br>
                                <h1>¡Bienvenido a mi WEB!</h1><br>
                                <input type="text" name="name" placeholder="Nombre completo" style="margin-bottom: 15px">
                                <input type="email" name="email" placeholder="Email" style="margin-bottom: 15px">
                                <input type="submit" name="register"  value="Acceso" class="btn btn-outline-secondary w-100">
                                <br><br><br>
                                <p class="text-center text-muted"><small>iniciar sesión con:</small></p>
                                <div class="row ">
                                        <div class="col-6">
                                                <button type="button" class="btn btn-outline-primary w-100">
                                                <div class="row align-items-center">
                                                <div class="col-2 d-none d-md-block">
                                                        <img src="img/Facebook.png" width="28" alt="">
                                                        </div>
                                                        <div class="col-8 text-center" style="font-size:14px">
                                                        Facebook
                                                        </div>
                                                </div>
                                                </button>
                                        </div>
                                        <div class="col-6">
                                                <button type="button" class="btn btn-outline-danger w-100">
                                                <div class="row align-items-center">
                                                <div class="col-2 d-none d-md-block">
                                                        <img src="img/google.png" width="28" alt="">
                                                        </div>
                                                        <div class="col-8 text-center" style="font-size:14px">
                                                        Google
                                                        </div>
                                                </div>
                                                </button>
                                        </div>
                                </div><br><br>
                        </form>
                        <?php 
        include("registrar.php");
        ?>             
                </div> 
         </div>         
</div>

</body>

<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</html>