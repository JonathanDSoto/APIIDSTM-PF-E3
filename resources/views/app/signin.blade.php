<!DOCTYPE html>
<html lang="es" dir="ltr">

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

      </div>
      <div class="right-column  relative">
        <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
          <div class="auth-box h-full flex flex-col justify-center">
            <div class="mobile-logo text-center mb-6 lg:hidden block">
              <a href="index.html">
                <img src="{{ asset("assets/images/logo/logo.svg") }}" alt="" class="mb-10 dark_logo">
                <img src="{{ asset("assets/images/logo/logo-white.svg") }}" alt="" class="mb-10 white_logo">
              </a>
            </div>
            <div class="text-center 2xl:mb-10 mb-4">
              <h4 class="font-medium">Iniciar sesion</h4>
              <div class="text-slate-500 text-base">
                Inicia sesion para empezar a usar NonoGrams Pros
              </div>
            </div>
            <!-- BEGIN: Login Form -->
            <form class="space-y-4" action='index.html'>
              <div class="fromGroup">
                <label class="block capitalize form-label">Email</label>
                <div class="relative ">
                  <input type="email" name="email" class="form-control py-2" placeholder="email@ejemplo.com" >
                </div>
              </div>
              <div class="fromGroup">
                <label class="block capitalize form-label">Contraseña</label>
                <div class="relative "><input type="password" name="password" class="  form-control py-2" placeholder="Contraseña" >
                </div>
              </div>
              <div class="flex justify-between">

                <div class="checkbox-area">
                  <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="hidden" name="checkbox">
                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset("assets/images/icon/ck-white.svg") }}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Mantener sesion activa</span>
                  </label>
                </div>
                    <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="forget-password-one.html">¿Has olvidado la contraseña?</a>
              </div>
              <button class="btn btn-dark block w-full text-center">Iniciar sesion</button>
            </form>
            <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-12 uppercase text-sm">
                ¿NO TIENES UNA CUENTA?
              <a href="signup-one.html" class="text-slate-900 dark:text-white font-medium hover:underline">
                Crear cuenta
              </a>
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
