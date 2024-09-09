<!DOCTYPE html>
<html lang="es">
<!-- For RTL verison -->
<!-- <html lang="en" dir="rtl"> -->
<head>
    <!-- icheck bootstrap -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>AdminLTE 4 | General Form Elements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | General Form Elements">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
    <!-- By adding ../../css/dark/adminlte-dark-addon.css then the page supports both dark color schemes, and the page author prefers / default is light. -->
    <meta name="color-scheme" content="light dark">
    <!-- By adding ../../css/dark/adminlte-dark-addon.css then the page supports both dark color schemes, and the page author prefers / default is dark. -->
    <!-- <meta name="color-scheme" content="dark light"> -->

    <!-- OPTIONAL LINKS -->

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.1/css/OverlayScrollbars.min.css" integrity="sha256-WKijf8KI68sbq8Znd6yMepIuFF0wdWfIt6gk3JWcQfk=" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" integrity="sha256-mUZM63G8m73Mcidfrv5E+Y61y7a12O5mW4ezU3bxqW4=" crossorigin="anonymous">

    <!-- REQUIRED LINKS -->

    <!-- Theme style -->
    <link rel="stylesheet" href="../../../assets/AdminLTE4/css/adminlte.css">

    <!-- For RTL verison use ../../css/rtl/adminlte.rtl.css, remove dist/css/adminlte.css -->
    <!-- <link rel="stylesheet" href="../../css/rtl/adminlte.rtl.css""> -->

    <!-- For dark mode use ../../css/dark/adminlte-dark-addon.css, do not remove dist/css/adminlte.css or if usinf RTL version do not remove ../../css/rtl/adminlte.rtl.css-->
    <!-- ... and then the alternate CSS first as a snap-on for dark color scheme preference -->
    <!-- <link rel="stylesheet" href="../../css/dark/adminlte-dark-addon.css" media="(prefers-color-scheme: dark)""> -->

</head>
<body class="login-page" background="/images/restaurante.jpg">
<div class="login-box bg-light  rounded ">
    <div class="login-logo  rounded ">
        <a href="{{ route('index') }}" ><b>Restaurante</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card  rounded">
        <div class="card-body login-card-body ">
            <p class="login-box-msg">Crea tu cuenta</p>

            <form action="{{ route('Agregar') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombres" name="Nombres">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Apellidos" name="Apellidos">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nit" name="Nit">
                    <div class="input-group-text">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ci" name="Ci">
                    <div class="input-group-text">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Direccion" name="Direccion">
                    <div class="input-group-text">
                        <i class="fas fa-home"></i>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Correo" name="Email">
                    <div class="input-group-text">
                        <span class="fas fa-mail-bulk"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nº Telefono" name="Telefono">
                    <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Repetir Contraseña" name="password">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Resgistrarse</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- OPTIONAL SCRIPTS -->

<!-- overlayScrollbars -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.1/js/OverlayScrollbars.min.js" integrity="sha256-7mHsZb07yMyUmZE5PP1ayiSGILxT6KyU+a/kTDCWHA8=" crossorigin="anonymous"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha256-9SEPo+fwJFpMUet/KACSwO+Z/dKMReF9q4zFhU/fT9M=" crossorigin="anonymous"></script>

<!-- REQUIRED SCRIPTS -->

<!-- AdminLTE App -->
<script src="../../../assets/AdminLTE4/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->

<script>
    const SELECTOR_SIDEBAR = '.sidebar'
    const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave'
    }
    document.addEventListener("DOMContentLoaded", function() {
        if (typeof OverlayScrollbars !== 'undefined') {
            OverlayScrollbars(document.querySelectorAll(SELECTOR_SIDEBAR), {
                className: Default.scrollbarTheme,
                sizeAutoCapable: true,
                scrollbars: {
                    autoHide: Default.scrollbarAutoHide,
                    clickScrolling: true
                }
            })
        }
    })
</script>

</body>
</html>
