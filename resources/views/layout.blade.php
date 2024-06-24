<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABKC @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
      body{
        background: rgb(131,58,180);
        background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 44%, rgba(252,176,69,1) 100%);
      }
    </style>
</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" >ABKC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('games')}}">Listado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('games/create')}}">Crear </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-3">
        @yield('body')
      </div>
</body>
</html>