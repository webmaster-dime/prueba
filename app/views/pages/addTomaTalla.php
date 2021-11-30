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

    <title>Nueva Venta | P.R 77</title>

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
                        <h1 class="title">
                            REGISTRO DE TOMA DE TALLAS
                        </h1>
                    </div>
                    <form action="">
                        <div class="card my-4">
                            <div class="card-body">
                                <div class="row">
                                    <!--! Seleccion cliente -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1"
                                                    class="form-label d-flex justify-content-between">
                                                    <p>
                                                        SELECCIONA EL CLIENTE
                                                    </p>
                                                    <a target="_blank" href="../pages/addCliente.php" class="text-black"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-original-title="Registrar cliente">
                                                        <h3><i class="mdi mdi-plus-circle-outline"></i></h3>
                                                    </a>
                                                </label>
                                                <select class="js-example-basic-single form-select" data-width="100%">
                                                    <option selected disabled>Elige un cliente</option>
                                                    <option value="">option 1</option>
                                                    <option value=""> option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--! Fecha  -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <p class="form-label">FECHA DE PROYECTO</p>
                                                <div class="input-group date datepicker" id="datePickerExample">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-text input-group-addon"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-calendar">
                                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                                            </rect>
                                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Foto -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">
                                                    VALIDACIÓN POR FOTOGRAFÍA
                                                </label>
                                                <br>
                                                <center>
                                                    <input type="checkbox" class="form-check-input mt-1"
                                                        id="checkDefault">
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Desc -->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">
                                                    DESCRIPCIÓN
                                                </label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Prendas -->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1"
                                                    class="form-label d-flex justify-content-between">
                                                    <p>
                                                        PRENDAS
                                                    </p>
                                                    <a target="_blank" href="../pages/addProducto.php"
                                                        class="text-black" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        data-bs-original-title="Registrar prenda">
                                                        <h3><i class="mdi mdi-plus-circle-outline"></i></h3>
                                                    </a>
                                                </label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Grupos -->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1"
                                                    class="form-label d-flex justify-content-between">
                                                    <p>
                                                        GRUPOS
                                                    </p>
                                                    <a target="_blank" href="../pages/addGrupo.php" class="text-black"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-original-title="Registrar grupo">
                                                        <h3><i class="mdi mdi-plus-circle-outline"></i></h3>
                                                    </a>
                                                </label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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