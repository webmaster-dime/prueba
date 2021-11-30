<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Bancos | P.R 77</title>

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
                        <h1 class="title">Bancos</h1>
                        <a href="../pages/addBanco.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Nuevo Banco</span>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="Select1" class="form-label">TIPO DE CUENTA</label>
                                                <select class="form-select" id="Select1">
                                                    <option selected="" disabled="">Elige una opción</option>
                                                    <option value="0">Todas</option>
                                                    <option value="1">Crédito</option>
                                                    <option value="2">Saldos</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <button type="button" class="btn btn-warning mt-4">
                                                    <i data-feather="search" class="me-2"></i>
                                                    Buscar
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Table -->
                <div class="table-responsive pt-3">
                    <table class="table table-sm">
                        <thead class="table-warning">
                            <tr class="text-center">
                                <th>Tipo de cuenta</th>
                                <th>Banco</th>
                                <th>Monto</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>Crédito</td>
                                <td>BBVA</td>
                                <td>$206,850</td>
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