<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Nuevo Banco | P.R 77</title>

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
                        <h1 class="page-title">REGISTRO DE ORDEN DE PRODUCCIÓN
                        </h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <form class="cmxform" id="signupForm" method="get" action="#">
                                            <fieldset class="row">
                                                <!--! Tipo de cuenta  -->
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlSelect1" class="form-label">
                                                        NÚMERO
                                                    </label>
                                                    <input type="text" name="number" id="number" class="form-control" placeholder="Escribe el No. de Orden de Producción" required title="Campo necesario">
                                                </div>
                                                <!--! SELECCIONA EL CLIENTE  -->
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlSelect1" class="form-label d-flex justify-content-between">
                                                        SELECCIONA EL CLIENTE
                                                        <a target="_blank" href="../pages/addCliente.php" class="text-black" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar Cliente">
                                                            <h3><i class="mdi mdi-plus-circle-outline"></i></h3>
                                                        </a>
                                                    </label>
                                                    <select class="js-example-basic-single form-select" data-width="100%">
                                                        <option disabled selected>Elige una opcion.</option>
                                                        <option value="0">Cliente 1</option>
                                                    </select>
                                                </div>
                                                <!--! Fecha -->
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlSelect1" class="form-label">
                                                        FECHA DE ENTREGA
                                                    </label>
                                                    <div class="input-group date datepicker" id="datePickerExample">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text input-group-addon">
                                                            <i data-feather="calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCIÓN</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Agrega una descripción"></textarea>
                                                </div>
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlTextarea1" class="form-label">
                                                        ADJUNTAR ARCHIVO EN FORMATO PDF
                                                    </label>
                                                    <input type="file" id="myDropify" />
                                                </div>
                                            </fieldset>
                                            <!-- Botones -->
                                            <div class="form-group text-center">
                                                <button class="btn btn-warning btn-send mx-2" type="submit" value="Submit">REGISTRAR</button>
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