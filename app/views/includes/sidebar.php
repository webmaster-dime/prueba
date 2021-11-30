<!--! SideBar -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <img src="../../../public/img/Logo-main.png" alt="Logo PR-77" srcset="" width="70">
            <img src="../../../public/img/logoPR.svg" alt="Logo PR-77" srcset="" width="70px">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Menú</li>
            <!--$ Administración  -->
            <li class="nav-item nav-category">Administración</li>
            <!--* Dashboard  -->
            <li class="nav-item">
                <a href="../pages/dashboard.php" class="nav-link">
                    <i class="link-icon mdi mdi-access-point"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <!--* Ordenes  -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#orden" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon mdi mdi-archive"></i>
                    <span class="link-title">Ordenes</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="orden">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../pages/compra.php" class="nav-link">Compra</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/venta.php" class="nav-link">Venta</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/notaCredito.php" class="nav-link">Nota de crédito</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--* Socios -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#socios" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon mdi mdi-account-multiple-outline"></i>
                    <span class="link-title">Socios</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="socios">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../pages/clientes.php" class="nav-link">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/proveedores.php" class="nav-link">Proveedores</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/cuentasCobrar.php" class="nav-link">Cuentas por cobrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/cuentasPagar.php" class="nav-link">Cuentas por pagar</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--* Proyectos -->
            <li class="nav-item">
                <a href="../pages/proyectos.php" class="nav-link">
                    <i class="link-icon mdi mdi-briefcase"></i>
                    <span class="link-title">Proyectos</span>
                </a>
            </li>
            <!--* Productos -->
            <li class="nav-item">
                <a href="../pages/productos.php" class="nav-link">
                    <i class="link-icon mdi mdi-cart-outline"></i>
                    <span class="link-title">Productos</span>
                </a>
            </li>
            <!--* Bancos -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#bancos" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon mdi mdi-bank"></i>
                    <span class="link-title">Bancos</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="bancos">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="../pages/banco.php" class="nav-link">Bancos</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/cuentasContables.php" class="nav-link">Cuentas contables</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/movimientosBancarios.php" class="nav-link">Movimientos</a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/autorizacionesDG.php" class="nav-link">Autorizaciones DG</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--$ Procucción -->
            <li class="nav-item nav-category">Producción</li>
            <!--* Ordenes -->
            <li class="nav-item">
                <a href="../pages/ordenes.php" class="nav-link">
                    <i class="link-icon mdi mdi-clipboard-outline"></i>
                    <span class="link-title">Ordenes</span>
                </a>
            </li>
            <!--* Ticket -->
            <li class="nav-item">
                <a href="../pages/tickets.php" class="nav-link">
                    <i class="link-icon mdi mdi-ticket-confirmation"></i>
                    <span class="link-title">Ticket de salida</span>
                </a>
            </li>
            <!--* Presupuesto -->
            <li class="nav-item">
                <a href="../pages/presupuesto.php" class="nav-link">
                    <i class="link-icon mdi mdi-cash"></i>
                    <span class="link-title">Presupuesto</span>
                </a>
            </li>
            <!--* Materiales -->
            <li class="nav-item">
                <a href="../pages/materiales.php" class="nav-link">
                    <i class="link-icon mdi mdi-box-shadow"></i>
                    <span class="link-title">Materiales</span>
                </a>
            </li>
            <!--* Etapas de produccioón -->
            <li class="nav-item">
                <a href="../pages/etapasProduccion.php" class="nav-link">
                    <i class="link-icon mdi mdi-animation"></i>
                    <span class="link-title">Etapas de producción</span>
                </a>
            </li>
            <!--* Unidades de medida< -->
            <li class="nav-item">
                <a href="../pages/medidas.php" class="nav-link">
                    <i class="link-icon mdi mdi-calculator"></i>
                    <span class="link-title">Unidades de medida</span>
                </a>
            </li>
            <!--* Colores -->
            <li class="nav-item">
                <a href="../pages/colors.php" class="nav-link">
                    <i class="link-icon mdi mdi-invert-colors"></i>
                    <span class="link-title">Colores</span>
                </a>
            </li>
            <!--* Géneros -->
            <li class="nav-item">
                <a href="../pages/generos.php" class="nav-link">
                    <i class="link-icon mdi mdi-gender-male-female"></i>
                    <span class="link-title">Géneros</span>
                </a>
            </li>
            <!--* Tallas -->
            <li class="nav-item">
                <a href="../pages/tallas.php" class="nav-link">
                    <i class="link-icon mdi mdi-move-resize-variant"></i>
                    <span class="link-title">Tallas</span>
                </a>
            </li>
            <!--* Grupo de Tallas -->
            <li class="nav-item">
                <a href="../pages/grupoTallas.php" class="nav-link">
                    <i class="link-icon mdi mdi-tshirt-crew"></i>
                    <span class="link-title">Grupo de Tallas</span>
                </a>
            </li>
            <!--$ Tallas -->
            <li class="nav-item nav-category">Tallas</li>
            <!--* Toma de tallas -->
            <li class="nav-item">
                <a href="../pages/tomaTallas.php" class="nav-link">
                    <i class="link-icon mdi mdi-transcribe"></i>
                    <span class="link-title">Toma de tallas</span>
                </a>
            </li>
            <!--* Grupos -->
            <li class="nav-item">
                <a href="../pages/grupo.php" class="nav-link">
                    <i class="link-icon mdi mdi-ungroup"></i>
                    <span class="link-title">Grupos</span>
                </a>
            </li>
            <!--$ Almacén -->
            <li class="nav-item nav-category">Almacén</li>
            <!--* Ubicaciones -->
            <li class="nav-item">
                <a href="../pages/ubicacion.php" class="nav-link">
                    <i class="link-icon mdi mdi-google-maps"></i>
                    <span class="link-title">Ubicaciones</span>
                </a>
            </li>
            <!--* Almacenes -->
            <li class="nav-item">
                <a href="../pages/almacenes.php" class="nav-link">
                    <i class="link-icon mdi mdi-factory"></i>
                    <span class="link-title">Almacenes</span>
                </a>
            </li>
            <!--$ Catálogos -->
            <li class="nav-item nav-category mb-3">Catálogos
                <hr>
            </li>
            <!--* Automóviles -->
            <li class="nav-item">
                <a href="../pages/automoviles.php" class="nav-link">
                    <i class="link-icon mdi mdi-car"></i>
                    <span class="link-title">Automóviles</span>
                </a>
            </li>
            <!--* Tipos de cuenta -->
            <li class="nav-item">
                <a href="../pages/tipoCuenta.php" class="nav-link">
                    <i class="link-icon mdi mdi-format-list-bulleted-type"></i>
                    <span class="link-title">Tipos de cuenta</span>
                </a>
            </li>
            <!--* Empresas -->
            <li class="nav-item">
                <a href="../pages/empresas.php" class="nav-link">
                    <i class="link-icon mdi mdi-home-modern"></i>
                    <span class="link-title">Empresas</span>
                </a>
            </li>
            <!--* Roles -->
            <li class="nav-item">
                <a href="../pages/roles.php" class="nav-link">
                    <i class="link-icon mdi mdi-account-details"></i>
                    <span class="link-title">Roles</span>
                </a>
            </li>
            <!--* Formas de pago -->
            <li class="nav-item">
                <a href="../pages/formaPago.php" class="nav-link">
                    <i class="link-icon mdi mdi-cash-multiple"></i>
                    <span class="link-title">Formas de pago</span>
                </a>
            </li>
            <!--* Usuarios -->
            <li class="nav-item">
                <a href="../pages/usuarios.php" class="nav-link">
                    <i class="link-icon mdi mdi-account-multiple"></i>
                    <span class="link-title">Usuarios</span>
                </a>
            </li>
        </ul>
    </div>
</nav>