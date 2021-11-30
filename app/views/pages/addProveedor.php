<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Nuevo Proveedor | P.R 77</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <?php include('../includes/header.php') ?>

</head>
<!--  -->

<body class="sidebar-dark">
    <div class="main-wrapper">

        <!--! SideBar -->
        <?php include('../includes/sidebar.php') ?>

        <div class="page-wrapper">
            <!--! TopBar -->
            <?php include('../includes/topbar.php') ?>

            <!-- ==========================================  -->
            <!-- ================ Content =================  -->
            <!-- ==========================================  -->
            <div class="page-content">
                <div class="row">
                    <!-- Subtitle -->
                    <div class="d-flex justify-content-between">
                        <h1 class="page-title">Agregar Proveedor</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <form class="cmxform" id="signupForm" method="get" action="#">
                                            <fieldset class="row">
                                                <!--! Razón Social  -->
                                                <div class="mb-3 col-6">
                                                    <label for="name" aria-invalid="true"> Razón Social
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="La razón social debe tener al menos 2 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <select class="form-select" id="razonSocial" name="razonSocial">
                                                        <option selected="" disabled="">Elige una opción</option>
                                                        <option value="0">Todas</option>
                                                        <option value="1">Pendientes de Pago</option>
                                                        <option value="2">Pagadas</option>
                                                        <option value="3">Canceladas </option>
                                                    </select>
                                                </div>
                                                <!--! RFC -->
                                                <div class="mb-3 col-6">
                                                    <label for="name"> RFC
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="El campo debe tener al menos de 12 a 13 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input pattern=".{12,13}"
                                                        title="El campo debe tener al menos de 12 a 13 letras"
                                                        onchange="javascript:helpers.cleanText(this);"
                                                        class="form-control uppercaseInput " type="text" name="rfc"
                                                        id="rfc" placeholder="RFC" value="">
                                                </div>
                                                <!--! Contacto  -->
                                                <div class="mb-3 col-6">
                                                    <label for="name"> Contacto
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="El campo debe tener al menos de 2 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input class="form-control" id="contacto" name="contacto"
                                                        type="text">
                                                </div>
                                                <!--! em@il  -->
                                                <div class="mb-3 col-6">
                                                    <label for="name"> email
                                                        <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input class="form-control" id="email" name="email" type="email">
                                                </div>
                                                <!--! tel 1  -->
                                                <div class="mb-3 col-6">
                                                    <label for="name"> TELÉFONO
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="El campo debe tener al menos de 7 números">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input id="tel" class="form-control" name="tel" type="number">
                                                </div>
                                                <!--! tel 2 -->
                                                <div class="mb-3 col-6">
                                                    <label for="name"> TELÉFONO SECUNDARIO </label>
                                                    <input id="tel-2" class="form-control" type="number">
                                                </div>
                                                <!--! Tipo -->
                                                <div class="mb-3 col-6">
                                                    <label for=""> TIPO DE PROVEEDOR</label>
                                                    <select class="form-select" name="tipo">
                                                        <option selected="" disabled="">Elige una opción</option>
                                                        <option value="0">INTERNO</option>
                                                        <option value="1">EXTERNO</option>
                                                    </select>
                                                </div>
                                                <!--! obs -->
                                                <div class="mb-3 col-6">
                                                    <label for="name"> OBSERVACIONES </label>
                                                    <textarea id="maxlength-textarea" class="form-control"
                                                        maxlength="100" rows="2" placeholder="Observaciones"></textarea>
                                                </div>
                                            </fieldset>
                                            <div class="form-group text-center">
                                                <button class="btn btn-warning btn-send mx-2" type="submit"
                                                    value="Submit">REGISTRAR</button>
                                                <a href="#" class="btn btn-outline-danger">CANCELAR</a>
                                            </div>
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

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>