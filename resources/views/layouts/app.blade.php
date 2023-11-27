<!DOCTYPE html>
<html lang="es" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" type="image/png" href="{{ asset("assets/images/logo/favicon.svg") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset("assets/css/rt-plugins.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
    @vite('resources/css/app.css')
    <!-- End : Theme CSS -->
    <!-- Start : theme-store js -->
    <script src="{{ asset("assets/js/store.js") }}" sync></script>
</head>
<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        @include("sub_views.sidebar")
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                @include("sub_views.header")
                <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]" id="content_wrapper">
                    <div class="page-content">
                        <div id="content_layout">
                            @yield("content")
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset("assets/js/rt-plugins.js") }}"></script>
    <script src="{{ asset("assets/js/app.js") }}"></script>
    @vite("resources/js/app.js")

</body>
</html>
