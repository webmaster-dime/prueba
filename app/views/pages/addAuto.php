<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Nuevo Proyecto | P.R 77</title>

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
                            REGISTRO DE AUTOMÓVIL
                        </h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <form class="cmxform" id="signupForm" method="get" action="#">
                                            <fieldset class="row">
                                                <!--! automovil  -->
                                                <div class="mb-3 col-4">
                                                    <label for="name" class="form-label">
                                                        AUTOMÓVIL
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip" data-bs-placement="top" title="El campo debe tener al menos de 2 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input class="form-control" id="automovil" name="automovil" type="text">
                                                </div>
                                                <!--! KILOMETRAJE  -->
                                                <div class="mb-3 col-4">
                                                    <label for="name" class="form-label">
                                                        KILOMETRAJE
                                                    </label>
                                                    <input class="form-control" id="km" name="km" type="number">
                                                </div>
                                                <!--! ENGOMOADO  -->
                                                <div class="mb-3 col-4">
                                                    <label for="name" class="form-label">
                                                        COLOR DE ENGOMOADO
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip" data-bs-placement="top" title="El campo debe tener al menos de 2 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input class="form-control" id="engomado" name="engomado" type="text">
                                                </div>
                                                <!--! MATRICULA  -->
                                                <div class="mb-3 col-4">
                                                    <label for="name" class="form-label">
                                                        MATRICULA
                                                    </label>
                                                    <input class="form-control" id="mat" name="mat" type="text">
                                                </div>
                                                <!--! AÑO   -->
                                                <div class="mb-3 col-4">
                                                    <label for="name" class="form-label">
                                                        AÑO
                                                    </label>
                                                    <input class="form-control" id="anio" name="anio" type="number">
                                                </div>
                                                <!--! NÚMERO DE PÓLIZA  -->
                                                <div class="mb-3 col-4">
                                                    <label for="name" class="form-label">
                                                        NÚMERO DE PÓLIZA
                                                    </label>
                                                    <input class="form-control" id="poliza" name="poliza" type="text">
                                                </div>
                                                <!--! VIGENCIA DEL SEGURO  -->
                                                <div class="mb-3 col-4">
                                                    <label for="name" class="form-label">
                                                        VIGENCIA DEL SEGURO
                                                    </label>
                                                    <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric">
                                                </div>
                                                <!--! servicio  -->
                                                <div class="mb-3 col-4">
                                                    <label for="name" class="form-label">
                                                        SERVICIO
                                                    </label>
                                                    <input class="form-control" id="serv" name="serv" type="number">
                                                </div>
                                                <!--! servicio  prox-->
                                                <div class="mb-3 col-4">
                                                    <label for="name" class="form-label">
                                                        PRÓXIMO SERVICIO
                                                    </label>
                                                    <input class="form-control" id="servProximo" name="servProximo" type="number">
                                                </div>
                                                <!--! ENCARGADO   -->
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlSelect1" class="form-label d-flex justify-content-between">
                                                        ENCARGADO
                                                        <a target="_blank" href="../pages/" class="text-black" data-bs-toggle="tooltip" data-bs-placement="top" title="Registrar encargado">
                                                            <h3><i class="mdi mdi-plus-circle-outline"></i></h3>
                                                        </a>
                                                    </label>
                                                    <select class="js-example-basic-single form-select" data-width="100%">
                                                        <option selected disabled>Seleccionar una opcion</option>
                                                        <option>Juanito</option>
                                                        <option>Jaime</option>
                                                        <option>Luis</option>
                                                        <option>Pepe</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-12">
                                                    <label for="exampleFormControlTextarea1" class="form-label">
                                                        FOTO
                                                    </label>
                                                    <input type="file" id="myDropify" />
                                                </div>
                                            </fieldset>
                                            <div class="form-group text-center">
                                                <button class="btn btn-warning btn-send mx-2" type="submit" value="Submit">REGISTRAR</button>
                                                <a href="#" class="btn btn-outline-danger">CANCELAR</a>
                                            </div>
                                        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>