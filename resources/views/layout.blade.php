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


        <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="/assets/vendors/js/vendor.bundle.addons.js"></script>
        <script src="/assets/js/shared/off-canvas.js"></script>
        <script src="/assets/js/shared/misc.js"></script>
        <script src="/assets/js/demo_1/dashboard.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
        @yield('js')
        <script>
            //agregar pugling al textarea
            ClassicEditor.create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });

            document.getElementById('filebutton').addEventListener('click', function() {
                //hacer click en el input file oculto
                $('#inputportada').click();


            });
            document.getElementById('inputportada').addEventListener('change', function() {
                //obtener nombre del documento
                let fullPath = document.getElementById('inputportada').value;
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath
                    .lastIndexOf(
                        '/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
                //agregar nombre al input text
                document.getElementById('imagename').value = filename


            })

        </script>


</body>

</html>
