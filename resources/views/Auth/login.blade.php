{{--
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
    <div align="center">
        <div class="bg-white shadow rounded-lg lg:flex items-center justify-center md:mt-2 w-full lg:max-w-screen-lg 2xl:max:max-w-screen-lg xl:p-0">
            <div class="hidden lg:flex w-2/3">
                <img class="rounded-l-lg" src="https://flowbite.com/application-ui/demo/images/authentication/login.jpg" alt="login image">
            </div>
            <div class="w-full p-6 sm:p-8 lg:p-16 lg:py-0 space-y-8">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
                    Inicio de sesión SCA
                 </h2>
                 <form class="mt-8 space-y-6" method="POST" action="{{route('inicia-sesion')}}">
                    @csrf
                    <div>
                       <label align="left" for="email" class="text-sm font-medium text-gray-900 block mb-2">Correo electronico o usuario</label>
                       <input type="email" name="email" id="email"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                    </div>
                    <div>
                       <label align="left" for="password" class="text-sm font-medium text-gray-900 block mb-2">Contraseña</label>
                       <input type="password" name="password" id="password" placeholder=""
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                          required>
                    </div>
                    <div class="flex items-start">
                       <div class="flex items-center h-5">
                          <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                             class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                       </div>
                       <div class="text-sm ml-3">
                          <label for="remember" class="font-medium text-gray-900">Recordarme</label>
                       </div>
                       <a href="#" class="text-sm text-blue-700 hover:underline ml-auto">¿Olvido su contraseña?</a>
                    </div>
                    <button type="submit"
                       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">
                       Iniciar sesión</button>

                 </form>
            </div>
        </div>
    </div>



</body>
</html>


 --}}

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>Inicio de sesión</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('login-template/images/icons/favicon.ico') }}"/>
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('login-template/vendor/bootstrap/css/bootstrap.min.css') }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('login-template/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('login-template/vendor/animate/animate.css') }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('login-template/vendor/css-hamburgers/hamburgers.min.css')  }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('login-template/vendor/select2/select2.min.css') }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('login-template/css/util.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('login-template/css/main.css') }}">
 <!--===============================================================================================-->
 </head>
 <body>
     <div class="limiter">
         <div class="container-login100" >
             <div class="wrap-login100" >
                 <div class="login100-pic js-tilt" data-tilt >
                     <img src="{{ asset('login-template/images/img-01.png') }}" alt="IMG">
                 </div>

                 <form class="login100-form validate-form" method="POST" action="{{route('inicia-sesion')}}">
                    @csrf
                     <span class="login100-form-title">
                         Inicio de Sesión
                     </span>

                     <div class="wrap-input100 validate-input" data-validate = "Correo valido requerido: ex@abc.xyz">
                         <input class="input100" type="text" name="email" placeholder="Correo electrónico">
                         <span class="focus-input100"></span>
                         <span class="symbol-input100">
                             <i class="fa fa-envelope" aria-hidden="true"></i>
                         </span>
                     </div>

                     <div class="wrap-input100 validate-input" data-validate = "La Contraseña es requerida">
                         <input class="input100" type="password" name="password" placeholder="Contraseña">
                         <span class="focus-input100"></span>
                         <span class="symbol-input100">
                             <i class="fa fa-lock" aria-hidden="true"></i>
                         </span>
                     </div>

                     <div class="container-login100-form-btn">
                         <button class="login100-form-btn">
                             ACCESO
                         </button>
                     </div>

                     <div class="text-center p-t-12">
                         <span class="txt1">
                             ¿Olvidó su
                         </span>
                         <a class="txt2" href="#">
                             contraseña?
                         </a>
                     </div>
                 </form>
             </div>
         </div>
     </div>




 <!--===============================================================================================-->
     <script src="{{ asset('login-template/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
 <!--===============================================================================================-->
     <script src="{{ asset('login-template/vendor/bootstrap/js/popper.js') }}"></script>
     <script src="{{ asset('login-template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
 <!--===============================================================================================-->
     <script src="{{ asset('login-template/vendor/select2/select2.min.js') }}"></script>
 <!--===============================================================================================-->
     <script src="{{ asset('login-template/vendor/tilt/tilt.jquery.min.js') }}"></script>
     <script >
         $('.js-tilt').tilt({
             scale: 1.1
         })
     </script>
 <!--===============================================================================================-->
     <script src="{{ asset('login-template/js/main.js') }}"></script>

 </body>
 </html>
