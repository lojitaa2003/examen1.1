<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio01</title>
    <link rel="stylesheet" href="<?php echo asset('resources\css\bootstrap.min.css')?>">
    <?php include_once '../views/partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once '../views/partials/header.php'; ?> <!-- header del sitio -->
        <!-- escribir el codigo del ejercicio -->
         <div class="row justify-content-center"> 
            <div class="col-sm-12 col-lg-4">
                <div class="card border-0">
                    <h2>Datos de Contacto</h2>
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control" id="nombre" name="nombres" placeholder="nombres" require>
                        </div>

                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" require>
                        </div>

                        <div class="form-group">
                            <label for="Edad">Edad</label>
                            <input type="text" class="form-control" id="edad" name="edad" placeholder="edad" require>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
        </div>
        <?php 
                    if(isset($_POST['submit'])) {
                        $nombres = $_POST['nombres'];
                        $email = $_POST['email'];
                        $edad = $_POST['edad'];
                        
                        echo "
                        Los datos ingresados son: <br>
                         Nombres: $nombres, <br>
                         Email: $email, <br>
                         Edad: $edad
                        </div>";}
                        ?>
    </div> 
    </div>
    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>

</html>