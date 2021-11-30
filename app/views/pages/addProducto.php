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
                        <h1 class="page-title">Agregar Producto</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <form class="cmxform" id="signupForm" method="get" action="#">
                                            <fieldset class="row">
                                                <!--! nameProduct -->
                                                <div class="mb-3 col-6">
                                                    <label for="name" class="form-label"> Nombre del Producto
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="El campo debe tener al menos de 2 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input class="form-control" id="name" name="name" type="text"
                                                        placeholder="Nombre del Producto">
                                                </div>
                                                <!--! clave -->
                                                <div class="mb-3 col-6">
                                                    <label for="clave" class="form-label"> Clave del producto
                                                        <strong class="text-danger">*</strong>
                                                        <a href="#" class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="El campo debe tener al menos de 12 a 13 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input pattern=".{12,13}" title="Campo necesario"
                                                        class="form-control uppercaseInput" type="text"
                                                        placeholder="Clave del producto" required>
                                                </div>
                                                <!--! Precio  -->
                                                <div class="mb-3 col-6">
                                                    <label for="precio" class="form-label"> Precio
                                                        <strong class="text-danger">*</strong>
                                                        <a class="text-black" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            title="El campo debe tener al menos de 2 letras">
                                                            <i class="mdi mdi-help-circle-outline"></i>
                                                        </a>
                                                    </label>
                                                    <input class="form-control" id="precio" name="precio" type="text"
                                                        placeholder="$">
                                                </div>
                                                <!--! Medida  -->
                                                <div class="mb-3 col-6 container">
                                                    <div class="row">
                                                        <label class="form-label">
                                                            Unidad de Medida
                                                        </label>
                                                        <select class="js-example-basic-single form-select"
                                                            name="medida">
                                                            <option selected disabled>Elige una opción</option>
                                                            <option value="0">option 1</option>
                                                            <option value="1">opcion 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--! GÉNEROS  -->
                                                <div class="mb-3 col-6">
                                                    <label for="exampleFormControlSelect1" class="form-label">
                                                        Género
                                                    </label>
                                                    <select class="form-select" id="exampleFormControlSelect1">
                                                        <option selected disabled>Selecciona tu opción</option>
                                                        <option>Masculino</option>
                                                        <option>Femenino</option>
                                                    </select>
                                                </div>
                                                <!--! Colores  -->
                                                <div class="mb-3 col-6 container">
                                                    <div class="row">
                                                        <label class="form-label">
                                                            Colores
                                                        </label>
                                                        <select class="js-example-basic-single form-select"
                                                            name="medida">
                                                            <option selected disabled>Elige una opción</option>
                                                            <option value="1" data-select2-id="66">
                                                                AMARILLO</option>
                                                            <option value="2" data-select2-id="67">
                                                                AZUL CIELO</option>
                                                            <option value="3" data-select2-id="68">
                                                                AZUL NAVY</option>
                                                            <option value="4" data-select2-id="69">
                                                                AZUL OXFORD</option>
                                                            <option value="5" data-select2-id="70">
                                                                AZUL PLUMBAGO</option>
                                                            <option value="6" data-select2-id="71">
                                                                AZUL REY</option>
                                                            <option value="7" data-select2-id="72">
                                                                AZUL VIOLETA PAN</option>
                                                            <option value="8" data-select2-id="73">
                                                                BLANCO</option>
                                                            <option value="9" data-select2-id="74">
                                                                CAMUFLAJE DIGITAL DESIERTO</option>
                                                            <option value="10" data-select2-id="75">
                                                                CAMUFLAJE GRIS</option>
                                                            <option value="11" data-select2-id="76">
                                                                CAMUFLAJE NIEVE</option>
                                                            <option value="12" data-select2-id="77">
                                                                COYOTE</option>
                                                            <option value="13" data-select2-id="78">
                                                                GRIS</option>
                                                            <option value="14" data-select2-id="79">
                                                                GRIS CHARCOAL</option>
                                                            <option value="15" data-select2-id="80">
                                                                GRIS CLARO</option>
                                                            <option value="16" data-select2-id="81">
                                                                GRIS OXFORD</option>
                                                            <option value="17" data-select2-id="82">
                                                                GRIS RATA</option>
                                                            <option value="18" data-select2-id="83">
                                                                KAKI</option>
                                                            <option value="19" data-select2-id="84">
                                                                NARANJA</option>
                                                            <option value="20" data-select2-id="85">
                                                                NEGRO</option>
                                                            <option value="21" data-select2-id="86">
                                                                PURPURA</option>
                                                            <option value="22" data-select2-id="87">
                                                                ROJO</option>
                                                            <option value="23" data-select2-id="88">
                                                                ROSA</option>
                                                            <option value="24" data-select2-id="89">
                                                                TRANSPARENTE</option>
                                                            <option value="25" data-select2-id="90">
                                                                VERDE BANDERA</option>
                                                            <option value="26" data-select2-id="91">
                                                                VERDE BOTELLA</option>
                                                            <option value="27" data-select2-id="92">
                                                                VERDE LIMON</option>
                                                            <option value="28" data-select2-id="93">
                                                                VERDE OLIVO</option>
                                                            <option value="29" data-select2-id="94">
                                                                VINO</option>
                                                        </select>


                                                    </div>
                                                </div>
                                                <!--! Talla  -->
                                                <div class="mb-3 col-6 container">
                                                    <div class="row">
                                                        <label class="form-label">
                                                            Tallas
                                                        </label>
                                                        <select class="js-example-basic-single form-select"
                                                            name="medida">
                                                            <option selected disabled>Elige una opción</option>
                                                            <option value="1" data-select2-id="97">
                                                                CALZADO</option>
                                                            <option value="2" data-select2-id="98">
                                                                INSIGNIAS</option>
                                                            <option value="3" data-select2-id="99">
                                                                TALLAS DE NIÑOS</option>
                                                            <option value="4" data-select2-id="100">
                                                                TALLAS DE LETRAS</option>
                                                            <option value="5" data-select2-id="101">
                                                                TALLAS DE NÚMEROS</option>
                                                            <option value="6" data-select2-id="102">
                                                                TOCADO</option>
                                                            <option value="7" data-select2-id="103">
                                                                UNITALLA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--! Etapas de producción  -->
                                                <div class="mb-3 col-6 container">
                                                    <div class="row">
                                                        <label class="form-label">
                                                            Etapas de producción
                                                        </label>
                                                        <select class="js-example-basic-single form-select"
                                                            name="medida">
                                                            <option selected disabled>Elige una opción</option>
                                                            <option value="1" data-select2-id="97">
                                                                CALZADO</option>
                                                            <option value="2" data-select2-id="98">
                                                                INSIGNIAS</option>
                                                            <option value="3" data-select2-id="99">
                                                                TALLAS DE NIÑOS</option>
                                                            <option value="4" data-select2-id="100">
                                                                TALLAS DE LETRAS</option>
                                                            <option value="5" data-select2-id="101">
                                                                TALLAS DE NÚMEROS</option>
                                                            <option value="6" data-select2-id="102">
                                                                TOCADO</option>
                                                            <option value="7" data-select2-id="103">
                                                                UNITALLA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--! Obs  -->
                                                <div class="mb-3 col-12 container">
                                                    <div class="row">
                                                        <label class="form-label">
                                                            Observaciónes
                                                        </label>
                                                        <textarea name="description" id="description"
                                                            placeholder="Observaciones..."
                                                            class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group text-center">
                                                <button class="btn btn-warning btn-send mx-2" type="submit"
                                                    value="Submit">REGISTRAR</button>
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