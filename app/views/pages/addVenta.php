<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

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
                        <h1 class="title">Nueva venta</h1>
                    </div>
                    <form action="">
                        <div class="card my-4">
                            <div class="card-body">
                                <div class="row">
                                    <!-- campo 1 -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">SELECCIONA A EL CLIENTE
                                                </label>
                                                <select class="form-select" id="Select1">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">Todas</option>
                                                    <option value="1">Pendientes de Pago</option>
                                                    <option value="2">Pagadas</option>
                                                    <option value="3">Canceladas </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- campo 2 -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">SELECCIONA EL PROYECTO </label>
                                                <select class="form-select" id="Select1">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">Todas</option>
                                                    <option value="1">Pendientes de Pago</option>
                                                    <option value="2">Pagadas</option>
                                                    <option value="3">Canceladas </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- campo 3 -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <p class="form-label">FECHA DE GENERACIÓN</p>
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
                                </div>
                            </div>
                        </div>
                        <div class="card my-4">
                            <div class="card-body">
                                <div class="row">
                                    <!-- campo 1 -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">SELECCIONA UN PRODUCTO
                                                </label>
                                                <select class="form-select" id="Select1">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">Todas</option>
                                                    <option value="1">Pendientes de Pago</option>
                                                    <option value="2">Pagadas</option>
                                                    <option value="3">Canceladas </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- campo 2 -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">
                                                    CANTIDAD
                                                </label>
                                                <input type="number" class="form-control" id="exampleInputNumber1" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- campo 3 -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">
                                                    PRECIO
                                                </label>
                                                <input type="number" class="form-control" id="exampleInputNumber1" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- campo 4 -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="mb-3 py-4">
                                                <a href="#" onclick="javascript:comprasobj.addProducto();return false;" class="text-warning">
                                                    <i data-feather="plus-circle"></i>
                                                    <span>Agregar Producto</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <table id="listadoproductos" class="table mb-0 thead-border-top-0">
                                            <thead>
                                                <tr>
                                                    <td>Prodcuto</td>
                                                    <td>Cantidad</td>
                                                    <td>Precio Unitario</td>
                                                    <td>Total</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td>Subtotal</td>
                                                    <td>
                                                        <stotal></stotal>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td>
                                                        Requiere IVA
                                                        <input onchange="javascript:comprasobj.calculateIva();" type="checkbox" name="require_iva" id="require_iva" value="1" checked="">
                                                    </td>
                                                    <td>
                                                        <iva></iva>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td>Total</td>
                                                    <td>
                                                        <total></total>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">
                                                        <label for="notas">Notas</label>
                                                        <textarea name="notas" id="notas" class="form-control"></textarea>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td colspan="5"><button id="submit_info" class="btn btn-primary">Guardar Orden de venta</button>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
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

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>