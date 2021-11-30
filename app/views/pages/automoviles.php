<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Automóviles | H&A</title>

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
                            AUTOMÓVILES
                        </h1>
                        <a href="../pages/addAuto.php" class="btn btn-warning m-lg-3">
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
                                                <label class="form-label">CLIENTE</label>
                                                <select class="js-example-basic-single form-select" data-width="100%">
                                                    <option selected disabled>Elige un cliente</option>
                                                    <option value="">option 1</option>
                                                    <option value=""> option 2</option>
                                                </select>
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

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                            <tr>
                                                <th>AUTOMÓVIL</th>
                                                <th>POLIZA</th>
                                                <th>MATRICULA</th>
                                                <th>AÑO</th>
                                                <th>ESTATUS</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Atos</td>
                                                <td>221011293</td>
                                                <td>MATRICULA</td>
                                                <td>2014</td>
                                                <td>
                                                    <span class="badge bg-success p-2">Activo</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-info">
                                                        <i class="mdi mdi-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-primary">
                                                        <i class="mdi mdi-lead-pencil"></i></a>
                                                    <a href="#" class="btn btn-sm btn-danger">
                                                        <i class="mdi mdi-close-circle-outline"></i></a>
                                                    <a href="#" class="btn btn-sm btn-success">
                                                        <i class="mdi mdi-check-circle-outline"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bocho</td>
                                                <td>221011293</td>
                                                <td>MATRICULA</td>
                                                <td>2020</td>
                                                <td>
                                                    <span class="badge bg-danger p-2">Inactivo</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-info">
                                                        <i class="mdi mdi-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-primary">
                                                        <i class="mdi mdi-lead-pencil"></i></a>
                                                    <a href="#" class="btn btn-sm btn-danger">
                                                        <i class="mdi mdi-close-circle-outline"></i></a>
                                                    <a href="#" class="btn btn-sm btn-success">
                                                        <i class="mdi mdi-check-circle-outline"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
</body>

</html>