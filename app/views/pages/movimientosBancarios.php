<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Movimientos Bancarios | P.R 77</title>

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
                        <h1 class="title">MOVIMIENTOS BANCARIOS</h1>
                    </div>
                    <form action="" class="cmxform" id="movBank">
                        <fieldset>
                            <div class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- campo 1 -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="cuenta" class="form-label">
                                                        CUENTA ORIGEN
                                                    </label>
                                                    <select class="js-example-basic-single form-select" data-width="100%" id="cuenta" name="cuenta">
                                                        <option selected disabled>SELECCIONA UNA CUENTA</option>
                                                        <option value="1">BANCO AZTECA</option>
                                                        <option value="2">BBVA</option>
                                                        <option value="3">BANORTE</option>
                                                        <option value="4">NUEVA</option>
                                                        <option value="5">OTRA NUEVA CUENTA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- campo 2 -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="Select1" class="form-label">
                                                        TIPO DE MOVIMIENTO
                                                    </label>
                                                    <select class="js-example-basic-single form-select" data-width="100%" name="tipo">
                                                        <option selected disabled>Elige una opción</option>
                                                        <option value="1" data-select2-id="32">INGRESO</option>
                                                        <option value="2" data-select2-id="33">EGRESO</option>
                                                        <option value="3" data-select2-id="34">TRANSFERIR A OTRA CUENTA
                                                        </option>
                                                        <option value="4" data-select2-id="35">PAGO A PROVEEDORES
                                                        </option>
                                                        <option value="5" data-select2-id="36">PAGO DE CLIENTES</option>
                                                        <option value="6" data-select2-id="37">TRANSFERENCIA A CUENTAS
                                                            EXTERNAS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- campo 3 -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="Select3" class="form-label">
                                                        CUENTAS CONTABLES
                                                    </label>
                                                    <select class="js-example-basic-single form-select" data-width="100%" id="Select3" name="cuentaContable">
                                                        <option selected disabled>Elige una opción</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Importe -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="Importe" class="form-label">
                                                        IMPORTE
                                                    </label>
                                                    <input type="text" class="form-control" id="Importe" placeholder="IMPORTE" required title="Campo Necesario">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fecha -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="date" class="form-label">
                                                        FECHA DEL MOVIMIENTO
                                                    </label>
                                                    <div class="input-group date datepicker" id="datePickerExample">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-text input-group-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                                                </rect>
                                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                                            </svg></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Concepto -->
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="concepto" class="form-label">
                                                        CONCEPTO
                                                    </label>
                                                    <input type="text" class="form-control" id="concepto" placeholder="Concepto" name="concept">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nota -->
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="Select1" class="form-label">
                                                        NOTAS
                                                    </label>
                                                    <textarea id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="2" placeholder="Notas."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-warning btn-send mx-2" type="submit" value="Submit">REGISTRAR</button>
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