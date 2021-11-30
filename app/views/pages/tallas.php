<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Tallas | H&A</title>

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
                        <h1 class="title">Tallas</h1>
                        <a href="../pages/addTalla.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Agregar</span>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group d-flex">
                                            <div class="mb-3 col-10 mx-3">
                                                <label class="form-label">BUSCAR</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <button type="button" class="btn btn-outline-warning mt-4">
                                                    <i data-feather="search"></i>
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
                <div class="table-responsive pt-3">
                    <table class="table table-sm">
                        <thead class="table-warning">
                            <tr class="text-center">
                                <th>GRUPO</th>
                                <th>NOMBRE</th>
                                <th>ESTATUS</th>
                                <th>ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Ver Detalles" class="text-black">
                                        CALZADO
                                    </a>
                                </td>
                                <td>PZA</td>
                                <td>
                                    <span class="badge bg-success p-2">Activo</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="mdi mdi-lead-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-success">
                                        <i class="mdi mdi-check-circle-outline"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="mdi mdi-close-circle-outline"></i></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Ver Detalles" class="text-black">
                                        CALZADO
                                    </a>
                                </td>
                                <td>PZA</td>
                                <td>
                                    <span class="badge bg-danger p-2">Inactivo</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="mdi mdi-lead-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-success">
                                        <i class="mdi mdi-check-circle-outline"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="mdi mdi-close-circle-outline"></i></a>
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