<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Tickets de Salida | P.R 77</title>

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
                    <div class="d-flex justify-content-between my-3">
                        <h1 class="title">TICKETS DE SALIDA</h1>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group d-flex">
                                            <div class="mb-3 col-5">
                                                <label for="Select1" class="form-label">CLIENTE</label>
                                                <select class="js-example-basic-single form-select" data-width="100%">
                                                    <option selected disabled>Elige una opción</option>
                                                    <option value="0">CLIENTE</option>
                                                    <option value="1">PROVEEDOR</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-5 mx-2">
                                                <label for="Select1" class="form-label">TIPO DE MOVIMIENTO</label>
                                                <select class="js-example-basic-single form-select" data-width="100%">
                                                    <option selected disabled>Elige una opción</option>
                                                    <option value="0">CLIENTE</option>
                                                    <option value="1">PROVEEDOR</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <button type="button" class="btn btn-outline-warning mt-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search me-2">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                    Buscar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Table -->
                <div class="table-responsive pt-3 mx-1">
                    <table class="table table-sm">
                        <thead class="table-warning">
                            <tr class="text-center">
                                <th>Tickets</th>
                                <th>O. De Producción</th>
                                <th>Cliente</th>
                                <th>Responsable</th>
                                <th>Estatus</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>0001</td>
                                <td>23</td>
                                <td>Tu imprenta</td>
                                <td>CRISTIAN MORENO DÍAZ</td>
                                <td>Pendiente de Validación
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>