<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Log In</title>
</head>

<body class="vh-100">
    <main class="h-100 d-flex align-items-center">
        <div class="bg-image"></div>
        <section class="container col-md-5 bg-container text-white">
            <h2 class="mb-3 align-center">Inicia Sesión para obtener más beneficios</h2>
            <form id="login--form">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input required type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <input required type="password" class="form-control" id="pass">
                    <div id="emailHelp" class="form-text"><a class="text-white" href="/cryptoRestaurant/views/password-recovery.php">¿Olvidates tu contraseña?</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary block">Ingresar</button>
            </form>
            <button id="register-button" class="btn btn-light block">Registrarse</button>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script type="module" src="../assets/js/login.js"></script>
</body>

</html>