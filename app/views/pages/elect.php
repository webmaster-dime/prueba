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

    <title>Principal | Herrera & Arochi</title>

    <?php include('../includes/header.php') ?>

</head>
<!--  -->

<body class="sidebar-dark">
    <div class="main-wrapper">

        <!--! SideBar -->
        <?php // include('../includes/sidebar.php')
        ?>
        <div class="sidebar">
            <div class="sidebar-header-main d-flex justify-content-center align-items-center">
                <img src="../../../public/img/Logo-main.png" alt="" srcset="" width="100" height="57">
            </div>
        </div>

        <div class="container">
            <!--! TopBar -->

            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <h4 class="text-warning">Roberto Mejía</h4>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                    alt="profile">
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80"
                                            alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">Amiah Burton</p>
                                        <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="pages/general/profile.html" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!--! Contenido -->
            <div class="mt-6">
                <div class="row d-flex justify-content-center">
                    <!--# Main Logo  -->
                    <div class="col-10 mt-7 b-r pb-5">
                        <center>
                            <img src="../../../public/img/Logo-main.png" alt="" srcset="" width="650">
                        </center>
                    </div>
                    <div class="row mt-5 d-flex justify-content-around col-9">
                        <!--# Sub Empresas  -->
                        <div class="col-2">
                            <center>
                                <a href="../pages/dashboard.php">
                                    <img src="../../../public/img/logoPR.svg" alt="" srcset="" width="150">
                                </a>
                            </center>
                        </div>
                        <div class="col-2">
                            <center>
                                <a href="../pages/dashboard.php">
                                    <img src="../../../public/img/logoPR.svg" alt="" srcset="" width="150">
                                </a>
                            </center>
                        </div>
                        <div class="col-2">
                            <center>
                                <a href="../pages/dashboard.php">
                                    <img src="../../../public/img/logoPR.svg" alt="" srcset="" width="150">
                                </a>
                            </center>
                        </div>
                        <div class="col-2">
                            <center>
                                <a href="../pages/dashboard.php">
                                    <img src="../../../public/img/logoPR.svg" alt="" srcset="" width="150">
                                </a>
                            </center>
                        </div>
                        <div class="col-2">
                            <center>
                                <a href="../pages/dashboard.php">
                                    <img src="../../../public/img/logoPR.svg" alt="" srcset="" width="150">
                                </a>
                            </center>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- End custom js for this page -->
        <?php include('../includes/scripts.php') ?>
</body>

</html>