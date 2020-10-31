<!DOCTYPE html>
<html >

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- build:css dist/index.css-->
    <!-- Bootstrap CSS -->

    <!-- endbuild-->
    <title>@yield('title')</title>
    <style>

        .active a{
            color: red;
            text-decoration: none;
        }
    </style>

</head>
<body>
  @include('partials.nav')
    @yield('content')
    </body>

    <footer class="bg-blue-900">
    <div class="row text-white">
        <div class="col-sm-4 d-flex flex-column">
            <a href="https://facebook.com">Facebook</a>
            <a href="https://instragram.com">Instagram</a>
            <a href="https://youtube.com">Youtube</a>
        </div>

        <div class="col-sm-4">
            <address>
                <p><span class="oi oi-home footer-icon"></span> Carrera 48 No. 7 – 151 | El Poblado </p>
                <p><span class="oi oi-inbox footer-icon"></span> bienestar@elpoli.edu.com </p>
                <p><span class="oi oi-phone footer-icon"></span> +5731545255</p>

            </address>
        </div>
        <div class="col-sm-4">
         <p class="text-center align-items-end">Todos los derechos reservadors por Bienestar Institucional</p>
     </div>
 </div>


</footer>
</html>