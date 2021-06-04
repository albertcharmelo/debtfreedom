<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Debt Freedom | USA | Panel </title>
    <link rel="stylesheet" href="/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="/assets/css/shared/style.css">
    <link rel="stylesheet" href="/assets/css/demo_1/style.css">
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/toastNotification/vanillatoasts.css">
    @yield('css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('panel.partials.menu_superior')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('panel.partials.menu')
            <!-- partial -->
            <div class="main-panel">
                @if (session('postSave'))
                    <input type="hidden" value="{{ session('postSave') }}" id="postSave">

                @endif
                <div class="content-wrapper">
                    <!-- Page Title Header Starts (ejemplo.title-header)-->

                    <!-- Page Title Header Ends-->
                    @yield('datos')


                    <div class="row">
                        @yield('content')

                    </div>


                </div>

            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="/assets/vendors/js/vendor.bundle.addons.js"></script>
        <script src="/assets/js/shared/off-canvas.js"></script>
        <script src="/assets/js/shared/misc.js"></script>
        <script src="/assets/js/demo_1/dashboard.js"></script>
        <script src="/js/toastNotification/vanillatoasts.js"></script>

        <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
        @yield('js')
        <script>
            $(document).ready(function() {



                if (document.getElementById('postSave').value == 'guardado') {

                    VanillaToasts.create({
                        title: 'Debtfreedom',
                        text: 'Artículo guardado satisfactoriamente',
                        type: 'success',
                        icon: '/images/notificaicón_icon.png',
                        positionClass: 'bottomRight',
                        timeout: 5000,

                    });

                } else if (document.getElementById('postSave').value == 'eliminado') {
                    VanillaToasts.create({
                        title: 'Debtfreedom',
                        text: 'Artículo eliminado satisfactoriamente',
                        type: 'danger',
                        icon: '/images/notificaicón_icon.png',
                        positionClass: 'bottomRight',
                        timeout: 5000,

                    });
                } else if (document.getElementById('postSave').value == 'publicado') {
                    VanillaToasts.create({
                        title: 'Debtfreedom',
                        text: 'Artículo publicado satisfactoriamente',
                        type: 'info',
                        icon: '/images/notificaicón_icon.png',
                        positionClass: 'bottomRight',
                        timeout: 5000,

                    });
                } else if (document.getElementById('postSave').value == 'pendiente') {
                    VanillaToasts.create({
                        title: 'Debtfreedom',
                        text: 'Artículo se ha desactivado satisfactoriamente',
                        type: 'info',
                        icon: '/images/notificaicón_icon.png',
                        positionClass: 'bottomRight',
                        timeout: 5000,

                    });
                }



            });

        </script>

</body>

</html>
