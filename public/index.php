<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>PR-77 - Inicio de sesión</title>
    <?php include('../app/views/includes/headerIndex.php'); ?>

</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <img src="img/logoPR.svg" alt="logo-PR-77" width="255px">
                                        <h5 class="text-muted fw-normal mb-4">¡Bienvenido! Inicia sesión</h5>
                                        <form action="../app/controller/validation.php" method="POST"
                                            class="forms-sample">
                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label">Correo electrónico</label>
                                                <input type="email" class="form-control" id="userEmail"
                                                    placeholder="Email" name="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" id="userPassword"
                                                    autocomplete="current-password" placeholder="Password" name="pass">
                                            </div>
                                            <div class="form-check mb-3">
                                                <input type="checkbox" class="form-check-input" id="authCheck">
                                                <label class="form-check-label" for="authCheck">
                                                    Recordar sesión
                                                </label>
                                            </div>

                                            <button class="btn rounded-pill btn-outline-warning" type="submit">
                                                Iniciar sesión
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include('../app/views/includes/scriptsIndex.php'); ?>
</body>

</html>