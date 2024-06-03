<?php
session_start();
if (!isset($_SESSION['idUsuario']) || !isset($_SESSION['usuario'])) {
    // Si alguna de las variables de sesión falta o está vacía, redirige al usuario a la página de inicio de sesión
    header("Location: ./index.php");
    exit();
}
?>
<nav style="padding: 0; position: relative; z-index: 10; width: 100%; left: 0%; top: 0%;" class="navbar navbar-expand-lg bg-body-tertiary">
    <div style="padding: 5px;" class="container-fluid bg-dark">
                <a class="d-flex" href="./Administracion.php" style="display: flex; align-items: center; text-decoration: none;">
                    <!-- <img src="/assets/datamaster.ico" alt="Logo" style="width: 20%;" height="30" class="d-inline-block align-text-top imgHead" /> -->
                    <h4 style="margin-left: 5px; color: #307FCE;" class="fw-bold">Toolshop</h4>
                </a>
                <div class="collapse navbar-collapse justify-content-start" id="navbarNav" style="margin-left: 15px;">
                    <ul class="navbar-nav" style="margin-right: 20px;">
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white fw-bold" style="border: transparent;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Documentos
                                </button>
                                <?php if($_SESSION['sistema'] == "Si"): ?>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="./Proyectos.php">Proyectos</a></li>
                                        <!-- Agrega más elementos del menú si es necesario -->
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white fw-bold" style="border: transparent;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reportes
                                </button>
                                <?php if($_SESSION['sistema'] == "Si"): ?>
                                <ul class="dropdown-menu">
                                    <!-- <li><a class="dropdown-item" href="#">Piezas</a></li>
                                    <li><a class="dropdown-item" href="#">Manufactura</a></li>
                                    <li><a class="dropdown-item" href="#">Eficencia</a></li>
                                    <li><a class="dropdown-item" href="#">Hrs. real vs presupuesto</a></li>
                                    <li><a class="dropdown-item" href="#">Costo real vs presupuesto</a></li>
                                    <li><a class="dropdown-item" href="#">Piezas por usuario</a></li> -->
                                    <li><a class="dropdown-item" href="./OTabiertas2.php">Ordenes de trabajo abiertas</a></li>
                                    <li><a class="dropdown-item" href="./TablaOT.php">Bitacora</a></li>
                                     <li><a class="dropdown-item" href="./Bitacora.php">Bitacora de tiempo</a></li>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-white fw-bold" style="border: transparent;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Catálogos
                                </button>
                                <ul class="dropdown-menu">
                                    <?php if($_SESSION['sistema'] == "Si"): ?>
                                        <li><a class="dropdown-item" href="./Equipos.php">Equipos de personal</a></li>
                                    <?php endif; ?>
                                    <!-- <li><a class="dropdown-item" href="#">Funciones</a></li>
                                    <li><a class="dropdown-item" href="#">Etapas</a></li>
                                    <li><a class="dropdown-item" href="./Insumos.php">Insumos</a></li>
                                    <li><a class="dropdown-item" href="#">Recursos activos</a></li>
                                    <li><a class="dropdown-item" href="./Clientes.php">Clientes</a></li>
                                    <li><a class="dropdown-item" href="./ClientesContactos.php">Clientes - contactos</a></li>
                                    <li><a class="dropdown-item" href="#">Ordenes de trabajo</a></li>
                                    <li><a class="dropdown-item" href="#">Clases</a></li>
                                    <li><a class="dropdown-item" href="#">Tipos</a></li>-->
                                    <?php if($_SESSION['sistema'] == "Si"): ?>
                                    <li><a class="dropdown-item" href="./Usuarios.php">Usuarios</a></li>
                                    <li><a class="dropdown-item" href="./Puestos.php">Puestos</a></li>
                                    <li><a class="dropdown-item" href="./Departamentos.php">Departamentos</a></li> 
                                    <?php endif; ?>
                                    <li><a class="dropdown-item" href="./OC.php">Orden de compra</a></li> 
                                </ul>
                            </div>
                        </li>
                    </ul>   
                </div>
                <div class="" style="float: right;" id="navbarNav2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="btn-group dropstart">
                                <button style="border: transparent; color: #307FCE;" type="button" class="btn dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-fill" style="margin-right: 10px;"></i><?php echo  $_SESSION['usuario'] ?>
                                </button>
                                <ul class="dropdown-menu" >
                                    <!-- <li><a class="dropdown-item" href="#">Cambiar contraseña</a></li> -->
                                    <!-- <li><hr class="dropdown-divider"/></li> -->
                                    <li><a onclick="Cerrarsession()" class="dropdown-item" href="#">Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>   
                </div>   
            </div>
        </nav>

        <script>
            function Cerrarsession() {
                // Realiza una petición AJAX para cerrar la sesión en el servidor
                $.ajax({
                    type: "POST",
                    url: "./componentes/CerrarSesion.php", // Nombre del script PHP que cerrará la sesión
                    dataType: "json",
                    success: function (data) {
                        console.log(data)
                        // Redirige al usuario a la página de inicio de sesión u otra página deseada
                        window.location.href = "index.php"; // Ajusta la URL según tus necesidades
                    },
                    error: function (error) {
                        console.log(error)
                        console.log("Error en la petición: ", error);
                    }
                });
            }

        </script>