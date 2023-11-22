<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Dashcode - HTML Template</title>
  <link rel="icon" type="image/png" href="{{ asset("assets/images/logo/favicon.svg") }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset("assets/css/rt-plugins.css") }}">
  <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
  <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
  <script src="{{ asset("assets/js/store.js") }}"></script>
</head>

<body class=" font-inter skin-default">
  <!-- [if IE]> <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="https://browsehappy.com/">upgrade your browser</a> to improve
            your experience and security.
        </p> <![endif] -->

  <div class="loginwrapper">
    <div class="lg-inner-column">
      <div class="left-column relative z-[1]">
        <div class="max-w-[520px] pt-20 ltr:pl-20 rtl:pr-20">
          <a href="index.html">
            <img src="{{ asset("assets/images/logo/logo-c-white.svg") }}" alt="" class="mb-10 dark_logo">
            <img src="{{ asset("assets/images/logo/logo-white.svg") }}" alt="" class="mb-10 white_logo">
          </a>
          <h4>
            Tomate un tiempo de
            <span class="text-slate-800 dark:text-slate-400 font-bold">
                           diversion
                        </span>
          </h4>
        </div>
      </div>
      <div class="right-column relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
          <div class="auth-box2 flex flex-col justify-center h-full">
            <div class="mobile-logo text-center mb-6 lg:hidden block">
              <a href="index.html">
                <img src="{{ asset("assets/images/logo/logo.svg") }}" alt="" class="mx-auto">
                <img src="{{ asset("assets/images/logo/logo-white.svg") }}" alt="" class="mx-auto">
              </a>
            </div>
            <div class="text-center 2xl:mb-10 mb-5">
              <h4 class="font-medium mb-4">¿Olvidaste tu contraseña?</h4>
              <div class="text-slate-500 dark:text-slate-400 text-base">
              Restablecer contraseña con NonoGrams Pro.
              </div>
            </div>
            <div class="font-normal text-base text-slate-500 dark:text-slate-400 text-center px-2 bg-slate-100 dark:bg-slate-600 rounded
                                py-3 mb-4 mt-10">
              ¡Ingrese su correo electrónico y se le enviarán las instrucciones!
            </div>
            <!-- BEGIN: Forgot Password Form -->
            <form class="space-y-4" action='index.html'>
              <div class="fromGroup">
                <label class="block capitalize form-label">Email</label>
                <div class="relative ">
                  <input type="email" name="email" class="form-control py-2" placeholder="Introduce tu correo electronico">
                </div>
              </div>
              <button class="btn btn-dark block w-full text-center">Enviar correo electronico de recuperacion</button>
            </form>
            <!-- END: Forgot Password Form -->

            <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 2xl:mt-12 mt-8 uppercase text-sm">
            OLVÍDALO,
              <a href="index.html" class="text-slate-900 dark:text-white font-medium hover:underline">
               ENVÍAME DE VUELTA
              </a>
              AL INICIO DE SESIÓN
            </div>
          </div>
          <div class="auth-footer text-center">
          Copyright 2023, NonoGrams Pros.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}"></script>
  <script src="{{ asset("assets/js/rt-plugins.js") }}"></script>
  <script src="{{ asset("assets/js/app.js") }}"></script>
</body>
</html>
