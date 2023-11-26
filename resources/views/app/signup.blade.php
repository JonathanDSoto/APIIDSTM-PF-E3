<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>NonoGram Pro - Crear cuenta</title>
  <link rel="icon" type="image/png" href="{{ asset("assets/images/logo/favicon.svg") }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset("assets/css/rt-plugins.css") }}">
  <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
  <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
  <script src="{{ asset("assets/js/store.js") }}"></script>

  <script>
      window.addEventListener('load', ()=>{
        $("#date_of_birth").flatpickr({
          allowInput: true
        })
      })
  </script>
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
              <h4 class="font-medium">Crear cuenta</h4>
              <div class="text-slate-500 text-base">
              Crear cuenta para empezar a usar NonoGrams Pros
              </div>
            </div>
            <!-- BEGIN: Registration Form -->
            <form class="space-y-4" action='' method="post">
            @csrf
            <div class="flex gap-2">
                <div class="fromGroup">
                  <label class="block capitalize form-label">Nombre</label>
                  <div class="relative ">
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="  form-control py-2" placeholder="Nombre">
                  </div>
                  @foreach($errors->get('first_name') as $message)
                    <span class="font-Inter block text-sm text-danger-500 pt-2">{{ $message }}</span>
                  @endforeach
                </div>
                <div class="fromGroup">
                  <label class="block capitalize form-label">Apellido</label>
                  <div class="relative ">
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="  form-control py-2" placeholder="Apellido">
                  </div>
                  @foreach($errors->get('last_name') as $message)
                    <span class="font-Inter block text-sm text-danger-500 pt-2">{{ $message }}</span>
                  @endforeach
                </div>
              </div>
              <div class="fromGroup">
                <label for="date_of_birth" class=" form-label">Fecha de nacimiento</label>
                <input class="form-control py-2 flatpickr flatpickr-input active" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" type="text">
                @foreach($errors->get('date_of_birth') as $message)
                  <span class="font-Inter block text-sm text-danger-500 pt-2">{{ $message }}</span>
                @endforeach
              </div>
              <div class="fromGroup">
                <label class="block capitalize form-label">Nombre de usuario</label>
                <div class="relative ">
                  <input type="text" name="username" value="{{ old('username') }}" class="form-control py-2" placeholder="Nombre de usuario">
                </div>
                @foreach($errors->get('username') as $message)
                  <span class="font-Inter block text-sm text-danger-500 pt-2">{{ $message }}</span>
                @endforeach
              </div>
              <div class="fromGroup">
                <label class="block capitalize form-label">Email</label>
                <div class="relative ">
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control py-2" placeholder="email@ejemplo.com">
                </div>
                @foreach($errors->get('email') as $message)
                  <span class="font-Inter block text-sm text-danger-500 pt-2">{{ $message }}</span>
                @endforeach
              </div>
              <div class="fromGroup">
                <label class="block capitalize form-label">Contraseña</label>
                <div class="relative "><input type="password" name="password" class="  form-control py-2" placeholder="contraseña">
                </div>
                @foreach($errors->get('password') as $message)
                  <span class="font-Inter block text-sm text-danger-500 pt-2">{{ $message }}</span>
                @endforeach
              </div>
              <div class="checkbox-area">
                <label class="inline-flex items-center cursor-pointer">
                  <input type="checkbox" class="hidden" name="terms">
                  <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                  <img src="{{ asset("assets/images/icon/ck-white.svg") }}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                  <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Acepto los terminos y condiciones de politica y privacidad</span>
                </label>
                @foreach($errors->get('terms') as $message)
                  <span class="font-Inter block text-sm text-danger-500 pt-2">{{ $message }}</span>
                @endforeach
              </div>
              <button class="btn btn-dark block w-full text-center">Crear cuenta</button>
            </form>

            <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-8 uppercase text-sm">
              <span>¿Ya estas registrado?
                            </span>
              <a href="/signin" class="text-slate-900 dark:text-white font-medium hover:underline">
                Iniciar sesion
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
