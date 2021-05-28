<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Resitro de usuarios</title>
</head>

<body class="vh-100">
    <main class="h-100 d-flex align-items-center">
        <div class="bg-image"></div>
        <section class="container col-md-5 bg-container text-white">
            <h2 class="mb-3 align-center">Registrate para obtener más beneficios</h2>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="lastname">
                </div>
                <div class="col-md-6">
                    <label for="id" class="form-label">Cedula</label>
                    <input type="text" class="form-control" id="id">
                </div>
                <div class="col-md-6">
                    <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="birthdate">
                </div>
                <div class="col-md-3">
                    <label for="phone" class="form-label">Celular</label>
                    <input type="number" class="form-control" id="phone">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col-md-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="col-md-12">
                    <input type="checkbox" class="form-check-input" id="terms">
                    <label for="terms" class="form-check-label">Aceptas los términos y condiciones, políticas de seguridad y
                        tratamiento de datos</label>
                </div>
                <button type="submit" class="btn btn-primary block">Ingresar</button>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script type="module" src="../assets/js/login.js"></script>
</body>

</html>