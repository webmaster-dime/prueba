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
                        <h1 class="page-title">REGISTRO DE PRESUPUESTO </h1>
                    </div>
                    <form action="" class="cmxform" id="regPresupuesto">
                        <fieldset>
                            <div class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Pedido -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="cuenta" class="form-label">
                                                        NÚMERO DE PEDIDO
                                                    </label>
                                                    <input type="text" class="form-control" id="" name="cuenta"
                                                        placeholder="Escribe el No. de orden de producción">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- campo 2 -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="Select1" class="form-label">
                                                        SELECCIONA EL CLIENTE
                                                    </label>
                                                    <select class="js-example-basic-single form-select"
                                                        data-width="100%" name="tipo">
                                                        <option selected disabled>Elige una opción</option>
                                                        <option value="1" data-select2-id="32">cliente 1</option>
                                                        <option value="2" data-select2-id="33">cliente 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fecha -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="date" class="form-label">
                                                        FECHA DE PEDIDO
                                                    </label>
                                                    <div class="input-group date datepicker" id="datePickerExample">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text input-group-addon">
                                                            <i data-feather="calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nota -->
                                        <div class="col-8">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="Select1" class="form-label">
                                                        NOTAS
                                                    </label>
                                                    <textarea id="maxlength-textarea" class="form-control"
                                                        id="defaultconfig-4" maxlength="100" rows="2"
                                                        placeholder="Notas."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fecha -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="date" class="form-label">
                                                        FECHA DE PEDIDO
                                                    </label>
                                                    <div class="input-group date datepicker" id="datePickerExample2">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text input-group-addon">
                                                            <i data-feather="calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-warning btn-send mx-2" type="submit"
                                            value="Submit">REGISTRAR</button>
                                        <a href="#" class="btn btn-outline-danger">CANCELAR</a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>