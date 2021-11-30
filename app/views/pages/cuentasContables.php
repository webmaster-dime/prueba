<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Cuentas Contables | P.R 77</title>

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
                        <h1 class="title">Cuentas Contables</h1>
                        <a href="../pages/addContable.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Agregar</span>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="responsive-table">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Total Ingresos</th>
                                            <th class="text-success">$1,021.00</th>
                                            <th>Total Egresos</th>
                                            <th class="text-danger">$500.00</th>
                                            <th>Total</th>
                                            <th>
                                                <span class="text-success">$521.00</span>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Table -->
                <div class="table-responsive pt-3">
                    <table class="table table-sm">
                        <thead class="table-warning">
                            <tr class="text-center">
                                <th>Tipo</th>
                                <th>Nombre</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>Ambas</td>
                                <td>Luis</td>
                                <td><span class="badge bg-success p-2">Activo</span></td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Banco">
                                        <i class="mdi mdi-lead-pencil"></i>
                                    </a>
                                    <a href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver Movimientos">
                                        <i class="mdi mdi-wallet"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>