<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>NonoGram Pro - Iniciar sesion</title>
  <link rel="icon" type="image/png" href="{{ asset("assets/images/logo/favicon.svg") }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset("assets/css/rt-plugins.css") }}">
  <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
  <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
  <script src="{{ asset("assets/js/store.js") }}"></script>
  @vite('resources/css/app.css')
  <style>
    .checkbox-area input:checked + span {
      --tw-ring-shadow: 0 0 #000;
    }

    .checkbox-area input:focus-visible + span {
      --tw-bg-opacity: 1;
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(17 17 18 / var(--tw-ring-opacity));
      --tw-ring-offset-width: 1px;
    }
  </style>
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
              <a href="/admin">
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
            <form class="space-y-4" action='' method="post">
              @csrf
              @if (session('status'))
                <div class="alert alert-success !p-4 !py-3">
                    {{ session('status') }}
                </div>
              @endif
              @if($errors->any())
                <div class="alert alert-danger !p-4 !py-3">
                  @foreach($errors->all() as $message)
                    <div class="flex items-start space-x-3 rtl:space-x-reverse">
                      <div class="flex-1">
                        {{ $message }}
                      </div>
                    </div>
                  @endforeach
                </div>
              @endif
              <div class="fromGroup">
                <label class="block capitalize form-label">Nombre de usuario</label>
                <div class="relative ">
                  <input type="text" name="username" value="{{ old('username') }}" class="form-control py-2" placeholder="Nombre de usuario" >
                </div>
              </div>
              <div class="fromGroup">
                <label class="block capitalize form-label">Contraseña</label>
                <div class="relative "><input {{$errors->any() ? 'autofocus' : ''}} type="password" name="password" class="  form-control py-2" placeholder="Contraseña" >
                </div>
              </div>
              <div class="flex justify-between">

                <div class="checkbox-area">
                  <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="appearance-none" name="remember_me">
                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                    <img src="{{ asset("assets/images/icon/ck-white.svg") }}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Mantener sesion activa</span>
                  </label>
                </div>
                    <a class="text-sm text-slate-800 dark:text-slate-400 leading-6 font-medium" href="/forgot-password">¿Has olvidado la contraseña?</a>
              </div>
              <button class="btn btn-dark focus:ring ring-offset-1 block w-full text-center">Iniciar sesion</button>
            </form>
            <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-12 uppercase text-sm">
                ¿NO TIENES UNA CUENTA?
              <a href="/signup" class="text-slate-900 dark:text-white font-medium hover:underline">
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
