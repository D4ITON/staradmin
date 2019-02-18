<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | {{ config('app.name') }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/staradmin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/staradmin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/staradmin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/staradmin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/staradmin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
            <form method="POST" action="{{ route('login') }}">
                    @csrf
                    {{--  user  --}}
                <div class="form-group">
                  <label class="label">Usuario</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Usuario">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                {{--  email  --}}
                <div class="form-group">
                <label class="label">Email</label>
                <div class="input-group">
                    <input 
                    id="email"
                    type="email" 
                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                    placeholder="Email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autofocus>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                </div>
                {{--  password  --}}
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="*********">
                    
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  {{--  <button class="btn btn-primary submit-btn btn-block">Login</button>  --}}
                  <button type="submit" class="btn btn-primary submit-btn btn-block">
                        {{ __('Iniciar sesión') }}
                    </button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    {{--  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>  --}}
                    <label class="form-check-label" for="remember">
                        <input class="form-check-input" checked type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recuérdame') }}
                    </label>
                    
                  </div>
                  {{--  <a href="#" class="text-small forgot-password text-black">Forgot Password</a>  --}}
                    @if (Route::has('password.request'))
                        <a class="text-small forgot-password text-black" 
                        href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste la contraseña?') }}
                        </a>
                    @endif
                </div>
                <div class="form-group">
                  <button class="btn btn-block g-login">
                    <img class="mr-3" src="/staradmin/images/file-icons/icon-google.svg" alt="">Iniciar sesión con  Google</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">¿Aún no eres miembro?</span>
                  <a href="#" class="text-black text-small">Regístrate</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Condiciones</a>
              </li>
              <li>
                <a href="#">Ayuda</a>
              </li>
              <li>
                <a href="#">Preguntas frecuentes</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2019 DotaU. Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/staradmin/vendors/js/vendor.bundle.base.js"></script>
  <script src="/staradmin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="/staradmin/js/off-canvas.js"></script>
  <script src="/staradmin/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>