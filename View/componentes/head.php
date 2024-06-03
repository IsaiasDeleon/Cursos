<div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
    id="kt_app_header_container">
    <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
        <div class="btn btn-icon btn-active-color-primary w-55px h-55px" id="kt_app_sidebar_mobile_toggle">
            <i class="bi bi-list fs-2x" style="color:rgb(32 92 152);" ></i>
        </div>
       
    </div>
    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
        <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
            data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end"
            data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
            <div class="
            menu 
            menu-rounded  
            menu-column 
            menu-lg-row 
            my-5 
            my-lg-0 
            align-items-stretch 
            fw-semibold
            px-2 px-lg-0
        " id="kt_app_header_menu" data-kt-menu="true">
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                    class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                  <a href="./Administracion.php" class="menu-link"><span class="menu-title fw-bold">Toolshop Manager</span><span
                            class="menu-arrow d-lg-none"></span></a>

                </div>

            </div>
           
        </div>
        <div class="app-navbar flex-shrink-0">
            <div class="d-flex justify-content-center align-items-center cursor-pointer" >
                <a href="https://badgerautomation.bitrix24.mx" target="_blank" class="menu-link">   <img alt="Logo" src="./assets/bitrix.png" class="h-20px app-sidebar-logo-default"></a>
            </div>
            <div class="app-navbar-item ms-1 ms-lg-3">
                <a href="#"
                    class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="bi bi-cloud-sun-fill fs-2x"></i></a>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2 active" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="bi bi-brightness-high-fill fs-2"></i> </span>
                            <span class="menu-title">
                                Light
                            </span>
                        </a>
                    </div>
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="bi bi-moon-stars-fill fs-2"></i></span>
                            <span class="menu-title">
                                Dark
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="app-navbar-item ms-2 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                <a href="#"
                    class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="bi bi-person-circle fs-2x"></i>
                </a>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">
                                    <?php echo $_SESSION['usuario'] ?> <span
                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">
                                        <?php echo $_SESSION['puesto'] ?>
                                    </span>
                                </div>
                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                    <?php echo $_SESSION['correo'] ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="separator my-2"></div>
                    <div class="menu-item px-5">
                        <a onclick="Cerrarsession()" class="menu-link px-5" href="#">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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