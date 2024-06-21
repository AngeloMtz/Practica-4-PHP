<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="bg-dark p-5 rounded-3 text-center text-white">
        <h2 class="text-warning">Llene los siguientes datos</h2>
        <form method="POST"  class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nombre" class="form-label">Correo:</label>
                <input type="email" class="form-control" id="nombre" name="txtNombre"  required>
                <div class="invalid-feedback">
                    Ingrese un correo
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="txtPass" required>
                <div class="invalid-feedback">
                    Ingrese una contraseña
                </div>
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password2" name="txtPass2" required>
                <div class="invalid-feedback">
                    Ingrese de nuevo su contraseña
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Validar</button>

            <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
                $pass=$_POST['txtPass'];
                $passT=$_POST['txtPass2'];
                    if ($pass == $passT) 
                    {
                        echo '<div class="mt-3"><h4 class="text-warning">Contraseña Válida</h4><br></div>';
                    } else 
                    {
                        echo '<div class="mt-3"><h4 class="text-warning">Contraseña Inválida</h4></div>';
                    }
                } 
            ?>
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>
</html>