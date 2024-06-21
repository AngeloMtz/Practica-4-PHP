<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="bg-dark p-5 rounded-3 text-center text-white">
        <form>
            <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
                $altura=$_POST['txtAltura'];
                $edad=$_POST['txtEdad'];
                $condicion=$_POST['txtCondicion'];
                    if ($altura >= 120 && $edad >= 16 && $condicion == 'si') 
                    {
                        echo '<div class="mt-3"><h4 class="text-warning">¡Muy Bien! Aquí está tu ticket</h4><br>
                        <img src="recursos/ticket.jpg" alt="Ticket" class="img-fluid" style="width:600px;height:auto;"></div>';
                    } else 
                    {
                        echo '<div class="mt-3"><h4 class="text-warning">¡Lo sentimos! No podemos proporcionarle un ticket</h4></div>';
                    }
                } 
            ?>
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
