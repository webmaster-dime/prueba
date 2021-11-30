<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Clientes | P.R 77</title>

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
                        <h1 class="title">Clientes</h1>
                        <a href="../pages/addCliente.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Nuevo Cliente</span>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Buscar</label>
                                                <input type="text" class="form-control" id="" placeholder="Buscar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <button type="button" class="btn btn-outline-warning mt-4">
                                                    <i data-feather="search" class="me-2"></i>
                                                    Buscar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
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
                                <th>RAZÓN SOCIAL </th>
                                <th>RFC</th>
                                <th>CONTACTO</th>
                                <th>TELEFÓNO</th>
                                <th>STATUS</th>
                                <th>ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>CLIENTE EMPRESA</td>
                                <td>MODC920228MJ7 </td>
                                <td> CONTACTO</td>
                                <td>8865645759</td>
                                <td>
                                    <span class="badge bg-success p-2">Activo</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver detalles">
                                        <i class="mdi mdi-lead-pencil"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Inactivar al cliente">
                                        <i class="mdi mdi-lock-outline"></i>
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