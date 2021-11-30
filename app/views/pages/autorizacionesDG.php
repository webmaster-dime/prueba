<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>AutorizacionesDG | P.R 77</title>

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
                        <h1 class="title">Autorizaciones DG</h1>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- Table -->
                                <table id="tblmovimientos" class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-center">Autorizaciones Pendientes</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <input type="checkbox" id="all" onchange="javascript:markAll();">
                                            </th>
                                            <th>Fecha</th>
                                            <th>Cuenta Origen</th>
                                            <th>Cuenta Destino</th>
                                            <th>Cuenta Contable</th>
                                            <th>Concepto</th>
                                            <th>Importe</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="acreditados[]" value="8">
                                            </td>
                                            <td style="width: 110px">04-09-2021</td>
                                            <td>BANCO AZTECA</td>
                                            <td>
                                                CRISTIAN COMPANYS
                                            </td>
                                            <td>
                                                SUELDOS
                                            </td>
                                            <td>PAGO A PROVEEDORES</td>
                                            <td>$963.44</td>
                                            <td>
                                                <button class="btn btn-success btn-sm btn-send" data-toggle="tooltip" data-placement="top" data-original-title="Acreditar">
                                                    <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="acreditados[]" value="7">
                                            </td>
                                            <td style="width: 110px">18-08-2021</td>
                                            <td>OTRA NUEVA CUENTA</td>
                                            <td>
                                                BANORTE DIME
                                            </td>
                                            <td>
                                            </td>
                                            <td>TRANSFERENCIA A CUENTAS EXTERNAS</td>
                                            <td>$100.00</td>
                                            <td>
                                                <form method="POST" onsubmit="javascript:$('.btn-send').hide();" action="http://pr77.pr77security.com/authorizationdgupdate/eyJpdiI6InI0NXE1UlREeGFuYWgrNnMxeHF2aGc9PSIsInZhbHVlIjoic0t0L3J2SkgzWllMTWZBcHNHckZMZz09IiwibWFjIjoiOTgxM2YwNjQyY2M1OGU2YjM2Yzk4MjI4MTYwMmNmNzAyYzdlMGVkMDczNzRhYjg2YTZiYTYwNTA4NzQ5ZDZlYiIsInRhZyI6IiJ9">
                                                    <input type="hidden" name="_token" value="YYX8P2RGKAxHo23gc742yr2oehgdyhuGh9tDVkNu"> <input type="hidden" name="_method" value="PUT">
                                                    <button class="btn btn-success btn-sm btn-send" data-toggle="tooltip" data-placement="top" data-original-title="Acreditar">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a data-toggle="tooltip" data-title="Acreditar Seleccionados" onclick="javascript:validarmultiple(this);return false" href="http://pr77.pr77security.com/authorizationdgupdatemultiple" class="btn btn-primary btn-sm" data-original-title="" title=""><span class="mdi mdi-checkbox-marked-circle-outline"></span></a>
                                            </td>
                                            <td colspan="6"></td>
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

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>